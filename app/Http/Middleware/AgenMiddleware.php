<?php

namespace App\Http\Middleware;

use App\Models\Agen;
use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class AgenMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $slug = $request->route('nama');

        if ($slug) {

            $agen = Agen::where('id_kospe', $slug)->first();
            // dd($agen);
            if ($agen) {
                session([
                    'id_agen' => $agen->id_hni,
                    'id_marketing' => $agen->marketing_id,
                    'marketing' => $agen->nama,
                    'id_kospe' => $agen->id_kospe,
                    'hp' => $agen->hp,
                ]);
                cookie()->queue(
                    'id_agen',
                    $agen->id_hni,
                    60 * 24 * 30
                );
            } else {
                session([
                    'id_agen' => 115
                ]);

                cookie()->queue(
                    'id_agen',
                    115,
                    60 * 24 * 30
                );
            }
        }
        return $next($request);
    }
}
