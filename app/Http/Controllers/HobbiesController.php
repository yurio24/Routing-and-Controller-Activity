<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HobbiesController extends Controller
{
    //
    public function index()
    {
        $hobbies = [
            'Reading Manga',
            'Cooking',
            'Playing Videogames',
            'Playing Basketball',
        ];
    
        return view('hobbies', ['hobbies' => $hobbies]);
    }
}
