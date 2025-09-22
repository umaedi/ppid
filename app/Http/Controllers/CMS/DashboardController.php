<?php

namespace App\Http\Controllers\CMS;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Services\BaseService;
use App\Models\Post;
use App\Models\Category;

class DashboardController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public $post;
    public $kategori;
    public function __construct(Post $post, Category $category)
    {
        $this->post = new BaseService($post);
        $this->kategori = new BaseService($category);
    }
    public function __invoke(Request $request)
    {
        $subdomain = $request->route('subdomain', config('services.subdomain'));

        if ($request->ajax()) {
            if ($subdomain === config('services.subdomain')) {
                $data['table'] = $this->post->query()->where('subdomain', $subdomain)->paginate(10);
                return view('cms.beritampp._data_table', $data);
            } else {
                $data['table'] = $this->post->query()->where('subdomain', $subdomain)->orderBy('tanggal_publish', 'desc')->take(10)->get();
                return view('cms.dashboard._data_table', $data);
            }
        }

        if ($subdomain === config('services.subdomain')) {
            return view('cms.dashboardmpp.index', compact('subdomain'));
        }

        return view('cms.dashboard.index');
    }
}
