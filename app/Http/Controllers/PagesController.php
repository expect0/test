<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
        $title = 'Moj laravel';
        return view('pages.index', compact('title'));
        
    }

    public function about(){
        $title = 'About Us';
        return view('pages.about', compact('title'));
    }

    public function services(){
        $date = array(
            'title' => 'Services',
            'services' => ['Nesto','Nesto','Nesto']
        );
        return view('pages.services')->with($date);
    }
}
