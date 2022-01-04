<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EventController extends Controller
{
    public function index() {
        $nome = "Douglas";
        $idade = "27";
        $arr = [1,2,3,4,5,6];

        return view('welcome',
        [
            'nome' => $nome,
            'idade' => $idade,
            'arr' => $arr,
        ]);
    }

    public function contact() {
        return view('contact');
    }

    public function create(){
        return view('events.create');
    }
}
