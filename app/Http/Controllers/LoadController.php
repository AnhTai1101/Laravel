<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoadController extends Controller
{
    public function loadView(){
        return view('backend.edit');
    }
}
