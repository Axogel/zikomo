<?php

namespace App\Http\Middleware;

use Closure;
use App\Models\User;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Auth;

class CheckRole
{
    public function handle(Request $request, Closure $next, ...$roles)
    {
        if (!Auth::check()) {
            return redirect('/login');
        }

        foreach ($roles as $role) {
            if (!$request->user()->hasRole($role)) {
                abort(403, 'Unauthorized action.');
            }
        }

        abort(403, 'Acción no autorizada.');
    }
}
