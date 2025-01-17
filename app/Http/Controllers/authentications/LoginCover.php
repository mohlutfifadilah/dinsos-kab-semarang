<?php

namespace App\Http\Controllers\authentications;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;
use RealRashid\SweetAlert\Facades\Alert;


class LoginCover extends Controller
{
  public function index()
  {
    $pageConfigs = ['myLayout' => 'blank'];
    return view('auth.login', ['pageConfigs' => $pageConfigs]);
  }

  public function actionLogin(Request $request)
  {
    $validator = Validator::make($request->all(), [
        'login' => 'required', // Input login yang dapat berisi email atau nomor handphone
        'password' => 'required',
        'captcha' => 'required|captcha'
    ], [
        'login.required' => 'Email / No Handphone tidak boleh kosong',
        'password.required' => 'Password tidak boleh kosong',
        'captcha.required' => 'Captcha tidak boleh kosong',
        'captcha.captcha' => 'Masukkan captcha dengan benar'
    ]);

    if ($validator->fails()) {
        Alert::error('Kesalahan', $validator->errors()->first());
        return redirect()->back()->withErrors($validator)->withInput();
    }

    $loginField = filter_var($request->input('login'), FILTER_VALIDATE_EMAIL) ? 'email' : 'no_wa';

    $credentials = [
        $loginField => $request->input('login'),
        'password' => $request->input('password'),
    ];

    if (Auth::attempt($credentials)) {
        $user = Auth::user();

        // Lakukan pengecekan role di sini sesuai dengan logika yang Anda inginkan
        Auth::login($user, $request->get('remember'));
        $role = [1,2,3,4,6];
        if (in_array(Auth::user()->id_role, $role)) {
          // Alert::success('Berhasil', 'Selamat Datang');
          return redirect('dashboard');
        } else {
          // Alert::error('Kesalahan', 'Hanya admin yang bisa login');
          return redirect('/');
        }
    } else {
        Alert::error('Kesalahan', 'Email / No Handphone atau password salah');
        return redirect()->back();
    }


  }

  public function reloadCaptcha()
    {
        return response()->json(['captcha'=> captcha_img()]);
    }
  public function actionLogout()
  {
    Auth::logout();
    Session::flush();
    return redirect('/');
  }
}
