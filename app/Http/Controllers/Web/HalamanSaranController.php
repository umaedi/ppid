<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Saran;
use App\Services\BaseService;
use Illuminate\Support\Facades\Validator;


class HalamanSaranController extends Controller
{
    public $saran;
    public $subdomain;

    public function __construct(Saran $saran)
    {
        $this->saran = new BaseService($saran);
        $this->subdomain = request()->route('subdomain');
    }
    public function index()
    {
        $data['jumlahSemua'] = $this->saran->Query()->where('subdomain', $this->subdomain)->count();
        return view('web.saran.index', $data);
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'nama' => 'required|string|max:255|regex:/^[a-zA-Z\s]+$/',
            'ktp' => 'required|string|max:16|regex:/^[0-9]+$/',
            'email' => 'required|email',
            'no_hp' => 'required|string|max:13|min:11|regex:/^[0-9]+$/',
            'jenis' => 'required|in:Saran,Aduan,Pertanyaan',
            'pelayanan' => 'required|string|not_regex:/<[^>]*script.*?>/',
            'komentar' => 'required|string|not_regex:/<[^>]*script.*?>/',
        ], [
            'nama.required' => 'Nama wajib diisi!',
            'nama.regex' => 'Nama hanya boleh berisi huruf dan spasi!',
            'ktp.required' => 'Nomor KTP/Passport wajib diisi!',
            'ktp.max' => 'Nomor KTP/Passport tidak boleh lebih dari 16 digit!',
            'ktp.regex' => 'Nomor KTP hanya boleh berisi angka!',
            'email.required' => 'Email wajib diisi!',
            'no_hp.required' => 'Nomor HP wajib diisi!',
            'no_hp.min' => 'Nomor HP harus terdiri dari minimal 11 digit!',
            'no_hp.max' => 'Nomor HP tidak boleh lebih dari 13 digit!',
            'no_hp.regex' => 'Nomor HP hanya boleh berisi angka!',
            'jenis.required' => 'Jenis wajib dipilih!',
            'pelayanan.required' => 'Pelayanan wajib diisi!',
            'pelayanan.not_regex' => 'Pelayanan tidak boleh mengandung script atau tag HTML!',
            'komentar.required' => 'Komentar wajib diisi!',
            'komentar.not_regex' => 'Komentar tidak boleh mengandung script atau tag HTML!',
        ]);

        if ($validator->fails()) {
            return $this->error($validator->errors());
        }
        $data = $validator->validated();
        $data['subdomain'] = $this->subdomain;
        try {
            $this->saran->store($data);
        } catch (\Throwable $th) {
            return $this->error($th->getMessage());
        }

        return $this->success("Saran berhasil dikirim!");
    }

}
