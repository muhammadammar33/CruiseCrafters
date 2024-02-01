<section class="ftco-section testimony-section bg-light">
    <div class="container">
    <div class="row justify-content-center mb-5">
        <div class="col-md-7 text-center heading-section ftco-animate">
        <h2 class="mb-2">Categories</h2>
        </div>
    </div>
    
    <div class="row ftco-animate">
        <div class="col-md-12">
        <div class="carousel-testimony owl-carousel ftco-owl">
            @foreach ($data as $id=>$cat)
            <div class="item">
            <div class="testimony-wrap rounded text-center py-4 pb-5">
                <div class="user-img">
                    <img class="cat-img" src="/category_images/{{$cat->image}}" alt="Category Sample">
                </div>
                <div class="text pt-4">
                    <p class="name">{{$cat->name}}</p>
                    <p class="mb-3">{{$cat->description}}</p>
                    <p class="avail"><span class="count">{{$cat->available}}</span> {{$cat->name}}s are available</p>
                    <p><a href="{{ route('cars', $cat->name) }}" class="btn btn-primary py-2 px-3">Search Vehicle</a></p>
                {{-- <span class="position">Marketing Manager</span> --}}
                </div>
            </div>
            </div>
            @endforeach
            {{-- <div class="item">
            <div class="testimony-wrap rounded text-center py-4 pb-5">
                <div class="user-img mb-2" style="background-image: url(home/images/person_2.jpg)">
                </div>
                <div class="text pt-4">
                <p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                <p class="name">Roger Scott</p>
                <span class="position">Interface Designer</span>
                </div>
            </div>
            </div>
            <div class="item">
            <div class="testimony-wrap rounded text-center py-4 pb-5">
                <div class="user-img mb-2" style="background-image: url(home/images/person_3.jpg)">
                </div>
                <div class="text pt-4">
                <p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                <p class="name">Roger Scott</p>
                <span class="position">UI Designer</span>
                </div>
            </div>
            </div>
            <div class="item">
            <div class="testimony-wrap rounded text-center py-4 pb-5">
                <div class="user-img mb-2" style="background-image: url(home/images/person_1.jpg)">
                </div>
                <div class="text pt-4">
                <p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                <p class="name">Roger Scott</p>
                <span class="position">Web Developer</span>
                </div>
            </div>
            </div>
            <div class="item">
            <div class="testimony-wrap rounded text-center py-4 pb-5">
                <div class="user-img mb-2" style="background-image: url(home/images/person_1.jpg)">
                </div>
                <div class="text pt-4">
                <p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                <p class="name">Roger Scott</p>
                <span class="position">System Analyst</span>
                </div>
            </div>
            </div> --}}
        </div>
        </div>
    </div>
    </div>
</section>