<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dr. Kamlesh kumar Raghuwanshi</title>
    <!-- fav icon -->
    <link rel="shortcut icon" type="image/x-icon" href="assets/images/fav-1.png">

    <link rel="stylesheet" href="assets/css/plugins/fontawesome-5-1.css">
    <link rel="stylesheet" href="assets/css/vendor/swiper-1.css">
    <link rel="stylesheet" href="assets/css/vendor/animate.min-1.css">
    <link rel="stylesheet" href="assets/css/plugins/unicons-1.css">
    <link rel="stylesheet" href="assets/css/vendor/bootstrap.min-1.css">
    <link rel="stylesheet" href="assets/css/style-1.css">
    @yield('css')
   <style>
/* .footer-copyright-four {
    padding-top: 10px;
    border-top: 1px solid #212121;
    padding-bottom: 0px;
} */
.header-one.three .logo-area {
    position: absolute;
    left: 50%;
    top: 0%;
    transform: translate(-50%, 0);
    background: #FFFFFF;
    box-shadow: 0px 4px 74px rgba(0, 0, 0, 0.11);
    border-radius: 0px 0px 15px 15px;
    padding: 10px 20px 32px;
}
/* .header-one.three .logo-area {
    position: absolute;
    left: 50%;
    top: 0%;
    transform: translate(-50%, 0);
    background: #FFFFFF;
    box-shadow: 0px 4px 74px rgba(0, 0, 0, 0.11);
    border-radius: 0px 0px 15px 15px;
    padding: 10px 20px 21px;
} */
    nav.main-nav ul li {
    margin: 0 10px;
}
.dropbtn {
  background-color: ;
  color: black;
  padding: 16px;
  font-size: 16px;
  border: none;
  cursor: pointer;
}

.dropbtn:hover, .dropbtn:focus {
  background-color: ;
}

/* Dropdown container */
.dropdown {
  position: relative;
  display: inline-block;
}

/* Main dropdown content */
.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f1f1f1;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

/* Style the links inside the dropdown */
.dropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}

/* Change color on hover */
.dropdown-content a:hover {
  background-color: #ddd;
}

/* Nested dropdowns */
.nested-dropdown {
  display: none;
  position: absolute;
  left: 100%; /* Position to the right of the parent item */
  top: 0;
  background-color: #f1f1f1;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 2;
  margin-left: 10px;
}

/* Style the links inside the nested dropdown */
.nested-dropdown a {
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}

/* Change color on hover */
.nested-dropdown a:hover {
  background-color: #ddd;
}

/* Show the dropdown content */
.show { display: block; }
.show-nested { display: block; }

        .dropdown-content, .nested-dropdown {
            display: none;
        }
        .show {
            display: block;
        }
   
      
        .section {
            display: none; /* Hide all sections by default */
        }
        .active {
            display: block; /* Show the active section */
        }
        .dropdown a {
            padding: 10px 20px;
            display: block;
            cursor: pointer;
            text-decoration: none;
            color: black;
           
            margin: 5px 0;
        }
        .dropdown a.active {
           
            color: black;
        }
        .footer-copyright-four {
    padding-top: 60px;
    border-top: 1px solid #212121;
    /* padding-bottom: 60px; */
}

.ptb--100 {
    padding: 30px 0 !important;
}
.footer-copyright-four {
    /* padding-top: 60px; */
    border-top: 1px solid #212121;
    padding-bottom: 30px;
}
.mid-footer-wrapper-4 .social-inner ul li a {
    padding: 20px 0;
    border-top: 1px solid #212121;
    border-right: 1px solid #212121;
    border-left: 1px solid #212121;
    display: block;
    color: #fff;
    width: 171px;
    display: flex;
    align-items: center;
    justify-content: center;
    transition: 0.3s;
    position: relative;
    overflow: hidden;
    z-index: 1;
}

/* Base styles for logo */
.logo-area {
    text-align: center; /* Center the logo horizontally */
    padding: 20px; /* Add some padding around the logo */
}

.logo-area .thumbnail {
    display: inline-block;
}

.logo-area img {
    max-width: 100%; /* Ensure the logo scales with its container */
    height: auto; /* Maintain aspect ratio */
    width: auto; /* Remove fixed width to prevent stretching */
}

/* Responsive styles */
@media (min-width: 1200px) {
    .logo-area img {
        width: 150px; /* Adjust width for large screens */
    }
}

@media (max-width: 992px) {
    .logo-area img {
        width: 120px; /* Adjust width for medium screens */
    }
}

@media (max-width: 768px) {
    .logo-area img {
        width: 100px; /* Adjust width for smaller screens */
    }
}

@media (max-width: 576px) {
    .logo-area img {
        width: 80px; /* Further adjust width for very small screens */
    }
}

   
</style>

</head>

<body class="onepage marketer home-mazin nine">
    <!-- header style two -->
    <header class="header-one three header--sticky">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xl-8 col-lg-6 col-md-2 col-sm-0 col-6">
                    <nav class="main-nav d-xl-block d-none">
                        <ul id="nav">
                        <li class="current"><a href="{{url('/')}}#home">Home</a></li> 
                          <li class=""><a href="{{url('/')}}#about">About</a></li>                            
    <div class="dropdown">
  <button onclick="toggleDropdown()" class="dropbtn"  style="font-weight:bold;">Work Area</button>
  <div id="myDropdown" class="dropdown-content">
    <a href="{{url('/')}}#academics" onclick="toggleSection('academics', this)" >Academic</a>
    <a href="{{url('/')}}#social" onclick="toggleSection('social', this)">Social</a>
    <a href="{{url('/')}}#industry" onclick="toggleSection('industry', this)">Industry</a>
    <div id="industryDropdown" class="nested-dropdown">
    </div>
  </div>
</div>
                            <li class=""><a href="{{url('/')}}#portfolio">Portfolio</a></li>
                           
                            <li class=""><a href="#contact">Contact</a></li>
                        </ul>
                    </nav>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-10 col-sm-12 col-6 justify-content-end d-flex">
                    <div class="open-h2-menu-area">
                        <div class="contact-area">
                            <div class="number">
                                <a href="#">+919810298704</a>
                            </div>
                            <div class="email ml--40">
                                <a href="#">raghukamlesh@gmail.com</a>
                            </div>
                        </div>
                        <a id="menu-btn" href="#" class="ml--40" onclick="event.preventDefault();">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewbox="0 0 20 20" fill="none">
                                <rect width="4" height="4" fill="#141414"></rect>
                                <rect y="8" width="4" height="4" fill="#141414"></rect>
                                <rect y="16" width="4" height="4" fill="#141414"></rect>
                                <rect x="8" width="4" height="4" fill="#141414"></rect>
                                <rect x="8" y="8" width="4" height="4" fill="#141414"></rect>
                                <rect x="8" y="16" width="4" height="4" fill="#141414"></rect>
                                <rect x="16" width="4" height="4" fill="#141414"></rect>
                                <rect x="16" y="8" width="4" height="4" fill="#141414"></rect>
                                <rect x="16" y="16" width="4" height="4" fill="#141414"></rect>
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="logo-area">
            <a href="#" class="thumbnail">
                <img src="http://127.0.0.1:8000/assets/images/logo/The-Leader.svg" alt="logo-images">
            </a>
        </div>
    </header>
    <!-- header style two End -->
    @yield('body')

    <!-- rts footer style three hear starat -->
    <div class="rts-footer-area footer-bg-3 footer-three" id="contact">
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="footer-four-left footer-single-wized ptb--100 ptb_sm--50">
                        <a class="logo" href="index-three-1.html">
                            <img src="http://127.0.0.1:8000/assets/images/logo/TheLeader-logo-white.svg" alt="logo-area">
                        </a>
                        <p class="disc">
                        Dr. Kamlesh Kumar Raghuvanshi, with over 11 years of experience in the IT industry and a specialization in the Telecom Billing Domain, is dedicated to advancing knowledge and innovation in computer science. 
                        </p>
                        <a href="#contact" class="rts-btn btn-main-3 smooth-scroll-1">Hire Me Now</a>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="mid-footer-wrapper-4">
                        <div class="social-inner">
                            <ul>
                                <li>
                                    <a href="https://www.facebook.com/kamlesh.raghuwanshi.98?mibextid=ZbWKwL" target="_blank">Facebook</a>
                                </li>
                                <li>
                                    <a href="https://x.com/raghukamlesh?t=JHKZiaP5QNgvn3GmbLqZkQ&s=08" target="_blank">Twitter</a>
                                </li>
                                <li>
                                    <a href="https://www.linkedin.com/in/dr-kamlesh-kumar-raghuvanshi-10355222?utm_source=share&utm_campaign=share_via&utm_content=profile&utm_medium=android_app" target="_blank">Linkedin</a>
                                </li>
                                <li>
                                    <a href="https://www.instagram.com/kamlesh_raghuvanshi_lup?igsh=dDFtbDRub29neGpl" target="_blank">Instagram</a>
                                </li>
                            </ul>
                        </div>
                        <div class="footer-three-mid footer-single-wized ptb--100 ptb_sm--30">
                            <h5 class="title">
                                Contact Us
                            </h5>
                            <div class="body contact-area">
                                <!-- single address -->
                                <div class="single-address">
                                    <div class="icon">
                                        <i class="fas fa-map-marker-alt"></i>
                                    </div>
                                    <div class="discription">
                                        <p>Our Address</p>
                                        <span>1662/2, Gali No.17,<br> Govind Puri, Kalkaji,<br>New Delhi-110019</span>
                                    </div>
                                </div>
                                <!-- single address end -->
                                <!-- single address -->
                                <div class="single-address">
                                    <div class="icon">
                                        <i class="far fa-at"></i>
                                    </div>
                                    <div class="discription">
                                        <p>Our Email</p>
                                        <span>raghukamlesh@gmail.com</span>
                                    </div>
                                </div>
                                <!-- single address end -->
                                <!-- single address -->
                                <div class="single-address">
                                    <div class="icon">
                                        <i class="fas fa-headset"></i>
                                    </div>
                                    <div class="discription">
                                        <p>Our Phone</p>
                                        <span>+91 9810298704</span>
                                    </div>
                                </div>
                                <!-- single address end -->
                            </div>
                        </div>
                    </div>
                </div>
                <!-- footer end area start -->
                <!-- <div class="col-lg-3 ptb--100">
                    <div class="footer-two-single-gallery-area three">
                        <h5 class="title">Instagram Posts</h5>
                        <div class="gallery-image">
                            <a href="#">
                                <img src="assets/images/footer/gallery/01-1.png" alt="Footer-two">
                            </a>
                            <a href="#">
                                <img src="assets/images/footer/gallery/02-1.png" alt="Footer-two">
                            </a>
                            <a href="#">
                                <img src="assets/images/footer/gallery/03-1.png" alt="Footer-two">
                            </a>
                            <a href="#">
                                <img src="assets/images/footer/gallery/04-1.png" alt="Footer-two">
                            </a>
                            <a href="#">
                                <img src="assets/images/footer/gallery/05-1.png" alt="Footer-two">
                            </a>
                            <a href="#">
                                <img src="assets/images/footer/gallery/06-1.png" alt="Footer-two">
                            </a>
                        </div>
                    </div>
                </div> -->
                <!-- footer end area end -->
            </div>
        </div>
        <div class="footer-copyright-four">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="inner">
                            <div class="left">
                                <p class="disc">
                                    © 2023 Pixxi | All rights reserved by <a href="https://msell.in/">Manacle Technologies</a>
                                </p>
                            </div>
                            <div class="right">
                                <div class="menu">
                                    <ul>
                                        <li>
                                            <a href="#">ABOUT </a>
                                        </li>
                                        <li>
                                            <a href="#">CONTACT </a>
                                        </li>
                                        <li>
                                            <a href="#">CAREER </a>
                                        </li>
                                        <li>
                                            <a href="#">FAQS </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- rts footer style three hear end -->




    <!-- preloader -->
    <!-- <div id="preloader" class="preloader">
        <div class="animation-preloader">
            <div class="spinner">
            </div>
            <div class="txt-loading">
                <span data-text-preloader="M" class="letters-loading">
                        M
                    </span>
                <span data-text-preloader="A" class="letters-loading">
                        A
                    </span>
                <span data-text-preloader="Z" class="letters-loading">
                    Z
                    </span>
                <span data-text-preloader="I" class="letters-loading">
                    I
                    </span>
                <span data-text-preloader="N" class="letters-loading">
                        N
                    </span>
            </div>
            <p class="text-center">Loading</p>
        </div>
        <div class="loader">
            <div class="row">
                <div class="col-3 loader-section section-left">
                    <div class="bg"></div>
                </div>
                <div class="col-3 loader-section section-left">
                    <div class="bg"></div>
                </div>
                <div class="col-3 loader-section section-right">
                    <div class="bg"></div>
                </div>
                <div class="col-3 loader-section section-right">
                    <div class="bg"></div>
                </div>
            </div>
        </div>
    </div>
 -->

    <!-- progress Back to top -->
    <div class="progress-wrap">
        <svg class="progress-circle svg-content" width="100%" height="100%" viewbox="-1 -1 102 102">
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98"></path>
        </svg>
    </div>
    <!-- progress Back to top End -->

    <!-- scripts -->

    <script src="assets/js/vendor/jquery.min-1.js"></script>
    <script src="assets/js/vendor/jquery.nav-1.js"></script>

    <script src="assets/js/vendor/jquery-ui.min-1.js"></script>

    <script src="assets/js/vendor/waw-1.js"></script>
    <script src="assets/js/vendor/waypoint-1.js"></script>

    <script src="assets/js/plugins/splittext-1.js"></script>
    <script src="assets/js/plugins/gsap.min-1.js"></script>
    <script src="assets/js/plugins/scrolltigger-1.js"></script>

    <script src="assets/js/plugins/counter-up-1.js"></script>
    <script src="assets/js/plugins/smoothscrool-1.js"></script>
    <script src="assets/js/plugins/scroll-out-1.js"></script>
    <script src="assets/js/plugins/marquery-1.js"></script>
    <script src="assets/js/plugins/parallax-1.js"></script>

    <script src="assets/js/plugins/contact-form-1.js"></script>

    <!-- <script src="assets/js/vendor/scroll-smoother.js"></script> -->

    <script src="assets/js/vendor/swiper-1.js"></script>
    <script src="assets/js/vendor/sal.min-1.js"></script>

    <!-- for smoothj scroll -->
    <script src="assets/js/vendor/tweenmax-1.js"></script>

    <script src="assets/js/vendor/bootstrap.min-1.js"></script>


    <!-- main js hear -->
    <script src="assets/js/main-1.js"></script>
    <script>
/* Toggle between hiding and showing the main dropdown content */
function toggleDropdown() {
  document.getElementById("myDropdown").classList.toggle("show");
}

function toggleNestedDropdown(event, nestedId) {
  event.preventDefault(); // Prevent default link behavior
  const nestedDropdown = document.getElementById(nestedId);
  nestedDropdown.classList.toggle("show-nested");

  // Close other nested dropdowns
  const otherNestedDropdowns = document.querySelectorAll('.nested-dropdown');
  otherNestedDropdowns.forEach(function(nested) {
    if (nested !== nestedDropdown) {
      nested.classList.remove('show-nested');
    }
  });
}

// Close the dropdowns if the user clicks outside of them
window.onclick = function(event) {
  if (!event.target.matches('.dropbtn') && !event.target.matches('.dropdown-content a')) {
    var dropdowns = document.getElementsByClassName("dropdown-content");
    for (var i = 0; i < dropdowns.length; i++) {
      var openDropdown = dropdowns[i];
      if (openDropdown.classList.contains('show')) {
        openDropdown.classList.remove('show');
      }
    }

    var nestedDropdowns = document.getElementsByClassName("nested-dropdown");
    for (var j = 0; j < nestedDropdowns.length; j++) {
      var openNestedDropdown = nestedDropdowns[j];
      if (openNestedDropdown.classList.contains('show-nested')) {
        openNestedDropdown.classList.remove('show-nested');
      }
    }
  }
}
</script>
<script>
  function showSection(sectionId) {
    // Sabhi sections ko hide kar do
    document.querySelectorAll('.card-container').forEach(section => {
      section.classList.add('hidden');
    });

    // Jo section select kiya hai, use show karo
    document.getElementById(sectionId).classList.remove('hidden');
  }
</script>

  

    @yield('js')
  

</body>

</html>






















