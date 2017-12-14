@extends('layouts.hero-banner')

@section('title', 'All CPUs')

@section('custom.css')
    <link rel="stylesheet" href="{{ asset('css/custom.css') }}">
    <link rel="stylesheet" href="{{ asset('css/product-card.css') }}">
    <link rel="stylesheet" href="{{ asset('css/utilities.css') }}">
@stop

@section('header-class', 'cpu-category-header')

@section('header-title')
    <div class="text-center">
        <i class="header-icon-cpu"></i>
        <h2 class="color-white">All CPUs</h2>
    </div>
@stop

@section('content')
    <div class="container mt-20">
        <div class="row">
            <div class="col-12 col-md-12 col-sm-12 col-xs-12">
                <div id="tools">
                    <div class="row">
                        <div class="col-md-3 col-sm-3 col-xs-3">
                            <div class="text-left">
                                <span>1,960 CPUs listed</span>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-3 col-xs-6"></div>
                        <div class="col-md-3 col-sm-3 col-xs-6">
                            <select name="sort_price" id="sort_price" class="form-control">
                                <option value="" selected="selected">Sort by price</option>
                                <option value="1">Lowest price</option>
                                <option value="2">Highest price</option>
                            </select>
                        </div>
                        <div class="col-md-3 col-sm-3 col-xs-6">
                            <select name="sort_name" id="sort_name" class="form-control">
                                <option value="" selected="selected">Sort by release date</option>
                                <option value="1">Newest</option>
                                <option value="2">Oldest</option>
                            </select>
                        </div>
                    </div>
                </div>

                <div id="cpus" class="mt-20">
                    <div class="row">
                        @foreach($cpus as $cpu)
                            <div class="col-md-4">
                                <div class="product-card">
                                    <div class="photo-background">
                                        <a href="{{ action('CpuController@show', ['slug' => $cpu->slug]) }}" class="product-photo">
                                            <div class="photo" style="background-image: linear-gradient(rgba(6, 40, 56, 0.55), rgba(6, 40, 56, 0.55)), url('{{ $cpu->image_source }}');">
                                                <span class="image">
                                                    <img src="{{ $cpu->brand_image_source }}" alt="{{ $cpu->name }}" width="75px">
                                                </span>
                                                <span class="review-point">
                                                    7.4
                                                </span>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="product-name">
                                        <a href="{{ action('CpuController@show', ['slug' => $cpu->slug]) }}" class="product-title">{{ $cpu->name }}</a>
                                    </div>
                                    <div class="product-info">
                                        <p class="mb-0">{{ $cpu->core_count }} Cores</p>
                                        <p class="mb-0">{{ $cpu->tdp }} TDP</p>
                                        <P class="mb-0">{{ $cpu->frequency }} Frequency</P>
                                        <p class="mb-0">{{ $cpu->boost }} Boost</p>
                                    </div>
                                    <div class="product-card-footer">
                                        <div class="product-provider">
                                            Amazon
                                        </div>
                                        <div class="product-price">
                                            353$
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop