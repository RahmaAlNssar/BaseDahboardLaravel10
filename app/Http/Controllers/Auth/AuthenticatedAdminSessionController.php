<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;
use App\Http\Requests\Auth\LoginAdminRequest;

class AuthenticatedAdminSessionController extends Controller
{
    
    public function create(): View
    {
      //  dd(auth()->guard());
        return view('auth-admin.login');
    }
    /**
     * Handle an incoming authentication request.
     */
  

    public function store(LoginAdminRequest $request): RedirectResponse
    {
       
        $request->authenticate();

        $request->session()->regenerate();
        return redirect()->intended(RouteServiceProvider::HOME);
        
    }



    public function destroy(Request $request): RedirectResponse
    {
        Auth::guard('admin')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();
        return redirect('/admin/login');
    }
}
