<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
   public function index(){
    //    return view('pages.index',['name'=>'Alireza Shajari',
    //                               'age' =>28,
    //                               'job'=> 'programmer']);

        // return view('pages.index')->with('names',['ali','reza','mohammad']);


    // $name = 'Alireza';
    // return view('pages.index')->with('my_name',$name);

    return view('pages.index');
   }

   public function about(){
    return view('pages.about');
   }

}
