<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

 class FormController extends Controller{
    public function formregister(){
        return view ('register');
    }
    public function kirim (Request $rekues){
        $first_name = $rekues -> input ("first_name");
        return view('welcome', ['first_name'=> $first_name]);
    }
 }
