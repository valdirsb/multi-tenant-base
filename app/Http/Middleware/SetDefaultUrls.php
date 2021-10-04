<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\URL;
use App\Tenant\TenantManager;

class SetDefaultUrls
{
    public function handle($request, Closure $next)
    {
        $tenantManager = app(TenantManager::class);

        if(!$tenantManager->getTenant() && !$tenantManager->isSubdomainExcept()){
            abort(404);
        }

        URL::defaults(['account' => $tenantManager->getTenant()->slug ]);

        

        return $next($request);
        
        
        
    }
}