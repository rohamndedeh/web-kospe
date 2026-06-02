<?php

namespace App\Http\Middleware;

use App\Models\AgenTraffic;
use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Jenssegers\Agent\Agent;
use Illuminate\Support\Str;

class DetectDevice
{
    /**
     * Handle an incoming request.
     */
    public function handle(Request $request, Closure $next): Response
    {
        $agent = new Agent();

        $visit = AgenTraffic::create([
            'visit_id' => Str::uuid(),
            'ip' => $request->ip(),
            'browser' => $agent->browser(),
            'browser_version' => $agent->version($agent->browser()),
            'platform' => $agent->platform(),
            'device' => $agent->device(),
            'is_mobile' => $agent->isMobile(),
            'is_desktop' => $agent->isDesktop(),
            'user_agent' => $request->userAgent(),
            'url' => $request->fullUrl(),
            'method' => $request->method(),
            'id_agen' => session('id_agen'),
        ]);

        view()->share('visitId', $visit->visit_id);

        return $next($request);
    }
}
