<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TemplateController extends Controller
{   
     public function index()
    {   
        $todos = [
            [
                "title" => 'Learn Laravel',
                "body" => 'This is Laravel'
            ],
            [
                "title" => 'Learn Vue',
                "body" => 'This is Vue'
            ],
            [
                "title" => 'Learn React',
                "body" => 'This is React'
            ]
            ];
        return view('mytemplate.index', compact('todos'));
    }

     public function about()
    {
        return view('mytemplate.about');
    }

     public function post()
    {
        return view('mytemplate.post');
    }

     public function contact()
    {
        return view('mytemplate.contact');
    }
}
