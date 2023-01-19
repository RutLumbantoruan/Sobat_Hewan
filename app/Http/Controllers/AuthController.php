<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\View;
use App\Models\User;
use App\Libs\Captcha\Captcha;
use App\Mail\WelcomeMail;
use Exception;

class AuthController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest:web')->except('do_logout');
    }
    public function index()
    {
        $captcha = App::make('App\\Libs\\Captcha\\Captcha');
        return View::make('auth.main')->with('captchaImage', $captcha->dumpCaptcha());
        // return view('auth.main');
    }
    public function do_login(Request $request)
    {
        Validator::extend('username', function($attr, $value){
            return preg_match('/^\S*$/u', $value);
        });
        try {
            $this->validate($request, [
                'email' => 'required|email',
                'password' => 'required|min:8'
            ]);
        }catch (Exception $e) {
            return response()->json([
                'alert' => 'error',
                'message' => 'username atau password salah, cek username dan password anda',
            ]);
        }
        if(Auth::guard('web')->attempt(['email' => $request->email, 'password' => $request->password], $request->remember))
        {
            return response()->json([
                'alert' => 'success',
                'message' => 'Selamat datang kembali '. Auth::guard('web')->user()->name,
            ]);
        }else{
            return response()->json([
                'alert' => 'error',
                'message' => 'username atau password salah, cek username dan password anda',
            ]);
        }
    }
    public function do_register(Request $request)
    {
        try {
            $this->validate($request, [
                'name' => 'required|string|unique:users',
                'notelp' => 'required|string|max:14|unique:users',
                'email' => 'required|string|max:200|email|unique:users',
                'password' => 'required|string|min:8'
            ]);
        }catch (Exception $e) {
            return response()->json([
                'alert' => 'warning',
                'message' => 'Maaf, ada kesalahan, pada inputan anda silahkan periksa kembali.',
            ]);
        }
        $request['role'] = 'user';
        $request['password'] = Hash::make($request->password);
        $user = User::create($request->all());
        Mail::to($request->email)->send(new WelcomeMail($user));

        return response()->json([
            'alert' => 'info',
            'message' => 'Tolong periksa email anda '. $request->email,
        ]);
    }
    public function do_logout()
    {
        $employee = Auth::guard('web')->user();
        Auth::logout($employee);
        return redirect()->route('auth');
    }
}
