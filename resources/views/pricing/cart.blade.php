<section class="ftco-section ftco-cart">
    <div class="container">
        <div class="row">
        <div class="col-md-12 ftco-animate">
            <div class="car-list">
                <table class="table">
                    <thead class="thead-primary">
                        <tr class="text-center">
                        <th>&nbsp;</th>
                        <th>&nbsp;</th>
                        <th class="bg-primary heading">Per Hour Rate</th>
                        <th class="bg-dark heading">Per Day Rate</th>
                        <th class="bg-black heading">Leasing</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($data as $car)
                            <tr class="">
                            <td class="car-image">
                                <div class="img rounded d-flex align-items-end">
                                    <img src="/car_images/{{$car->image}}" alt="Car Image" height="100%" width="100%" style="object-fit: cover;">
                                </div>
                            </td>
                            <td class="product-name">
                                <h3>{{$car->make}} {{$car->model}}</h3>
                                <p class="mb-0 rated">
                                    <span>rated:</span>
                                    <span class="ion-ios-star"></span>
                                    <span class="ion-ios-star"></span>
                                    <span class="ion-ios-star"></span>
                                    <span class="ion-ios-star"></span>
                                    <span class="ion-ios-star"></span>
                                </p>
                            </td>
                            
                            <td class="price">
                                @if ($car->totalCars > 0)
                                    <p class="btn-custom"><a href="{{route('book', $car->id)}}">Rent a car</a></p>
                                @else
                                    <p class="btn-custom"><a href="" onclick="return confirm('No cars to book !!!!!')">Rent a car</a></p>
                                @endif

                                <div class="price-rate">
                                    <h3>
                                        <span class="num">Rs {{$car->rentalprice / 5}}</span>
                                        <span class="per">/per hour</span>
                                    </h3>
                                    <span class="subheading">Rs{{$car->rentalprice / 20}}/hour fuel surcharges</span>
                                </div>
                            </td>
                            
                            <td class="price">
                                @if ($car->totalCars > 0)
                                    <p class="btn-custom"><a href="{{route('book', $car->id)}}">Rent a car</a></p>
                                @else
                                    <p class="btn-custom"><a href="" onclick="return confirm('No cars to book !!!!!')">Rent a car</a></p>
                                @endif
                                
                                <div class="price-rate">
                                    <h3>
                                        <span class="num">Rs {{$car->rentalprice}}</span>
                                        <span class="per">/per day</span>
                                    </h3>
                                    <span class="subheading">Rs{{$car->rentalprice / 20}}/hour fuel surcharges</span>
                            </div>
                            </td>

                            <td class="price">
                                @if ($car->totalCars > 0)
                                    <p class="btn-custom"><a href="{{route('book', $car->id)}}">Rent a car</a></p>
                                @else
                                    <p class="btn-custom"><a href="" onclick="return confirm('No cars to book !!!!!')">Rent a car</a></p>
                                @endif
                                
                                <div class="price-rate">
                                    <h3>
                                        <span class="num">Rs {{$car->rentalprice * 15}}</span>
                                        <span class="per">/per month</span>
                                    </h3>
                                    <span class="subheading">Rs{{$car->rentalprice / 20}}/hour fuel surcharges</span>
                                </div>
                            </td>
                            </tr><!-- END TR-->
                        @endforeach
                    </tbody>
                    </table>
                </div>
        </div>
    </div>
    </div>
</section>