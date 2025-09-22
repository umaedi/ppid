<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Services\BaseService;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Post;
use App\Models\Pengaturan;
use App\Models\Subdomain;
use Illuminate\Support\Facades\Cache;
use Carbon\Carbon;

class HomeController extends Controller
{
    public $post;
    public $kategori;
    public function __construct(Post $post, Category $category)
    {
        $this->post = new BaseService($post);
        $this->kategori = new BaseService($category);
    }
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        $subdomain = $request->subdomain;
        $data['title'] = "Home";

        if ($request->ajax()) {
            $data['postsRecentSlider'] =  $this->post->Query()
                ->where('subdomain', $subdomain)
                ->where('status', 'publish')
                ->orderBy('views', 'desc')
                ->limit(6)
                ->get();

            $data['postsRecent'] = $this->post->Query()
                ->where('subdomain', $subdomain)
                ->where('status', 'publish')
                ->limit(4)
                ->latest()
                ->get();



            $data['postsPopular'] = $this->post->Query()
                ->where('subdomain', $subdomain)
                ->where('status', 'publish')
                ->orderBy('views', 'desc')
                ->limit(6)
                // ->whereNotNull('tanggal_publish')
                // ->where('tanggal_publish', '>=', Carbon::now()->subDays(7))
                ->get();


            $data['postsKategori'] = $this->kategori->Query()
                ->where('subdomain', $subdomain)
                ->withCount('posts')
                ->get();

            // dd($data['postsKategori']);


            $data['postsTerbaru'] = $this->post->Query()
                ->where('subdomain', $subdomain)
                ->where('status', 'publish')
                ->orderBy('tanggal_publish', 'desc')
                ->limit(4)
                ->whereNotNull('tanggal_publish')
                // ->where('tanggal_publish', '>=', Carbon::now()->subDays(7))?
                ->get();

            $data['subdomain'] = Subdomain::where('nama_subdomain', $subdomain)->first();
            return view('web.home._recent_posts', $data);
        }

        return view('web.home.index', $data);
    }
}
