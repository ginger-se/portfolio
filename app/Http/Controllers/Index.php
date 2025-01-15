<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Index extends Controller
{
    public function __invoke(){
        
        return view('index',[
            'heading' => 'Justin Walraven',
        ]);
    }
}
