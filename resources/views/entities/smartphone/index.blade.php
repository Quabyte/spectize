@extends('layouts.hero-banner')

@section('title', 'All CPUs')

@section('custom.css')
    <link rel="stylesheet" href="{{ asset('css/custom.css') }}">
@stop

@section('header-class', 'smartphone-category-header')

@section('header-title')
    <div class="text-center">
        <i class="header-icon-smartphone"></i>
        <h2 class="color-white">All Smartphones</h2>
    </div>
@stop

@section('content')
    <div class="container mt-20">
        <div class="row">
            <aside class="col-3 col-md-3 col-sm-12 col-xs-12">
                <div class="filters">
                    <h5>FILTERS</h5>
                    <div class="filter-block">
                        <h6>Manufacturer</h6>
                    </div>
                    <hr>
                    <div class="filter-block">
                        <h6>Classification</h6>
                    </div>
                    <hr>
                    <div class="filter-block">
                        <h6>Released</h6>
                    </div>
                    <hr>
                    <div class="filter-block">
                        <h6>Series</h6>
                    </div>
                    <hr>
                    <div class="filter-block">
                        <h6>CPU Cores</h6>
                    </div>
                    <hr>
                    <div class="filter-block">
                        <h6>Process Size</h6>
                    </div>
                    <hr>
                    <div class="filter-block">
                        <h6>Socket</h6>
                    </div>
                    <hr>
                    <div class="filter-block">
                        <h6>Codename</h6>
                    </div>
                    <hr>
                    <div class="filter-block">
                        <h6>Multiplier</h6>
                    </div>
                </div>
            </aside>
            <div class="col-9 col-md-9 col-sm-12 col-xs-12">
                <div id="tools">
                    <div class="row">
                        <div class="col-md-3 col-sm-3 col-xs-3">
                            <div class="text-center">
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
            </div>
        </div>
    </div>
@stop