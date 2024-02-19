<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SkillsController extends Controller
{
    //
    public function index()
    {
        $skills = [
            'PHP',
            'Laravel',
            'JavaScript',
            'HTML',
            'CSS',
        ];
    
        return view('skills', ['skills' => $skills]);
    }
}
