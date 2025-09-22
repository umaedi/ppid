<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Ikm;
use App\Services\BaseService;
use Illuminate\Support\Facades\Validator;


class HalamanIkmController extends Controller
{
    public $ikm;
    public $subdomain;
    public function __construct(Ikm $ikm)
    {
        $this->ikm = new BaseService($ikm);
        $this->subdomain = request()->route('subdomain');
    }
    public function index()
    {
        return view('web.ikm.index');
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'nama' => 'required|string|max:255|regex:/^[a-zA-Z\s]+$/',
            'jenis_kelamin' => 'required|string',
            'no_hp' => 'required|string|max:13|min:11|regex:/^[0-9]+$/',
            'jenis_layanan' => 'required|string',
            'alamat' => 'required|string|not_regex:/<[^>]*script.*?>/',
            'pendidikan' => 'required|string',
            'pekerjaan' => 'required|string',
            'saran' => 'required|string',
            'pertanyaan_1' => 'required|string',
            'pertanyaan_2' => 'required|string',
            'pertanyaan_3' => 'required|string',
            'pertanyaan_4' => 'required|string',
            'pertanyaan_5' => 'required|string',
            'pertanyaan_6' => 'required|string',
            'pertanyaan_7' => 'required|string',
            'pertanyaan_8' => 'required|string',
            'pertanyaan_9' => 'required|string',
        ], [
            'nama.required' => 'Nama wajib diisi!',
            'nama.regex' => 'Nama hanya boleh berisi huruf dan spasi!',
            'jenis_kelamin.required' => 'Jenis kelamin wajib dipilih!',
            'no_hp.required' => 'Nomor HP wajib diisi!',
            'no_hp.min' => 'Nomor HP harus terdiri dari minimal 11 digit!',
            'no_hp.max' => 'Nomor HP tidak boleh lebih dari 13 digit!',
            'no_hp.regex' => 'Nomor HP hanya boleh berisi angka!',
            'jenis_layanan.required' => 'Jenis layanan wajib diisi!',
            'jenis_layanan.not_regex' => 'Jenis layanan tidak boleh mengandung script atau tag HTML!',
            'alamat.required' => 'Alamat wajib diisi!',
            'alamat.not_regex' => 'Alamat tidak boleh mengandung script atau tag HTML!',
            'pendidikan.required' => 'Pendidikan wajib diisi!',
            'pekerjaan.required' => 'Pekerjaan wajib diisi!',
            'saran.required' => 'Saran wajib diisi!',
            'pertanyaan_1.required' => 'Pertanyaan 1 wajib diisi!',
            'pertanyaan_2.required' => 'Pertanyaan 2 wajib diisi!',
            'pertanyaan_3.required' => 'Pertanyaan 3 wajib diisi!',
            'pertanyaan_4.required' => 'Pertanyaan 4 wajib diisi!',
            'pertanyaan_5.required' => 'Pertanyaan 5 wajib diisi!',
            'pertanyaan_6.required' => 'Pertanyaan 6 wajib diisi!',
            'pertanyaan_7.required' => 'Pertanyaan 7 wajib diisi!',
            'pertanyaan_8.required' => 'Pertanyaan 8 wajib diisi!',
            'pertanyaan_9.required' => 'Pertanyaan 9 wajib diisi!',
        ]);

        if ($validator->fails()) {
            return $this->error($validator->errors());
        }
        $data = $validator->validated();
        $data['subdomain'] = $this->subdomain;
        
        try {
            $this->ikm->store($data);
        } catch (\Throwable $th) {
            return $this->error($th->getMessage());
        }

        return $this->success("Oke", "Ikm berhasil di submit!");
    }
}
