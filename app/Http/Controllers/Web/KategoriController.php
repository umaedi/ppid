<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Post;
use App\Services\BaseService;
use Carbon\Carbon;
use Illuminate\Http\Request;

class KategoriController extends Controller
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
        if (empty($request->slug)) {
            return redirect()->route('berita', $request->subdomain);
        }

        $kategori = $this->kategori->Query()
            ->where('subdomain', $request->subdomain)
            ->where('slug', $request->slug)
            ->first();

        if (empty($kategori)) {
            return redirect()->route('berita', $request->subdomain);
        }

        if ($request->ajax()) {
            $tanggal_awal  = \request()->tanggal_awal;
            $tanggal_akhir   = Carbon::parse(\request()->tanggal_akhir)->addDay();

            $posts = $this->post->Query()->where('subdomain', $request->subdomain)->where('category_id', $kategori->id);
            if ($request->search) {
                $posts->where('judul', 'like', '%' . \request()->search . '%');
            }

            $data['posts'] = $posts->where('status', 'publish')
                ->when(isset($tanggal_awal) && isset($tanggal_akhir), function ($query) use ($tanggal_awal, $tanggal_akhir) {
                    return $query->whereBetween('created_at', [$tanggal_awal, $tanggal_akhir]);
                })
                ->orderBy('created_at', 'desc')
                ->limit(\request()->limit)
                ->get();

            $data['search'] = \request()->search;
            return view('web.berita._data_berita', $data);
        }

        $data['title'] = "Kategori $kategori->nama_kategori";
        $data['categories'] = $this->kategori->Query()->where('subdomain', $request->subdomain)->get();
        return view('web.berita.index', $data);
    }
}