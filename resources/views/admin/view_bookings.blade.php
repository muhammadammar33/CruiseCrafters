<!DOCTYPE html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        @include('admin.css')
        <script src="JS/script.js"></script>
    </head>
    <body>
        <div class="container-scroller">

            @include('admin.sidebar')

            @include('admin.nav')

            <div class="main-panel">
                <div class="content-wrapper">
                    <div class="row ">
                        <div class="col-12 grid-margin">
                            <div class="card">
                            <div class="card-body">
                                <h2 class="card-title">Bookings</h2>

                                @if (session()->has('message'))
                                    <div class="alert alert-success">
                                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">X</button>
                                        {{session()->get('message')}}
                                    </div>
                                @endif

                                @if (session('success'))
                                    <div class="alert alert-success">
                                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">X</button>
                                        {{ session('success') }}
                                    </div>
                                @endif

                                @if (session('error'))
                                    <div class="alert alert-danger">
                                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">X</button>
                                        {{ session('error') }}
                                    </div>
                                @endif

                                <div class="search_panel mb-5">
                                    <div class="search mb-5">Search By User
                                        <br>
                                        <input type="text" class="search_input" id="search" onkeyup=searchByUser()>
                                        <ul id="userList">
                                            
                                        </ul>
                                    </div>
                                    <div class="search mb-5">Search By Make
                                        <br>
                                        <input type="text" class="search_input" id="searchmake" onkeyup=searchBookingByMake()>
                                        <ul id="userList">
                                            
                                        </ul>
                                    </div>
                                    <div class="search mb-5">Search By Model
                                        <br>
                                        <input type="text"class="search_input" id="searchmodel" onkeyup=searchBookingByModel()>
                                        <ul id="userList">
                                            
                                        </ul>
                                    </div>
                                </div>
                                

                                <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                    <tr>
                                        <th> Client Name </th>
                                        <th> Client Email </th>
                                        <th> Client Phone </th>
                                        <th> Client Address </th>
                                        <th> Car Image </th>
                                        <th> Make </th>
                                        <th> Model </th>
                                        <th> Quantity </th>
                                        <th> From </th>
                                        <th> Days </th>
                                        <th> To </th>
                                        <th> Total Price </th>
                                        <th> Delete </th>
                                    </tr>
                                    </thead>
                                    <tbody id="body">
                                        @foreach ($data as $id=>$bookings)
                                            <tr>
                                                <td>{{$bookings->name}}</td>
                                                <td>{{$bookings->email}}</td>
                                                <td>{{$bookings->phone}}</td>
                                                <td>{{$bookings->address}}</td>
                                                <td><img src="/car_images/{{$bookings->image}}" alt="Image" height="50px" width="50px"></td>
                                                <td>{{$bookings->make}}</td>
                                                <td>{{$bookings->model}}</td>
                                                <td>{{$bookings->quantity}}</td>
                                                <td>{{$bookings->fromdate}}</td>
                                                <td>{{$bookings->days}}</td>
                                                <td>{{$bookings->todate}}</td>
                                                <td>{{$bookings->totalprice}}</td>
                                                <td><a href="{{ route('deleteBooking', $bookings->id) }}" class="badge badge-outline-danger" onclick="return confirm('Are you sure to delete booking of {{$bookings->model}}?')">Delete</a></td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                                </div>
                            </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @include('admin.js')
    </body>
</html>