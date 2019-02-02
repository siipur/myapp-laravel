<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
        /*return "INI INDEX"; */
        $title = 'Welcome to Laravel';
        //load view
        //return view('pages.index', compact('title'));
        return view('pages.index')->with('title', $title); 
    }
    
    public function about(){
        $title = 'Ini Halaman About';
        //return view('pages.about');
        return view('pages.about')->with('title', $title);  
    }

    public function services(){
        //return view('pages.services');
        $data =  array(
            'title' => 'Ini Halaman Services',
            'services' => ['Web Design','programming','SEO']
        );

        return view('pages.services')->with($data);  
    }

}
