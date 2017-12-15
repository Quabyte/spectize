@extends('layouts.single-product')

@section('title')
    {{ $gpu->name }}
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
            <div class="cover-photo-container purple-container">
                <div class="product-overview">
                    <div class="product-title">
                        <img src="{{ $gpu->image_source }}" alt="{{ $gpu->name }}">
                        <h1>{{ $gpu->name }}</h1>
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
                            <div class="product-nav-item text-center">
                                <span>
                                    <i class="ti-search"></i> overview
                                </span>
                            </div>
                            <div class="product-nav-item text-center">
                                <span class="disabled">
                                    <i class="ti-pulse"></i> benchmarks
                                </span>
                            </div>
                            <div class="product-nav-item text-center">
                                <span>
                                    <i class="ti-panel"></i> specs
                                </span>
                            </div>
                            <div class="product-nav-item text-center">
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
                                        <button class="buy-button-options-button purple-button">
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
                <div class="product-content">
                    <!-- Overview -->
                    <div id="overview">
                        <h2 class="title">Overview</h2>
                        <div class="row">
                            <div class="col-md-3 text-center">
                                <div class="overview-card">
                                    <p class="mb-0 fs-20px fw-600">{{ $gpu->graphics_processor }}</p>
                                    <small>Graphics Processor</small>
                                </div>
                            </div>
                            <div class="col-md-3 text-center">
                                <div class="overview-card">
                                    <p class="mb-0 fs-20px fw-600">{{ $gpu->cores }}</p>
                                    <small>Cores</small>
                                </div>
                            </div>
                            <div class="col-md-3 text-center">
                                <div class="overview-card">
                                    <p class="mb-0 fs-20px fw-600">{{ $gpu->tmus }}</p>
                                    <small>TMUS</small>
                                </div>
                            </div>
                            <div class="col-md-3 text-center">
                                <div class="overview-card">
                                    <p class="mb-0 fs-20px fw-600">{{ $gpu->rops }}</p>
                                    <small>ROPS</small>
                                </div>
                            </div>
                        </div>
                        <div class="row mt-25">
                            <div class="col-md-3 text-center">
                                <div class="overview-card">
                                    <p class="mb-0 fs-20px fw-600">{{ $gpu->memory_size }}</p>
                                    <small>Memory Size</small>
                                </div>
                            </div>
                            <div class="col-md-3 text-center">
                                <div class="overview-card">
                                    <p class="mb-0 fs-20px fw-600">{{ $gpu->memory_type }}</p>
                                    <small>Memory Type</small>
                                </div>
                            </div>
                            <div class="col-md-3 text-center">
                                <div class="overview-card">
                                    <p class="mb-0 fs-20px fw-600">{{ $gpu->memory_bus }}</p>
                                    <small>Memory Bus</small>
                                </div>
                            </div>
                            <div class="col-md-3 text-center">
                                <div class="overview-card">
                                    <p class="mb-0 fs-20px fw-600">{{ $gpu->bus_width }}</p>
                                    <small>Bus Width</small>
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
                                <th colspan="2" class="text-center no-border bg-snow-white">Graphics Processor</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>GPU Name</td>
                                <td>{{ $gpu->name }}</td>
                            </tr>
                            <tr>
                                <td>GPU Variant</td>
                                <td>{{ $gpu->gpu_variant }}</td>
                            </tr>
                            <tr>
                                <td>Architecture</td>
                                <td>{{ $gpu->architecture }}</td>
                            </tr>
                            <tr>
                                <td>Process Size</td>
                                <td>{{ $gpu->process_size }}</td>
                            </tr>
                            <tr>
                                <td>Transistors</td>
                                <td>{{ $gpu->transistors }}</td>
                            </tr>
                            <tr>
                                <td>Die Size</td>
                                <td>{{ $gpu->die_size }}</td>
                            </tr>
                            </tbody>
                        </table>

                        <table class="table specs-table">
                            <thead>
                            <tr>
                                <th colspan="2" class="text-center no-border bg-snow-white">Graphics Card</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>Released</td>
                                <td>{{ $gpu->released }}</td>
                            </tr>
                            <tr>
                                <td>Production Status</td>
                                <td>{{ $gpu->production_status }}</td>
                            </tr>
                            <tr>
                                <td>Bus Interface</td>
                                <td>{{ $gpu->bus_interface }}</td>
                            </tr>
                            </tbody>
                        </table>

                        <table class="table specs-table">
                            <thead>
                            <tr>
                                <th colspan="2" class="text-center no-border bg-snow-white">Clock Speeds</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>GPU Clock</td>
                                <td>{{ $gpu->gpu_clock }}</td>
                            </tr>
                            <tr>
                                <td>Boost Clock</td>
                                <td>{{ $gpu->boost_clock }}</td>
                            </tr>
                            <tr>
                                <td>Memory Clock</td>
                                <td>
                                    @foreach($memoryClock as $memory_clock)
                                        <p class="mb-0">{{ $memory_clock['text'] }}</p>
                                    @endforeach
                                </td>
                            </tr>
                            </tbody>
                        </table>

                        <table class="table specs-table">
                            <thead>
                            <tr>
                                <th colspan="2" class="text-center no-border bg-snow-white">Memory</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>Memory Size</td>
                                <td>{{ $gpu->memory_size }}</td>
                            </tr>
                            <tr>
                                <td>Memory Type</td>
                                <td>{{ $gpu->memory_type }}</td>
                            </tr>
                            <tr>
                                <td>Memory Bus</td>
                                <td>{{ $gpu->memory_bus }}</td>
                            </tr>
                            <tr>
                                <td>Bandwidth</td>
                                <td>{{ $gpu->bandwidth }}</td>
                            </tr>
                            </tbody>
                        </table>

                        <table class="table specs-table">
                            <thead>
                            <tr>
                                <th colspan="2" class="text-center no-border bg-snow-white">Graphics Features</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>DirectX</td>
                                <td>{{ $gpu->direct_x }}</td>
                            </tr>
                            <tr>
                                <td>OpenGL</td>
                                <td>{{ $gpu->openGL }}</td>
                            </tr>
                            <tr>
                                <td>OpenCL</td>
                                <td>{{ $gpu->openCL }}</td>
                            </tr>
                            <tr>
                                <td>Shader Model</td>
                                <td>{{ $gpu->shader_model }}</td>
                            </tr>
                            </tbody>
                        </table>

                        <table class="table specs-table">
                            <thead>
                            <tr>
                                <th colspan="2" class="text-center no-border bg-snow-white">Render Config</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>Shading Units</td>
                                <td>{{ $gpu->shading_units }}</td>
                            </tr>
                            <tr>
                                <td>TMUs</td>
                                <td>{{ $gpu->tmus }}</td>
                            </tr>
                            <tr>
                                <td>ROPs</td>
                                <td>{{ $gpu->rops }}</td>
                            </tr>
                            <tr>
                                <td>Compute Units</td>
                                <td>{{ $gpu->compute_units }}</td>
                            </tr>
                            <tr>
                                <td>Pixel Rate</td>
                                <td>{{ $gpu->pixel_rate }}</td>
                            </tr>
                            <tr>
                                <td>Texture Rate</td>
                                <td>{{ $gpu->texture_rate }}</td>
                            </tr>
                            <tr>
                                <td>Floating Point Performance</td>
                                <td>
                                    @foreach($fpp as $fpp_item)
                                        <p class="mb-0">{{ $fpp_item['text'] }}</p>
                                    @endforeach
                                </td>
                            </tr>
                            </tbody>
                        </table>

                        <table class="table specs-table">
                            <thead>
                            <tr>
                                <th colspan="2" class="text-center no-border bg-snow-white">Board Design</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>Slot Width</td>
                                <td>{{ $gpu->slot_width }}</td>
                            </tr>
                            <tr>
                                <td>TDP</td>
                                <td>{{ $gpu->tdp }}</td>
                            </tr>
                            <tr>
                                <td>Outputs</td>
                                <td>{{ $gpu->outputs }}</td>
                            </tr>
                            <tr>
                                <td>Power Connectors</td>
                                <td>{{ $gpu->power_connectors }}</td>
                            </tr>
                            <tr>
                                <td>Board Number</td>
                                <td>{{ $gpu->board_number }}</td>
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
