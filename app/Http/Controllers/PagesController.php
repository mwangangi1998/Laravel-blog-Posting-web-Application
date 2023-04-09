<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
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
public function home()
{
    # code...


    return view('index');
}
}
