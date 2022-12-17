<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\AppSettings;
use App\Models\Profile;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Carbon\Carbon;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('auth.register');
    }

    /**
     * Handle an incoming registration request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        AppSettings::create([
            'name' => $user->name,
            'logo' => 'dummy',
            'user_id' => $user->id,
            'created_at' => Carbon::now(),
        ]);

        Profile::create([
            'fullname' => $user->name,
            'nickname' => $user->name,
            'dob' => date('Y-m-d'),
            'phone' => '123456789',
            'email' => $user->email,
            'present_addr' => 'Dummy',
            'about' => 'Dummy',
            'vision' => 'Dummy',
            'nationality' => 'Dummy',
            'religion' => 'Dummy',
            'marital_status' => 'unmarried',
            'education' => 'Dummy',
            'professional_title' => 'Dummy',
            'formal_image' => 'dummy',
            'typed_quotes' => 'Dummy',
            'user_id' => $user->id,
            'created_at' => Carbon::now(),
        ]);

        event(new Registered($user));

        Auth::login($user);

        return redirect(RouteServiceProvider::HOME);
    }
}
