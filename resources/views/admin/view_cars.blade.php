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
                                <h2 class="card-title">Cars</h2>

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

                                <div class="search_panel">
                                    <div class="search">Search By Category
                                        <br>
                                        <input type="text" class="search_input" id="search" onkeyup=searchByCategory()>
                                        <ul id="userList">
                                            
                                        </ul>
                                    </div>
                                    <div class="search">Search By Make
                                        <br>
                                        <input type="text" class="search_input" id="searchmake" onkeyup=searchByMake()>
                                        <ul id="userList">
                                            
                                        </ul>
                                    </div>
                                    <div class="search">Search By Model
                                        <br>
                                        <input type="text"class="search_input" id="searchmodel" onkeyup=searchByModel()>
                                        <ul id="userList">
                                            
                                        </ul>
                                    </div>
                                    <div class="search_y">Year ^
                                        <br>
                                        <input type="text" class="search_year" id="searchyearup" onkeyup=searchByYearup()>
                                        <ul id="userList">
                                            
                                        </ul>
                                    </div>
                                    <div class="search_y">Year v
                                        <br>
                                        <input type="text" class="search_year" id="searchyeardown" onkeyup=searchByYeardown()>
                                        <ul id="userList">
                                            
                                        </ul>
                                    </div>
                                    <div class="search">Search By Transmission
                                        <br>
                                        <input type="text" class="search_input" id="searchtrans" onkeyup=searchByTransmission()>
                                        <ul id="userList">
                                            
                                        </ul>
                                    </div>
                                    <div class="search_p">Rental Price ^
                                        <br>
                                        <input type="text" class="search_price" id="searchrentalpriceup" onkeyup=searchByRentalPriceup()>
                                        <ul id="userList">
                                            
                                        </ul>
                                    </div>
                                    <div class="search_p">Rental Price v
                                        <br>
                                        <input type="text" class="search_price" id="searchrentalpricedown" onkeyup=searchByRentalPricedown()>
                                        <ul id="userList">
                                            
                                        </ul>
                                    </div>
                                </div>
                                

                                <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                    <tr>
                                        <th> Image </th>
                                        <th> Category </th>
                                        <th> Make </th>
                                        <th> Model </th>
                                        <th> Year </th>
                                        <th> Color </th>
                                        <th> Transmission </th>
                                        <th> Rental Price </th>
                                        <th> Total Cars </th>
                                        <th> View </th>
                                        <th> Edit </th>
                                        <th> Delete </th>
                                    </tr>
                                    </thead>
                                    <tbody id="body">
                                        @foreach ($data as $id=>$car)
                                            <tr>
                                                <td><img src="/car_images/{{$car->image}}" alt="Image" height="50px" width="50px"></td>
                                                <td>{{$car->category}}</td>
                                                <td>{{$car->make}}</td>
                                                <td>{{$car->model}}</td>
                                                <td>{{$car->year}}</td>
                                                <td>{{$car->color}}</td>
                                                <td>{{$car->transmission}}</td>
                                                <td>{{$car->rentalprice}}</td>
                                                <td>{{$car->totalCars}}</td>
                                                <td><a href="{{ route('carDetail', $car->id) }}" class="badge badge-outline-primary">View</a></td>
                                                <td><a href="{{ route('updateCarPage', $car->id) }}" class="badge badge-outline-success">Edit</a></td>
                                                <td><a href="{{ route('deleteCar', $car->id) }}" class="badge badge-outline-danger" onclick="return confirm('Are you sure to delete {{$car->model}}?')">Delete</a></td>
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