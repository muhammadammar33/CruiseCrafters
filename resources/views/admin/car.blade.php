<!DOCTYPE html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        @include('admin.css')
    </head>
    <body>
        <div class="container-scroller">

            @include('admin.sidebar')

            @include('admin.nav')

            <div class="main-panel">
                <div class="content-wrapper">
                    <div class="container-scroller">
                        <div class="container-fluid page-body-wrapper full-page-wrapper">
                            <div class="row w-100 m-0">
                            <div class="content-wrapper full-page-wrapper d-flex align-items-center auth login-bg">
                                <div class="card col-lg-6 mx-auto">
                                <div class="card-body px-5 py-5">
                                    <h3 class="card-title text-left mb-3">Add Car</h3>
                                    @if (session()->has('message'))
                                        <div class="alert alert-success">
                                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">X</button>
                                            {{session()->get('message')}}
                                        </div>
                                    @endif
                                    <form class="cate-form" action="{{route('add_car')}}" method="post" enctype="multipart/form-data">
                                        @csrf
                                    <div class="form-group">
                                        <label>Category</label>
                                        <select class="cat-input" id="category" name="category" required>
                                            <option value="" selected="">Select Category</option>
                                            @foreach ($data as $cat)
                                            <option value="{{$cat->name}}">{{$cat->name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label>Make</label>
                                        <input type="text" class="cat-input" id="make" name="make" required>
                                    </div>
                                    <div class="form-group">
                                        <label>Model</label>
                                        <input type="text" class="cat-input" id="model" name="model" required>
                                    </div>
                                    <div class="form-group">
                                        <label>Year</label>
                                        <input type="number" class="cat-input" id="year" name="year" required>
                                    </div>
                                    <div class="form-group">
                                        <label>Color</label>
                                        <input type="text" class="cat-input" id="color" name="color" required>
                                    </div>
                                    <div class="form-group">
                                        <label>Mileage</label>
                                        <input type="number" class="cat-input" id="mileage" name="mileage" required>
                                    </div>
                                    <div class="form-group">
                                        <label>Transmission</label>
                                        <select class="cat-input" id="transmission" name="transmission" required>
                                            <option value="" selected="">Select Transmission</option>
                                            <option value="Manual">Manual</option>
                                            <option value="Autometic">Autometic</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label>Fuel</label>
                                        <input type="text" class="cat-input"  id="fuel" name="fuel" required>
                                    </div>
                                    <div class="form-group">
                                        <label>Rental Price</label>
                                        <input type="number" class="cat-input" id="rentalprice" name="rentalprice" required>
                                    </div>
                                    <div class="form-group">
                                        <h4>Features</h4>
                                        <br>
                                        <input type="checkbox" id="ac" class="cat-input" id="Airconditions" name="Airconditions"  >
                                        <label for="ac" style="width: 100px;">Airconditions</label>
                                        <input type="checkbox" id="cs" class="cat-input" id="ChildSeat" name="ChildSeat">
                                        <label for="cs" style="width: 100px;">Child Seat</label>
                                        <input type="checkbox" id="gps" class="cat-input" id="GPS" name="GPS">
                                        <label for="gps" style="width: 100px;">GPS</label>
                                        <input type="checkbox" id="luggage" class="cat-input" id="Luggage" name="Luggage"  >
                                        <label for="luggage" style="width: 100px;">Luggage</label>
                                        <input type="checkbox" id="music" class="cat-input" id="Music" name="Music"  >
                                        <label for="music" style="width: 100px;">Music</label>
                                        <input type="checkbox" id="sb" class="cat-input" id="SeatBelt" name="SeatBelt"  >
                                        <label for="sb" style="width: 100px;">Seat Belt</label>
                                        <input type="checkbox" id="slb" class="cat-input" id="SleepingBed" name="SleepingBed"  >
                                        <label for="slb" style="width: 100px;">Sleeping Bed</label>
                                        <input type="checkbox" id="water" class="cat-input" id="water" name="Water"  >
                                        <label for="water" style="width: 100px;">Water</label>
                                        <input type="checkbox" id="bt" class="cat-input" id="Bluetooth" name="Bluetooth"  >
                                        <label for="bt" style="width: 100px;">Bluetooth</label>
                                        <input type="checkbox" id="oc" class="cat-input" id="OnboardComputers" name="OnboardComputers"  >
                                        <label for="oc" style="width: 100px;">Onboard Computer</label>
                                        <input type="checkbox" id="ai" class="cat-input" id="AudioInput" name="AudioInput"  >
                                        <label for="ai" style="width: 100px;">Audio Input</label>
                                        <input type="checkbox" id="ltt" class="cat-input" id="LongTermTrips" name="LongTermTrips"  >
                                        <label for="ltt" style="width: 100px;">Long Term Trips</label>
                                        <input type="checkbox" id="ck" class="cat-input" id="CarKit" name="CarKit"  >
                                        <label for="ck" style="width: 100px;">Car Kit</label>
                                        <input type="checkbox" id="rcl" class="cat-input" id="RemoteCentralLocking" name="RemoteCentralLocking"  >
                                        <label for="rcl" style="width: 100px;">Remote Central Locking</label>
                                        <input type="checkbox" id="cc" class="cat-input" id="ClimateControl" name="ClimateControl"  >
                                        <label for="cc" style="width: 100px;">Climate Control</label>
                                    </div>
                                    <div class="form-group">
                                        <label for="carDescription">Car Description</label>
                                        <textarea class="cat-input" id="carDescription" name="description" rows="4" required></textarea>
                                    </div>
                                    <div class="form-group">
                                        <label class="cat-label" for="CarImage">Car Image</label>
                                        <input class="cat-image" type="file" id="CarImage" name="image" required>
                                    </div>
                                    <button class="cat-button" type="submit">Add Car</button>
                                    </form>
                                </div>
                                </div>
                            </div>
                            <!-- content-wrapper ends -->
                            </div>
                            <!-- row ends -->
                        </div>
                        <!-- page-body-wrapper ends -->
                    </div>
                </div>
            </div>
        </div>
        @include('admin.js')
    </body>
</html>