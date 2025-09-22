<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\DB;

class VerifySubdomain
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $subdomain = $request->route('subdomain', config('services.subdomain'));



        // if ($subdomain !== config('services.subdomain')) {
        //     return $next($request);
        // }


        $cekSubdomain =  DB::table('subdomains')->where('nama_subdomain', $subdomain)->first();

        if(!$cekSubdomain) {
            return \abort(403, 'Subdomain belum terdaftar');
        }

        if($cekSubdomain->status == 'inactive') {
            return \abort(403, 'Subdomain tidak aktif');
        }

        // dashbord mpp
        // if ($subdomain !== config('services.subdomain')) {
        //     return redirect()->route('cms-dashboard,')->with('error', 'Akses ditolak! Anda bukan bagian dari MPP.');
        // }

        // // Jika subdomain adalah yang utama, gunakan CMS
        // if ($subdomain === config('services.subdomain')) {
        //     Route::middleware(['auth', 'otp.verified'])->group(base_path('routes/mpp.php'));
        // } else {
        //     // Untuk subdomain lain, gunakan MPP
        //     Route::middleware(['auth', 'otp.verified'])->prefix('cms')->group(base_path('routes/cms.php'));
        // }

        return $next($request);
    }
}
