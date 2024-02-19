<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutMeController extends Controller
{
    //
    public function index()
    {
        $about = [
            'name' => 'Jhon Lester Sadang',
            'age' => 23,
            'location' => 'Malineng, Cuyapo, Nueva Ecija',
        ];
    
        return view('about', $about);
    }
}
