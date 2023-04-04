<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    //
    public function about(){
        $title ='About US';
return view('pages.about',compact('title'));
    }
    public function services()
    {
      return view('pages.services');
    }

}
