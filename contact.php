<!doctype html>
<html lang="en">

<head>
<title>Vizag Tourism</title>

<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="icon" href="/vizagtourism/pictures/icon2.jpg"  type="image/gif" sizes="20x20">

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
<optgroup label="India">

</optgroup>
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


<?php include'header.php'?>


<div class="breadcrumb breadcrumb-style-one">
 <div class="container">
<div class="col-lg-12 text-center">
<h2 class="breadcrumb-title">Contact Us</h2>
<ul class="d-flex justify-content-center breadcrumb-items">
<li class="breadcrumb-item"><a href="index.php">Home</a></li>
<li class="breadcrumb-item active">Contact Us</li>
</ul>
</div>
</div>
</div>


<div class="contact-wrapper pt-100">
<div class="container">
<div class="row align-items-center justify-content-lg-center gy-5">
<div class="col-lg-6">
<div class="contatc-intro-figure">
<img src="assets/images/banner/contact-bg.png" alt="" class="img-fluid">
</div>
</div>
<div class="col-lg-5">
<div class="contact-info">
<h3>Contact Info.</h3>
<ul>
<li>
<h6>Let’s Talk</h6>
<a href="https://demo.egenslab.com/cdn-cgi/l/email-protection#ea83848c85aa8f928b879a868fc4898587"><span class="__cf_email__" data-cfemail="254c4b434a65405d44485549400b464a48">[email&#160;protected]</span></a>
<a href="https://demo.egenslab.com/cdn-cgi/l/email-protection#85ecebe3eac5e0fde4e8f5e9e0abe6eae8"><span class="__cf_email__" data-cfemail="ec85828a83ac89948d819c8089c28f8381">[email&#160;protected]</span></a>
<a href="tel:7701852222389">+77 0185 2222 389</a>
</li>
<li>
<h6>Loacation.</h6>
<a href="#">Visakhapatanam,Andhra Pradesh,India</a>
</li>
<li>
<h6>Visit Us.</h6>
<a href="#">Facebook: https://www.facebook.com</a>
<a href="#">Twitter: https://www.twitter.com</a>
</li>
</ul>
</div>
</div>
</div>
</div>
<div class="container-fluid p-0">
<div class="contact-map mt-120">
<div class="mapouter">
<div class="gmap_canvas" style="margin-left:12%">
 <iframe style="width:100%;height: 500px;" frameborder="0" src="https://www.bing.com/maps/embed?h=400&w=500&cp=17.677063386394025~83.17062377929688&lvl=12&typ=d&sty=r&src=SHELL&FORM=MBEDV8" scrolling="no" >
     </iframe>
     <div style="white-space: nowrap; text-align: center; width: 500px; padding: 6px 0;">
        <a id="largeMapLink" target="_blank" href="https://www.bing.com/maps?cp=17.677063386394025~83.17062377929688&amp;sty=r&amp;lvl=12&amp;FORM=MBEDLD">View Larger Map</a> &nbsp; | &nbsp;
        <a id="dirMapLink" target="_blank" href="https://www.bing.com/maps/directions?cp=17.677063386394025~83.17062377929688&amp;sty=r&amp;lvl=12&amp;rtp=~pos.17.677063386394025_83.17062377929688____&amp;FORM=MBEDLD">Get Directions</a>

</div>
</div>
</div>
</div>
<div class="container mt-120">
<form action="#" id="contact_form">
<div class="contact-form-wrap">
<h4>Get a free Keystroke quote now</h4>
<p>Your email address will not be published. Required fields are marked *</p>
<div class="row">
<div class="col-lg-6">
<div class="custom-input-group">
<label for="name">Name</label>
<input type="text" placeholder="Your name" id="name">
</div>
</div>
<div class="col-lg-6">
<div class="custom-input-group">
<label for="email">Email</label>
<input type="text" placeholder="Your Email" id="email">
</div>
</div>
</div>
<div class="custom-input-group">
<textarea cols="20" rows="7" placeholder="Your message"></textarea>
</div>
<div class="custom-input-group">
<div class="submite-btn">
<button type="submit">Send Message</button>
</div>
</div>
 </div>
</form>
</div>
</div>
<?php include 'footer.php'?>
</body>
</html>