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
                                

                                <div class="table-responsive" >
                                <table class="table">
                                    <thead>
                                    <tr>
                                        <th style="font-size: 9px"> Client Name </th>
                                        <th style="font-size: 9px"> Client Email </th>
                                        <th style="font-size: 9px"> Client Phone </th>
                                        <th style="font-size: 9px"> Client Address </th>
                                        <th style="font-size: 9px"> Car Image </th>
                                        <th style="font-size: 9px"> Make </th>
                                        <th style="font-size: 9px"> Model </th>
                                        <th style="font-size: 9px"> Quantity </th>
                                        <th style="font-size: 9px"> From </th>
                                        <th style="font-size: 9px"> To </th>
                                        <th style="font-size: 9px"> Total Price </th>
                                        <th style="font-size: 9px"> Payment Status </th>
                                        <th style="font-size: 9px"> Booking Status </th>
                                    </tr>
                                    </thead>
                                    <tbody id="body">
                                        @foreach ($data as $id=>$bookings)
                                            <tr>
                                                <td style="font-size: 9px">{{$bookings->name}}</td>
                                                <td style="font-size: 9px">{{$bookings->email}}</td>
                                                <td style="font-size: 9px">{{$bookings->phone}}</td>
                                                <td style="font-size: 9px">{{$bookings->address}}</td>
                                                <td style="font-size: 9px"><img src="/car_images/{{$bookings->image}}" alt="Image" height="50px" width="50px"></td>
                                                <td style="font-size: 9px">{{$bookings->make}}</td>
                                                <td style="font-size: 9px">{{$bookings->model}}</td>
                                                <td style="font-size: 9px">{{$bookings->quantity}}</td>
                                                <td style="font-size: 9px">{{$bookings->fromdate}}</td>
                                                <td style="font-size: 9px">{{$bookings->todate}}</td>
                                                <td style="font-size: 9px">{{$bookings->totalprice}}</td>
                                                @if ($bookings->payment_status == 'pending')
                                                    <td style="font-size: 9px"><a href="{{ route('completePayment', $bookings->id) }}" class="badge badge-outline-success">Complete Payment</a></td>
                                                @else
                                                    <td style="font-size: 9px">{{$bookings->payment_status}}</td>
                                                @endif
                                                @if ($bookings->booking_status == 'continued')
                                                    <td style="font-size: 9px"><a href="{{ route('bookingStatus', $bookings->id) }}" class="badge badge-outline-danger">End</a></td>
                                                @else
                                                    <td style="font-size: 9px">{{$bookings->booking_status}}</td>
                                                @endif
                                                
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