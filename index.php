<!doctype html>
<html lang="en">

<head>
<title>Vizag Tourism</title>

<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="icon" href="/vizagtourism/pictures/icon2.jpg" type="image/gif" sizes="20x20">

<link rel="stylesheet" href="assets/css/select2.min.css">

<link rel="stylesheet" href="assets/css/jquery.fancybox.min.css">

<link href='assets/css/boxicons.min.css' rel='stylesheet'>

<link rel="stylesheet" href="assets/css/swiper-bundle.min.css">

<link rel="stylesheet" href="assets/css/bootstrap.min.css">

<link rel="stylesheet" href="assets/css/animate.min.css">

<link rel="stylesheet" href="assets/css/style.css">
<link rel="stylesheet" href="assets/css/responsive.css">
</head>
<body>




<div class="mobile-search">
<div class="container">
<div class="row d-flex justify-content-center">
<div class="col-md-11">
<label>What are you lookking for?</label>
<input type="text" placeholder="Search Products, Category, Brand">
</div>
<div class="col-1 d-flex justify-content-end align-items-center">
<div class="search-cross-btn">

<i class="bi bi-x"></i>
</div>
</div>
</div>
</div>
</div>


<div class="category-sidebar-wrapper">
<div class="category-sidebar">
<div class="category-header d-flex justify-content-between align-items-center">
<h4>Category</h4>
<div class="category-toggle">
<i class="bi bi-x-lg"></i>
</div>
</div>
<div class="row row-cols-lg-3 row-cols-2 gy-5 mt-3">
<div class="col">
<a class="category-box" href="package.php">
<div class="cate-icon mx-auto">
<img src="assets/images/icons/cate1.svg" alt="">
</div>
<h5>Adventure</h5>
</a>
</div>
<div class="col">
<a class="category-box" href="package.php">
<div class="cate-icon mx-auto">
<img src="assets/images/icons/cate2.svg" alt="">
</div>
<h5>Group Tour</h5>
</a>
</div>
<div class="col">
<a class="category-box" href="package.php">
<div class="cate-icon mx-auto">
<img src="assets/images/icons/cate3.svg" alt="">
</div>
<h5>Couple Tour</h5>
</a>
</div>
<div class="col">
<a class="category-box" href="package.php">
<div class="cate-icon mx-auto">
<img src="assets/images/icons/cate4.svg" alt="">
 </div>
<h5>Single Tour</h5>
</a>
</div>
<div class="col">
<a class="category-box" href="package.php">
<div class="cate-icon mx-auto">
<img src="assets/images/icons/cate5.svg" alt="">
</div>
<h5>Honeymoon</h5>
</a>
</div>
<div class="col">
<a class="category-box" href="package.php">
<div class="cate-icon mx-auto">
<img src="assets/images/icons/cate6.svg" alt="">
</div>
<h5>Sea Beach</h5>
</a>
</div>
<div class="col">
<a class="category-box" href="package.php">
<div class="cate-icon mx-auto">
<img src="assets/images/icons/cate7.svg" alt="">
</div>
<h5>Mountain Tour</h5>
</a>
</div>
</div>
</div>
</div>


<?php include 'header.php' ?>

<div class="hero-area hero-style-three">
<img src="assets/images/banner/banner-plane.svg" class="img-fluid banner-plane">
<div class="hero-main-wrapper position-relative">
<div class="hero-social">
<ul class="social-list d-flex justify-content-center align-items-center gap-4">
<li><a href="#">Facebook</a></li>
<li><a href="#">instagram</a></li>
<li><a href="#">Linked in</a></li>
</ul>
</div>
<div class="swiper hero-slider-three ">
<div class="swiper-wrapper">
<div class="swiper-slide">
<div class="slider-bg-1">
<div class="container">
<div class="row d-flex justify-content-center align-items-center">
<div class="col-lg-8">
<div class="hero3-content">
<span class="title-top">Wellcome To Vizag Tourism</span>
<h1>Journey to Explore the City of Destiney</h1>
<a href="#" class="button-fill-primary banner3-btn">Book Your Travel</a>
</div>
</div>
</div>
</div>
</div>
</div>

<div class="swiper-slide">
<div class="slider-bg-3">
<div class="container">
<div class="row d-flex justify-content-center align-items-center">
<div class="col-lg-8">
<div class="hero3-content">
<span class="title-top">Wellcome To Vizag</span>
<h1>Enjoy Your New Adventure</h1>

<a href="#" class="button-fill-primary banner3-btn">Book Your Travel</a>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
<div class="slider-arrows text-center d-lg-flex flex-column d-none gap-5">
<div class="hero-prev3" tabindex="0" role="button" aria-label="Previous slide"> <i class="bi bi-arrow-left"></i></div>
<div class="hero-next3" tabindex="0" role="button" aria-label="Next slide"><i class="bi bi-arrow-right"></i></div>
</div>
</div>
</div>


<div class="searchbar-section">
<div class="container">
<div class="multi-main-searchber">
<div class="row g-4">
<div class="col-lg-10">
<div class="row gx-0 gy-4">
<div class="col-lg-3 col-md-6">
<div class="search-box-single destination-box">
<div class="searchbox-icon">
<i class="bi bi-geo-alt"></i>
</div>
<div class="searchbox-input">
<label for="deatination_drop">Destination</label>
 <select data-placeholder="Vizag- City of destiney" id="deatination_drop">
<option >Vizag- City of destiney</option>

</select>
</div>
</div>
</div>
<div class="col-lg-3 col-md-6">
<div class="search-box-single type-box">
<div class="searchbox-icon">
<i class="bi bi-text-paragraph"></i>
</div>
<div class="searchbox-input">
<label for="activity-dropdown">Travel Type</label>
<select class="defult-select-drowpown" data-placeholder="All Activity" id="activity-dropdown">
<option value="">All Activity</option>
<option value="1">Bike</option>
<option value="2">Car</option>
<option value="3">Maxi cab</option>
<option value="4">Tempo traveller</option>
</select>
</div>
</div>
</div>
<div class="col-lg-3 col-md-6">
<div class="search-box-single type-box">
<div class="searchbox-icon">
<i class="bi bi-person-plus"></i>
</div>
<div class="searchbox-input">
<label for="person-dropdown">Person</label>
<select class="defult-select-drowpown" id="person-dropdown">
<option selected value="0">01</option>
<option value="1">02</option>
<option value="2">03</option>
<option value="3">04</option>
<option value="4">05</option>
</select>
</div>
</div>
</div>
<div class="col-lg-3 col-md-6">
<div class="search-box-single date-box">
<div class="searchbox-icon">
<i class="bi bi-capslock"></i>
</div>
<div class="searchbox-input date-picker-input">
<label for="datepicker">When</label>
<input placeholder="Select your date" type="text" name="checkIn" id="datepicker" value="" class="calendar">
</div>
</div>
</div>
</div>
</div>
<div class="col-lg-2">
<div class="main-form-submit">
<button type="submit">Find Now</button>
</div>
</div>
</div>
</div>
</div>
</div>


<div class="package-area package-style-two pt-110 chain">
<div class="container">
<div class="row d-flex justify-content-center align-items-center">
<div class="col-lg-8 col-sm-10">
<div class="section-head-alpha">
<h2>Best Selling Tours</h2>
<p>The port of Visakhapatnam is renowned for being home to the oldest shipyard in all of India, and with a plethora of manmade wonders and natural spectacles, Visakhapatnam is a must-visit tourist destination in South India.</p>
</div>
</div>
<div class="col-lg-4 col-sm-10">
<div class="package-btn text-lg-end">
<a href="package.php" class="button-fill-primary all-package-btn">View All Tour</a>
</div>
</div>
</div>
<div class="row d-flex justify-content-center g-4">
<div class="col-lg-4 col-md-6 col-sm-10  fadeffect">
<div class="package-card-beta">
<div class="package-thumb">
<a href="best of vizag.php"><img src="/vizagtourism/pictures/best of vizag.jpg" alt="" style="height: 210px"></a>
<p class="card-lavel">
<i class="bi bi-clock"></i> <span>2 Days & 1 Night</span>
</p> 
</div>
<div class="package-card-body">
<h3 class="p-card-title"><a href="package.php">Best of Vizag</a></h3>
<div class="p-card-bottom">
<div class="book-btn">
<a href="package.php">Book Now <i class='bx bxs-right-arrow-alt'></i></a>
</div>
<div class="p-card-info">
<span>From</span>
<h6>2875 rupees <span>Per Person</span></h6>
</div>
</div>
</div>
</div>
</div>
<div class="col-lg-4 col-md-6 col-sm-10 fadeffect">
<div class="package-card-beta">
<div class="package-thumb">
<a href="best of araku.php"><img src="/vizagtourism/pictures/araku valley tour.jpg" alt=""></a>
<p class="card-lavel">
<i class="bi bi-clock"></i> <span>3 Day & 2 night</span>
</p>
</div>
<div class="package-card-body">
<h3 class="p-card-title"><a href="package.php">Best of Araku </a></h3>
<div class="p-card-bottom">
<div class="book-btn">
<a href="package.php">Book Now <i class='bx bxs-right-arrow-alt'></i></a>
</div>
<div class="p-card-info">
<span>From</span>
<h6>2000<span>Per Person</span></h6>
</div>
</div>
</div>
</div>
</div>
<div class="col-lg-4 col-md-6 col-sm-10 fadeffect">
<div class="package-card-beta">
<div class="package-thumb">
<a href="annavram.php"><img src="/vizagtourism/pictures/annavram.jpg" alt=""></a>
<p class="card-lavel">
<i class="bi bi-clock"></i> <span>4 Day & 3 night</span>
</p>
</div>
<div class="package-card-body">
<h3 class="p-card-title"><a href="package.php">Araku and Vizag with Annavaram </a></h3>
<div class="p-card-bottom">
<div class="book-btn">
<a href="package.php">Book Now <i class='bx bxs-right-arrow-alt'></i></a>
</div>
<div class="p-card-info">
<span>From</span>
<h6>3000 rupees<span>Per Person</span></h6>
</div>
</div>
</div>
</div>
</div>


<div class="package-page-btn text-center mt-60">
<a href="package.php" class="button-fill-round">View All</a>
</div>
</div>
</div><br><br><br>


<!--<div class="destination-area destination-style-two pt-110 pb-110">
<div class="container">
<div class="row justify-content-center">
<div class="col-lg-8 col-sm-10 ">
<div class="section-head-alpha text-center mx-auto">
<h2>Near by Tours</h2>
<p>When you leave a beautiful place, you carry it with you wherever you go.</p>
</div>
</div>
</div>
<div class="row d-flex justify-content-center g-4">
<div class="col-lg-6 col-md-12 col-sm-10 fadeffect">
<div class="destination-item">
<div class="destination-img">
<img src="/vizagtourism/pictures/Maredumilli_Main_thumb.jpg" alt="" style="height:320px">
</div>
<div class="destination-overlay">
<div class="content">

<a href="destination-details.php"><h5>Maredumilli Tour</h5></a>
</div>
</div>
</div>
</div>
<div class="col-lg-3 col-md-6 col-sm-10 fadeffect">
<div class="destination-item">
<div class="destination-img">
<img src="/vizagtourism/pictures/PapiKondalu_Main_thumb.jpg" alt="" style="height:320px">
</div>
<div class="destination-overlay">
<div class="content">
<a href="destination-details.php"><h5>Papikondaluo Tour</h5></a>

</div>
</div>
</div>
</div>
<div class="col-lg-3 col-md-6 col-sm-10 fadeffect">
<div class="destination-item">
<div class="destination-img">
<img src="/vizagtourism/pictures/Rajahmundry_Main_thumb.jpg" alt="" style="height:320px">
</div>
<div class="destination-overlay">
<div class="content">
<a href="destination-details.php"><h5>Rajahmundry Tour</h5></a>
</div>
</div>
</div>
</div>
<div class="col-lg-3 col-md-6 col-sm-10 fadeffect">
<div class="destination-item">
<div class="destination-img">
<img src="/vizagtourism/pictures/vijayawada.jpg" alt="" style="height:320px">
</div>
<div class="destination-overlay">
<div class="content">
<a href="destination-details.php"><h5>Vijayawada</h5></a>
</div>
</div>
</div>
</div>
<div class="col-lg-3 col-md-6 col-sm-10 fadeffect">
<div class="destination-item">
<div class="destination-img">
<img src="/vizagtourism/pictures/Kakinada_Main_thumb.jpg" alt="" style="height:320px">
</div>
<div class="destination-overlay">
<div class="content">
<a href="destination-details.php"><h5>Kakinada</h5></a>
</div>
</div>
</div>
</div>
<div class="col-lg-6 col-md-12 col-sm-10 fadeffect">
<div class="destination-item">
<div class="destination-img">
<img src="/vizagtourism/pictures/Amaravati.jpg" alt="" style="height:320px">
</div>
<div class="destination-overlay">
<div class="content">
<a href="destination-details.php"><h5>Amaravathi</h5></a>
</div>
</div>
</div>
</div>
</div>
</div>
</div>-->


<!--<div class="upcoming-tour-area pt-110 pb-110 chain">
<div class="container">
<div class="row d-flex justify-content-center align-items-center">
<div class="col-lg-5 d-flex justify-content-lg-start justify-content-center">
<div class="section-head-alpha text-lg-start text-center">
<h2 class="text-white">Similar Tours</h2>
<p class="text-white">"Once a year go to some place you've never been before".</p>
</div>
</div>
<div class="col-lg-7 d-flex justify-content-lg-end justify-content-center">
<div class="slider-arrows text-center d-lg-flex flex-row justify-content-center d-none gap-5">
<div class="testi-prev4" tabindex="0" role="button" aria-label="Previous slide"><i class="bi bi-arrow-left"></i></div>
<div class="testi-next4" tabindex="0" role="button" aria-label="Next slide"><i class="bi bi-arrow-right"></i></div>
</div>
</div>
</div>
<div class="row align-items-center justify-content-center fadeffect">
<div class="col-lg-12">
<div class="swiper upcoming-tour">
<div class="swiper-wrapper">
<div class="swiper-slide">
<div class="package-card-beta">
<div class="package-thumb">
<a href="package.php"><img src="/vizagtourism/pictures/Alappuzha.jpg" alt=""></a>
<p class="card-lavel">
<i class="bi bi-clock"></i> <span>2 Day & 1 night</span>
</p>
</div>
<div class="package-card-body">
<h3 class="p-card-title"><a href="package.php">Alappuzha Tour Package.</a></h3>
<div class="p-card-bottom">
<div class="book-btn">
<a href="package.php">Book Now <i class='bx bxs-right-arrow-alt'></i></a>
</div>
<div class="p-card-info">
<span>From</span>
<h6>5500 <span>Per Person</span></h6>
</div>
</div>
</div>
</div>
</div>
<div class="swiper-slide">
<div class="package-card-beta">
<div class="package-thumb">
<a href="package.php"><img src="/vizagtourism/pictures/Kollam.jpg" alt=""></a>
<p class="card-lavel">
<i class="bi bi-clock"></i> <span>3 Day & 2 night</span>
</p>
</div>
<div class="package-card-body">
<h3 class="p-card-title"><a href="package.php">Kollam Tour Package</a></h3>
<div class="p-card-bottom">
<div class="book-btn">
<a href="package.php">Book Now <i class='bx bxs-right-arrow-alt'></i></a>
</div>
<div class="p-card-info">
<span>From</span>
<h6>8400 <span>Per Person</span></h6>
</div>
</div>
</div>
</div>
</div>
<div class="swiper-slide">
<div class="package-card-beta">
<div class="package-thumb">
<a href="package.php"><img src="/vizagtourism/pictures/Kottayam.jpg" alt=""></a>
<p class="card-lavel">
<i class="bi bi-clock"></i> <span>2 Day & 1 night</span>
</p>
</div>
<div class="package-card-body">
<h3 class="p-card-title"><a href="package.php">Kottayam Tour Package.</a></h3>
<div class="p-card-bottom">
<div class="book-btn">
<a href="package.php">Book Now <i class='bx bxs-right-arrow-alt'></i></a>
</div>
<div class="p-card-info">
<span>From</span>
<h6>5150<span>Per Person</span></h6>
</div>
</div>
</div>
</div>
</div>
<div class="swiper-slide">
<div class="package-card-beta">
<div class="package-thumb">
<a href="package.php"><img src="/vizagtourism/pictures/Kumarakom.jpg" alt=""></a>
<p class="card-lavel">
<i class="bi bi-clock"></i> <span>2 Day & 1 night</span>
</p>
</div>
<div class="package-card-body">
<h3 class="p-card-title"><a href="package.php">Kumarakom Tour Package. </a></h3>
<div class="p-card-bottom">
<div class="book-btn">
<a href="package.php">Book Now <i class='bx bxs-right-arrow-alt'></i></a>
</div>
<div class="p-card-info">
<span>From</span>
<h6>5300<span>Per Person</span></h6>
</div>
</div>
</div>
</div>
</div>-->
<div class="swiper-slide">
<div class="package-card-beta">
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
<div class="row text-center d-flex justify-content-center">
<div class="col-md-4">
<p class="button-fill-primary all-package-btn">Reviews</p>
</div>
</div>
</div>
</div>


<!--<div class="package-area offer-package-style-one pt-110 pb-110">
<div class="container">
<div class="row d-flex justify-content-center align-items-center">
<div class="col-lg-6 col-sm-10">
<div class="section-head-alpha">
<h2>Last Minute Offers</h2>
<p>Duis rutrum nisl urna maecenas vel libero faucibus nisi vene natis hendrerit aid lectus suspendissendt.</p>
</div>
</div>
<div class="col-lg-6 col-sm-10">
<div class="package-btn text-lg-end">
<a href="package.php" class="button-fill-primary all-package-btn">View All Tour</a>
</div>
</div>
</div>
<div class="row align-items-center">
<div class="offer-switch-button2">
<ul class="nav nav-pills mb-3 justify-content-center gap-sm-4 gap-3" id="pills-tab" role="tablist">
<li class="nav-item" role="presentation">
<button class="nav-link active" id="pills-offer1" data-bs-toggle="pill" data-bs-target="#pills-offer-tab1" type="button" role="tab" aria-controls="pills-offer-tab1" aria-selected="true">10%</button>
</li>
<li class="nav-item" role="presentation">
<button class="nav-link" id="pills-offer2" data-bs-toggle="pill" data-bs-target="#pills-offer-tab2" type="button" role="tab" aria-controls="pills-offer-tab2" aria-selected="false">30%</button>
</li>
<li class="nav-item" role="presentation">
<button class="nav-link" id="pills-offer3" data-bs-toggle="pill" data-bs-target="#pills-offer-tab3" type="button" role="tab" aria-controls="pills-offer-tab3" aria-selected="false">20%</button>
</li>
 </ul>
</div>
<div class="offer-single-tabs">
<div class="tab-content" id="pills-tabContent">
<div class="tab-pane fade show active" id="pills-offer-tab1" role="tabpanel" aria-labelledby="pills-offer1">
<div class="row d-flex justify-content-center g-4">
<div class="col-lg-4 col-md-6 fadeffect">
<div class="package-card-beta">
<div class="package-thumb">
<a href="package.php"><img src="assets/images/destination/lastoffer1.png" alt=""></a>
<p class="card-lavel">
<i class="bi bi-clock"></i> <span>3 Day & 2 night</span>
</p>
</div>
<div class="package-card-body">
<h3 class="p-card-title"><a href="package.php">Etiam placerat dictum consequat an
Pellentesque habitant morbi.</a></h3>
<div class="p-card-bottom">
<div class="book-btn">
<a href="package.php">Book Now <i class='bx bxs-right-arrow-alt'></i></a>
</div>
<div class="p-card-info">
<span>From</span>
<h6>$79.00 <span>Per Person</span></h6>
</div>
</div>
</div>
</div>
</div>
<div class="col-lg-4 col-md-6 fadeffect">
<div class="package-card-beta">
<div class="package-thumb">
<a href="package.php"><img src="assets/images/destination/lastoffer2.png" alt=""></a>
<p class="card-lavel">
<i class="bi bi-clock"></i> <span>3 Day & 2 night</span>
</p>
</div>
<div class="package-card-body">
<h3 class="p-card-title"><a href="package.php">Etiam placerat dictum consequat an
Pellentesque habitant morbi.</a></h3>
<div class="p-card-bottom">
<div class="book-btn">
<a href="package.php">Book Now <i class='bx bxs-right-arrow-alt'></i></a>
</div>
<div class="p-card-info">
<span>From</span>
<h6>$79.00 <span>Per Person</span></h6>
</div>
</div>
</div>
</div>
</div>
<div class="col-lg-4 col-md-6 fadeffect">
<div class="package-card-beta">
 <div class="package-thumb">
<a href="package.php"><img src="assets/images/destination/lastoffer3.png" alt=""></a>
<p class="card-lavel">
<i class="bi bi-clock"></i> <span>3 Day & 2 night</span>
</p>
</div>
<div class="package-card-body">
<h3 class="p-card-title"><a href="package.php">Etiam placerat dictum consequat an
Pellentesque habitant morbi.</a></h3>
<div class="p-card-bottom">
<div class="book-btn">
<a href="package.php">Book Now <i class='bx bxs-right-arrow-alt'></i></a>
</div>
<div class="p-card-info">
<span>From</span>
<h6>$79.00 <span>Per Person</span></h6>
</div>
</div>
</div>
</div>
</div>
<div class="col-lg-4 col-md-6 fadeffect">
<div class="package-card-beta">
<div class="package-thumb">
<a href="package.php"><img src="assets/images/destination/lastoffer4.png" alt=""></a>
<p class="card-lavel">
<i class="bi bi-clock"></i> <span>3 Day & 2 night</span>
</p>
</div>
<div class="package-card-body">
<h3 class="p-card-title"><a href="package.php">Etiam placerat dictum consequat an
Pellentesque habitant morbi.</a></h3>
<div class="p-card-bottom">
<div class="book-btn">
<a href="package.php">Book Now <i class='bx bxs-right-arrow-alt'></i></a>
</div>
<div class="p-card-info">
<span>From</span>
<h6>$79.00 <span>Per Person</span></h6>
</div>
</div>
</div>
</div>
</div>
<div class="col-lg-4 col-md-6 fadeffect">
<div class="package-card-beta">
<div class="package-thumb">
<a href="package.php"><img src="assets/images/destination/lastoffer5.png" alt=""></a>
<p class="card-lavel">
<i class="bi bi-clock"></i> <span>3 Day & 2 night</span>
</p>
</div>
<div class="package-card-body">
<h3 class="p-card-title"><a href="package.php">Etiam placerat dictum consequat an
Pellentesque habitant morbi.</a></h3>
<div class="p-card-bottom">
<div class="book-btn">
<a href="package.php">Book Now <i class='bx bxs-right-arrow-alt'></i></a>
</div>
<div class="p-card-info">
<span>From</span>
<h6>$79.00 <span>Per Person</span></h6>
</div>
</div>
</div>
</div>
</div>
<div class="col-lg-4 col-md-6 fadeffect">
<div class="package-card-beta">
<div class="package-thumb">
<a href="package.php"><img src="assets/images/destination/lastoffer6.png" alt=""></a>
<p class="card-lavel">
<i class="bi bi-clock"></i> <span>3 Day & 2 night</span>
</p>
</div>
<div class="package-card-body">
<h3 class="p-card-title"><a href="package.php">Etiam placerat dictum consequat an
Pellentesque habitant morbi.</a></h3>
<div class="p-card-bottom">
<div class="book-btn">
<a href="package.php">Book Now <i class='bx bxs-right-arrow-alt'></i></a>
</div>
<div class="p-card-info">
<span>From</span>
<h6>$79.00 <span>Per Person</span></h6>
</div>
</div>
</div>
</div>
</div>
</div>
<div class="package-page-btn text-center mt-60">
<a href="package.php" class="button-fill-round">View All Offer</a>
</div>
</div>
<div class="tab-pane fade" id="pills-offer-tab2" role="tabpanel" aria-labelledby="pills-offer2">
<div class="row d-flex justify-content-center g-4">
<div class="col-lg-4 col-md-6 fadeffect">
<div class="package-card-beta">
<div class="package-thumb">
<a href="package.php"><img src="assets/images/destination/lastoffer6.png" alt=""></a>
<p class="card-lavel">
<i class="bi bi-clock"></i> <span>3 Day & 2 night</span>
</p>
</div>
<div class="package-card-body">
<h3 class="p-card-title"><a href="package.php">Etiam placerat dictum consequat an
 Pellentesque habitant morbi.</a></h3>
<div class="p-card-bottom">
<div class="book-btn">
<a href="package.php">Book Now <i class='bx bxs-right-arrow-alt'></i></a>
</div>
<div class="p-card-info">
<span>From</span>
<h6>$79.00 <span>Per Person</span></h6>
</div>
</div>
</div>
</div>
</div>
<div class="col-lg-4 col-md-6 fadeffect">
<div class="package-card-beta">
<div class="package-thumb">
<a href="package.php"><img src="assets/images/destination/lastoffer1.png" alt=""></a>
<p class="card-lavel">
<i class="bi bi-clock"></i> <span>3 Day & 2 night</span>
</p>
</div>
<div class="package-card-body">
<h3 class="p-card-title"><a href="package.php">Etiam placerat dictum consequat an
Pellentesque habitant morbi.</a></h3>
<div class="p-card-bottom">
<div class="book-btn">
<a href="package.php">Book Now <i class='bx bxs-right-arrow-alt'></i></a>
</div>
<div class="p-card-info">
<span>From</span>
<h6>$79.00 <span>Per Person</span></h6>
</div>
</div>
</div>
</div>
</div>
<div class="col-lg-4 col-md-6 fadeffect">
<div class="package-card-beta">
<div class="package-thumb">
<a href="package.php"><img src="assets/images/destination/lastoffer2.png" alt=""></a>
<p class="card-lavel">
<i class="bi bi-clock"></i> <span>3 Day & 2 night</span>
</p>
</div>
<div class="package-card-body">
<h3 class="p-card-title"><a href="package.php">Etiam placerat dictum consequat an
Pellentesque habitant morbi.</a></h3>
<div class="p-card-bottom">
<div class="book-btn">
<a href="package.php">Book Now <i class='bx bxs-right-arrow-alt'></i></a>
</div>
<div class="p-card-info">
<span>From</span>
<h6>$79.00 <span>Per Person</span></h6>
</div>
</div>
</div>
</div>
</div>
</div>
<div class="package-page-btn text-center mt-60">
<a href="package.php" class="button-fill-round">View All Offer</a>
</div>
</div>
<div class="tab-pane fade" id="pills-offer-tab3" role="tabpanel" aria-labelledby="pills-offer3">
<div class="row d-flex justify-content-center g-4">
<div class="col-lg-4 col-md-6 fadeffect">
<div class="package-card-beta">
<div class="package-thumb">
<a href="package.php"><img src="assets/images/destination/lastoffer5.png" alt=""></a>
<p class="card-lavel">
<i class="bi bi-clock"></i> <span>3 Day & 2 night</span>
</p>
</div>
<div class="package-card-body">
<h3 class="p-card-title"><a href="package.php">Etiam placerat dictum consequat an
Pellentesque habitant morbi.</a></h3>
<div class="p-card-bottom">
<div class="book-btn">
<a href="package.php">Book Now <i class='bx bxs-right-arrow-alt'></i></a>
</div>
<div class="p-card-info">
<span>From</span>
<h6>$79.00 <span>Per Person</span></h6>
</div>
</div>
</div>
</div>
</div>
<div class="col-lg-4 col-md-6 fadeffect">
<div class="package-card-beta">
<div class="package-thumb">
<a href="package.php"><img src="assets/images/destination/lastoffer6.png" alt=""></a>
<p class="card-lavel">
<i class="bi bi-clock"></i> <span>3 Day & 2 night</span>
</p>
</div>
<div class="package-card-body">
<h3 class="p-card-title"><a href="package.php">Etiam placerat dictum consequat an
Pellentesque habitant morbi.</a></h3>
<div class="p-card-bottom">
<div class="book-btn">
<a href="package.php">Book Now <i class='bx bxs-right-arrow-alt'></i></a>
</div>
<div class="p-card-info">
<span>From</span>
<h6>$79.00 <span>Per Person</span></h6>
</div>
</div>
</div>
</div>
</div>
<div class="col-lg-4 col-md-6 fadeffect">
<div class="package-card-beta">
<div class="package-thumb">
<a href="package.php"><img src="assets/images/destination/lastoffer3.png" alt=""></a>
<p class="card-lavel">
<i class="bi bi-clock"></i> <span>3 Day & 2 night</span>
</p>
</div>
<div class="package-card-body">
<h3 class="p-card-title"><a href="package.php">Etiam placerat dictum consequat an
Pellentesque habitant morbi.</a></h3>
<div class="p-card-bottom">
<div class="book-btn">
<a href="package.php">Book Now <i class='bx bxs-right-arrow-alt'></i></a>
</div>
<div class="p-card-info">
<span>From</span>
<h6>$79.00 <span>Per Person</span></h6>
</div>
</div>
</div>
</div>
</div>
<div class="col-lg-4 col-md-6 fadeffect">
<div class="package-card-beta">
<div class="package-thumb">
<a href="package.php"><img src="assets/images/destination/lastoffer4.png" alt=""></a>
<p class="card-lavel">
<i class="bi bi-clock"></i> <span>3 Day & 2 night</span>
</p>
</div>
<div class="package-card-body">
<h3 class="p-card-title"><a href="package.php">Etiam placerat dictum consequat an
Pellentesque habitant morbi.</a></h3>
<div class="p-card-bottom">
<div class="book-btn">
<a href="package.php">Book Now <i class='bx bxs-right-arrow-alt'></i></a>
</div>
<div class="p-card-info">
<span>From</span>
<h6>$79.00 <span>Per Person</span></h6>
</div>
</div>
</div>
</div>
</div>
</div>
<div class="package-page-btn text-center mt-60">
<a href="package.php" class="button-fill-round">View All Offer</a>
</div>
</div>
</div>
</div>
</div>
</div>
</div>-->


<div class="testimonial-area testimonial-style-three pt-110 pb-110">
<div class="container-fluid">
<div class="row d-flex justify-content-center align-items-center">
<div class="col-lg-5 col-sm-10">
<div class="section-head-alpha text-lg-start text-center">
<h2 class="text-white">Travelers Review</h2>
<p class="text-white">We all need people who will give us feedback.</p>
</div>
</div>
<div class="col-lg-6 col-sm-10 d-flex justify-content-end">
<div class="slider-arrows text-center d-lg-flex flex-row d-none gap-5">
<div class="testi-prev4" tabindex="0" role="button" aria-label="Previous slide"> <i class="bi bi-arrow-left"></i></div>
<div class="testi-next4" tabindex="0" role="button" aria-label="Next slide"><i class="bi bi-arrow-right"></i></div>
</div>
</div>
</div>
<div class="row align-items-center justify-content-center">
<div class="col-lg-12">
<div class="swiper testimonial-slider-three">
<div class="swiper-wrapper">
<div class="swiper-slide">
<div class="testimonial-card-beta mx-auto">
<div class="testimonial-quote-icon">
<img src="assets/images/icons/quote-review.svg" class="img-fluid" />
</div>
<div class="testimonial-card-body">
<div class="testimonial-info">
<div class="reviewr-info">
<div class="single-thumb">
<img src="/vizagtourism/pictures/person1.jpg" alt="" style="height:40px">
</div>
<div class="reviwer-info-cotn">
<h5 class="reviewer-name">Charishma</h5>
<ul class="reviewer-rating gap-2">
<li>
<i class="bi bi-star-fill"></i>
</li>
<li>
<i class="bi bi-star-fill"></i>
</li>
<li>
<i class="bi bi-star-fill"></i>
</li>
<li>
<i class="bi bi-star-fill"></i>
</li>
<li>
<i class="bi bi-star-fill"></i>
</li>
</ul>
</div>
</div>
</div>
<div class="review-texts">
<p>
Vizag is the one of the good place in Andhra Pradesh. It is the latest IT destination in Andhra Pradesh, and it is the second biggest city in AP. Araku is the one of the most famous hill station which is 100km far from vizag. It is the most beautiful hill station. You will have train every day from vizag to Araku.


</p>
</div>
</div>
</div>
</div>
<div class="swiper-slide">
<div class="testimonial-card-beta mx-auto">
<div class="testimonial-quote-icon">
<img src="assets/images/icons/quote-review.svg" class="img-fluid" />
</div>
<div class="testimonial-card-body">
<div class="testimonial-info">
<div class="reviewr-info">
<div class="single-thumb">
<img src="/vizagtourism/pictures/person3.jpg" alt="" style="height:40px">
</div>
<div class="reviwer-info-cotn">
<h5 class="reviewer-name">Swetha</h5>
<ul class="reviewer-rating gap-2">
<li>
<i class="bi bi-star-fill"></i>
</li>
<li>
<i class="bi bi-star-fill"></i>
</li>
<li>
<i class="bi bi-star-fill"></i>
</li>
<li>
<i class="bi bi-star-fill"></i>
</li>
<li>
<i class="bi bi-star-fill"></i>
</li>
</ul>
</div>
</div>
</div>
<div class="review-texts">
<p>
Visakhapatnam, this name when spelled reminds of the beaches it consists of. It is one the tourist places in the state of Andhra pradesh, India. Apart from the beaches it potrays its rich and cool culture. This city consists of one of its kind natural harbours, which is definitely an other attraction.

</p>
</div>
</div>
</div>
</div>
<div class="swiper-slide">
<div class="testimonial-card-beta mx-auto">
<div class="testimonial-quote-icon">
<img src="assets/images/icons/quote-review.svg" class="img-fluid" />
</div>
<div class="testimonial-card-body">
<div class="testimonial-info">
<div class="reviewr-info">
<div class="single-thumb">
 <img src="/vizagtourism/pictures/person2.jpg" alt="">
</div>
<div class="reviwer-info-cotn">
<h5 class="reviewer-name">Laya</h5>
<ul class="reviewer-rating gap-2">
<li>
<i class="bi bi-star-fill"></i>
</li>
<li>
<i class="bi bi-star-fill"></i>
</li>
<li>
<i class="bi bi-star-fill"></i>
</li>
<li>
<i class="bi bi-star-fill"></i>
</li>
<li>
<i class="bi bi-star-fill"></i>
 </li>
</ul>
</div>
</div>
</div>
<div class="review-texts">
<p>
Its a very fablous place.It is more important for its port harbour. It very cool place that we can enjoy. This city is like a clean and green city. It consists of zoo park,childrens theater,mgm selve world. Its a very interesting place that every one could visit this place. it is also famous for its industries.

</p>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>


<div class="guide-area guide-style-one pt-110">
<div class="container">
<div class="row justify-content-center">
<div class="col-lg-6 col-sm-10">
<div class="section-head-alpha text-cente">
<h2 style="margin-left:-50%;">Tour Guide</h2>
<p style="margin-left:-50%;">"Life is a journey, not a destination"</p>
</div>
</div>
</div>
<div class="row d-flex justify-content-center g-4">
<div class="col-lg-4 col-md-6 col-md-10">
<div class="guide-card-beta">
<div class="guide-image">
<img src="/vizagtourism/pictures/charishma.jpg" alt="" style="height:300px;width:80%">
<ul class="guide-social-links d-flex justify-content-center flex-column gap-3">
<li><a href="#"><i class='bx bxl-instagram'></i></a></li>
<li><a href="#"><i class='bx bxl-facebook'></i></a></li>
<li><a href="#"><i class='bx bxl-twitter'></i></a></li>
<li><a href="#"><i class="bx bxl-whatsapp"></i></a></li>
</ul>
</div>
<div class="guide-content">
<a href="guide.php"><h4 class="guide-name" style="margin-left:-30%">Charishma</h4></a>
<h6 class="guide-designation"style="margin-left:-30%">Tour Guide</h6>
</div>
</div>
</div>
<div class="col-lg-4 col-md-6 col-md-10">
<div class="guide-card-beta">
<div class="guide-image">
<img src="/vizagtourism/pictures/nagalaya.jpg" alt="" style="height:300px;width:80%">
<ul class="guide-social-links d-flex justify-content-center flex-column gap-3">
<li><a href="#"><i class='bx bxl-instagram'></i></a></li>
<li><a href="#"><i class='bx bxl-facebook'></i></a></li>
<li><a href="#"><i class='bx bxl-twitter'></i></a></li>
<li><a href="#"><i class="bx bxl-whatsapp"></i></a></li>
</ul>
</div>
<div class="guide-content">
<a href="guide.php"><h4 class="guide-name" style="margin-left:-30%">Nagalaya</h4></a>
<h6 class="guide-designation" style="margin-left:-30%">Tour Guide</h6>
</div>
</div>
</div>
<div class="col-lg-4 col-md-6 col-md-10">
<div class="guide-card-beta">
<div class="guide-image">
<img src="/vizagtourism/pictures/laya.jpg" alt="" style="height:300px;width:80%">
<ul class="guide-social-links d-flex justify-content-center flex-column gap-3">
<li><a href="#"><i class='bx bxl-instagram'></i></a></li>
<li><a href="#"><i class='bx bxl-facebook'></i></a></li>
<li><a href="#"><i class='bx bxl-twitter'></i></a></li>
<li><a href="#"><i class="bx bxl-whatsapp"></i></a></li>
</ul>
</div>
<div class="guide-content">
<a href="guide.php"><h4 class="guide-name" style="margin-left:-30%">Laya</h4></a>
<h6 class="guide-designation" style="margin-left:-30%">Tour Guide</h6>
</div>
</div>
</div>
</div>
</div>
</div>


<!--<div class="blog-area blog-style-two pt-110 pb-110">
<div class="container">
<div class="row d-flex justify-content-center align-items-center">
<div class="col-lg-6 col-sm-10">
<div class="section-head-alpha">
<h2>Recent Post</h2>
<p>Duis rutrum nisl urna maecenas vel libero faucibus nisi vene natis hendrerit aid lectus suspendissendt.</p>
</div>
</div>
<div class="col-lg-6 col-sm-10">
<div class="package-btn text-lg-end">
<a href="blog-sidebar.php" class="button-fill-primary all-package-btn">View All Post</a>
</div>
</div>
</div>
<div class="row">
<div class="col-lg-4 col-md-6">
<div class="blog-card-beta">
<div class="blog-thumb">
<a href="blog-details.php">
<img src="assets/images/blog/home3-blog1.png" alt="">
</a>
<div class="blog-lavel">
<a href="#">Novembar 16, 2021</a>
</div>
</div>
<div class="blog-content">
<div class="blog-body-top">
<a href="#" class="blog-writer"><i class="bi bi-person-circle"></i> By John Smith </a>
<a href="#" class="blog-comments"><i class="bi bi-calendar3"></i> Novembar 16, 2021</a>
</div>
<h4 class="blog-title"><a href="blog-details.php">vitae tempor convallis, mi ligula an
suscipit nunc, ornare suscipit.</a></h4>
</div>
</div>
</div>
<div class="col-lg-4 col-md-6">
<div class="blog-card-beta">
<div class="blog-thumb">
<a href="blog-details.php">
<img src="assets/images/blog/home3-blog2.png" alt="">
</a>
<div class="blog-lavel">
<a href="#">Novembar 16, 2021</a>
</div>
</div>
<div class="blog-content">
<div class="blog-body-top">
<a href="#" class="blog-writer"><i class="bi bi-person-circle"></i> By John Smith </a>
<a href="#" class="blog-comments"><i class="bi bi-calendar3"></i> Novembar 16, 2021</a>
 </div>
<h4 class="blog-title"><a href="blog-details.php">Mauris commodo massa vel diamnat
feugiat sagittis Nunc maxim.</a></h4>
</div>
</div>
</div>
<div class="col-lg-4 col-md-6">
<div class="blog-card-beta">
<div class="blog-thumb">
<a href="blog-details.php">
<img src="assets/images/blog/home3-blog3.png" alt="">
</a>
<div class="blog-lavel">
<a href="#">Novembar 16, 2021</a>
</div>
</div>
<div class="blog-content">
<div class="blog-body-top">
<a href="#" class="blog-writer"><i class="bi bi-person-circle"></i> By John Smith </a>
<a href="#" class="blog-comments"><i class="bi bi-calendar3"></i> Novembar 16, 2021</a>
</div>
<h4 class="blog-title"><a href="blog-details.php">Nulla urna leo, volutpat eu maurisa eget
luctus malesuada urna.</a></h4>
</div>
</div>
</div>
</div>
</div>
</div>-->


<div class="more-update-section">
<div class="container">
<div class="row d-flex justify-content-center align-items-center gy-5">
<div class="col-lg-6 text-lg-start text-center">
<div class="more-update-content">
<h2>Join Us for More Update</h2>
<p>“A journey of a thousand miles begins with a single step”</p>
</div>
</div>
<div class="col-lg-3 text-lg-end text-center">
<button class="button-fill-primary update-btn">Join Now</button>
</div>
</div>
</div>
</div>
<?php include'footer.php'?>
</body>
</html>