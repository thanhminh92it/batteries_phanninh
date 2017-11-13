@extends('frontend::layouts.master')
@section('title')
    Home
@endsection
@section('content')
    @include('frontend::layouts.slider')
    <div class="container">
        <div class="row">
            <div class="col-md-3 col-sm-6 text-center">
                <div class="form-group">
                    <img src="{{asset('assets/frontend/images/index1.jpg')}}">
                </div>
            </div>

            <div class="col-md-3 col-sm-6 text-center">
                <div class="form-group">
                    <img src="{{asset('assets/frontend/images/index2.jpg')}}">
                </div>
            </div>

            <div class="col-md-6 hidden-sm hidden-xs">
                <div class="widget-helper">

                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-3 col-sm-6 text-center">
                <div class="form-group">
                    <img src="{{asset('assets/frontend/images/index3.jpg')}}">
                </div>
            </div>
            <div class="col-md-3 col-sm-6 text-center">
                <div class="form-group">
                    <img src="{{asset('assets/frontend/images/index4.jpg')}}">
                </div>
            </div>
            <div class="col-md-3 col-sm-6 text-center">
                <div class="form-group">
                    <img src="{{asset('assets/frontend/images/index5.jpg')}}">
                </div>
            </div>
            <div class="col-md-3 col-sm-6 text-center">
                <div class="form-group">
                    <img src="{{asset('assets/frontend/images/index6.jpg')}}">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="home-content">
                    <div class="container-fluid">
                        <h3>Why shop at Battery Mart?</h3>
                        <p>
                            Whether you have a motorcycle, cell phone, watch, or any other battery powered device,
                            Battery Mart has the aftermarket battery you need. We offer the largest online selection and
                            the best deals on aftermarket batteries, from big 200 amp hour batteries for boats to small
                            button cell batteries you can hide in your hand. You'll find low prices on great brands like
                            Big Crank, Motocross, Renata, Battery Tender, Motobatt, PriorityStart!, Dual Pro, and so
                            many more. We make it our mission to make your shopping experience quick and easy. We offer
                            fast order shipping, no hassle returns with our 45 day guarantee, and amazing customer
                            service from our in-house battery experts which has kept us in business since 1982.
                        </p>
                        <h3>What's better than an OEM battery?</h3>
                        <p>
                            An aftermarket battery! Our selection of batteries goes above and beyond the competition.
                            Many of our most popular batteries are kept in stock at our Virginia warehouse. And if not,
                            they can be shipped directly from our manufacturers to you, brand new and factory fresh!
                            Replacement aftermarket batteries and accessories have the same performance standards as OEM
                            batteries but are significantly less expensive.
                        </p>
                        <h3>Fast Order Shipping, Friendly Service, & the Best Value in Batteries!</h3>
                        <p>We are a family owned business that's been helping customers for over 30 years. We've shipped
                            over one million orders and helped many Virginia and West Virginia residents keep their
                            vehicles on the road with factory fresh batteries. We don't just sell batteries, chargers,
                            and accessories; we work with them every day, passing that expertise on to you.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="home-categories">
                <div class="col-md-3">
                    <a href="#" class="thumbnail">
                        <img src="{{asset('assets/frontend/images/category1.jpg')}}" alt="...">
                        <h3 class="text-center">
                            Motorcycle Batteries
                        </h3>
                    </a>
                </div>
                <div class="col-md-3">
                    <a href="#" class="thumbnail">
                        <img src="{{asset('assets/frontend/images/category2.jpg')}}" alt="...">
                        <h3 class="text-center">
                            Motorcycle Batteries
                        </h3>
                    </a>
                </div>
                <div class="col-md-3">
                    <a href="#" class="thumbnail">
                        <img src="{{asset('assets/frontend/images/category3.jpg')}}" alt="...">
                        <h3 class="text-center">
                            Motorcycle Batteries
                        </h3>
                    </a>
                </div>
                <div class="col-md-3">
                    <a href="#" class="thumbnail">
                        <img src="{{asset('assets/frontend/images/category4.jpg')}}" alt="...">
                        <h3 class="text-center">
                            Motorcycle Batteries
                        </h3>
                    </a>
                </div>
                <div class="col-md-3">
                    <a href="#" class="thumbnail">
                        <img src="{{asset('assets/frontend/images/category5.jpg')}}" alt="...">
                        <h3 class="text-center">
                            Motorcycle Batteries
                        </h3>
                    </a>
                </div>
                <div class="col-md-3">
                    <a href="#" class="thumbnail">
                        <img src="{{asset('assets/frontend/images/category6.jpg')}}" alt="...">
                        <h3 class="text-center">
                            Motorcycle Batteries
                        </h3>
                    </a>
                </div>
                <div class="col-md-3">
                    <a href="#" class="thumbnail">
                        <img src="{{asset('assets/frontend/images/category7.jpg')}}" alt="...">
                        <h3 class="text-center">
                            Motorcycle Batteries
                        </h3>
                    </a>
                </div>
                <div class="col-md-3">
                    <a href="#" class="thumbnail">
                        <img src="{{asset('assets/frontend/images/category8.jpg')}}" alt="...">
                        <h3 class="text-center">
                            Motorcycle Batteries
                        </h3>
                    </a>
                </div>
                <div class="col-md-3">
                    <a href="#" class="thumbnail">
                        <img src="{{asset('assets/frontend/images/category9.jpg')}}" alt="...">
                        <h3 class="text-center">
                            Motorcycle Batteries
                        </h3>
                    </a>
                </div>
                <div class="col-md-3">
                    <a href="#" class="thumbnail">
                        <img src="{{asset('assets/frontend/images/category10.jpg')}}" alt="...">
                        <h3 class="text-center">
                            Motorcycle Batteries
                        </h3>
                    </a>
                </div>
                <div class="col-md-3">
                    <a href="#" class="thumbnail">
                        <img src="{{asset('assets/frontend/images/category11.jpg')}}" alt="...">
                        <h3 class="text-center">
                            Motorcycle Batteries
                        </h3>
                    </a>
                </div>
                <div class="col-md-3">
                    <a href="#" class="thumbnail">
                        <img src="{{asset('assets/frontend/images/category12.jpg')}}" alt="...">
                        <h3 class="text-center">
                            Motorcycle Batteries
                        </h3>
                    </a>
                </div>
                <div class="col-md-3">
                    <a href="#" class="thumbnail">
                        <img src="{{asset('assets/frontend/images/category13.jpg')}}" alt="...">
                        <h3 class="text-center">
                            Motorcycle Batteries
                        </h3>
                    </a>
                </div>
                <div class="col-md-3">
                    <a href="#" class="thumbnail">
                        <img src="{{asset('assets/frontend/images/category14.jpg')}}" alt="...">
                        <h3 class="text-center">
                            Motorcycle Batteries
                        </h3>
                    </a>
                </div>
                <div class="col-md-3">
                    <a href="#" class="thumbnail">
                        <img src="{{asset('assets/frontend/images/category15.jpg')}}" alt="...">
                        <h3 class="text-center">
                            Motorcycle Batteries
                        </h3>
                    </a>
                </div>
                <div class="col-md-3">
                    <a href="#" class="thumbnail">
                        <img src="{{asset('assets/frontend/images/category16.jpg')}}" alt="...">
                        <h3 class="text-center">
                            Motorcycle Batteries
                        </h3>
                    </a>
                </div>
            </div>
        </div>
    </div>
@endsection
