<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Foundation\Auth\ThrottlesLogins;
use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests;

class AuthMemberController extends Controller {

    //
    use AuthenticatesAndRegistersUsers,
        ThrottlesLogins;

    public function index() {
        
    }

    //Login page
    public function getLogin() {
        $title = 'Login Page';
        return view('pages/AuthPages/loginPage', array(
            'title' => $title
        ));
    }

    // Login logic
    public function postLogin() {

        //Get parameter from login page
        $userdata = array(
            'username' => Input::get('username'),
            'password' => Input::get('password')
        );

        //If success
        if (auth('member')->attempt($userdata)) {
            return redirect('profile' . auth('member')->user()->username);
        }
        //If failed
        else {
            $request->session()->flash('status', "username and password didn't match");
            return redirect('/login');
        }
    }

    //Registration page
    public function getRegister() {
        $title = 'Registration Page';
        return view('pages/AuthPages/registrationPage', array(
            'title' => $title
        ));
    }

    // Registration Logic
    public function postRegister(Request $request) {
        
    }

}
