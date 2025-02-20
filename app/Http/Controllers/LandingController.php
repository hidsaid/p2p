<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LandingController extends Controller
{
    //
        //showEng
        public function show() {
            return view("landing.intro");
        }
}
