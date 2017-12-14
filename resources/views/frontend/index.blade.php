@extends('layouts.homepage')

@section('title', 'HomePage')

@section('custom.css')
    <link rel="stylesheet" href="{{ asset('css/froala_blocks.css') }}">
    <link rel="stylesheet" href="{{ asset('css/homepage.css') }}">
    <link rel="stylesheet" href="{{ asset('css/custom.css') }}">
@stop

@section('content')
    <section class="fdb-block">
        <div class="container">
            <div class="row text-center">
                <div class="col-12">
                    <h1>Categories</h1>
                </div>
            </div>

            <div class="row text-center justify-content-center mt-5">
                <div class="col-10 col-sm-3">
                    <i class="category-icon-cpu color-red"></i>
                    <h3><strong>CPUs</strong></h3>
                    <ul class="nav flex-column">
                        <li class="nav-item">
                            <a class="nav-link color-dark-grey" href="#">Best CPUs</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link color-dark-grey" href="{{ action('CpuController@index') }}">All CPUs</a>
                        </li>
                    </ul>
                </div>
                <div class="col-10 col-sm-3 pt-5 pt-sm-0">
                    <i class="category-icon-gpu color-purple"></i>
                    <h3><strong>GPUs</strong></h3>
                    <ul class="nav flex-column">
                        <li class="nav-item">
                            <a class="nav-link color-dark-grey" href="#">Best GPUs</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link color-dark-grey" href="{{ action('GpuController@index') }}">All GPUs</a>
                        </li>
                    </ul>
                </div>

                <div class="col-10 col-sm-3 pt-5 pt-sm-0">
                    <i class="category-icon-laptop color-blue"></i>
                    <h3><strong>Laptops</strong></h3>
                    <ul class="nav flex-column">
                        <li class="nav-item">
                            <a class="nav-link color-dark-grey disabled" href="javascript:void()">Coming Soon</a>
                        </li>
                    </ul>
                </div>

                <div class="col-10 col-sm-3 pt-5 pt-sm-0">
                    <i class="category-icon-smartphone color-teal"></i>
                    <h3><strong>Smartphones</strong></h3>
                    <ul class="nav flex-column">
                        <li class="nav-item">
                            <a class="nav-link color-dark-grey disabled" href="javascript:void()">Best Smartphones</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    @include('frontend.partials.footer')
@stop
