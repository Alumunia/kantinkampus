<?php

namespace App\Http\Controllers\Freelancer;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class FreelancerController extends Controller {

    //
    public function __construct(){
        
    }

    public function index() {

        $portofolioNumber = 6;
        return view('pages/freelancerPages/freelancer', array(
            'Title' => 'About Me',
            'portofolio' => $portofolioNumber
        ));
    }

}
