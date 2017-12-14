@extends('layouts.single-product')

@section('title')
    {{ $cpu->name }}
@stop

@section('custom.css')
    <link rel="stylesheet" href="{{ asset('css/froala_blocks.css') }}">
    <link rel="stylesheet" href="{{ asset('css/single-product.css') }}">
    <link rel="stylesheet" href="{{ asset('css/utilities.css') }}">
@stop

@section('custom.fonts')
    <link rel="stylesheet" href="{{ asset('fonts/tech-icons/tech-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('fonts/themify/themify.min.css') }}">
@stop

@section('content')
    <section class="product-detail">
        @include('frontend.partials.navbar-dark')

        <!-- Product Overview -->
        <header class="cover-photo">
            <div class="cover-photo-container red-container">
                <div class="product-overview red-overview">
                    <div class="product-title">
                        <img src="{{ $cpu->brand_image_source }}" alt="{{ $cpu->name }}">
                        <h1>{{ $cpu->name }}</h1>
                    </div>
                    <div class="product-score">
                        <div class="score">7.4</div>
                        <span class="score-metric">Out of 10</span>
                        <span>SPECTIZE POINT</span>
                    </div>
                </div>
            </div>
        </header>
        <!-- End Product Overview -->

        <!-- Buying Options -->
        <div class="buying-options">

        </div>
        <!-- End Buying Options -->

        <!-- Content Start -->
        <div class="product-sticky-container">
            <div id="review-menu">
                <div class="product-sticky-header">
                    <div class="product-sticky-header-nav">

                        <!-- Sticky Nav Start -->
                        <div class="product-nav">
                            <div class="product-nav-item">
                                <span>
                                    <i class="ti-search"></i> overview
                                </span>
                            </div>
                            <div class="product-nav-item">
                                <span class="disabled">
                                    <i class="ti-pulse"></i> benchmarks
                                </span>
                            </div>
                            <div class="product-nav-item">
                                <span>
                                    <i class="ti-panel"></i> specs
                                </span>
                            </div>
                            <div class="product-nav-item">
                                <span class="disabled">
                                    <i class="ti-control-shuffle"></i> alternatives
                                </span>
                            </div>
                        </div>
                        <!-- Sticky Nav End -->

                        <!-- Buy Button Start -->
                        <div class="buy-button">
                            <div>
                                <div class="buy-button-container">
                                    <div class="buy-button-price">
                                        <div class="buy-button-price-label">
                                            <span>Price</span>
                                        </div>
                                        <div class="buy-button-price-amount">
                                            <span>365$</span>
                                        </div>
                                    </div>
                                    <div class="buy-button-options">
                                        <div class="buy-button-details-container"></div>
                                        <button class="buy-button-options-button red-button">
                                            <span>See All Prices</span>
                                        </button>
                                    </div>
                                    <div class="buy-button-social">
                                        <div class="buy-button-share">
                                            <div class="buy-button-share-label">
                                                <span>Share</span>
                                            </div>
                                            <div class="buy-button-share-icons">
                                                <div class="buy-button-share-facebook">
                                                    <i class="ti-facebook"></i>
                                                </div>
                                                <div class="buy-button-share-twitter">
                                                    <i class="ti-twitter-alt"></i>
                                                </div>
                                                <div class="buy-button-share-googleplus">
                                                    <i class="ti-google"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Buy Button End -->
                    </div>
                </div>
            </div>
            <div class="product-container">
                <div class="product-content pt-20">
                    <!-- Overview -->
                    <div id="overview">
                        <h2 class="title">Overview</h2>
                        <div class="row">
                            <div class="col-md-3 text-center">
                                <div class="overview-card">
                                    <p class="mb-0 fs-28px">{{ $cpu->core_count }}</p>
                                    <small>Cores</small>
                                </div>
                            </div>
                            <div class="col-md-3 text-center">
                                <div class="overview-card">
                                    <p class="mb-0 fs-28px">{{ $cpu->tdp }}</p>
                                    <small>TDP</small>
                                </div>
                            </div>
                            <div class="col-md-3 text-center">
                                <div class="overview-card">
                                    <p class="mb-0 fs-28px">{{ $cpu->frequency }}</p>
                                    <small>Frequency</small>
                                </div>
                            </div>
                            <div class="col-md-3 text-center">
                                <div class="overview-card">
                                    <p class="mb-0 fs-28px">{{ $cpu->boost }}</p>
                                    <small>Boost</small>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Overview -->

                    <!-- Benchmarks -->
                    <div id="benchmarks">
                        <h2 class="title disabled">Benchmarks (Coming Soon)</h2>
                    </div>
                    <!-- End Benchmarks -->

                    <!-- Specs -->
                    <div id="specs">
                        <h2 class="title">Specifications</h2>
                        <table class="table specs-table">
                            <thead>
                            <tr>
                                <th colspan="2" class="text-center no-border bg-snow-white">Physical</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>Socket</td>
                                <td>{{ $cpu->socket }}</td>
                            </tr>
                            <tr>
                                <td>Process Size</td>
                                <td>{{ $cpu->process_size }}</td>
                            </tr>
                            <tr>
                                <td>Transistors</td>
                                <td>{{ $cpu->transistors }}</td>
                            </tr>
                            <tr>
                                <td>Die Size</td>
                                <td>{{ $cpu->die_size }}</td>
                            </tr>
                            <tr>
                                <td>Package</td>
                                <td>{{ $cpu->package }}</td>
                            </tr>
                            <tr>
                                <td>tCaseMax</td>
                                <td>{{ $cpu->tCaseMax }}</td>
                            </tr>
                            </tbody>
                        </table>

                        <table class="table specs-table">
                            <thead>
                            <tr>
                                <th colspan="2" class="text-center no-border bg-snow-white">Performance</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>Frequency</td>
                                <td>{{ $cpu->frequency }}</td>
                            </tr>
                            <tr>
                                <td>Turbo Clock</td>
                                <td>{{ $cpu->turbo_clock }}</td>
                            </tr>
                            <tr>
                                <td>Base Clock</td>
                                <td>{{ $cpu->base_clock }}</td>
                            </tr>
                            <tr>
                                <td>Multiplier</td>
                                <td>{{ $cpu->multiplier }}</td>
                            </tr>
                            <tr>
                                <td>Voltage</td>
                                <td>{{ $cpu->voltage }}</td>
                            </tr>
                            <tr>
                                <td>TDP</td>
                                <td>{{ $cpu->tdp }}</td>
                            </tr>
                            </tbody>
                        </table>
                        <table class="table specs-table">
                            <thead>
                            <tr>
                                <th colspan="2" class="text-center no-border bg-snow-white">Architecture</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>Market</td>
                                <td>{{ $cpu->market }}</td>
                            </tr>
                            <tr>
                                <td>Production Status</td>
                                <td>{{ $cpu->production_status }}</td>
                            </tr>
                            <tr>
                                <td>Released</td>
                                <td>{{ $cpu->released }}</td>
                            </tr>
                            <tr>
                                <td>Codename</td>
                                <td>{{ $cpu->codename }}</td>
                            </tr>
                            <tr>
                                <td>Memory Support</td>
                                <td>{{ $cpu->memory_support }}</td>
                            </tr>
                            </tbody>
                        </table>

                        <table class="table specs-table">
                            <thead>
                            <tr>
                                <th colspan="2" class="text-center no-border bg-snow-white">Cores</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td># of Cores</td>
                                <td>{{ $cpu->core_count }}</td>
                            </tr>
                            <tr>
                                <td># of Threads</td>
                                <td>{{ $cpu->thread_count }}</td>
                            </tr>
                            <tr>
                                <td>SMP # CPUs</td>
                                <td>{{ $cpu->SMP_count_of_cpus }}</td>
                            </tr>
                            <tr>
                                <td>Integrated Graphics</td>
                                <td>{{ $cpu->integrated_graphics }}</td>
                            </tr>
                            </tbody>
                        </table>

                        <table class="table specs-table">
                            <thead>
                            <tr>
                                <th colspan="2" class="text-center no-border bg-snow-white">Cache</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>Cache L1</td>
                                <td>{{ $cpu->cache_l1 }}</td>
                            </tr>
                            <tr>
                                <td>Cache L2</td>
                                <td>{{ $cpu->cache_l2 }}</td>
                            </tr>
                            <tr>
                                <td>Cache L3</td>
                                <td>{{ $cpu->cache_l3 }}</td>
                            </tr>
                            </tbody>
                        </table>

                        <table class="table specs-table">
                            <thead>
                            <tr>
                                <th colspan="1" class="text-center no-border bg-snow-white">Features</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>
                                    <div class="row">
                                        @foreach($features as $feature)
                                            <div class="col-md-6 text-center">
                                                {{ $feature }}
                                            </div>
                                        @endforeach
                                    </div>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                    <!-- End Specs -->

                    <!-- Alternatives -->
                    <div id="alternatives">
                        <h2 class="title disabled">Alternatives (Coming Soon)</h2>
                    </div>
                    <!-- End Alternatives -->
                </div>
            </div>
        </div>
        <!-- Content  End -->
    </section>
@stop

@section('footer.scripts')
    <script src="{{ asset('js/sticky.js') }}"></script>
@stop
