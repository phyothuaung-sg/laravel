<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BackendTemplateController extends Controller
{   
    public function index(){
        return view('backend.index');
    }

    public function tablefun(){
        return view('backend.table');
    }

    public function chart(){
        return view('backend.chart');
    }
}
