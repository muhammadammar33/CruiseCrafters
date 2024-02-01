<section class="ftco-section ftco-car-details">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="car-details">
                    <div class="img rounded">
                        <img src="/car_images/{{$car->image}}" alt="Car Image" width="100%">
                    </div>
                    <div class="text text-center">
                        <span class="subheading">{{$car->make}}</span>
                        <h2>{{$car->model}}</h2>
                        <span class="subheading">Rs {{$car->rentalprice}} /day</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services">
            <div class="media-body py-md-4">
                <div class="d-flex mb-3 align-items-center">
                    <div class="icon d-flex align-items-center justify-content-center"><span class="flaticon-dashboard"></span></div>
                    <div class="text">
                        <h3 class="heading mb-0 pl-3">
                            Mileage
                            <span>{{$car->mileage}}</span>
                        </h3>
                    </div>
                </div>
            </div>
            </div>      
        </div>
        <div class="col-md d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services">
            <div class="media-body py-md-4">
                <div class="d-flex mb-3 align-items-center">
                    <div class="icon d-flex align-items-center justify-content-center"><span class="flaticon-pistons"></span></div>
                    <div class="text">
                        <h3 class="heading mb-0 pl-3">
                            Transmission
                            <span>{{$car->transmission}}</span>
                        </h3>
                    </div>
                </div>
            </div>
            </div>      
        </div>
        <div class="col-md d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services">
            <div class="media-body py-md-4">
                <div class="d-flex mb-3 align-items-center">
                    <div class="icon d-flex align-items-center justify-content-center"><span class="flaticon-car-seat"></span></div>
                    <div class="text">
                        <h3 class="heading mb-0 pl-3">
                            Year
                            <span>{{$car->year}}</span>
                        </h3>
                    </div>
                </div>
            </div>
            </div>      
        </div>
        <div class="col-md d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services">
            <div class="media-body py-md-4">
                <div class="d-flex mb-3 align-items-center">
                    <div class="icon d-flex align-items-center justify-content-center"><span class="flaticon-backpack"></span></div>
                    <div class="text">
                        <h3 class="heading mb-0 pl-3">
                            Color
                            <span>{{$car->color}}</span>
                        </h3>
                    </div>
                </div>
            </div>
            </div>      
        </div>
        <div class="col-md d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services">
            <div class="media-body py-md-4">
                <div class="d-flex mb-3 align-items-center">
                    <div class="icon d-flex align-items-center justify-content-center"><span class="flaticon-diesel"></span></div>
                    <div class="text">
                        <h3 class="heading mb-0 pl-3">
                            Fuel
                            <span>{{$car->fuel}}</span>
                        </h3>
                    </div>
                </div>
            </div>
            </div>      
        </div>
        </div>
        <div class="row">
            <div class="col-md-12 pills">
                        <div class="bd-example bd-example-tabs">
                            <div class="d-flex justify-content-center">
                            <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">

                                <li class="nav-item">
                                <a class="nav-link active" id="pills-description-tab" data-toggle="pill" href="#pills-description" role="tab" aria-controls="pills-description" aria-expanded="true">Features</a>
                                </li>
                                <li class="nav-item">
                                <a class="nav-link" id="pills-manufacturer-tab" data-toggle="pill" href="#pills-manufacturer" role="tab" aria-controls="pills-manufacturer" aria-expanded="true">Description</a>
                                </li>
                                <li class="nav-item">
                                <a class="nav-link" id="pills-review-tab" data-toggle="pill" href="#pills-review" role="tab" aria-controls="pills-review" aria-expanded="true">Review</a>
                                </li>
                            </ul>
                            </div>

                        <div class="tab-content" id="pills-tabContent">
                            <div class="tab-pane fade show active" id="pills-description" role="tabpanel" aria-labelledby="pills-description-tab">
                                <div class="row">
                                    <div class="col-md-4">
                                        <ul class="features">
                                            <li class="{{ $car->Airconditions == 'on' ? 'check' : 'remove' }}"><span class="{{ $car->Airconditions == 'on' ? 'ion-ios-checkmark' : 'ion-ios-close' }}"></span>Airconditions</li>
                                            <li class="{{ $car->ChildSeat == 'on' ? 'check' : 'remove' }}"><span class="{{ $car->ChildSeat == 'on' ? 'ion-ios-checkmark' : 'ion-ios-close' }}"></span>Child Seat</li>
                                            <li class="{{ $car->Luggage == 'on' ? 'check' : 'remove' }}"><span class="{{ $car->Luggage == 'on' ? 'ion-ios-checkmark' : 'ion-ios-close' }}"></span>Luggage</li>
                                            <li class="{{ $car->GPS == 'on' ? 'check' : 'remove' }}"><span class="{{ $car->GPS == 'on' ? 'ion-ios-checkmark' : 'ion-ios-close' }}"></span>GPS</li>
                                            <li class="{{ $car->Music == 'on' ? 'check' : 'remove' }}"><span class="{{ $car->Music == 'on' ? 'ion-ios-checkmark' : 'ion-ios-close' }}"></span>Music</li>
                                        </ul>
                                    </div>
                                    <div class="col-md-4">
                                        <ul class="features">
                                            <li class="{{ $car->SeatBelt == 'on' ? 'check' : 'remove' }}"><span class="{{ $car->SeatBelt == 'on' ? 'ion-ios-checkmark' : 'ion-ios-close' }}"></span>Seat Belt</li>
                                            <li class="{{ $car->SleepingBed == 'on' ? 'check' : 'remove' }}"><span class="{{ $car->SleepingBed == 'on' ? 'ion-ios-checkmark' : 'ion-ios-close' }}"></span>Sleeping Bed</li>
                                            <li class="{{ $car->Water == 'on' ? 'check' : 'remove' }}"><span class="{{ $car->Water == 'on' ? 'ion-ios-checkmark' : 'ion-ios-close' }}"></span>Water</li>
                                            <li class="{{ $car->Bluetooth == 'on' ? 'check' : 'remove' }}"><span class="{{ $car->Bluetooth == 'on' ? 'ion-ios-checkmark' : 'ion-ios-close' }}"></span>Bluetooth</li>
                                            <li class="{{ $car->OnboardComputers == 'on' ? 'check' : 'remove' }}"><span class="{{ $car->OnboardComputers == 'on' ? 'ion-ios-checkmark' : 'ion-ios-close' }}"></span>Onboard computer</li>
                                        </ul>
                                    </div>
                                    <div class="col-md-4">
                                        <ul class="features">
                                            <li class="{{ $car->AudioInput == 'on' ? 'check' : 'remove' }}"><span class="{{ $car->AudioInput == 'on' ? 'ion-ios-checkmark' : 'ion-ios-close' }}"></span>Audio input</li>
                                            <li class="{{ $car->LongTermTrips == 'on' ? 'check' : 'remove' }}"><span class="{{ $car->LongTermTrips == 'on' ? 'ion-ios-checkmark' : 'ion-ios-close' }}"></span>Long Term Trips</li>
                                            <li class="{{ $car->CarKit == 'on' ? 'check' : 'remove' }}"><span class="{{ $car->CarKit == 'on' ? 'ion-ios-checkmark' : 'ion-ios-close' }}"></span>Car Kit</li>
                                            <li class="{{ $car->RemoteCentralLocking == 'on' ? 'check' : 'remove' }}"><span class="{{ $car->RemoteCentralLocking == 'on' ? 'ion-ios-checkmark' : 'ion-ios-close' }}"></span>Remote Central Locking</li>
                                            <li class="{{ $car->ClimateControl == 'on' ? 'check' : 'remove' }}"><span class="{{ $car->ClimateControl == 'on' ? 'ion-ios-checkmark' : 'ion-ios-close' }}"></span>Climate Control</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <div class="tab-pane fade" id="pills-manufacturer" role="tabpanel" aria-labelledby="pills-manufacturer-tab">
                            <p>{{$car->description}}</p>
                            </div>

                            <div class="tab-pane fade" id="pills-review" role="tabpanel" aria-labelledby="pills-review-tab">
                            <div class="row">
                                    <div class="col-md-7">
                                        <h3 class="head">23 Reviews</h3>
                                        <div class="review d-flex">
                                            <div class="user-img" style="background-image: url(home/images/person_1.jpg)"></div>
                                            <div class="desc">
                                                <h4>
                                                    <span class="text-left">Jacob Webb</span>
                                                    <span class="text-right">14 March 2018</span>
                                                </h4>
                                                <p class="star">
                                                    <span>
                                                        <i class="ion-ios-star"></i>
                                                        <i class="ion-ios-star"></i>
                                                        <i class="ion-ios-star"></i>
                                                        <i class="ion-ios-star"></i>
                                                        <i class="ion-ios-star"></i>
                                                    </span>
                                                    <span class="text-right"><a href="#" class="reply"><i class="icon-reply"></i></a></span>
                                                </p>
                                                <p>When she reached the first hills of the Italic Mountains, she had a last view back on the skyline of her hometown Bookmarksgrov</p>
                                            </div>
                                        </div>
                                        <div class="review d-flex">
                                            <div class="user-img" style="background-image: url(home/images/person_2.jpg)"></div>
                                            <div class="desc">
                                                <h4>
                                                    <span class="text-left">Jacob Webb</span>
                                                    <span class="text-right">14 March 2018</span>
                                                </h4>
                                                <p class="star">
                                                    <span>
                                                        <i class="ion-ios-star"></i>
                                                        <i class="ion-ios-star"></i>
                                                        <i class="ion-ios-star"></i>
                                                        <i class="ion-ios-star"></i>
                                                        <i class="ion-ios-star"></i>
                                                    </span>
                                                    <span class="text-right"><a href="#" class="reply"><i class="icon-reply"></i></a></span>
                                                </p>
                                                <p>When she reached the first hills of the Italic Mountains, she had a last view back on the skyline of her hometown Bookmarksgrov</p>
                                            </div>
                                        </div>
                                        <div class="review d-flex">
                                            <div class="user-img" style="background-image: url(home/images/person_3.jpg)"></div>
                                            <div class="desc">
                                                <h4>
                                                    <span class="text-left">Jacob Webb</span>
                                                    <span class="text-right">14 March 2018</span>
                                                </h4>
                                                <p class="star">
                                                    <span>
                                                        <i class="ion-ios-star"></i>
                                                        <i class="ion-ios-star"></i>
                                                        <i class="ion-ios-star"></i>
                                                        <i class="ion-ios-star"></i>
                                                        <i class="ion-ios-star"></i>
                                                    </span>
                                                    <span class="text-right"><a href="#" class="reply"><i class="icon-reply"></i></a></span>
                                                </p>
                                                <p>When she reached the first hills of the Italic Mountains, she had a last view back on the skyline of her hometown Bookmarksgrov</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-5">
                                        <div class="rating-wrap">
                                            <h3 class="head">Give a Review</h3>
                                            <div class="wrap">
                                                <p class="star">
                                                    <span>
                                                        <i class="ion-ios-star"></i>
                                                        <i class="ion-ios-star"></i>
                                                        <i class="ion-ios-star"></i>
                                                        <i class="ion-ios-star"></i>
                                                        <i class="ion-ios-star"></i>
                                                        (98%)
                                                    </span>
                                                    <span>20 Reviews</span>
                                                </p>
                                                <p class="star">
                                                    <span>
                                                        <i class="ion-ios-star"></i>
                                                        <i class="ion-ios-star"></i>
                                                        <i class="ion-ios-star"></i>
                                                        <i class="ion-ios-star"></i>
                                                        <i class="ion-ios-star"></i>
                                                        (85%)
                                                    </span>
                                                    <span>10 Reviews</span>
                                                </p>
                                                <p class="star">
                                                    <span>
                                                        <i class="ion-ios-star"></i>
                                                        <i class="ion-ios-star"></i>
                                                        <i class="ion-ios-star"></i>
                                                        <i class="ion-ios-star"></i>
                                                        <i class="ion-ios-star"></i>
                                                        (70%)
                                                    </span>
                                                    <span>5 Reviews</span>
                                                </p>
                                                <p class="star">
                                                    <span>
                                                        <i class="ion-ios-star"></i>
                                                        <i class="ion-ios-star"></i>
                                                        <i class="ion-ios-star"></i>
                                                        <i class="ion-ios-star"></i>
                                                        <i class="ion-ios-star"></i>
                                                        (10%)
                                                    </span>
                                                    <span>0 Reviews</span>
                                                </p>
                                                <p class="star">
                                                    <span>
                                                        <i class="ion-ios-star"></i>
                                                        <i class="ion-ios-star"></i>
                                                        <i class="ion-ios-star"></i>
                                                        <i class="ion-ios-star"></i>
                                                        <i class="ion-ios-star"></i>
                                                        (0%)
                                                    </span>
                                                    <span>0 Reviews</span>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        </div>
            </div>
                </div>
    </div>
</section>