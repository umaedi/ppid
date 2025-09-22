<?php

namespace App\Http\Controllers\CMS;

use App\Http\Controllers\Controller;
use App\Models\Berkas;
use App\Models\Halaman;
use App\Services\BaseService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;

class BerkasController extends Controller
{
    public $berkas;
    public $halaman;
    public function __construct(Berkas $berkas, Halaman $halaman)
    {
        $this->berkas = new BaseService($berkas);
        $this->halaman = new BaseService($halaman);
    }

    public function index(Request $request)
    {
        if ($request->ajax()) {
            $berkas = $this->berkas->Query();
            if (\request()->search) {
                $berkas->where('nama_berkas', 'like', '%' . \request()->search . '%');
            }
            $data['table'] = $berkas->where('subdomain', request()->subdomain)
                ->orderBy('created_at', 'desc')
                ->paginate(10);
            return view('cms.berkas._data_table', $data);
        }

        $data['title'] = "List berkas";
        $data['halamans'] = $this->halaman->Query()
            ->where('subdomain', request()->subdomain)
            ->select('id', 'judul')
            ->get();
        return view('cms.berkas.index', $data);
    }

    public function store(Request $request)
    {
        //validasi input
        $validator = Validator::make($request->all(), [
            'nama_berkas'   => 'required',
            'halaman_id'    => 'uuid|nullable',
            'berkas'        => 'required|file|mimes:png,jpg,jpeg,pdf,doc,docx,xls,xlsx,ppt,pptx|max:20480',
        ], [
            'nama_berkas.required'    => 'Nama berkas wajib diisi!',
            'berkas.required'         => 'Berkas wajib diisi!',
            'berkas.file'             => 'Berkas harus berupa file!',
            'berkas.mimes'            => 'Format berkas tidak valid!, format yang diperbolehkan: png, jpg, jpeg, pdf, doc, docx, xls, xlsx, ppt, pptx',
            'berkas.max'              => 'Ukuran berkas maksimal 20MB!',
        ]);

        //$this->error, extend dari Controller
        if ($validator->fails()) {
            return $this->error($validator->errors());
        }

        $data = $validator->validated();

        $data['subdomain']  = request()->subdomain;

        try {
            if ($request->hasFile('berkas')) {
                $file = $request->file('berkas');
                $filename = time() . '_' . Str::slug($request->nama_berkas) . '.' . $file->getClientOriginalExtension();
                $file->storeAs('berkas', $filename, 's3');
                $data['berkas'] = $filename;
                $data['tipe_berkas'] = $file->getClientOriginalExtension();
            }
            $this->berkas->store($data);
        } catch (\Throwable $th) {
            return $this->error($th->getMessage());
        }

        return $this->success("Oke", "berkas berhasil disimpan!");
    }

    public function delete(Request $request)
    {
        $berkas = $this->berkas->find($request->id);
        $berkas->delete($request->id);

        // Path file di MinIO
        $file = '/berkas/' . $berkas->berkas;
        Storage::disk('s3')->delete($file);

        return $this->success('Oke', 'Berita berhasil dihapus!');
    }
}
