<?php

namespace App\Http\Controllers\CMS;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Intervention\Image\Laravel\Facades\Image;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;
use App\Services\BaseService;
use App\Models\Post;
use App\Models\Category;
use App\Jobs\UploadImageToS3;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Carbon;

class BeritaController extends Controller
{
    public $post;
    public $kategori;
    public function __construct(Post $post, Category $category)
    {
        $this->post = new BaseService($post);
        $this->kategori = new BaseService($category);
    }

    public function index(Request $request)
    {
        if ($request->ajax()) {
            $data['table'] = $this->post->Query()->where('subdomain', request()->subdomain)->latest()->paginate(10);
            return view('cms.berita._data_table', $data);
        }

        $data['title'] = "List berita";
        return view('cms.berita.index', $data);
    }

    public function create(Request $request)
    {
        $data['title'] = "Buat berita baru";
        $data['kategori'] = $this->kategori->Query()->where('subdomain', request()->subdomain)->get();
        return view('cms.berita.create', $data);
    }

    public function store(Request $request)
    {
        //validasi input
        $validator = Validator::make($request->all(), [
            'judul'         => 'required',
            'category_id'   => 'required',
            'thumbnail'     => 'required|image|mimes:png,jpg,jpeg,webp|max:2048',
            'body'          => 'required',
            'status'        => 'required',
            'tanggal_publish' => 'required'
        ], [
            'judul.required'    => 'Judul berita wajib diisi!',
            'category_id.required'      => 'Silakan pilih salah satu kategori',
            'thumbnail.required'        => 'Wajib diisi dan hanya format jpeg, png, dan jpg yang diperbolehkan, dengan ukuran file maksimal 2MB',
            'body.required'             => 'Konten berita wajib diisi!',
            'status.required'   => 'Status wajib dipilih',
            'tanggal_publish.required' => 'Tanggal publish wajib diisi'
        ]);

        //kembalikan response errors jika terdapat validasi yang tdk sesuai
        //$this->error, extend dari Controller
        if ($validator->fails()) {
            return $this->error($validator->errors());
        }

        // Blok untuk menangani upload thumbnail
        $thumbnail = $request->file('thumbnail');
        $originalName = $thumbnail->getClientOriginalName();
        $extension = $thumbnail->getClientOriginalExtension();
        $fileName = pathinfo($originalName, PATHINFO_FILENAME);
        $fileName = str_replace(' ', '_', $fileName);
        $uniqueFileName = $fileName . '_' . uniqid() . '.' . $extension;

        // Untuk thumbnail utama
        $image = Image::read($thumbnail); // Pastikan Image facade diinisialisasi dengan benar
        $image->cover(1200, 624);
        $path_thumbnail_utama = 'berita/thumbnail/utama/' . date('Y') . '/' . $uniqueFileName;
        Storage::disk('s3')->put($path_thumbnail_utama, (string) $image->encode());
        // Dispatch job untuk menyimpan di S3
        // UploadImageToS3::dispatch($path_thumbnail_utama);

        // Untuk thumbnail sidebar
        $image->cover(600, 400);
        $path_thumbnail_sidebar = 'berita/thumbnail/sidebar/' . date('Y') . '/' . $uniqueFileName;
        Storage::disk('s3')->put($path_thumbnail_sidebar, (string) $image->encode());
        // Dispatch job untuk menyimpan di S3
        // UploadImageToS3::dispatch($path_thumbnail_sidebar);
        // Akhir dari blok untuk menangani upload thumbnail

        $user = Auth::user();
        $data = $validator->validated();

        $data['user_id']    = $user->id;
        $data['subdomain']  = request()->subdomain;
        $data['slug']       = Str::slug($request->judul);
        $data['thumbnail']  = $uniqueFileName;
        $data['caption_thumbnail']  = $request->caption_thumbnail;
        $data['tanggal_publish'] = $request->tanggal_publish;

        try {
            $this->post->store($data);
        } catch (\Throwable $th) {
            return $this->error($th->getMessage());
        }

        return $this->success("Oke", "Berita berhasil di submit!");
    }

    public function edit(Request $request)
    {
        $data['title'] = "Update berita";
        $data['berita'] = $this->post->Query()->where('id', $request->id)->first();
        $data['kategori'] = $this->kategori->Query()->where('subdomain', request()->subdomain)->get();
        return view('cms.berita.edit', $data);
    }

    public function update(Request $request, $id)
    {
        //validasi input
        $validator = Validator::make($request->all(), [
            'judul'         => 'required',
            'category_id'   => 'required',
            'body'          => 'required',
            'status'        => 'required',
            'tanggal_publish' => 'required'
        ], [
            'judul.required'    => 'Judul berita wajib diisi!',
            'category_id.required'      => 'Silakan pilih salah satu kategori',
            'body.required'             => 'Konten berita wajib diisi!',
            'tanggal_publish.required' => 'Tanggal publish wajib diisi'
        ]);

        //kembalikan response errors jika terdapat validasi yang tdk sesuai
        //$this->error, extend dari Controller
        if ($validator->fails()) {
            return $this->error($validator->errors());
        }

        $berita = $this->post->Query()->where('id', $request->id)->first();
        $data = $validator->validated();

        if ($request->hasFile('thumbnail')) {

            //validasi input
            $validator = Validator::make($request->all(), [
                'thumbnail'     => 'image|mimes:png,jpg,jpeg|max:2048',
            ], [
                'thumbnail.required'        => 'Hanya format jpeg, png, dan jpg yang diperbolehkan, dengan ukuran file maksimal 2MB',
            ]);

            if ($validator->fails()) {
                return $this->error($validator->errors());
            }

            //blok untuk menangani upload thumbanil
            $thumbnail = $request->file('thumbnail');
            $originalName = $thumbnail->getClientOriginalName();
            $extension = $thumbnail->getClientOriginalExtension();
            $fileName = pathinfo($originalName, PATHINFO_FILENAME);
            $fileName = str_replace(' ', '_', $fileName);
            $uniqueFileName = $fileName . '_' . uniqid() . '.' . $extension;

            //driver image untuk scale atau merubah ukuran thumbanil sesuai kebutuhan
            $image = Image::read($thumbnail);
            $image->cover(1200, 624);
            $path_thumbnail_utama = 'berita/thumbnail/utama/' . date('Y') . '/' . $uniqueFileName;
            Storage::disk('s3')->put($path_thumbnail_utama, (string) $image->encode());

            // Untuk thumbnail sidebar
            $image->cover(600, 400);
            $path_thumbnail_sidebar = 'berita/thumbnail/sidebar/' . date('Y') . '/' . $uniqueFileName;
            Storage::disk('s3')->put($path_thumbnail_sidebar, (string) $image->encode());

            // Path file di MinIO
            $fileUtama = 'berita/thumbnail/utama/' . $berita->created_at->format('Y') . '/' . $berita->thumbnail;
            $fileSidebar = 'berita/thumbnail/sidebar/' . $berita->created_at->format('Y') . '/' . $berita->thumbnail;

            if (Storage::disk('s3')->exists($fileUtama) && Storage::disk('s3')->exists($fileSidebar)) {
                Storage::disk('s3')->delete($fileUtama);
                Storage::disk('s3')->delete($fileSidebar);
            }

            $data['thumbnail'] = $uniqueFileName;
        } else {
            $data['thumbnail'] = $berita->thumbnail ?? 'thumbnail.jpg';
        }

        $data['user_id'] = Auth::user()->id;
        $data['domain'] = $berita->domain;
        $data['slug'] = Str::slug($request->judul);
        $data['caption_thumbnail'] = $request->caption_thumbnail ?? $request->judul;
        $data['tanggal_publish'] = $request->tanggal_publish;

        try {
            $this->post->update($berita, $data);
        } catch (\Throwable $th) {
            return $this->error($th->getMessage());
        }

        return $this->success("Oke", "Berita berhasil diupdated!");
    }

    public function delete(Request $request)
    {
        $berita = $this->post->find($request->id);
        $berita->delete($request->id);

        // Path file di MinIO
        $fileUtama = 'berita/thumbnail/utama/' . $berita->created_at->format('Y') . '/' . $berita->thumbnail;
        $fileSidebar = 'berita/thumbnail/sidebar/' . $berita->created_at->format('Y') . '/' . $berita->thumbnail;

        // Periksa apakah file ada di MinIO
        if (Storage::disk('s3')->exists($fileUtama)) {
            Storage::disk('s3')->delete($fileUtama);
            Storage::disk('s3')->delete($fileSidebar);
        }

        return $this->success('Oke', 'Berita berhasil dihapus!');
    }
}
