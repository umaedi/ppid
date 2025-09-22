<?php

namespace App\Http\Controllers\CMS;

use App\Http\Controllers\Controller;
use App\Models\Ikm;
use Illuminate\Http\Request;
use App\Services\BaseService;


class HalamanIkmController extends Controller
{
    public $ikm;
    public $subdomain;
    public function __construct(Ikm $ikm)
    {
        $this->ikm = new BaseService($ikm);
        // $this->subdomain = request()->route('subdomain');
        $this->subdomain = request()->route('subdomain', config('services.subdomain'));
    }

    public function index(Request $request)
    {
        if ($request->ajax()) {
            // return view('cms.ikm._data_table', $data);
            if ($this->subdomain === config('services.subdomain')) {
                $data['table'] = $this->ikm->Query()
                ->where('subdomain', $this->subdomain)
                ->paginate(10); 
                return view('cms.ikmmpp._data_table', $data);
            } else {
                $data['table'] = $this->ikm->Query()
                ->where('subdomain', $this->subdomain)
                ->paginate(10); 
                return view('cms.ikm._data_table', $data);
            }
        }

        $data['title'] = "List ikm dan Aduan";
        // return view('cms.ikm.index', $data);

        if ($this->subdomain === config('services.subdomain')) {
            return view('cms.ikmmpp.index', $data);
        }
        
        return view('cms.ikm.index', $data);
    }

    // public function delete(Request $request)
    // {
    //     $ikm = $this->ikm->find($request->id);
    //     $ikm->delete();

    //     return $this->success("IKM berhasil dihapus!");
    //     // http response sudah extends di Controller
    //     // return response()->json([
    //     //     'status' => 'success',
    //     //     'message' => 'Berita berhasil dihapus!'
    //     // ]);
    // }

    public function delete(Request $request)
    {
        $request->validate(['id' => 'required|integer|exists:ikm,id']);

        $deleted = $this->ikm->query()
            ->where('id', $request->id)
            ->where('subdomain', $this->subdomain)
            ->delete();

        if ($deleted) {
            return response()->json(['status' => 'success', 'message' => 'IKM berhasil dihapus!'], 200);
        }

        return response()->json(['status' => 'error', 'message' => 'Gagal menghapus IKM atau tidak ditemukan!'], 500);
    }
}