@extends('frontend::layouts.master')
@section('title')
    test
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
    </div>
@endsection
