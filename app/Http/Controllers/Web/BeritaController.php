<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Post;
use App\Services\BaseService;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Storage;

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
            $tanggal_awal  = \request()->tanggal_awal;
            $tanggal_akhir   = Carbon::parse(\request()->tanggal_akhir)->addDay();

            $posts = $this->post->Query()->where('subdomain', $request->subdomain);
            if ($request->search) {
                $posts->where('judul', 'like', '%' . \request()->search . '%');
            }

            $data['posts'] = $posts->where('status', 'publish')
                ->when(isset($tanggal_awal) && isset($tanggal_akhir), function ($query) use ($tanggal_awal, $tanggal_akhir) {
                    return $query->whereBetween('tanggal_publish', [$tanggal_awal, $tanggal_akhir]);
                })
                ->orderBy('tanggal_publish', 'desc')
                ->paginate(8);
            // ->limit(\request()->limit)
            // ->get();

            $data['search'] = \request()->search;
            return view('web.berita._data_berita', $data);
        }

        $data['title'] = "Berita";
        $data['categories'] = $this->kategori->Query()->where('subdomain', $request->subdomain)->get();
        return view('web.berita.index', $data);
    }

    public function show(Request $request)
    {
        $subdomain = $request->subdomain;

        $post = $this->post->Query()
            ->where('subdomain', $subdomain)
            ->where('slug', $request->slug)
            ->first();

        if ($post) {
            $post->increment('views');
            $data['post'] = $post;
            $data['categories'] = $this->kategori->Query()->where('subdomain', $request->subdomain)->get();
            $data['title'] = $data['post']->judul;
            return view('web.berita.show', $data);
        }
        return abort(404, 'Data not found');
    }
}
