<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Berkas;
use App\Services\BaseService;

class BerkasController extends Controller
{
    public $berkas;
    public function __construct(berkas $berkas)
    {
        $this->berkas = new BaseService($berkas);
    }
    public function index()
    {
        $data['berkas'] = $this->berkas->Query()
            ->where('subdomain', request()->subdomain)
            ->orderBy('created_at', 'desc')
            ->paginate(10);
        return view('web.berkas.index', $data);
    }
}
