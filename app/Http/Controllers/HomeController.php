<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use App\Models\Car;
use App\Models\Category;

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

    // public function cars(){
    //     $car = DB::table('cars')->get();
    //     return view('cars.cars', ['data' => $car]);
    // }

    public function carDetail(string $id){
        $car = Car::where('id', $id)->first();
        // return $car;
        return view('carDetail.carDetail', ['car' => $car]);
    }

    public function cars(string $name){
        $car = Car::where('category', $name)->paginate(9);
        // return response()->json($car);
        // return $car;
        if (isset($car)) {
            return view('cars.cars', ['data' => $car]);
        } else {
            return redirect()->back()->with('error', 'Car data not found.');
        }
    }

    public function book_now(string $id){
        if(Auth::id()){
            return back();
            // $car = Car::where('id', $id)->first();
            // return view('book_now.book_now', ['car' => $car]);
        }else {
            return redirect('login');
        }
    }
}
