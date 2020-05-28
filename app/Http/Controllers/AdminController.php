<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;


class AdminController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }

    public function index(){

        if(!auth()->user()->is_admin){
            return redirect('/')->with('error','Unauthorized Page');
        }

        return 'this is admin page';
    }
}
