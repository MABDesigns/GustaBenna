<?php

namespace App\Controllers;

class Home extends BaseController
{



    public function index(): string
    {
        return view('index');
    }


    public function plan(){
        return view('plan');
    }


   
}




