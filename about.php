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

<!--<div class="preloader">
<div class="loader">
<span></span>
<span></span>
<span></span>
<span></span>
</div>
</div>-->


<div class="main-searchbar-wrapper">
<div class="container">
<div class="multi-main-searchber">
<div class="main-searchbar-close search-toggle">
<i class="bi bi-x-lg"></i>
</div>
<form action="#" method="post" id="main_searchbar">
<div class="row g-4">
<div class="col-lg-10">
<div class="row gx-0 gy-4">
<div class="col-lg-3 col-md-6">
<div class="search-box-single destination-box">
<div class="searchbox-icon ">
<i class="bi bi-geo-alt"></i>
</div>
<div class="searchbox-input">
<label for="deatination_drop">Destination</label>
<select data-placeholder="Where Are You Going?" id="deatination_drop">
<option value="">Where Are You Going?</option>
<optgroup label="India"></optgroup>
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
</form>
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


<div class="topbar-area topbar-style-one">
<div class="container">
<div class="row">
<div class="col-xl-4 align-items-center d-xl-flex d-none">
<div class="topbar-contact-left">

</div>
</div>
 <div class="col-xl-5 col-lg-6 col-md-6 text-xl-center text-md-start text-center">

</div>
<div class="col-xl-3 col-lg-6 col-md-6 d-md-flex  d-none align-items-center justify-content-end">

</div>
</div>
</div>
</div>
<?php include 'header.php'?>


<div class="breadcrumb breadcrumb-style-one">
 <div class="container">
<div class="col-lg-12 text-center">
<h2 class="breadcrumb-title">About Us</h2>
<ul class="d-flex justify-content-center breadcrumb-items">
<li class="breadcrumb-item"><a href="index.php">Home</a></li>
<li class="breadcrumb-item active">About Us</li>
</ul>
</div>
</div>
</div>


<div class="about-main-wrappper pt-100">
<div class="container">
<div class="about-tab-wrapper">
<div class="row justify-content-center align-items-center">
<div class="col-lg-6">
<div class="about-tab-image-grid text-center">
<div class="about-video d-inline-block">
<img src="assets/images/about/about-g2.png" alt="">
<div class="video-overlay">
<a data-fancybox href="https://www.youtube.com/watch?v=_sI_Ps7JSEk" class="play-icon video-popup">
<i class="bi bi-play-fill"></i>
</a>
</div>
</div>
<div class="row float-images g-4">
<div class="col-lg-6 col-md-6 col-sm-6">
<div class="about-image">
<img src="assets/images/about/about-g1.png" alt="">
</div>
</div>
<div class="col-lg-6 col-md-6 col-sm-6">
<div class="about-image">
<img src="assets/images/about/about-g3.png" alt="">
</div>
</div>
</div>
</div>
</div>
<div class="col-lg-6 mt-5 mt-lg-0">
<div class="about-tab-wrap">
<h2 class="about-wrap-title">
About Our Company And <span>What We Are</span> Offer.
</h2>
<div class="about-tab-switcher">
<ul class="nav nav-pills mb-3 justify-content-md-between justify-content-center" id="about-tab-pills" role="tablist">
<li class="nav-item" role="presentation">
<div class="nav-link active" id="pills-about1" data-bs-toggle="pill" data-bs-target="#about-pills1" role="tab" aria-controls="about-pills1" aria-selected="true">
<h3>10</h3>
<h6>Years Experience</h6>
</div>
</li>
<li class="nav-item" role="presentation">
<div class="nav-link" id="pills-about2" data-bs-toggle="pill" data-bs-target="#about-pills2" role="tab" aria-controls="about-pills2" aria-selected="false">
<h3>100+</h3>
<h6>Tour Guide</h6>
</div>
</li>
<li class="nav-item" role="presentation">
<div class="nav-link" id="pills-about3" data-bs-toggle="pill" data-bs-target="#about-pills3" role="tab" aria-controls="about-pills3" aria-selected="false">
<h3>500+</h3>
 <h6>Travelar Connect</h6>
</div>
</li>
</ul>
</div>
<div class="tab-content about-tab-content" id="pills-tabContent">
<div class="tab-pane fade show active" id="about-pills1" role="tabpanel" aria-labelledby="pills-about1">
<p>The tourism sector in India is an integral pillar of the Make in India programme. The tourism industry in India plays a role of significant economic multiplier and becomes critical since India has to grow at rapid rates and create jobs.More than half of the Ministry of Tourism’s budget is channelised for funding the development of destinations, circuits, mega projects as well as rural tourism infrastructure projects.Economical treatment, quality healthcare infra & highly skilled doctors</p>
</div>
<div class="tab-pane fade" id="about-pills2" role="tabpanel" aria-labelledby="pills-about2">
<p> The tourism sector in India is an integral pillar of the Make in India programme. The tourism industry in India plays a role of significant economic multiplier and becomes critical since India has to grow at rapid rates and create jobs.More than half of the Ministry of Tourism’s budget is channelised for funding the development of destinations, circuits, mega projects as well as rural tourism infrastructure projects.Economical treatment, quality healthcare infra & highly skilled doctors</p>
</div>
<div class="tab-pane fade" id="about-pills3" role="tabpanel" aria-labelledby="pills-about3">
<p>The tourism sector in India is an integral pillar of the Make in India programme. The tourism industry in India plays a role of significant economic multiplier and becomes critical since India has to grow at rapid rates and create jobs.More than half of the Ministry of Tourism’s budget is channelised for funding the development of destinations, circuits, mega projects as well as rural tourism infrastructure projects.Economical treatment, quality healthcare infra & highly skilled doctors</p>
</div>
</div>
</div>
</div>
</div>
</div>
<div class="row pt-100 align-items-center">
<div class="col-lg-6">
<div class="achievement-counter-wrap">
<h2 class="about-wrap-title">
Why Package Book With
<span>Vizag Tourism</span>
</h2>
<div class="achievement-counter-cards">
<div class="achievement-counter-card flex-sm-row flex-column text-sm-start text-center ">
<div class="counter-box mb-sm-0 mb-3">
<h2>500+</h2>
<h6>Awesome Tour</h6>
</div>
<p>Travel makes one modest. You see what a tiny place you occupy in the world. .</p>
</div>
<div class="achievement-counter-card flex-sm-row flex-column text-sm-start text-center">
<div class="counter-box mb-3">
<h2>300+</h2>
<h6>Destinations</h6>
</div>
<p> A good destination statement describes a clear and confirmable market and the position the organization will reach by a future date, as identified by specific measures</p>
</div>
<div class="achievement-counter-card flex-sm-row flex-column text-sm-start text-center">
<div class="counter-box mb-3">
<h2>150+</h2>
<h6> Mountains</h6>
</div>
<p> We live in a wonderful world that is full of beauty, charm and adventure. There is no end to the adventures we can have if only we seek them with our eyes open..</p>
</div>
</div>
</div>
</div>
<div class="col-lg-6">
<div class="about-image-group mt-5 mt-lg-0">
<img src="assets/images/about/about-image-group2.png" alt="" class="img-fluid">
</div>
</div>
</div>
</div>
</div>


<div class="testimonial-area testimonial-style-one mt-120">
<div class="testimonial-shape-group"></div>
<div class="container position-relative">
<div class="row align-items-center">
<div class="col-lg-8">
<div class="section-head-alpha">
<h2>What Our Client Say About Us</h2>
</div>
</div>
<div class="col-lg-4">
<div class="slider-arrows text-center d-lg-flex d-none justify-content-end mb-3">
<div class="testi-prev custom-swiper-prev" tabindex="0" role="button" aria-label="Previous slide"> <i class="bi bi-chevron-left"></i> </div>
<div class="testi-next custom-swiper-next" tabindex="0" role="button" aria-label="Next slide"><i class="bi bi-chevron-right"></i></div>
</div>
</div>
</div>
<div class="swiper testimonial-slider-one position-relative">
<div class="swiper-wrapper">
<div class="swiper-slide">
<div class="testimonial-card testimonial-card-alpha">
<div class="testimonial-overlay-img">
<img src="assets/images/reviewer/reviewer-1.png" alt="">
</div>
<div class="testimonial-card-top">
<div class="qoute-icon"><i class='bx bxs-quote-left'></i></div>
<div class="testimonial-thumb"><img src="/vizagtourism/pictures/person1.jpg" alt=""></div>
<h3 class="testimonial-count">01</h3>
</div>
<div class="testimonial-body">
<p>Deals always tend to be hard to beat on Vizag tourism. We've booked with them for years for this reason. On this occasion, it took a long while on a few occasions for Vizag tourism to return phone calls, and some minor details were incorrect on itineraries received .</p>
<div class="testimonial-bottom">
<div class="reviewer-info">
<h4 class="reviewer-name">Laya</h4>
<h6>Traveller</h6>
</div>
<ul class="testimonial-rating">
<li><i class="bi bi-star-fill"></i></li>
<li><i class="bi bi-star-fill"></i></li>
<li><i class="bi bi-star-fill"></i></li>
<li><i class="bi bi-star-fill"></i></li>
<li><i class="bi bi-star-fill"></i></li>
</ul>
</div>
</div>
</div>
</div>
<div class="swiper-slide">
<div class="testimonial-card testimonial-card-alpha">
<div class="testimonial-overlay-img">
<img src="assets/images/reviewer/reviewer-1.png" alt="">
</div>
<div class="testimonial-card-top">
<div class="qoute-icon"><i class='bx bxs-quote-left'></i></div>
<div class="testimonial-thumb"><img src="/vizagtourism/pictures/person3.jpg" alt=""></div>
<h3 class="testimonial-count">02</h3>
</div>
<div class="testimonial-body">
<p>Excellent! Very good service from beginning to end. Even with a COVID-related delay in the middle of it, jyothi stayed in contact with us and got us a reschedule with the utmost of ease.Service was prompt, and will use the service again. Thank you!</p>
<div class="testimonial-bottom">
<div class="reviewer-info">
<h4 class="reviewer-name">Swetha</h4>
<h6>Traveller</h6>
</div>
<ul class="testimonial-rating">
<li><i class="bi bi-star-fill"></i></li>
<li><i class="bi bi-star-fill"></i></li>
<li><i class="bi bi-star-fill"></i></li>
<li><i class="bi bi-star-fill"></i></li>
<li><i class="bi bi-star-fill"></i></li>
</ul>
</div>
</div>
</div>
</div>
<div class="swiper-slide">
<div class="testimonial-card testimonial-card-alpha">
<div class="testimonial-overlay-img">
<img src="assets/images/reviewer/reviewer-1.png" alt="">
</div>
<div class="testimonial-card-top">
<div class="qoute-icon"><i class='bx bxs-quote-left'></i></div>
<div class="testimonial-thumb"><img src="/vizagtourism/pictures/person2.jpg" alt=""></div>
<h3 class="testimonial-count">03</h3>
</div>
<div class="testimonial-body">
<p>Everything was very simple ,good and perfect and we were given all the information we required,Service was prompt. Thank you for the great service and Thank you for keeping me up-to-date with our booking</p>
<div class="testimonial-bottom">
<div class="reviewer-info">
<h4 class="reviewer-name">Charishma</h4>
<h6>Traveller</h6>
</div>
<ul class="testimonial-rating">
<li><i class="bi bi-star-fill"></i></li>
<li><i class="bi bi-star-fill"></i></li>
<li><i class="bi bi-star-fill"></i></li>
<li><i class="bi bi-star-fill"></i></li>
<li><i class="bi bi-star-fill"></i></li>
</ul>
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
<div class="row">
<div class="col-lg-12">
<div class="section-head-gamma">
<h2>Tour Guide</h2>
</div>
</div>
</div>
<div class="row">
<div class="col-lg-4 col-md-6">
<div class="guide-card-gamma">
<div class="guide-image">
<img src="/vizagtourism/pictures/guide3.jpg" alt="" style="height:410px">
<ul class="guide-social-links">
<li><a href="#"><i class='bx bxl-instagram'></i></a></li>
<li><a href="#"><i class='bx bxl-facebook'></i></a></li>
<li><a href="#"><i class='bx bxl-twitter'></i></a></li>
</ul>
<div class="contact-lavel">
<a href="#">Contact</a>
</div>
</div>
<div class="guide-content">
<h4 class="guide-name">Asish Kumar</h4>
<h6 class="guide-designation">Tour Guide</h6>
</div>
</div>
</div>
<div class="col-lg-4 col-md-6">
<div class="guide-card-gamma">
<div class="guide-image">
<img src="/vizagtourism/pictures/guide1.jpg" alt="" style="height:410px">
<ul class="guide-social-links">
<li><a href="#"><i class='bx bxl-instagram'></i></a></li>
<li><a href="#"><i class='bx bxl-facebook'></i></a></li>
<li><a href="#"><i class='bx bxl-twitter'></i></a></li>
</ul>
<div class="contact-lavel">
<a href="#">Contact</a>
</div>
</div>
<div class="guide-content">
<h4 class="guide-name">Jyothi</h4>
<h6 class="guide-designation">Tour Guide</h6>
</div>
</div>
</div>
<div class="col-lg-4 col-md-6">
<div class="guide-card-gamma">
<div class="guide-image">
<img src="/vizagtourism/pictures/guide2.jpg" alt="" style="height:410px">
<ul class="guide-social-links">
<li><a href="#"><i class='bx bxl-instagram'></i></a></li>
<li><a href="#"><i class='bx bxl-facebook'></i></a></li>
<li><a href="#"><i class='bx bxl-twitter'></i></a></li>
</ul>
<div class="contact-lavel">
<a href="#">Contact</a>
</div>
</div>
<div class="guide-content">
<h4 class="guide-name">Varun Kumar</h4>
<h6 class="guide-designation">Tour Guide</h6>
</div>
</div>
</div>
</div>
</div>
</div>


<!--<div class="blog-area blog-style-two pt-120">
<div class="container">
<div class="row">
<div class="col-lg-7">
<div class="section-head-gamma text-start">
<h2>Latest Blog</h2>
</div>
</div>
<div class="col-lg-5">
<div class="blog-btn text-lg-end"><a href="#" class="button-fill-round">View All</a></div>
</div>
</div>
<div class="row">
<div class="col-lg-4 col-md-6">
<div class="blog-card-gamma">
<div class="blog-thumb">
<a href="blog-details.php">
<img src="assets/images/blog/blog-md-1.png" alt="">
</a>
<div class="blog-lavel">
<a href="#">Guide</a>
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
<div class="blog-card-gamma">
<div class="blog-thumb">
<a href="blog-details.php">
<img src="assets/images/blog/blog-md-2.png" alt="">
</a>
<div class="blog-lavel">
<a href="#">Travel</a>
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
<div class="blog-card-gamma">
<div class="blog-thumb">
<a href="blog-details.php">
<img src="assets/images/blog/blog-md-3.png" alt="">
</a>
<div class="blog-lavel">
<a href="#">Tour</a>
</div>
</div>
<div class="blog-content">
<div class="blog-body-top">
<a href="#" class="blog-writer"><i class="bi bi-person-circle"></i> By John Smith </a>
<a href="#" class="blog-comments"><i class="bi bi-calendar3"></i> Novembar 16, 2021</a>
</div>
<h4 class="blog-title"><a href="blog-details.php">Nulla urna leo, volutpat eu maurisa eget luctus malesuada urna.</a></h4>
</div>
</div>
</div>
</div>
</div>
</div>-->


<?php include'footer.php'?>
</body>
</html>