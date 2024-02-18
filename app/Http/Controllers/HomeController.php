<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use App\Models\Car;
use App\Models\Category;
use App\Models\bookings;
use Session;
use Stripe;
use PDF;

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
            //users
            $totalusers = User::where('usertype', 0)->count();
            $todayregistered = User::where('usertype', 0)->whereDate('created_at', today())->count();
            $userpercentage = round(($todayregistered / $totalusers) * 100, 1);

            //categories
            $totalcat = Category::count();
            $todayadded = Category::whereDate('created_at', date('Y-m-d'))->count();
            $catpercentage = round(($todayadded / $totalcat) * 100, 1);

            //cars
            $cars = Car::all();
            $totalcars = 0;
            foreach ($cars as $car) {
                $totalcars += $car->totalCars;
            }
            $todayadded = Car::whereDate('updated_at', today())->count();
            $carspercentage = round(($todayadded / $totalcars) * 100, 1);

            //bookings
            $totalbookings = bookings::count();
            $todayadded = bookings::whereDate('created_at', date('Y-m-d'))->count();
            $bookingspercentage = round(($todayadded / $totalbookings) * 100, 1);

            return view('admin.home', compact('totalusers', 'userpercentage', 'totalcat', 'catpercentage', 'totalcars', 'carspercentage', 'totalbookings', 'bookingspercentage'));
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

    public function allcars(){
        $car = Car::paginate(9);
        // return response()->json($car);
        // return $car;
        if (isset($car)) {
            return view('cars.cars', ['data' => $car]);
        } else {
            return redirect()->back()->with('error', 'Car data not found.');
        }
    }

    public function book(string $id){
        if(Auth::id()){
            $user = Auth::user();
            $car = Car::find($id);
            return view('cars.book', ['car' => $car, 'user' => $user]);
        }else {
            return redirect('login');
        }
        
    }

    public function book_now(Request $req, string $id){
        if(Auth::id()){
            $user = Auth::user();
            
            $car = Car::find($id);
            // return response()->json($car);

            $book = new bookings;
            $book->name = $user->name;
            $book->email = $user->email;
            $book->phone = $user->phone;
            $book->address = $user->address;
            $book->make = $car->make;
            $book->model = $car->model;
            $book->quantity = $req->quantity;
            $book->fromdate = $req->date;
            $book->days = $req->days;
            $fromDate = strtotime($req->date);
            $toDate = strtotime("+$req->days days", $fromDate);
            $book->todate = date('Y-m-d', $toDate);
            $book->onedayprice = $car->rentalprice;
            $book->totalprice = $req->quantity * $car->rentalprice * $req->days;
            $book->image = $car->image;
            $book->user_id = $user->id;
            $book->car_id = $car->id;
            
            $cat = DB::table('categories')->where('name', $car->category)->first();

            $car->totalCars -= $req->quantity;
            $car->save();

            $book->save();

            return redirect(route('cars', $cat->name))->with('message', $car->model. ' booked successfully');
        }else {
            return redirect('login');
        }
    }

    public function showbookings(){
        if(Auth::check()){
            $user = Auth::user();
            $bookings = DB::table('bookings')->where('name', $user->name)->where('booking_status', 'continued')->orderBy('todate')->get();
            return view('mybookings.bookings', ['data' => $bookings]);
        }else{  
            return redirect('/login')->with('message', 'To view bookings, you must be logged in.');;
        }
    }
    
    public function updatebooking(Request $req, string $id){
        if(Auth::id()){
            $user = Auth::user();
            $book = bookings::find($id);
            $car = Car::where('id', $book->car_id)->first();

            $book->name = $user->name;
            $book->email = $user->email;
            $book->phone = $user->phone;
            $book->address = $user->address;
            $book->make = $car->make;
            $book->model = $car->model;
            $book->quantity = $req->quantity;
            $book->fromdate = $req->date;
            $book->days = $req->days;
            $fromDate = strtotime($req->date);
            $toDate = strtotime("+$req->days days", $fromDate);
            $book->todate = date('Y-m-d', $toDate);
            $book->onedayprice = $car->rentalprice;
            $book->totalprice = $req->quantity * $car->rentalprice * $req->days;
            $book->image = $car->image;
            $book->user_id = $user->id;
            $book->car_id = $car->id;
            
            $cat = DB::table('categories')->where('name', $car->category)->first();

            $car->totalCars -= $book->quantity;
            $car->save();

            $book->save();
            

            return redirect('view_bookings')->with('message', $car->model. ' updated successfully');

        }else {
            return redirect('login');
        }
    }

    public function updateBookingPage(string $id){
        $user = Auth::user();
        
        // $cat = Category::all()->where('name', '!=', "$car->category");
        $booking = bookings::find($id);
        $car = Car::where('id', $booking->car_id)->first();
        $car->totalCars += $booking->quantity;
        $car->save();
        // return response()->json($car);
        return view('mybookings.book', compact('car', 'booking', 'user'));
    }

    public function deleteBooking(string $id){
        $booking = DB::table('bookings')->where('id', $id)->first();

        if ($booking) {
            $car = Car::find($booking->car_id);
            
            DB::table('bookings')->where('id', $id)->delete();

            if ($car) {
                $car->totalCars += $booking->quantity;
                $car->save();
            }

            return redirect()->back()->with('message', 'Booking deleted successfully.');
        } else {
            return redirect()->back()->with('message', 'Booking not found.');
        }
    }

    public function stripe($id){
        $booking = DB::table('bookings')->where('id', $id)->first();
        // $totalprice = $booking->totalprice;

        return view('stripe.stripe', compact('booking'));
    }

    public function stripePost(Request $request, $id)
    {
        Stripe\Stripe::setApiKey(env('STRIPE_SECRET'));
        $booking = bookings::find($id);
    
        $usd_price = round($booking->totalprice / 280);
        Stripe\Charge::create ([
                "amount" => $usd_price * 100,
                "currency" => "usd",
                "source" => $request->stripeToken,
                "description" => "Payment done." 
        ]);

        Session::flash('success', 'Payment successful!');
        $booking->payment_status = 'Completed';

        $booking->save();
        return redirect('/view_bookings');
    }

    public function print_pdf(string $id){
        $booking = bookings::find($id);
        $pdf = \PDF::loadView('mybookings.print_pdf', compact('booking'));
        return $pdf->download('invoice.pdf');
    }
}
