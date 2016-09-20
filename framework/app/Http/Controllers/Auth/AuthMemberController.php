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

    public function getLogin() {
        $title = 'Login Page';
        return view('pages/AuthPages/loginPage', array(
            'title' => $title
        ));
    }

    public function getRegister() {
        $title = 'Registration Page';
        return view('pages/AuthPages/registrationPage', array(
            'title' => $title
        ));
    }

}
