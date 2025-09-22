<?php

namespace App\Http\Controllers\CMS;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Services\BaseService;
use App\Models\Domain;

class DomainController extends Controller
{
    public $domain;
    public function __construct(Domain $domain)
    {
        $this->domain = new BaseService($domain);
    }

    public function index(Request $request)
    {
        if($request->ajax())
        {
            $data['table'] = $this->domain->getAll();
            return view('cms.domain._data_table', $data);
        }

        $data['title'] = "List domain";
        return view('cms.domain.index', $data);
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'nama_domain' => 'required',
            'status' => 'required'
        ], [
            'nama_domain.required' => 'Nama domain wajib diisi',
            'status.required' => 'Status domain wajib diisi',
        ]);

        if($validator->fails()) {
            return $this->error($validator->errors());
        }

        $domain = $request->nama_domain . '.' . 'tulangbawangkab.go.id';
        $cek_domain = $this->domain->Query()->where('nama_domain', $domain)->first();
        if($cek_domain) {
            return $this->warning("Nama domain sudah ada!");
        }
        
        $data['nama_domain'] = $domain;
        $data['status'] = $request->status;

        try {
            $this->domain->store($data);
        } catch (\Throwable $th) {
           return $this->error($th->getMessage());
        }

        return $this->success($data, "Domain berhasil disubmit");
    }

    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'nama_domain' => 'required',
            'status' => 'required'
        ], [
            'nama_domain.required' => 'Nama domain wajib diisi',
            'status.required' => 'Status domain wajib diisi',
        ]);

        if($validator->fails()) {
            return $this->error($validator->errors());
        }

        $domain = $request->nama_domain . '.' . 'tulangbawangkab.go.id';
        $cek_domain = $this->domain->Query()->where('nama_domain', $domain)->first();
        if($cek_domain) {
            return $this->warning("Nama domain sudah ada!");
        }

        $data_domain = $this->domain->find($id);
        
        $data['nama_domain'] = $domain;
        $data['status'] = $request->status;

        try {
            $this->domain->update($data_domain, $data);
        } catch (\Throwable $th) {
           return $this->error($th->getMessage());
        }

        return $this->success($data, "Domain berhasil disubmit");
    }

    public function delete($id) 
    {
       $domain = $this->domain->find($id);
       $domain->delete($id);
       return $this->success('oke', "Domain berhasil dihapus!");
    }
}
