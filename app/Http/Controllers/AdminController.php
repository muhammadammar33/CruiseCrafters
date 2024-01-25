<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use App\Models\Category;

class AdminController extends Controller
{
    public function view_category(){
        return view('admin.category');
    }

    // public function view_users(){
    //     return view('admin.users');
    // }

    public function showUsers(){

        $users = DB::table('users')->get()->where('usertype', 0);
        return view('admin.users', ['data' => $users]);
    }

    public function searchUser($term){
        $user = DB::table('users')->where('name','like',"$term%")->get()->where('usertype', 0);
        return ($user);
    }

    public function add_category(Request $req){

        $category = new Category();
        $category->name = $req->name;
        $category->description = $req->description;

        $category->save();

        return back()->withSuccess('Car added successfully');
    }
}
