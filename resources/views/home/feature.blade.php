<section class="ftco-section ftco-no-pt bg-light">
    <div class="container">
        <div class="row justify-content-center">
        <div class="col-md-12 heading-section text-center ftco-animate mb-5">
        <span class="subheading">What we offer</span>
        <h2 class="mb-2">Featured Vehicles</h2>
        </div>
    </div>
        <div class="row">
            <div class="col-md-12">
                <div class="carousel-car owl-carousel">
                    @foreach ($cars as $car)
                    <div class="item">
                        <div class="car-wrap rounded ftco-animate">
                            <div class="img rounded d-flex align-items-end">
                                <img src="/car_images/{{$car->image}}" alt="Car Image" height="100%" width="100%" style="object-fit: cover;">
                            </div>
                            <div class="text">
                                <h2 class="mb-0"><a href="#">{{$car->model}} {{$car->category}}</a></h2>
                                <div class="d-flex mb-3">
                                    <span class="cat">{{$car->make}}</span>
                                    <p class="price ml-auto">Rs {{$car->rentalprice}} <span>/day</span></p>
                                </div>
                                <p class="d-flex mb-0 d-block"><a href="#" class="btn btn-primary py-2 mr-1">Book now</a> <a href="#" class="btn btn-secondary py-2 ml-1">Details</a></p>
                            </div>
                        </div>
                    </div>
                    @endforeach
                    {{-- <div class="item">
                        <div class="car-wrap rounded ftco-animate">
                            <div class="img rounded d-flex align-items-end" style="background-image: url(home/images/car-2.jpg);">
                            </div>
                            <div class="text">
                                <h2 class="mb-0"><a href="#">Mercedes Grand Sedan</a></h2>
                                <div class="d-flex mb-3">
                                    <span class="cat">Cheverolet</span>
                                    <p class="price ml-auto">$500 <span>/day</span></p>
                                </div>
                                <p class="d-flex mb-0 d-block"><a href="#" class="btn btn-primary py-2 mr-1">Book now</a> <a href="#" class="btn btn-secondary py-2 ml-1">Details</a></p>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="car-wrap rounded ftco-animate">
                            <div class="img rounded d-flex align-items-end" style="background-image: url(home/images/car-3.jpg);">
                            </div>
                            <div class="text">
                                <h2 class="mb-0"><a href="#">Mercedes Grand Sedan</a></h2>
                                <div class="d-flex mb-3">
                                    <span class="cat">Cheverolet</span>
                                    <p class="price ml-auto">$500 <span>/day</span></p>
                                </div>
                                <p class="d-flex mb-0 d-block"><a href="#" class="btn btn-primary py-2 mr-1">Book now</a> <a href="#" class="btn btn-secondary py-2 ml-1">Details</a></p>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="car-wrap rounded ftco-animate">
                            <div class="img rounded d-flex align-items-end" style="background-image: url(home/images/car-4.jpg);">
                            </div>
                            <div class="text">
                                <h2 class="mb-0"><a href="#">Mercedes Grand Sedan</a></h2>
                                <div class="d-flex mb-3">
                                    <span class="cat">Cheverolet</span>
                                    <p class="price ml-auto">$500 <span>/day</span></p>
                                </div>
                                <p class="d-flex mb-0 d-block"><a href="#" class="btn btn-primary py-2 mr-1">Book now</a> <a href="#" class="btn btn-secondary py-2 ml-1">Details</a></p>
                            </div>
                        </div>
                    </div> --}}
                </div>
            </div>
        </div>
    </div>
</section>