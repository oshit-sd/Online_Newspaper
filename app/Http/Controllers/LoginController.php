<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesResources;
use Illuminate\Support\Facades\DB;

class LoginController extends Controller
{
    public function check()
    {
        return view('check.check');
    }

    public function regForm(Request $request)
    {
        $pin = $request->input('pin');
        $checklogin = DB::table('checks')->where(['check' => $pin])->get();
        if(count($checklogin) > 0 )
        {
            return view('auth.register_admin');
        }
        else{
            return redirect('/ThisIsSecureRegForLogin')->with('unsucess', 'Opps!! Wrong email or password');
        }

    }

    public function login(Request $request)
    {
        $email = $request->input('email');
        $pas = $request->input('password');

        $checklogin = DB::table('users')->where(['email' => $email, 'password'=> $pas])->get();
        if(count($checklogin) > 0 )
        {
            $data = DB::table('users')
                ->where(['email' => $email, 'password'=> $pas])
                ->get();
            return redirect('/admin/dashboard')->with(['data' => $data]);
        }
        else{
            return redirect('/ami')->with('unsucess', 'Opps!! Wrong email or password');
        }
    }
}
