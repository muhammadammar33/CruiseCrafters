<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use App\Models\Category;
use App\Models\Car;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function category(){
        return view('admin.category');
    }

    public function car(){
        $cat = DB::table('categories')->get();
        return view('admin.car', ['data' => $cat]);
    }

    // public function view_users(){
    //     return view('admin.users');
    // }

    public function showUsers(){

        $users = DB::table('users')->get()->where('usertype', 0);
        return view('admin.users', ['data' => $users]);
    }

    public function showbookings(){
        $bookings = DB::table('bookings')->orderBy('todate')->get();
        return view('admin.view_bookings', ['data' => $bookings]);
    }

    public function showCategories(){

        $cat = DB::table('categories')->get();
        return view('admin.view_categories', ['data' => $cat]);
    }
    
    public function showCars(){

        $car = DB::table('cars')->get();
        return view('admin.view_cars', ['data' => $car]);
    }

    public function searchUser($term){
        $user = DB::table('users')->where('name','like',"$term%")->get()->where('usertype', 0);
        return ($user);
    }

    public function searchCategory($term){
        $cat = DB::table('categories')->where('name','like',"$term%")->get();
        return ($cat);
    }

    // View Cars
    public function searchByCategory($term){
        $car = DB::table('cars')->where('category', 'like', "$term%")->get();
        return ($car);
    }
    public function searchByMake($term){
        $car = DB::table('cars')->where('make', 'like', "$term%")->get();
        return ($car);
    }
    public function searchByModel($term){
        $car = DB::table('cars')->where('model', 'like', "$term%")->get();
        return ($car);
    }
    public function searchByTransmission($term){
        $car = DB::table('cars')->where('transmission', 'like', "$term%")->get();
        return ($car);
    }
    public function searchByYearup($term){
        $car = DB::table('cars')->where('year', '>', "$term%")->get();
        return ($car);
    }
    public function searchByYeardown($term){
        $car = DB::table('cars')->where('year', '<', "$term%")->get();
        return ($car);
    }
    public function searchByRentalPriceup($term){
        $car = DB::table('cars')->where('rentalprice', '>', "$term%")->get();
        return ($car);
    }
    public function searchByRentalPricedown($term){
        $car = DB::table('cars')->where('rentalprice', '<', "$term%")->get();
        return ($car);
    }
    
    // View Bookings
    public function searchByUser($term){
        $bookings = DB::table('bookings')->where('name', 'like', "$term%")->get();
        return ($bookings);
    }
    public function searchBookingByMake($term){
        $bookings = DB::table('bookings')->where('make', 'like', "$term%")->get();
        return ($bookings);
    }
    public function searchBookingByModel($term){
        $bookings = DB::table('bookings')->where('model', 'like', "$term%")->get();
        return ($bookings);
    }


    public function add_category(Request $req){

        $category = new Category();
        $category->name = $req->name;
        $category->description = $req->description;

        $image = $req->image;
        $image_new_name = time().'.'.$image->getClientOriginalName();
        $req->image->move('category_images', $image_new_name);
        $category->image = $image_new_name;

        $category->save();

        return back()->withSuccess('Category added successfully');
    }

    public function add_car(Request $req){

        $car = new Car();
        $car->category = $req->category;
        $car->make = $req->make;
        $car->model = $req->model;
        $car->year = $req->year;
        $car->color = $req->color;
        $car->mileage = $req->mileage;
        $car->transmission = $req->transmission;
        $car->fuel = $req->fuel;
        $car->rentalprice = $req->rentalprice;
        $car->totalCars = $req->totalCars;
        $car->description = $req->description;
        $car->Airconditions = $req->Airconditions;  
        $car->ChildSeat = $req->ChildSeat;
        $car->GPS = $req->GPS;
        $car->Luggage = $req->Luggage;
        $car->Music = $req->Music;
        $car->SeatBelt = $req->SeatBelt;    
        $car->SleepingBed = $req->SleepingBed;
        $car->Water = $req->Water;  
        $car->Bluetooth = $req->Bluetooth;
        $car->OnboardComputers = $req->OnboardComputers;
        $car->AudioInput = $req->AudioInput;
        $car->LongTermTrips = $req->LongTermTrips;
        $car->CarKit = $req->CarKit;    
        $car->RemoteCentralLocking = $req->RemoteCentralLocking;
        $car->ClimateControl = $req->ClimateControl;

        $cat = DB::table('categories')->where('name', $req->category)->first();

        if ($cat) {
            $category = Category::find($cat->id);
            
            $category->available += 1;
            
            $category->save();
        }

        
        $image = $req->image;
        $image_new_name = time().'.'.$image->getClientOriginalName();
        $req->image->move('car_images', $image_new_name);
        $car->image = $image_new_name;

        $car->save();

        return back()->with('message', 'Car added successfully');
    }
    
    public function update_car(Request $req,string $id){

        $car = Car::find($id);
        $car->category = $req->category;
        $car->make = $req->make;
        $car->model = $req->model;
        $car->year = $req->year;
        $car->color = $req->color;
        $car->mileage = $req->mileage;
        $car->transmission = $req->transmission;
        $car->fuel = $req->fuel;
        $car->rentalprice = $req->rentalprice;
        $car->totalCars = $req->totalCars;
        $car->description = $req->description;
        $car->Airconditions = $req->Airconditions;  
        $car->ChildSeat = $req->ChildSeat;
        $car->GPS = $req->GPS;
        $car->Luggage = $req->Luggage;
        $car->Music = $req->Music;
        $car->SeatBelt = $req->SeatBelt;    
        $car->SleepingBed = $req->SleepingBed;
        $car->Water = $req->Water;  
        $car->Bluetooth = $req->Bluetooth;
        $car->OnboardComputers = $req->OnboardComputers;
        $car->AudioInput = $req->AudioInput;
        $car->LongTermTrips = $req->LongTermTrips;
        $car->CarKit = $req->CarKit;    
        $car->RemoteCentralLocking = $req->RemoteCentralLocking;
        $car->ClimateControl = $req->ClimateControl;
        
        $image = $req->image;
        if ($image) {
            $image_new_name = time().'.'.$image->getClientOriginalName();
            $req->image->move('car_images', $image_new_name);
            $car->image = $image_new_name;
        }

        $car->save();

        return redirect('view_cars')->with('message', $car->model. ' updated successfully');
    }

    public function deleteCar(string $id){
        $car = DB::table('cars')->where('id', $id)->delete();

        // return $car;
        if ($car) {
            return redirect()->back()->with('success', 'Car deleted successfully.');
        } else {
            return redirect()->back()->with('error', 'Car not deleted.');
        }

        $cat = DB::table('categories')->where('name', $req->category)->first();

        if ($cat) {
            $category = Category::find($cat->id);
            
            $category->available -= 1;
            
            $category->save();
        }

    }

    public function updateCarPage(string $id){
        $car = Car::find($id);
        $cat = Category::all()->where('name', '!=', "$car->category");
        return view('admin.updateCar', compact('car', 'cat'));
        // $car = Car::where('id', $id)->get();
        // // return response()->json($car);
        // // return $car;
        // return view('admin.updateCar', ['car' => $car]);
    }

    public function completePayment(string $id){
        $booking = DB::table('bookings')->where('id', $id)->update(['payment_status' => 'Completed']);
        return redirect()->back()->with('message', 'Payment completed successfully');
    }

    public function bookingStatus(string $id){
        $booking = DB::table('bookings')->where('id', $id)->update(['booking_status' => 'Ended']);
        return redirect()->back()->with('message', 'Booking Status updated successfully');
    }
}
