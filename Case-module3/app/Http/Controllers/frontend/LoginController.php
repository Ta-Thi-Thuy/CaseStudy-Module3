<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Http\Requests\FormExampleRequest;
use App\Http\Requests\LoginExampleRequest;
use App\Models\Customer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class LoginController extends Controller
{
    public function showLogin(){
        return view('frontend.login');
    }

    public function showRegister()
    {
        return view('frontend.signup');
    }

    public function storeRegister(LoginExampleRequest $request)
    {

        $user = new Customer();
        $user->user = $request->input('user');
        $user->email = $request->input('email');
        $user->password = Hash::make($request->password);
        $user->address = $request->input('address');
        $user->phone = $request->input('phone');
        $user->save();
        return redirect()->route("showLogin");
    }

    public function login(FormExampleRequest $request)
    {
        $data = [
            'email' => $request->input('email'),
            'password' => $request->input('password'),
        ];

        if (Auth::guard('customer')->attempt($data)) {

            return redirect()->route("products.show");
        }
        Session::flash('error_login', "Email hoặc mật khẩu không đúng.");
        return redirect()->route('showLogin');
    }

    public function logout(Request $request)
    {
        Auth::guard('customer')->logout();
        return redirect()->route('showLogin');
    }



//// đăng nhập và đăng kí ở trang checkout
    public function loginCheckout(Request  $request)
    {
        $data = [
            'email' => $request->input('email'),
            'password' => $request->input('password'),
        ];
        if (Auth::guard('customer')->attempt($data)) {
            return redirect()->back();
        }
    }
//
//    public function registerCheckout(Request $request)
//    {
//
//        $user = new Customer();
//        $user->user = $request->input('user');
//        $user->email = $request->input('email');
//        $user->password = Hash::make($request->password);
//        $user->address = $request->input('address');
//        $user->phone = $request->input('phone');
//        $user->save();
//        return redirect()->back();
//    }




}
