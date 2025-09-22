<?php

namespace App\Http\Controllers\CMS;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use App\Services\BaseService;
use App\Models\Domain;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public $domain;
    public $user;
    public function __construct(Domain $domain, User $user)
    {
        $this->domain = new BaseService($domain);
        $this->user = new BaseService($user);
    }
    public function index(Request $request)
    {
        if ($request->ajax()) {
            if ($request->search) {
                $response = Http::get('http://127.0.0.1:8001/api/user?search=' . $request->search);
                return response()->json($response->json());
            }
            dd('ok');
        }

        $data['title'] = "List data user";
        $data['domain'] = $this->domain->getAll();
        return view('cms.user.index', $data);
    }

    public function edit() {
        return view('cms.user.edit');
    }

    public function updatePassword(Request $request)
    {
        $request->validate([
            'password' => 'required|min:6|confirmed',
        ], [
            'password.required' => 'Password wajib diisi',
            'password.min' => 'Password minimal 6 karakter',
            'password.confirmed' => 'Konfirmasi password tidak sesuai',
        ]);

        $user = Auth::user();

        $this->user->update($user, [
            'password' => bcrypt($request->password)
        ]);

        return $this->success("Oke", "Password berhasil diupdate");
    }
}
