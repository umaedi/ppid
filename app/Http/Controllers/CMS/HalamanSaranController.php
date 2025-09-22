<?php

namespace App\Http\Controllers\CMS;

use App\Http\Controllers\Controller;
use App\Models\Saran;
use Illuminate\Http\Request;
use App\Services\BaseService;


class HalamanSaranController extends Controller
{
    public $saran;
    public $subdomain;
    public function __construct(Saran $saran)
    {
        $this->saran = new BaseService($saran);
        $this->subdomain = request()->route('subdomain');

    }

    public function index(Request $request)
    {
        if ($request->ajax()) {
            $data['table'] = $this->saran->Query()
                ->where('subdomain', $this->subdomain)
                ->paginate(10);           
            return view('cms.saran._data_table', $data);
        }

        $data['title'] = "List Saran dan Aduan";
        return view('cms.saran.index', $data);
    }

    public function delete(Request $request)
    {
        $saran = $this->saran->find($request->id);
        $saran->delete();
        return $this->success("Berita berhasil dihapus!");
       
    }

}