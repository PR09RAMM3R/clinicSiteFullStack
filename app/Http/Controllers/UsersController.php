<?php

namespace App\Http\Controllers;

use App\Models\User;
use Hash;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class UsersController extends Controller
{
    public function authenticate(Request $request): RedirectResponse {
        $credentials = $request->validate([
            'name' => ['required'],
            'telefon_raqam' => ['required'],
        ]);
        
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->intended(); 
        }
 
        return back()->withErrors([
            'name' => 'The provided credentials do not match our records.',
        ])->onlyInput('name');

    }
    public function register_store(Request $request) {
        $user = User::create([
            'name'=>$request->name,
            'familya'=>$request->familya,
            'yosh'=>$request->yosh,
            'telefon_raqam'=>$request->telefon_raqam
        ]);
        auth()->login($user);
        return redirect('/');
    }
    public function showProfile($id) {
        $user = Auth::user();
        return view('profile')->with('user', $user);
    }
    public function updateProfile(Request $request, $id) {

        if ($request->hasFile('photo')) {
            if (isset($request->photo)) {
                Storage::delete(Auth::user()->photo);
            }
            $name = $request->file('photo')->getClientOriginalName();
            $path = $request->file('photo')->storeAs('user-photo', $name);
        };
        Auth::user()->update([
            'photo'=>$path ?? Auth::user()->photo,
            'name'=>$request->name,
            'login'=>$request->login,
        ]);
        return redirect('/');
    }
    public function logout(Request $request): RedirectResponse
    {
        Auth::logout();
    
        $request->session()->invalidate();
    
        $request->session()->regenerateToken();
    
        return redirect('/');
    }
}
