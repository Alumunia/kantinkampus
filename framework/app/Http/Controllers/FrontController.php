<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class FrontController extends Controller
{
    //
    
    public function index(){
        return view('pages/index',array(
           'title' => 'KK' 
        ));
        
        
        
    }
}
