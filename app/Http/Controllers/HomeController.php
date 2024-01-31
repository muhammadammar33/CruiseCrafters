<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    
    public function index(){
        $categories = DB::table('categories')->get();
        // return view('admin.users', ['data' => $users]);
        return view('home.userpage', ['data' => $categories]);
    }

    // public function about(){
    //     return view('about.about');
    // }
    
    
    public function redirect(){
        $usertype = Auth::user()->usertype;
        $categories = DB::table('categories')->get();

        if($usertype == 1){
            return view('admin.home');
        }
        else{
            return view('home.userpage', ['data' => $categories]);
        }
    }
}
