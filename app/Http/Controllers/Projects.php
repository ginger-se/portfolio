<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Projects extends Controller
{

    public function __invoke(){
        
        $projects = DB::table('projects')->get();

        return view('projects',[
            'heading' => 'Justin\'s Projects',
            'projects' => $projects,
        ]);
    }
}
