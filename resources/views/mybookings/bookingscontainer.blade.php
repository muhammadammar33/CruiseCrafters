<section class="ftco-section contact-section">
    <div class="container">
        <div class="row d-flex mb-5 contact-info">
            <div class="col-md-12 block-9 mb-md-5 bg-light">
                {{-- @include('mybookings.bookinglist') --}}
                <div class="card-body">
                    <h2 class="card-title">Bookings</h2>

                    @if (session()->has('message'))
                        <div class="alert alert-success">
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">X</button>
                            {{session()->get('message')}}
                        </div>
                    @endif

                    <div class="search mb-5">Search Booking: 
                        <input type="text" class="search_input" id="search" onkeyup=searchUser()>
                        <ul id="userList">
                            
                        </ul>
                    </div>

                    <div class="table-responsive">
                    <table class="table">
                        <thead>
                        <tr>
                            <th style="text-align: center;"> Car Image </th>
                            <th style="text-align: center;"> Make </th>
                            <th style="text-align: center;"> Model </th>
                            <th style="text-align: center;"> Quantity </th>
                            <th style="text-align: center;"> From </th>
                            <th style="text-align: center;"> To </th>
                            <th style="text-align: center;"> Days </th>
                            <th style="text-align: center;"> Total Payment </th>
                            <th style="text-align: center;"> View </th>
                            <th style="text-align: center;"> Edit </th>
                            <th style="text-align: center;"> Delete </th>
                        </tr>
                        </thead>
                        <tbody id="body">
                            @foreach ($data as $bookings)
                                <tr>
                                    <td><img src="/car_images/{{$bookings->image}}" alt="Image" height="50px" width="50px"></td>
                                    <td style="text-align: center;">{{$bookings->make}}</td>
                                    <td style="text-align: center;">{{$bookings->model}}</td>
                                    <td style="text-align: center;">{{$bookings->quantity}}</td>
                                    <td style="text-align: center;">{{$bookings->fromdate}}</td>
                                    <td style="text-align: center;">{{$bookings->todate}}</td>
                                    <td style="text-align: center;">{{$bookings->days}}</td>
                                    <td style="text-align: center;">{{$bookings->totalprice}}</td>
                                    
                                    <td><a href="{{ route('carDetail', $bookings->car_id) }}" class="badge badge-outline-primary">View</a></td>
                                    <td><a href="{{ route('updateBookingPage', $bookings->id) }}" class="badge badge-outline-success">Edit</a></td>
                                    <td><a href="{{ route('deleteCar', $bookings->id) }}" class="badge badge-outline-danger" onclick="return confirm('Are you sure to delete booking of {{$bookings->model}}?')">Delete</a></td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>