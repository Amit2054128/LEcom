@extends('Frontend.app')
@section('frontend')
    <section>
        <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                @foreach ($carousel as $carousels)
                    <div class="carousel-item active">
                        <img src="{{ asset($carousels->carousel_image) }}" c class="d-block w-100" alt="...">
                    </div>
                @endforeach
                {{-- <div class="carousel-item active">
        <img src="..." class="d-block w-100" alt="...">
      </div> --}}
                {{-- <div class="carousel-item">
        <img src="..." class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item">
        <img src="..." class="d-block w-100" alt="...">
      </div> --}}
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </section>



    {{-- CATEGORY SECTION START --}}

    <section class=" my-3 bg-light">
        <div class="container">
            <div class="d-flex justify-content-center">
                <h2>Categories</h2>
            </div>

            <div>
                <div class="row my-4">
                    @foreach ($category as $categories)
                        <div class="col-md-3">
                            <div class="card shadow" style="width: 18rem;">
                                <img src="{{ asset($categories->category_image) }}" height="200px" class="card-img-top"
                                    alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">{{ $categories->category_name }}</h5>
                                    {{-- <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p> --}}
                                    <a href="#" class="btn btn-primary">View Products</a>
                                </div>
                            </div>

                        </div>
                    @endforeach






                </div>




            </div>

        </div>




    </section>
    {{-- CATEGORY SECTION END --}}

    {{-- NEW PRODUCT --}}

    <section class="my-5">
        <div class="container">
            <div class="d-flex justify-content-center">
                <h2>New Products</h2>
            </div>

            <div class="my-4">
                <div class="row">
                    @foreach ($product as $products )

                    <div class="col-md-3">
                        <div class="card shadow" style="width: 18rem;">
                            <img src="{{asset($products->product_image)}}" height="200px" style="object-fit: contain" class="card-img-top py-2" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">{{$products->product_name}}</h5>

                                <div>
                                    <div class="d-flex justify-content-between">
                                        <div>
                                            <del>
                                                Rs.{{$products->price}}
                                            </del>
                                        </div>
                                        <div class="text-danger">
                                            {{$products->discount}} %
                                        </div>

                                    </div>
                                    <div>
                                        Rs.{{$products->selling_price}}
                                    </div>

                                </div>
                                {{-- <p class="card-text">Some quick example text to build on the card title and make up the bulk of
                                    the card's content.</p> --}}
                                <a href="#" class="btn btn-primary">Add to cart</a>
                            </div>
                        </div>
                    </div>
                    @endforeach



                </div>


            </div>

        </div>
    </section>

    {{-- FEATURED PRODUCT --}}
    <section class="my-5">
        <div class="container">
            <div class="d-flex justify-content-center">
                <h2>Featured Products</h2>
            </div>

            <div>
                <div class="col-md-3">
                    <div class="card shadow py-2" style="width: 18rem;">
                        <img src="..."
                           class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>


                            <a href="#" class="btn btn-primary mx-auto">Go somewhere</a>
                        </div>
                    </div>
                    <div class="card shadow py-2" style="width: 18rem;">
                        <img src="..."
                           class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>


                            <a href="#" class="btn btn-primary mx-auto">Go somewhere</a>
                        </div>
                    </div>


                </div>

            </div>

        </div>
    </section>


    {{-- OUR SERVICE SECTION START --}}
    <section>
        <div class="container">
            <div class="my-5 d-flex justify-content-center">
                <h2>Our Service</h2>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <img src="https://www.thedigitalsalesinstitute.com/wp-content/uploads/2018/09/what-is-selling-definition.jpeg"
                        height="300px" alt="">
                </div>
                <div class="col-md-6">
                    <h2>Selling products</h2>
                    <div>
                        What is selling and the definition of selling is a question is a valid question often asked by newer
                        people to the profession. Selling involves many different activities and actions which depend on the
                        customers situation and where in the sales journey you are at.
                        What is selling and the definition of selling is a question is a valid question often asked by newer
                        people to the profession. Selling involves many different activities and actions which depend on the
                        customers situation and where in the sales journey you are at.

                    </div>
                </div>

                <div class="col-md-6">

                    <div class="my-3">
                        <h2>Courier Service</h2>
                        Namaste Cargo Nepal Pvt. Ltd. is one of the most famous and leading courier companies in Nepal,
                        located in Kathmandu, the capital city of Nepal. Our company is well known for its superior speed
                        and tracking capabilities for courier service worldwide. Courier service is one of the services
                        particularly useful for selling products online, which needs a particular shipping solution to
                        deliver several products. Namaste Cargo Nepal Pvt. Ltd will help you enlarge their commercial
                        business through dedicated courier services for the deliveries. We have both national and
                        international courier shipping services in Nepal. Namaste Cargo Nepal Pvt. Ltd is one of the most
                        dedicated and economical courier service providers in Nepal.
                    </div>
                </div>

                <div class="col-md-6 my-3">
                    <img src="https://www.namastecargonepal.com/storage/posts/eqxsZna1UyMkP1LYxCEZZLa3WpaPcMlGOSJucLjE.jpg"
                        height="300px" alt="">


                </div>


            </div>

        </div>

    </section>
    {{-- OUR SERVICE SECTION END --}}
@endsection
