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
        $this->subdomain = request()->route('subdomain');
    }

    public function index(Request $request)
    {
        if ($request->ajax()) {
            $data['table'] = $this->ikm->Query()
                ->where('subdomain', $this->subdomain)
                ->paginate(10);           
            return view('cms.ikm._data_table', $data);
        }

        $data['title'] = "List ikm dan Aduan";
        return view('cms.ikm.index', $data);
    }

    public function delete(Request $request)
    {
        $ikm = $this->ikm->find($request->id);
        $ikm->delete();

        return $this->success("IKM berhasil dihapus!");
        // http response sudah extends di Controller
        // return response()->json([
        //     'status' => 'success',
        //     'message' => 'Berita berhasil dihapus!'
        // ]);
    }
}