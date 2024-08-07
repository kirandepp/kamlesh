@extends('layouts.header')

@section('css')
<style>
        .section {
            display: none; /* Hide all sections by default */
        }
        .active {
            display: block; /* Show the active section */
        }
        .button {
            padding: 10px 20px;
            cursor: pointer;
            margin: 5px;
        }
        .button.active {
            background-color: #007BFF;
            color: black;
        }
      
.event-image {
    width: 100%;
    height: auto; /* Maintain aspect ratio */
    max-width: 400px; /* Set max width */
    max-height: 600px; /* Set max height */
    object-fit: cover; /* Crop the image if needed */
    margin-bottom: 15px; /* Space between images and text */
}

/* Adjust layout to ensure event details appear above images */
.inner-content {
    display: flex;
    flex-direction: column;
    align-items: center;
    margin-bottom: 30px; 
}

.event-details {
    text-align: center; /* Center the event name text */
    margin-bottom: 15px; /* Space between event name and images */
}

/* Display images in a row with proper spacing */
.row {
    justify-content: center; /* Center the images in the row */
}

.col-lg-4, .col-md-6, .col-sm-12 {
    display: flex;
    justify-content: center; /* Center images within their columns */
}
.btn-primary {
    color: black;
    background-color: #FF390E;
    border-color: #FF390E;
    display: block;
            text-align: center;
            margin: 20px auto;
            padding: 10px 20px;
}

.btn-primary:hover {
    color: #fff;
   
}
element.style {
    background-color: #FF390E;
    height: 50px;
    width: 10px;
    color: white;
}

</style>
@endsection

@section('body')
    <!-- menu style two -->
    <div id="side-bar" class="side-bar mazin-home">
        <button class="close-icon-menu">
            <svg xmlns="http://www.w3.org/2000/svg" width="37" height="40" viewbox="0 0 37 40" fill="none">
                <path d="M1.34412 39.4243L35.9024 0.918108" stroke="black"></path>
                <path d="M35.9023 39.4243L1.3441 0.918108" stroke="black"></path>
            </svg>
        </button>
        <!-- inner menu area desktop start -->
        <div class="rts-sidebar-menu-desktop">
            <!-- <a class="logo-1" href="index.html"><img class="logo" src="assets/images/logo/mazin-01.svg" alt="axela_logo"></a> -->
            <div class="inner-wrapper">
                <div class="body-mobile">
                    <nav class="nav-main mainmenu-nav mt--30">
                        <ul class="mainmenu" id="mobile-menu-active">
                            <li class="one">
                                <a href="#home">Home</a>
                            </li>
                            <li class="two">
                                <a href="#about">About Us</a>
                            </li>
                            <li class="three">
                                <a href="#workarea">Work Area</a>
                            </li>
                          <li class="four">
                                <a href="#test">Testimonials</a>
                            </li>
                            <li class="five">
                                <a href="#blog">Blog</a>
                            </li>
                            <li class="six">
                                <a href="#contact">Contact Us</a>
                            </li>
                        </ul>
                    </nav>
                </div>
                <div class="contact-info-area-wrapper">
                    <div class="phone single">
                        <h6 class="title">
                            PHONE:
                        </h6>
                        <a href="#">+919810298704</a>
                    </div>
                    <div class="address single">
                        <h6 class="title">
                            ADDRESS:
                        </h6>
                        <a href="#">1662/2, Gali No.17,Govind Puri, Kalkaji,New Delhi-110019</a>
                    </div>
                    <div class="mail single">
                        <h6 class="title">
                            E-mail:
                        </h6>
                        <a href="#">raghukamlesh@gmail.com</a>
                    </div>
                    <div class="follow single">
                        <h6 class="title">
                            FOLLOW US:
                        </h6>
                        <div class="social-wrapper-two">
                            <ul class="social-area">
                                <li data-sal-delay="150" data-sal="slide-up" data-sal-duration="800" class="sal-animate"><a href="https://www.facebook.com/kamlesh.raghuwanshi.98?mibextid=ZbWKwL"><i class="fab fa-facebook-f"></i></a></li>
                                <li data-sal-delay="250" data-sal="slide-up" data-sal-duration="800" class="sal-animate"><a href="https://x.com/raghukamlesh?t=JHKZiaP5QNgvn3GmbLqZkQ&s=08"><i class="fab fa-twitter"></i></a></li>
                                <li data-sal-delay="350" data-sal="slide-up" data-sal-duration="800" class="sal-animate"><a href="https://www.linkedin.com/in/dr-kamlesh-kumar-raghuvanshi-10355222?utm_source=share&utm_campaign=share_via&utm_content=profile&utm_medium=android_app"><i class="fab fa-linkedin-in"></i></a></li>
                                <li data-sal-delay="450" data-sal="slide-up" data-sal-duration="800" class="sal-animate"><a href="#"><i class="fab fa-skype"></i></a></li>
                            </ul>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <!-- inner menu area desktop End -->
    </div>
    <!-- menu style two End -->

    <!-- rts banner threea area start -->
    <div class="rts-banner-area-start banner-three-main rts-section-gapTop" id="home">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="banner-three-wrapper">
                        <div class="left-area">
                            <h1 class="title quote">
                            Meet Kamlesh, 
                               Who<br> Cares About <span>Everyone</span>
                            </h1>
                            <div class="content">
                                <p class="disc">
                                "Welcome to my personal website, where my journey unfolds as a Politician, Leader, Social Worker, Entrepreneur, Professor, and Mentor. Discover how each role shapes my commitment to serving and inspiring others."                                </p>
                                <div class="rts-button-area text-anim">
                                    <a href="#workarea" class="rts-btn btn-main-3 smooth-scroll-1">
                                        My Work Areas
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="right-area">
                            <img src="assets/images/banner/politician-1.jpg" alt="banner-area">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="shape-image-banner-three">
            <img src="assets/images/banner/shape/05-1.png" alt="shape-image">
        </div>
    </div>
    <!-- rts banner threea area end -->

    <!-- marquery -->
    <div class="marque-text-area">
        <div class="marquee_text">
            <div>
                <div class="js-marquee" style="margin-right: 50px; float: left;">Politician Leader Social Worker Entrepreneur Professor  Mentor</div>
                <div class="js-marquee" style="margin-right: 50px; float: left;">Politician Leader Social Worker Entrepreneur Professor  Mentor</div>
            </div>
        </div>
    </div>
    <!-- marquery end -->

    <!-- cv area downlaod -->
    <div class="rts-download-cv-area pt--60">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="download-area-inner">
                        <div class="socials">
                            <p class="disc">
                                Follow Me
                            </p>
                            <div class="social-area-wrapper">
                                <ul>
                                    <li>
                                        <a href="https://www.facebook.com/kamlesh.raghuwanshi.98?mibextid=ZbWKwL" target="_blank"><i class="fab fa-facebook-f"></i></a>
                                        <a href="https://x.com/raghukamlesh?t=JHKZiaP5QNgvn3GmbLqZkQ&s=08" target="_blank"><i class="fab fa-twitter"></i></a>
                                        <a href="https://www.linkedin.com/in/dr-kamlesh-kumar-raghuvanshi-10355222?utm_source=share&utm_campaign=share_via&utm_content=profile&utm_medium=android_app" target="_blank"><i class="fab fa-linkedin-in"></i></a>
                                        <a href="#"><i class="fab fa-skype"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="download-btn" id="workarea">
                            <a href="#" class="rts-btn btn-main-3-alta">Download CV</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- cv area downlaod end -->

    <!-- rts service area start -->
    <div id="academics" class="section">
    <div class="rts-service-h4 rts-section-gap">
        <div class="container">
            <div class="row">
                <div class="title-area-h3 text-center">
                    <span class="pre-title">
                        What We Do
                    </span>
                    <h2 class="title" id="academics">
                        <span>Work Areas</span>
                    </h2>
                </div>
            </div>
            <div class="row g-5 mt--10">
                <!-- single service home three -->
                <div class="col-lg-4 col-md-6 col-sm-12 col-12">
                    <div class="single-service-h3">
                        <div class="inner-content">
                            <div class="logo">
                                <img src="assets/images/skill/icon/10-1.svg" alt="icon">
                            </div>
                            <h5 class="title">
                            Elections
                            </h5>
                            <p class="disc" style="text-align: justify;">
                            Dr. Kamlesh Kumar Raghuvanshi's academic and professional career is not just limited to his educational achievements. He has participated in various elections that impact academic and professional communities, showcasing his leadership skills, community engagement, and decision-making capabilities.                            </p>
                        </div>
                    </div>
                </div>
                <!-- single service home three end -->
                <!-- single service home three -->
                <div class="col-lg-4 col-md-6 col-sm-12 col-12">
                    <div class="single-service-h3">
                        <div class="inner-content">
                            <div class="logo">
                                <img src="assets/images/skill/icon/11-1.svg" alt="icon">
                            </div>
                            <h5 class="title">
                                Professors (job)
                            </h5>
                            <p class="disc" style="text-align: justify;">
                            Dr. Kamlesh Kumar Raghuvanshi is a distinguished professor at a prestigious institution, bringing over 11 years of extensive experience in the IT industry, specifically in the Telecom Billing Domain. His academic and professional journey is marked by a commitment to excellence in teaching, research, and community service.                            </p>
                        </div>
                    </div>
                </div>
                <!-- single service home three end -->
                <!-- single service home three -->
                <div class="col-lg-4 col-md-6 col-sm-12 col-12">
                    <div class="single-service-h3">
                        <div class="inner-content">
                            <div class="logo">
                                <img src="assets/images/skill/icon/12-1.svg" alt="icon">
                            </div>
                            <h5 class="title">
                               NDTFO
                            </h5>
                            <p class="disc" style="text-align: justify;">
                            Dr. Kamlesh Kumar Raghuvanshi is a key contributor to the National Data Science Task Force Organization (NDTFO), where he brings his extensive expertise in data science and IT to the forefront. His involvement with NDTFO underscores his commitment to advancing the field and leveraging data science to address complex societal challenges.                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Social Section -->
<div id="social" class="section">
    <div class="rts-service-h4 rts-section-gap">
        <div class="container">
            <div class="row">
                <div class="title-area-h3 text-center">
                    <span class="pre-title">
                        What We Do
                    </span>
                    <h2 class="title" id="social">
                        <span>Work Areas</span>
                    </h2>
                </div>
            </div>
            <div class="row g-5 mt--10">
                <!-- single service home three -->
                <div class="col-lg-4 col-md-6 col-sm-12 col-12">
                    <div class="single-service-h3">
                        <div class="inner-content">
                            <div class="logo">
                                <img src="assets/images/skill/icon/10-1.svg" alt="icon">
                            </div>
                            <h5 class="title">
                               RSS
                            </h5>
                            <p class="disc" style="text-align: justify;">
                            Dr. Kamlesh kumar Reghuvanshi is a dedicated member of the Rashtriya Swayamsevak Sangh (RSS), playing a significant role in its activities and initiatives. His involvement reflects a deep commitment to the organization's mission of promoting Hindu cultural values and contributing to national unity.
                            </p>
                        </div>
                    </div>
                </div>
                <!-- single service home three end -->
                <!-- single service home three -->
                <div class="col-lg-4 col-md-6 col-sm-12 col-12">
                    <div class="single-service-h3">
                        <div class="inner-content">
                            <div class="logo">
                                <img src="assets/images/skill/icon/11-1.svg" alt="icon">
                            </div>
                            <h5 class="title">
                                NGO
                            </h5>
                            <p class="disc" style="text-align: justify;">
                            Lokutthan Foundation is a prominent non-governmental organization dedicated to fostering social development and upliftment. The foundation aims to address the needs of underprivileged and marginalized communities through a range of impactful programs.

                            </p>
                        </div>
                    </div>
                </div>
                <!-- single service home three end -->
                <!-- single service home three -->
                <div class="col-lg-4 col-md-6 col-sm-12 col-12">
                    <div class="single-service-h3">
                        <div class="inner-content">
                            <div class="logo">
                                <img src="assets/images/skill/icon/12-1.svg" alt="icon">
                            </div>
                            <h5 class="title">
                               BJP
                            </h5>
                            <p class="disc" style="text-align: justify;">
                            Dr. Kamlesh kumar Reghuvanshi is an active and dedicated member of the Bharatiya Janata Party (BJP), contributing significantly to its initiatives and activities. His involvement with the party reflects his commitment to public service and the betterment of society through political engagement.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--industry-->
<div id="industry" class="section">
    <div class="rts-service-h4 rts-section-gap">
        <div class="container">
            <div class="row">
                <div class="title-area-h3 text-center">
                    <span class="pre-title">
                        What We Do
                    </span>
                    <h2 class="title" id="social">
                        <span>Work Areas</span>
                    </h2>
                </div>
            </div>
            <div class="row g-5 mt--10">
                <!-- single service home three -->
                <div class="col-lg-4 col-md-6 col-sm-12 col-12">
                    <div class="single-service-h3">
                        <div class="inner-content">
                            <div class="logo">
                                <img src="assets/images/skill/icon/10-1.svg" alt="icon">
                            </div>
                            <h5 class="title">
                               Company Name
                            </h5>
                            <p class="disc" style="text-align: justify;">
                            Dr. Kamlesh Kumar Raghuvanshi is a highly respected mentor at Manacle Technologies Pvt. Ltd., a leading IT solutions provider known for its innovative approaches and cutting-edge technologies.                            </p>
                        </div>
                    </div>
                </div>
                <!-- single service home three end -->
                <!-- single service home three -->
                <div class="col-lg-4 col-md-6 col-sm-12 col-12">
                    <div class="single-service-h3">
                        <div class="inner-content">
                            <div class="logo">
                                <img src="assets/images/skill/icon/11-1.svg" alt="icon">
                            </div>
                            <h5 class="title">
                               Mentor
                            </h5>
                            <p class="disc" style="text-align: justify;">
                            As a mentor at Manacle Technologies, Dr.Kamlesh Kumar Raghuvanshi provides strategic leadership and guidance to the company's teams. His insights and advice help shape the company's direction, ensuring that it stays at the forefront of technological advancements and industry trends.                            </p>
                        </div>
                    </div>
                </div>
                <!-- single service home three end -->
                <!-- single service home three -->
                <div class="col-lg-4 col-md-6 col-sm-12 col-12">
                    <div class="single-service-h3">
                        <div class="inner-content">
                            <div class="logo">
                                <img src="assets/images/skill/icon/12-1.svg" alt="icon">
                            </div>
                            <h5 class="title">
                               Startup
                            </h5>
                            <p class="disc" style="text-align: justify;">
                            Dr.Kamlesh Kumar Raghuvanshi offers valuable mentorship to startup founders and teams, providing strategic advice and insights that are crucial for the success of early-stage companies. His guidance helps startups navigate challenges, refine their business models, and develop effective strategies for growth.                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

 <!-- rts service area end -->
 <!--events-->
 <!-- resources/views/welcome.blade.php -->

 <div class="rts-service-h4 rts-section-gap">
    <div class="container">
        <div class="row">
            <div class="title-area-h3 text-center">
                <h2 class="title" id="social">
                    <span> Event</span>
                </h2>
            </div>
        </div>
        <div class="row g-5 mt--10">
            @if($latestEvent)
                @php
                    // Fetch images for the latest event ordered by creation time
                    $images = DB::table('event_handling')
                                ->where('event_id', $latestEvent->id)
                                ->orderBy('created_at', 'DESC') // Or use 'updated_at' if you prefer
                                ->limit(3)
                                ->get();

                    // Get the total number of images for the latest event
                    $totalImages = DB::table('event_handling')
                                     ->where('event_id', $latestEvent->id)
                                     ->count();
                @endphp

                <div class="col-12">
                    <div class="inner-content">
                        <div class="event-details">
                            <h5>{{ $latestEvent->name ?: 'No Name Provided' }}</h5>
                        </div>
                        <div class="row">
                            @foreach($images as $image)
                                @php
                                    // Generate the full image URL
                                    $image_url = asset(rtrim($latestEvent->base_path, '/') . '/' . $image->image_name);
                                @endphp
                                <div class="col-lg-4 col-md-6 col-sm-12">
                                    <img src="{{ $image_url }}" alt="Event Image" class="event-image">
                                </div>
                            @endforeach
                        </div>
                        @if($totalImages > 3)
                            <a href="{{ route('events.show', $latestEvent->id) }}"  style="background-color:#FF390E; height:50px; border-radius: 5px; background-color: #FF390E; height: 50px;  border: 2px solid red; padding: 14px 80px; color: white;">More</a>
                            <!-- <a href="{{ route('events.show',  $latestEvent->id ) }}" class="rts-btn btn-main-3 smooth-scroll-1" style="margin-left:50px; margin-top: 200px;">Back to Events</a> -->

                        @endif
                    </div>
                </div>
            @endif
        </div>
    </div>
</div>

 <!-- <div class="rts-service-h4 rts-section-gap">
    <div class="container">
        <div class="row">
            <div class="title-area-h3 text-center">
                <h2 class="title" id="social">
                    <span>Latest Event</span>
                </h2>
            </div>
        </div>
        <div class="row g-5 mt--10">
            @if($latestEvent)
                @php
                    // Fetch images for the latest event
                    $images = DB::table('event_handling')
                                ->where('event_id', $latestEvent->id)
                                ->orderBy('seq', 'ASC')
                                ->limit(3)
                                ->get();
                @endphp

                <div class="col-12">
                    <div class="inner-content">
                        <div class="event-details">
                            <h3>{{ $latestEvent->name ?: 'No Name Provided' }}</h3>
                        </div>
                        <div class="row">
                            @foreach($images as $image)
                                @php
                                    // Generate the full image URL
                                    $image_url = asset(rtrim($latestEvent->base_path, '/') . '/' . $image->image_name);
                                @endphp
                                <div class="col-lg-4 col-md-6 col-sm-12">
                                    <img src="{{ $image_url }}" alt="Event Image" class="event-image">
                                </div>
                            @endforeach
                        </div>
                        @if(DB::table('event_handling')->where('event_id', $latestEvent->id)->count() > 3)
                            <a href="{{ route('events.show', $latestEvent->id) }}" class="btn btn-primary">More</a>
                        @endif
                    </div>
                </div>
            @endif
        </div>
    </div>
</div> -->

<!--end evnts -->


    <!-- rts about kiills area -->
    <div class="rts-skill-area about-h3 rts-section-gapBottom" >
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="tab-area-main-wrapper text-anim" id="about">

                        <!-- tab area start -->
                        <ul class="nav nav-tabs" id="myTab" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile" type="button" role="tab" aria-controls="profile" aria-selected="true">About Me</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="contactg-tab" data-bs-toggle="tab" data-bs-target="#contactg" type="button" role="tab" aria-controls="contactg" aria-selected="false">Awards</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link border-none" id="contacts-tab" data-bs-toggle="tab" data-bs-target="#contacts" type="button" role="tab" aria-controls="contacts" aria-selected="false">Education</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link border-none" id="contactes-tab" data-bs-toggle="tab" data-bs-target="#contactes" type="button" role="tab" aria-controls="contactes" aria-selected="false">Skillset</button>
                            </li>
                        </ul>
                        <!-- tab area End -->

                        <!-- tab content area start -->
                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                                <div class="single-tab-wrapper">
                                    <!-- single tab content -->
                                    <div class="row align-items-center">
                                        <div class="col-lg-6 pb_sm--20">
                                            <div class="content-main">
                                                <h2 class="title">
                                                The Leader For Youth Generation
                                                </h2>
                                                <p class="about-disc">
                                                Dr. Kamlesh Kumar Raghuvanshi is a distinguished academic and professional, holding a Doctor of Philosophy (Ph.D.) in Computer Science. With a profound expertise in his field, Dr. Raghuvanshi has made significant contributions to both academia and industry.
                                                </p>
                                                <div class="about-contact-h2">
                                                    <div class="first-line">
                                                        <div class="single-contact">
                                                            <div class="icon-area">
                                                                <i class="far fa-user"></i>
                                                            </div>
                                                            <div class="details">
                                                                <span>Name</span>
                                                                <a href="#" class="disc" style="font-size: 14px;">
                                                                   Dr.Kamlesh kumar Reghuvanshi
                                                                </a>
                                                            </div>
                                                        </div>
                                                        <div class="single-contact">
                                                            <div class="icon-area">
                                                                <i class="far fa-user"></i>
                                                            </div>
                                                            <div class="details">
                                                                <span>Phone Number</span>
                                                                <a href="#" class="disc" style="font-size: 14px;">

                                                                +919810298704
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="first-line second">
                                                        <div class="single-contact">
                                                            <div class="icon-area">
                                                                <i class="far fa-user"></i>
                                                            </div>
                                                            <div class="details">
                                                                <span>Email Address</span>
                                                                <a href="#" class="disc" style="font-size: 14px;">
                                                                raghukamlesh@gmail.com 
                                                                </a>
                                                            </div>
                                                        </div>
                                                        <div class="single-contact">
                                                            <div class="icon-area">
                                                                <i class="far fa-user"></i>
                                                            </div>
                                                            <div class="details">
                                                                <span>Address</span>
                                                                <a href="#" class="disc" style="font-size: 14px;">
                                                                1662/2, Gali No.17,Govind Puri, Kalkaji,
                                                                New Delhi-110019
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <!-- single tab content hear -->
                                            <div class="thumbnail">
                                                <img src="assets/images/image-needed.png" alt="About_image">
                                            </div>
                                            <!-- single tab content hear End -->
                                        </div>
                                    </div>
                                    <!-- single tab content End -->
                                </div>
                            </div>
                            <div class="tab-pane fade" id="contactg" role="tabpanel" aria-labelledby="contactg-tab">
                                <div class="single-tab-wrapper">
                                    <!-- single tab content -->
                                    <div class="row align-items-center">
                                        <div class="col-lg-6">
                                            <!-- single tab content hear -->
                                            <div class="thumbnail">
                                                <img src="assets/images/image-needed.png" alt="About_image">
                                            </div>
                                            <!-- single tab content hear End -->
                                        </div>
                                        <div class="col-lg-6 pb_sm--20">
                                            <div class="content-main">
                                                <!-- single award area -->
                                                <div class="single-award-area-marketer">
                                                    <h6 class="title">Excellence in IT Innovation Award</h6>
                                                    <p class="disc">
                                                    Recognizes Dr. Kamlesh Kumar Raghuwanshi pioneering work in revolutionizing telecom billing systems through innovative solutions.
                                                    </p>
                                                </div>
                                                <!-- single award area end -->
                                                <!-- single award area -->
                                                <div class="single-award-area-marketer">
                                                    <h6 class="title"> Lifetime Achievement Award in Computer Science</h6>
                                                    <p class="disc">
                                                    Celebrates his lifelong dedication to research and excellence in IT education.
                                                    </p>
                                                </div>
                                                <!-- single award area end -->
                                                <!-- single award area -->
                                                <div class="single-award-area-marketer">
                                                    <h6 class="title"> IT Leadership Award </h6>
                                                    <p class="disc">
                                                    Presented for exemplary leadership in the IT industry, this award highlights Dr. Kamlesh Kumar Raghuwanshi  ability to lead and inspire teams to achieve exceptional results. 
                                                    </p>
                                                </div>
                                                <!-- single award area end -->
                                                <!-- single award area -->
                                                <div class="single-award-area-marketer">
                                                    <h6 class="title">Best Professor Award</h6>
                                                    <p class="disc">
                                                    Awarded by a renowned educational institution, this accolade acknowledges Dr. Kamlesh Kumar Raghuvanshi's excellence in teaching and his significant impact on shaping future IT professionals. 
                                                    </p>
                                                </div>
                                                <!-- single award area end -->
                                            </div>
                                        </div>
                                    </div>
                                    <!-- single tab content End -->
                                </div>
                            </div>
                            <div class="tab-pane fade" id="contacts" role="tabpanel" aria-labelledby="contacts-tab">
                                <div class="single-tab-wrapper">
                                    <!-- single tab content -->
                                    <div class="row align-items-center">
                                        <div class="col-lg-6">
                                            <div class="single-univercity-exp-4">
                                                <span>Certificate of</span>
                                                <h6 class="title">11+ Years of Experience in IT Industry</h6>
                                                <p class="disc">
                                                Dr.Kamlesh Kumar Raghuvanshi has over 11 years of professional experience in the IT industry, specializing in the Telecom Billing Domain.
                                            </div>
                                            <div class="single-univercity-exp-4">
                                                <span>Certificate of</span>
                                                <h6 class="title">ComverseOne PCAT Expert:</h6>
                                                <p class="disc">
                                                He has worked as a ComverseOne PCAT expert, showcasing his in-depth knowledge and expertise in this area.                                    </p>
                                            </div>
                                            <div class="single-univercity-exp-4">
                                                <span>Certificate of</span>
                                                <h6 class="title">Green Field Implementation of Kenan FX 2.0</h6>
                                                <p class="disc">
                                                Dr.Kamlesh Kumar Raghuvanshi has been involved in the green field implementation of Kenan FX 2.0, demonstrating his capability in handling large-scale projects.                                               </p>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="single-univercity-exp-4">
                                                <span>Certificate of</span>
                                                <h6 class="title">Expertise in Kenan FX Product Configuration</h6>
                                                <p class="disc">
                                                His prime areas of expertise include Kenan FX product configuration, rating, and Kenan FX 2.0 product installation.
                                                </p>
                                            </div>
                                            <div class="single-univercity-exp-4">
                                                <span>Certificate of</span>
                                                <h6 class="title">Integration with Various External Systems</h6>
                                                <p class="disc">
                                                Dr.Kamlesh Kumar Raghuvanshi has worked extensively on integrating Kenan FX with various external systems like CRM, Payment Systems, NMS, and KIOSK using Kenan API-TS.
                                                </p>
                                            </div>
                                            <div class="single-univercity-exp-4">
                                                <span>Certificate of</span>
                                                <h6 class="title">Knowledge of Kenan/Bp 12.0 Database and Processes:</h6>
                                                <p class="disc">
                                                He possesses extensive knowledge of the Kenan/Bp 12.0 database, collections, rating, billing, payment, and journaling processes.                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- single tab content End -->
                                </div>
                            </div>
                            <div class="tab-pane fade" id="contactes" role="tabpanel" aria-labelledby="contactes-tab">
                                <div class="single-tab-wrapper">
                                    <!-- single tab content -->
                                    <div class="row align-items-center">
                                        <div class="col-lg-6">
                                            <div class="content-main">
                                                <h2 class="title">
                                                   The Leader For <br> Youth Generation
                                                </h2>
                                                <p class="about-disc">
                                                Dr. Kamlesh Kumar Raghuvanshi inspires and empowers the next generation with his innovative teaching and mentorship. His dedication to nurturing young talent and guiding them through the evolving landscape of technology makes him a pivotal figure for today’s youth.
                                                </p>
                                                <div class="progress-h4-area">
                                                    <div class="single-progress-area-h4 sal-animate" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">
                                                        <div class="progress-top">
                                                            <p class="name">
                                                                Social Awards
                                                            </p>
                                                            <span class="parcent">
                                                                85%
                                                            </span>
                                                        </div>
                                                        <div class="progress">
                                                            <div class="progress-bar wow fadeInLeft bg--primary" role="progressbar" style="width: 85%; visibility: visible; animation-name: fadeInLeft;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                                        </div>
                                                    </div>
                                                    <div class="single-progress-area-h4 sal-animate" data-sal-delay="250" data-sal="slide-up" data-sal-duration="800">
                                                        <div class="progress-top">
                                                            <p class="name">
                                                                Interpersonal Influence
                                                            </p>
                                                            <span class="parcent">
                                                                65%
                                                            </span>
                                                        </div>
                                                        <div class="progress">
                                                            <div class="progress-bar wow fadeInLeft bg--primary" role="progressbar" style="width: 65%; visibility: visible; animation-name: fadeInLeft;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                                        </div>
                                                    </div>
                                                    <div class="single-progress-area-h4 sal-animate" data-sal-delay="350" data-sal="slide-up" data-sal-duration="800">
                                                        <div class="progress-top">
                                                            <p class="name">
                                                                Networking Ability
                                                            </p>
                                                            <span class="parcent">
                                                                75%
                                                            </span>
                                                        </div>
                                                        <div class="progress">
                                                            <div class="progress-bar wow fadeInLeft bg--primary" role="progressbar" style="width: 75%; visibility: visible; animation-name: fadeInLeft;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                                        </div>
                                                    </div>
                                                    <div class="single-progress-area-h4 sal-animate" data-sal-delay="450" data-sal="slide-up" data-sal-duration="800">
                                                        <div class="progress-top">
                                                            <p class="name">
                                                                Apparent Sincerity
                                                            </p>
                                                            <span class="parcent">
                                                                90%
                                                            </span>
                                                        </div>
                                                        <div class="progress">
                                                            <div class="progress-bar wow fadeInLeft bg--primary" role="progressbar" style="width: 90%; visibility: visible; animation-name: fadeInLeft;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <!-- single tab content hear -->
                                            <div class="thumbnail">
                                                <img src="assets/images/image-needed.png" alt="">
                                            </div>
                                            <!-- single tab content hear End -->
                                        </div>
                                    </div>
                                    <!-- single tab content End -->
                                </div>
                            </div>
                        </div>
                        <!-- tab content area End -->

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- rts about kiills area End -->

    <!-- rts counter up section start -->
    <div class="rts-section-gapBottom rts-counter-up-h3">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="counter-wrapper-h3 text-anim">
                        <!-- single-counter up -->
                        <div class="single-counter-h3 text-center">
                            <div class="inner">
                                <h3 class="animated fadeIn"><span class="counter animated fadeInDownBig">136</span></h3>
                                <span class="exp-time">Social Work</span>
                            </div>
                        </div>
                        <!-- single-counter up -->
                        <!-- single-counter up -->
                        <div class="single-counter-h3 text-center">
                            <div class="inner">
                                <h3 class="animated fadeIn"><span class="counter animated fadeInDownBig">30</span></h3>
                                <span class="exp-time">Project Complete</span>
                            </div>
                        </div>
                        <!-- single-counter up -->
                        <!-- single-counter up -->
                        <div class="single-counter-h3 text-center">
                            <div class="inner">
                                <h3 class="animated fadeIn"><span class="counter animated fadeInDownBig">25</span></h3>
                                <span class="exp-time">Assemble</span>
                            </div>
                        </div>
                        <!-- single-counter up -->
                        <!-- single-counter up -->
                        <div class="single-counter-h3 text-center">
                            <div class="inner">
                                <h3 class="animated fadeIn"><span class="counter animated fadeInDownBig">853</span></h3>
                                <span class="exp-time">Member</span>
                            </div>
                        </div>
                        <!-- single-counter up -->
                        <!-- single-counter up -->
                        <!-- <div class="single-counter-h3 text-center">
                            <div class="inner">
                                <h3 class="animated fadeIn"><span class="counter animated fadeInDownBig">1.8</span></h3>
                                <span class="exp-time">Done Work</span>
                            </div>
                        </div> -->
                        <!-- single-counter up -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- rts counter up section end -->

    <!-- projects area start -->
    <div class="rts-project-area rts-section-gapBottom" id="portfolio">
        <div class="contailer-fill-screen">
            <div class="row">
                <div class="title-area-h3 text-center">
                    <span class="pre-title">
                        Case Studies
                    </span>
                    <h2 class="title">
                        My Latest <span>Projects</span>
                    </h2>
                </div>
            </div>
            <div class="row">
                <div class="col-12">

                    <div class="swiper project-h3-swiper product-slider-wrapper">
                        <div class="swiper-wrapper">
                            <!-- single slider -->
                            <div class="swiper-slide">
                                <div class="single-product-h3">
                                    <img src="assets/images/image-needed.png" alt="product">
                                </div>
                            </div>
                            <!-- single slider end -->
                            <!-- single slider -->
                            <div class="swiper-slide">
                                <div class="single-product-h3">
                                    <img src="assets/images/image-needed.png" alt="product">
                                </div>
                            </div>
                            <!-- single slider end -->
                            <!-- single slider -->
                            <div class="swiper-slide">
                                <div class="single-product-h3">
                                    <img src="assets/images/image-needed.png" alt="product">
                                </div>
                            </div>
                            <!-- single slider end -->
                            <!-- single slider -->
                            <div class="swiper-slide">
                                <div class="single-product-h3">
                                    <img src="assets/images/image-needed.png" alt="product">
                                </div>
                            </div>
                            <!-- single slider end -->
                            <!-- single slider -->
                            <div class="swiper-slide">
                                <div class="single-product-h3">
                                    <img src="assets/images/image-needed.png" alt="product">
                                </div>
                            </div>
                            <!-- single slider end -->
                            <!-- single slider -->
                            <div class="swiper-slide">
                                <div class="single-product-h3">
                                    <img src="assets/images/image-needed.png" alt="product">
                                </div>
                            </div>
                            <!-- single slider end -->

                        </div>
                        <div class="swiper-button-wrapper-project-ho-3"  >
                            <div class="swiper-button-next testimonials-slider-next-btn"></div>
                            <div class="swiper-button-prev testimonials-slider-prev-btn"></div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <!-- projects area end -->

    <!-- rts clients feedback area start -->
    <div class="rts-client-feedback rts-section-gapBottom pt_sm--60" id="test" >
        <div class="container">
            <div class="row">
                <div class="title-area-h3 text-center">
                    <span class="pre-title">
                        Our Testimonials
                    </span>
                    <h2 class="title">
                        People’s <span>Feedbacks</span>
                    </h2>
                </div>
            </div>
            <div class="row g-5 mt--10">
                <div class="col-lg-4 col-md-6 text-anim">
                    <!-- single-testimonials -->
                    <div class="rts-single-testimonials-h3 text-center">
                        <div class="top-area">
                            <img class="quote" src="assets/images/testimonials/quote-1.png" alt="Quote">
                            <p class="disc" style="text-align: justify;">
                            Dr. Kamlesh kumar Raghuwanshi expertise in Computer Science and the Telecom Billing Domain is unparalleled. His dedication to excellence and innovative approach make him an invaluable asset.
                            </p>
                            <div class="start-area">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </div>
                        </div>
                        <div class="client-profile-area">
                            <img src="assets/images/testimonials/rishi-sir.jpg" alt="Profile" style="height:100px; width:100px; border-radius: 50%;">
                            <div class="discription">
                                <p class="name">
                                Dr. Rishi M Bhatnagar
                                </p>
                                <span>
                                Enterepnaur, Technology expert, Politician & Mentor
                                </span>
                            </div>
                        </div>
                    </div>
                    <!-- single-testimonials End -->
                </div>
                <div class="col-lg-4 col-md-6 text-anim">
                    <!-- single-testimonials -->
                    <div class="rts-single-testimonials-h3 text-center">
                        <div class="top-area">
                            <img class="quote" src="assets/images/testimonials/quote-1.png" alt="Quote">
                            <p class="disc" style="text-align: justify;" >
                            Dr. Kamlesh kumar Raghuwanshi profound knowledge and expertise in the IT field are truly impressive. His dedication to his work and his innovative approach have greatly benefited our projects and initiatives.
                            </p>
                            <div class="start-area">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </div>
                        </div>
                        <div class="client-profile-area">
                            <img src="assets/images/testimonials/bhopindernath.jpg" alt="Profile" style="height:100px; width:100px; border-radius: 50%;">
                            <div class="discription">
                                <p class="name">
                                Bhoopendra N Pandey
                                </p>
                                <span>
                                Vice President
                                </span>
                            </div>
                        </div>
                    </div>
                    <!-- single-testimonials End -->
                </div>
                <div class="col-lg-4 col-md-6 text-anim">
                    <!-- single-testimonials -->
                    <div class="rts-single-testimonials-h3 text-center">
                        <div class="top-area">
                            <img class="quote" src="assets/images/testimonials/quote-1.png" alt="Quote">
                            <p class="disc" style="text-align: justify;">
                            Dr. Kamlesh kumar Raghuwanshi expertise and dedication are unmatched. His contributions to our projects have been invaluable, showcasing his exceptional skills and commitment to excellence.
                            </p>
                            <div class="start-area">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </div>
                        </div>
                        <div class="client-profile-area">
                            <img src="assets/images/testimonials/shilendrapathak.PNG" alt="Profile" style="height:100px; width:100px; border-radius: 50%;">
                            <div class="discription">
                                <p class="name">
                                Shailendra Pathak
                                </p>
                                <span>
                                Secretary
                                </span>
                            </div>
                        </div>
                    </div>
                    <!-- single-testimonials End -->
                </div>
            </div>
        </div>
    </div>
    <!-- rts clients feedback area end -->

    <!-- rts blog area start -->
    <div class="rts-blog-area-h2 blog-h3 rts-section-gapBottom" id="blog">
        <div class="container">
            <div class="row">
                <div class="title-area-h3 text-center">
                    <span class="pre-title">
                        News Insights
                    </span>
                    <h2 class="title">
                        Our Latest <span>Updates</span>
                    </h2>
                </div>
            </div>
            <div class="row g-5 mt--10">
                <div class="col-lg-4 col-md-6 col-sm-12 col-12 text-anim">
                    <!-- single post area start -->
                    <div class="rts-post-area-h2">
                        <a href="blog-details-1.html" class="thumbnail">
                            <img src="assets/images/image-needed.png" alt="rts-blog-image">
                        </a>
                        <div class="content-area">
                            <div class="icon-area">
                                <i class="far fa-clock"></i>
                                <span>March 10, 2023</span>
                            </div>
                            <a href="blog-details-1.html">
                                <h5 class="title">
                                    We must once again come together
                                </h5>
                            </a>
                            <a href="blog-details-1.html" class="rts-btn btn-main-3">
                                Read More
                            </a>
                        </div>
                    </div>
                    <!-- single post area end -->
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 col-12 text-anim">
                    <!-- single post area start -->
                    <div class="rts-post-area-h2">
                        <a href="blog-details-1.html" class="thumbnail">
                            <img src="assets/images/image-needed.png" alt="rts-blog-image">
                        </a>
                        <div class="content-area">
                            <div class="icon-area">
                                <i class="far fa-clock"></i>
                                <span>March 10, 2023</span>
                            </div>
                            <a href="blog-details-1.html">
                                <h5 class="title">
                                    Main principle – stability in the future!
                                </h5>
                            </a>
                            <a href="blog-details-1.html" class="rts-btn btn-main-3">
                                Read More
                            </a>
                        </div>
                    </div>
                    <!-- single post area end -->
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 col-12 text-anim">
                    <!-- single post area start -->
                    <div class="rts-post-area-h2">
                        <a href="blog-details-1.html" class="thumbnail">
                            <img src="assets/images/image-needed.png" alt="rts-blog-image">
                        </a>
                        <div class="content-area">
                            <div class="icon-area">
                                <i class="far fa-clock"></i>
                                <span>March 10, 2023</span>
                            </div>
                            <a href="blog-details-1.html">
                                <h5 class="title">
                                    A simple plan to fix our 
                                     economy
                                </h5>
                            </a>
                            <a href="blog-details-1.html" class="rts-btn btn-main-3">
                                Read More
                            </a>
                        </div>
                    </div>
                    <!-- single post area end -->
                </div>
            </div>
        </div>
    </div>
    <!-- rts blog area end -->
@section('js')
<script>
    function toggleSection(sectionId, link) {
        // Hide all sections
        document.querySelectorAll('.section').forEach(section => {
            section.classList.remove('active');
        });

        // Remove active class from all links
        document.querySelectorAll('.dropdown a').forEach(a => {
            a.classList.remove('active');
        });

        // Show the selected section
        document.getElementById(sectionId).classList.add('active');

        // Add active class to the clicked link
        link.classList.add('active');
    }

    // Show the Academic section by default
    document.addEventListener("DOMContentLoaded", function() {
        toggleSection('academics', document.querySelector('.dropdown a'));
    });
</script>
@endsection

@endsection
