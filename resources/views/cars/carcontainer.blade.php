<section class="ftco-section bg-light">
    <div class="container">
        @if (session()->has('message'))
            <div class="alert alert-success">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">X</button>
                {{session()->get('message')}}
            </div>
        @endif
        <br>
        <div class="row">
            @foreach ($data as $car)
            @if ($car)
            <div class="col-md-4">
                <div class="car-wrap rounded ftco-animate">
                    <div class="img rounded d-flex align-items-end">
                        <img src="/car_images/{{$car->image}}" alt="Car Image" height="100%" width="100%" style="object-fit: cover;">
                    </div> 
                    <div class="text">
                        <h2 class="mb-0"><a href="/carDetail">{{$car->model}}</a></h2>
                        <div class="d-flex mb-3">
                            <span class="cat">{{$car->make}}</span>
                            <p class="price ml-auto">Rs {{$car->rentalprice}} <span>/day</span></p>
                        </div>
                        <h6>{{$car->totalCars}} {{$car->model}}s In Stock</h6>
                        @if ($car->totalCars > 0)
                            <p class="d-flex mb-0 d-block"><a href="{{route('book', $car->id)}}" class="btn btn-primary py-2 mr-1">Book now</a> <a href="{{ route('carDetail', $car->id) }}" class="btn btn-secondary py-2 ml-1">Details</a></p>
                        @else
                            <p class="d-flex mb-0 d-block"><a href="" class="btn btn-primary py-2 mr-1" onclick="return confirm('No cars to book !!!!!')">Book now</a> <a href="" class="btn btn-secondary py-2 ml-1" onclick="return confirm('No cars to show detail !!!!!')">Details</a></p>
                        @endif
                        
                    </div>
                </div>
            </div>
            @endif
            @endforeach
            {!!$data->withQueryString()->links('pagination::bootstrap-5')!!}
            {{-- <div class="col-md-4">
                <div class="car-wrap rounded ftco-animate">
                    <div class="img rounded d-flex align-items-end" style="background-image: url(home/images/car-2.jpg);">
                    </div>
                    <div class="text">
                        <h2 class="mb-0"><a href="/carDetail">Range Rover</a></h2>
                        <div class="d-flex mb-3">
                            <span class="cat">Subaru</span>
                            <p class="price ml-auto">$500 <span>/day</span></p>
                        </div>
                        <p class="d-flex mb-0 d-block"><a href="#" class="btn btn-primary py-2 mr-1">Book now</a> <a href="/carDetail" class="btn btn-secondary py-2 ml-1">Details</a></p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="car-wrap rounded ftco-animate">
                    <div class="img rounded d-flex align-items-end" style="background-image: url(home/images/car-3.jpg);">
                    </div>
                    <div class="text">
                        <h2 class="mb-0"><a href="/carDetail">Mercedes Grand Sedan</a></h2>
                        <div class="d-flex mb-3">
                            <span class="cat">Cheverolet</span>
                            <p class="price ml-auto">$500 <span>/day</span></p>
                        </div>
                        <p class="d-flex mb-0 d-block"><a href="#" class="btn btn-primary py-2 mr-1">Book now</a> <a href="/carDetail" class="btn btn-secondary py-2 ml-1">Details</a></p>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="car-wrap rounded ftco-animate">
                    <div class="img rounded d-flex align-items-end" style="background-image: url(home/images/car-4.jpg);">
                    </div>
                    <div class="text">
                        <h2 class="mb-0"><a href="/carDetail">Mercedes Grand Sedan</a></h2>
                        <div class="d-flex mb-3">
                            <span class="cat">Cheverolet</span>
                            <p class="price ml-auto">$500 <span>/day</span></p>
                        </div>
                        <p class="d-flex mb-0 d-block"><a href="#" class="btn btn-primary py-2 mr-1">Book now</a> <a href="/carDetail" class="btn btn-secondary py-2 ml-1">Details</a></p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="car-wrap rounded ftco-animate">
                    <div class="img rounded d-flex align-items-end" style="background-image: url(home/images/car-5.jpg);">
                    </div>
                    <div class="text">
                        <h2 class="mb-0"><a href="/carDetail">Range Rover</a></h2>
                        <div class="d-flex mb-3">
                            <span class="cat">Subaru</span>
                            <p class="price ml-auto">$500 <span>/day</span></p>
                        </div>
                        <p class="d-flex mb-0 d-block"><a href="#" class="btn btn-primary py-2 mr-1">Book now</a> <a href="/carDetail" class="btn btn-secondary py-2 ml-1">Details</a></p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="car-wrap rounded ftco-animate">
                    <div class="img rounded d-flex align-items-end" style="background-image: url(home/images/car-6.jpg);">
                    </div>
                    <div class="text">
                        <h2 class="mb-0"><a href="/carDetail">Mercedes Grand Sedan</a></h2>
                        <div class="d-flex mb-3">
                            <span class="cat">Cheverolet</span>
                            <p class="price ml-auto">$500 <span>/day</span></p>
                        </div>
                        <p class="d-flex mb-0 d-block"><a href="#" class="btn btn-primary py-2 mr-1">Book now</a> <a href="/carDetail" class="btn btn-secondary py-2 ml-1">Details</a></p>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="car-wrap rounded ftco-animate">
                    <div class="img rounded d-flex align-items-end" style="background-image: url(home/images/car-7.jpg);">
                    </div>
                    <div class="text">
                        <h2 class="mb-0"><a href="/carDetail">Mercedes Grand Sedan</a></h2>
                        <div class="d-flex mb-3">
                            <span class="cat">Cheverolet</span>
                            <p class="price ml-auto">$500 <span>/day</span></p>
                        </div>
                        <p class="d-flex mb-0 d-block"><a href="#" class="btn btn-primary py-2 mr-1">Book now</a> <a href="/carDetail" class="btn btn-secondary py-2 ml-1">Details</a></p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="car-wrap rounded ftco-animate">
                    <div class="img rounded d-flex align-items-end" style="background-image: url(home/images/car-8.jpg);">
                    </div>
                    <div class="text">
                        <h2 class="mb-0"><a href="/carDetail">Range Rover</a></h2>
                        <div class="d-flex mb-3">
                            <span class="cat">Subaru</span>
                            <p class="price ml-auto">$500 <span>/day</span></p>
                        </div>
                        <p class="d-flex mb-0 d-block"><a href="#" class="btn btn-primary py-2 mr-1">Book now</a> <a href="/carDetail" class="btn btn-secondary py-2 ml-1">Details</a></p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="car-wrap rounded ftco-animate">
                    <div class="img rounded d-flex align-items-end" style="background-image: url(home/images/car-9.jpg);">
                    </div>
                    <div class="text">
                        <h2 class="mb-0"><a href="/carDetail">Mercedes Grand Sedan</a></h2>
                        <div class="d-flex mb-3">
                            <span class="cat">Cheverolet</span>
                            <p class="price ml-auto">$500 <span>/day</span></p>
                        </div>
                        <p class="d-flex mb-0 d-block"><a href="#" class="btn btn-primary py-2 mr-1">Book now</a> <a href="/carDetail" class="btn btn-secondary py-2 ml-1">Details</a></p>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="car-wrap rounded ftco-animate">
                    <div class="img rounded d-flex align-items-end" style="background-image: url(home/images/car-10.jpg);">
                    </div>
                    <div class="text">
                        <h2 class="mb-0"><a href="/carDetail">Mercedes Grand Sedan</a></h2>
                        <div class="d-flex mb-3">
                            <span class="cat">Cheverolet</span>
                            <p class="price ml-auto">$500 <span>/day</span></p>
                        </div>
                        <p class="d-flex mb-0 d-block"><a href="#" class="btn btn-primary py-2 mr-1">Book now</a> <a href="/carDetail" class="btn btn-secondary py-2 ml-1">Details</a></p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="car-wrap rounded ftco-animate">
                    <div class="img rounded d-flex align-items-end" style="background-image: url(home/images/car-11.jpg);">
                    </div>
                    <div class="text">
                        <h2 class="mb-0"><a href="/carDetail">Range Rover</a></h2>
                        <div class="d-flex mb-3">
                            <span class="cat">Subaru</span>
                            <p class="price ml-auto">$500 <span>/day</span></p>
                        </div>
                        <p class="d-flex mb-0 d-block"><a href="#" class="btn btn-primary py-2 mr-1">Book now</a> <a href="/carDetail" class="btn btn-secondary py-2 ml-1">Details</a></p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="car-wrap rounded ftco-animate">
                    <div class="img rounded d-flex align-items-end" style="background-image: url(home/images/car-12.jpg);">
                    </div>
                    <div class="text">
                        <h2 class="mb-0"><a href="/carDetail">Mercedes Grand Sedan</a></h2>
                        <div class="d-flex mb-3">
                            <span class="cat">Cheverolet</span>
                            <p class="price ml-auto">$500 <span>/day</span></p>
                        </div>
                        <p class="d-flex mb-0 d-block"><a href="#" class="btn btn-primary py-2 mr-1">Book now</a> <a href="/carDetail" class="btn btn-secondary py-2 ml-1">Details</a></p>
                    </div>
                </div>
            </div> --}}
        </div>
        {{-- <div class="row mt-5">
            <div class="col text-center">
                <div class="block-27">
                    <ul>
                        <li><a href="#">&lt;</a></li>
                        <li class="active"><span>1</span></li>
                        <li><a href="#">2</a></li>
                        <li><a href="#">3</a></li>
                        <li><a href="#">4</a></li>
                        <li><a href="#">5</a></li>
                        <li><a href="#">&gt;</a></li>
                    </ul>
                </div>
            </div>
        </div> --}}
    </div>
</section>