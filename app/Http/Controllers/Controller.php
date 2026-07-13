<?php

namespace App\Http\Controllers;

abstract class Controller
{
    
    public function checkSession(){
        if(!session()->has('api_token')){
            return redirect()->route('login');
        }
    }
}
