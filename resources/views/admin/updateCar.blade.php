<!DOCTYPE html>
<html lang="en">
    <head>
        <base href="/public">
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
                                    <h3 class="card-title text-left mb-3">Update Car</h3>
                                    @if (session()->has('message'))
                                        <div class="alert alert-success">
                                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">X</button>
                                            {{session()->get('message')}}
                                        </div>
                                    @endif
                                    <form class="cate-form" action="{{route('update_car', $car->id)}}" method="post" enctype="multipart/form-data">
                                        @csrf
                                    <div class="form-group">
                                        <label>Category</label>
                                        <select class="cat-input" id="category" name="category" required>
                                            <option  value="{{ $car->category }}" selected="">{{ $car->category }}</option>
                                            @foreach ($cat as $cat)
                                            <option value="{{$cat->name}}">{{$cat->name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label>Make</label>
                                        <input type="text" class="cat-input" id="make" name="make" value="{{ $car->make }}" required>
                                    </div>
                                    <div class="form-group">
                                        <label>Model</label>
                                        <input type="text" class="cat-input" id="model" name="model" value="{{ $car->model }}" required>
                                    </div>
                                    <div class="form-group">
                                        <label>Year</label>
                                        <input type="number" class="cat-input" id="year" name="year" value="{{ $car->year }}" required>
                                    </div>
                                    <div class="form-group">
                                        <label>Color</label>
                                        <input type="text" class="cat-input" id="color" name="color" value="{{ $car->color }}" required>
                                    </div>
                                    <div class="form-group">
                                        <label>Mileage</label>
                                        <input type="number" class="cat-input" id="mileage" name="mileage" value="{{ $car->mileage }}" required>
                                    </div>
                                    <div class="form-group">
                                        <label>Transmission</label>
                                        <select class="cat-input" id="transmission" name="transmission" required>
                                            <option  value="{{ $car->transmission }}" selected="">{{ $car->transmission }}</option>
                                            <option value="{{ $car->transmission == 'Manual' ? 'Autometic' : 'Manual' }}">@if ($car->transmission == 'Manual')
                                                Autometic
                                            @else
                                                Manual
                                            @endif</option>
                                            {{-- <option value="Autometic">Autometic</option> --}}
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label>Fuel</label>
                                        <input type="text" class="cat-input"  id="fuel" name="fuel" value="{{ $car->fuel }}" required>
                                    </div>
                                    <div class="form-group">
                                        <label>Rental Price</label>
                                        <input type="number" class="cat-input" id="rentalprice" name="rentalprice" value="{{ $car->rentalprice }}" required>
                                    </div>
                                    <div class="form-group">
                                        <h4>Features</h4>
                                        <br>
                                        <input type="checkbox" id="ac" class="cat-input" id="Airconditions" name="Airconditions" @checked($car->Airconditions == 'on')>
                                        <label for="ac" style="width: 100px;">Airconditions</label>
                                        <input type="checkbox" id="cs" class="cat-input" id="ChildSeat" name="ChildSeat" @checked($car->ChildSeat == 'on')>
                                        <label for="cs" style="width: 100px;">Child Seat</label>
                                        <input type="checkbox" id="gps" class="cat-input" id="GPS" name="GPS" @checked($car->GPS == 'on')>
                                        <label for="gps" style="width: 100px;">GPS</label>
                                        <input type="checkbox" id="luggage" class="cat-input" id="Luggage" name="Luggage" @checked($car->Luggage == 'on')>
                                        <label for="luggage" style="width: 100px;">Luggage</label>
                                        <input type="checkbox" id="music" class="cat-input" id="Music" name="Music" @checked($car->Music == 'on')  >
                                        <label for="music" style="width: 100px;">Music</label>
                                        <input type="checkbox" id="sb" class="cat-input" id="SeatBelt" name="SeatBelt"  @checked($car->SeatBelt == 'on') >
                                        <label for="sb" style="width: 100px;">Seat Belt</label>
                                        <input type="checkbox" id="slb" class="cat-input" id="SleepingBed" name="SleepingBed" @checked($car->SleepingBed == 'on')  >
                                        <label for="slb" style="width: 100px;">Sleeping Bed</label>
                                        <input type="checkbox" id="water" class="cat-input" id="water" name="Water" @checked($car->Water == 'on')  >
                                        <label for="water" style="width: 100px;">Water</label>
                                        <input type="checkbox" id="bt" class="cat-input" id="Bluetooth" name="Bluetooth"  @checked($car->Bluetooth == 'on') >
                                        <label for="bt" style="width: 100px;">Bluetooth</label>
                                        <input type="checkbox" id="oc" class="cat-input" id="OnboardComputers" name="OnboardComputers" @checked($car->OnboardComputer == 'on')  >
                                        <label for="oc" style="width: 100px;">Onboard Computer</label>
                                        <input type="checkbox" id="ai" class="cat-input" id="AudioInput" name="AudioInput" @checked($car->AudioInput == 'on')  >
                                        <label for="ai" style="width: 100px;">Audio Input</label>
                                        <input type="checkbox" id="ltt" class="cat-input" id="LongTermTrips" name="LongTermTrips" @checked($car->LongTermTrips == 'on')  >
                                        <label for="ltt" style="width: 100px;">Long Term Trips</label>
                                        <input type="checkbox" id="ck" class="cat-input" id="CarKit" name="CarKit" @checked($car->CarKit == 'on')  >
                                        <label for="ck" style="width: 100px;">Car Kit</label>
                                        <input type="checkbox" id="rcl" class="cat-input" id="RemoteCentralLocking" name="RemoteCentralLocking" @checked($car->RemoteCentralLocking == 'on')  >
                                        <label for="rcl" style="width: 100px;">Remote Central Locking</label>
                                        <input type="checkbox" id="cc" class="cat-input" id="ClimateControl" name="ClimateControl" @checked($car->ClimateControl == 'on')  >
                                        <label for="cc" style="width: 100px;">Climate Control</label>
                                    </div>
                                    <div class="form-group">
                                        <label for="carDescription">Car Description</label>
                                        <textarea class="cat-input" id="carDescription" name="description" rows="4" required>{{ $car->description }}</textarea>
                                    </div>
                                    <div class="form-group">
                                        <label class="cat-label" for="CarImage">Previous Car Image</label>
                                        <img src="/car_images/{{$car->image}}" alt="Image" height="50px" width="50px">
                                    </div>
                                    <div class="form-group">
                                        <label class="cat-label" for="CarImage">Change Car Image</label>
                                        <input class="cat-image" type="file" id="CarImage" name="image">
                                    </div>
                                    <button class="cat-button" type="submit">Update Car</button>
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