<?php

namespace App\Http\Controllers\About;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class AboutController extends Controller {

    //
    public function __construct(){
        
    }

    public function index() {

        $portofolioNumber = 6;
        return view('pages/about/about', array(
            'Title' => 'About Me',
            'portofolio' => $portofolioNumber
        ));
    }

}
