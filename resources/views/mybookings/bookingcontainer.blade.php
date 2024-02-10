<section class="ftco-section bg-light">
    <div class="container">
        <div class="column" style="width: 100%">
            <h1 class="mb-5" style="font-size: 32px; text-align: center; text-decoration:underline; color:green">Booking</h1>
            
            <div style="width: 100%">
                <img src="/car_images/{{$booking->image}}" alt="Car Image" height="200px" width="200px" style="object-fit: cover; border:2px solid; border-radius:50%; margin:0 auto">
            </div>
            
            <form action="{{route('updatebooking', $booking->id)}}" method="post">
                @csrf
                <div style="border: 2px solid">
                    <h2 style="font-size: 26px; text-align: center;">User Details</h2>
                    <div class="row">
                        <h5 style="width: 50%; text-align: center">Name:</h5>
                        <p style="width: 50%; text-align: center">{{$user->name}}</p>
                    </div>
                    <div class="row">
                        <h5 style="width: 50%; text-align: center">Email:</h5>
                        <p style="width: 50%; text-align: center">{{$user->email}}</p>
                    </div>
                    <div class="row">
                        <h5 style="width: 50%; text-align: center">Phone:</h5>
                        <p style="width: 50%; text-align: center">{{$user->phone}}</p>
                    </div>
                    <div class="row">
                        <h5 style="width: 50%; text-align: center">Address:</h5>
                        <p style="width: 50%; text-align: center">{{$user->address}}</p>
                    </div>
                </div>
                
                <div class="mt-5" style="border: 2px solid">
                    <h2 style="font-size: 26px; text-align: center;">Car Details</h2>
                    <div class="row">
                        <h5 style="width: 50%; text-align: center">Make:</h5>
                        <p style="width: 50%; text-align: center">{{$car->make}}</p>
                    </div>
                    <div class="row">
                        <h5 style="width: 50%; text-align: center">Model:</h5>
                        <p style="width: 50%; text-align: center">{{$car->model}}</p>
                    </div>
                    <div class="row">
                        <h5 style="width: 50%; text-align: center">One Day Rental Price:</h5>
                        <p style="width: 50%; text-align: center">{{$car->rentalprice}}</p>
                    </div>
                    <div class="row">
                        <h5 style="width: 50%; text-align: center">{{$car->model}} In stock:</h5>
                        <p style="width: 50%; text-align: center">{{$car->totalCars}}</p>
                    </div>
                    
                    <div class="row">
                        <h5 style="width: 50%; text-align: center">Quantity:</h5>
                        <div style="width: 50%; text-align: center">
                            <input style="width: 150px; height: 25px; text-align: center" type="number" name="quantity" id="quantity" min="1" max="{{$car->totalCars}}" value="{{$booking->quantity}}" required>
                        </div>
                    </div>
                    <div class="row">
                        <h5 style="width: 50%; text-align: center">Date:</h5>
                        <div style="width: 50%; text-align: center">
                            <input style="width: 150px; height: 25px; text-align: center" type="date" name="date" id="date" min="{{date('Y-m-d')}}" value="{{$booking->fromdate}}" required>
                        </div>
                    </div>
                    <div class="row">
                        <h5 style="width: 50%; text-align: center">Days:</h5>
                        <div style="width: 50%; text-align: center">
                            <input style="width: 150px; height: 25px; text-align: center" type="number" name="days" id="days" min="1" value="{{$booking->days}}" required>
                        </div>
                    </div>
                </div>
                <button class="btn btn-success mt-5" style="background-color:green; margin-left:46%" type="submit">Update Booking</button>
            </form>
                
        </div>
    </div>
</section>