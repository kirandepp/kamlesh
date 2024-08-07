@extends('layouts.header')

@section('css')
    <link href="/assets/css/style.css" rel="stylesheet">
    <link href="/assets/css/plugins/fontawesome-5-1.css" rel="stylesheet"> 
    <link href="/assets/css/vendor/swiper-1.css" rel="stylesheet">
    <link href="/assets/css/vendor/animate.min-1.css" rel="stylesheet">
    <link href="/assets/css/plugins/unicons-1.css" rel="stylesheet">
    <link href="/assets/css/vendor/bootstrap.min-1.css" rel="stylesheet">
    <link href="/assets/css/style-1.css" rel="stylesheet">

    <style>
        .banner-section {
            position: relative;
            text-align: center;
            color: white;
            margin-bottom: 30px;
        }

        .banner-image {
            width: 100%;
            height: auto;
        }

        .btn-primary {
            background-color: var(--color-primary-3); 
            border: none; 
            color: white; 
            transition: background-color 0.3s ease;
            height: 30px;
            width: 100px;
        }

        .btn-primary:hover {
            background-color: var(--color-primary-3); 
            color: white; 
        }

        .banner-text {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            padding: 20px;
            border-radius: 8px;
        }

        .banner-text h1 {
            margin: 0;
            font-size: 2.5rem;
            color: white;
        }

        .banner-text p {
            margin: 0;
            font-size: 1.2rem;
        }

        .event-image {
            width: 100%;
            height: auto;
        }

        .event-details h5 {
            text-align: center;
            margin-top: 10px;
        }

        /* Responsive styles */
        @media (max-width: 768px) {
            .banner-text h1 {
                font-size: 2rem;
            }

            .banner-text p {
                font-size: 1rem;
            }

            .event-details h5 {
                font-size: 1.2rem;
                margin-left: 0;
            }
        }

        @media (max-width: 576px) {
            .event-details h5 {
                font-size: 1rem;
                margin-left: 0;
            }
        }
    </style>
@endsection

@section('body')

    <!-- Banner Section -->
    <div class="banner-section">
        <img src="{{ asset('assets/images/banner/contact-us.png') }}" alt="Banner Image" class="banner-image">
        <div class="banner-text">
            <h1>Events</h1>
        </div>
    </div>

    <div class="container section-title" data-aos="fade-up">
        <h5 style="margin-left:400px;">{{ $event->name }}</h5>
    </div> 

    <div class="container">
        <div class="row g-5 mt--10">
            @foreach($images->chunk(3) as $chunk)
                <div class="col-12">
                    <div class="row">
                        @foreach($chunk as $image)
                            @php
                                $image_url = asset(rtrim($event->base_path, '/') . '/' . $image->image_name);
                            @endphp
                            <div class="col-lg-4 col-md-6 col-sm-12">
                                <div class="inner-content">
                                    <img src="{{ $image_url }}" alt="Event Image" class="event-image">
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            @endforeach
        </div>
    </div>

    <div class="rts-service-h4 rts-section-gap">
        <div class="container">
            <div class="row g-5 mt--10">
                @foreach($events as $otherEvent)
                    @php
                        $event_images = DB::table('event_handling')
                            ->where('event_id', $otherEvent->id)
                            ->select('image_name', DB::raw('MAX(seq) as seq'))
                            ->groupBy('image_name')
                            ->orderBy('seq', 'ASC')
                            ->get();
                    @endphp

                    <div class="col-12">
                        <div class="inner-content">
                            <div class="event-details">
                                <h5>{{ $otherEvent->name ?: 'No Name Provided' }}</h5>
                            </div>
                            <div class="row">
                                @foreach($event_images->chunk(3) as $chunk)
                                    <div class="col-12">
                                        <div class="row">
                                            @foreach($chunk as $image)
                                                @php
                                                    $image_url = asset(rtrim($otherEvent->base_path, '/') . '/' . $image->image_name);
                                                @endphp
                                                <div class="col-lg-4 col-md-6 col-sm-12">
                                                    <img src="{{ $image_url }}" alt="Event Image" class="event-image">
                                                </div>
                                            @endforeach
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
        <a href="{{ route('events.index') }}" class="btn btn-primary" style="margin-left: 50px; border-radius: 5px; background-color: #FF390E; height: 50px; border: 2px solid red; padding: 10px 30px; color: white;">Back to Events</a>
    </div>
@endsection

@section('js')
    <script src="https://cdn.example.com/js/scroll-smoother.js"></script>
    <script src="/assets/js/vendor/jquery.min-1.js"></script>
    <script src="/assets/js/vendor/jquery.nav-1.js"></script>
    <script src="/assets/js/vendor/jquery-ui.min-1.js"></script>
    <script src="/assets/js/vendor/waw-1.js"></script>
    <script src="/assets/js/vendor/waypoint-1.js"></script>
    <script src="/assets/js/plugins/splittext-1.js"></script>
    <script src="/assets/js/plugins/gsap.min-1.js"></script>
    <script src="/assets/js/plugins/scrolltigger-1.js"></script>
    <script src="/assets/js/plugins/counter-up-1.js"></script>
    <script src="/assets/js/plugins/smoothscrool-1.js"></script>
    <script src="/assets/js/plugins/scroll-out-1.js"></script>
    <script src="/assets/js/plugins/marquery-1.js"></script>
    <script src="/assets/js/plugins/parallax-1.js"></script>
    <script src="/assets/js/plugins/contact-form-1.js"></script>
    <script src="/assets/js/vendor/swiper-1.js"></script>
    <script src="/assets/js/vendor/sal.min-1.js"></script>
    <script src="/assets/js/vendor/tweenmax-1.js"></script>
    <script src="/assets/js/vendor/bootstrap.min-1.js"></script>
    <script src="/assets/js/main-1.js"></script>
@endsection
