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


<?php include 'header.php'?>

<div class="breadcrumb breadcrumb-style-one">
<div class="container">
<div class="col-lg-12 text-center">
<h2 class="breadcrumb-title">Package</h2>
<ul class="d-flex justify-content-center breadcrumb-items">
<li class="breadcrumb-item"><a href="index.php">Home</a></li>
<li class="breadcrumb-item active">Package</li>
</ul>
</div>
</div>
</div>

<div class="package-standard-wrapper pt-80">
<div class="container">
<div class="row">
<div class="col-lg-8">
<div class="package-card-gamma">
<div class="package-thumb">
<a href="package.php"><img src="/vizagtourism/pictures/best of vizag.jpg" alt=""></a>
</div>
<div class="package-card-body">
<p class="card-lavel">
 <i class="bi bi-clock"></i> <span>2 Day & 1 night</span>
</p>
<h3 class="p-card-title"><a href="package.php">Best of Vizag.</a></h3>
<div class="p-card-bottom">
<div class="book-btn">
<a href="package.php">Book Now <i class='bx bxs-right-arrow-alt'></i></a>
</div>
<div class="p-card-info">
<span style="margin-left: 70%;">From</span>
<h6 style="margin-left: 70%;">5750 <span>/2Persons</span></h6>
</div>
</div>
</div>
</div>


<div class="package-card-gamma">
<div class="package-thumb">
<a href="package.php"><img src="/vizagtourism/pictures/araku valley tour.jpg" alt="" style="width: 400px;"></a>
</div>
<div class="package-card-body">
<p class="card-lavel">
<i class="bi bi-clock"></i> <span>3 Day & 2 night</span>
</p>
<h3 class="p-card-title"><a href="package.php">Best of Araku</a></h3>
<div class="p-card-bottom">
<div class="book-btn">
<a href="package.php">Book Now <i class='bx bxs-right-arrow-alt'></i></a>
</div>
<div class="p-card-info">
<span style="margin-left: 70%;">From</span>
<h6 style="margin-left: 70%;">2000 <span>/Person</span></h6>
</div>
</div>
</div>
</div>
<div class="package-card-gamma">
<div class="package-thumb">
<a href="package.php"><img src="/vizagtourism/pictures/annavram.jpg" alt="" style="width: 400px;"></a>
</div>
<div class="package-card-body">
<p class="card-lavel">
<i class="bi bi-clock"></i> <span>4 Day & 3 night</span>
</p>
<h3 class="p-card-title"><a href="package.php">Araku and Vizag with Annavaram.</a></h3>
<div class="p-card-bottom">
<div class="book-btn">
<a href="package.php">Book Now <i class='bx bxs-right-arrow-alt'></i></a>
</div>
<div class="p-card-info">
<span style="margin-left: 10%;">From</span>
<h6 style="margin-left: 10%;">3000 <span>/Person</span></h6>
</div>
</div>
</div>
</div>


<div class="row">
<div class="col-lg-12">
<nav>
<ul class="pagination pagination-style-one justify-content-center pt-80">
<li class="page-item page-arrow"><a class="page-link" href="#"><i class="bi bi-chevron-double-left"></i></a></li>
<li class="page-item active"><a class="page-link" href="#">01</a></li>
<li class="page-item"><a class="page-link" href="#">02</a></li>
<li class="page-item"><a class="page-link" href="#">03</a></li>
<li class="page-item"><a class="page-link" href="#">04</a></li>
<li class="page-item page-arrow"><a class="page-link" href="#"><i class="bi bi-chevron-double-right"></i></a></li>
</ul>
</nav>
</div>
</div>
</div>
<div class="col-lg-4">
<div class="package-sidebar">
<aside class="package-widget widget-search">
<div class="widget-title">
<h4>Search Here</h4>
</div>
<div class="widget-body">
<form action="#" method="post" id="blog-sidebar-search">
<div class="search-input-group">
<input type="search" placeholder="Your Destination">
<button type="submit">SEAECH</button>
</div>
</form>
</div>
</aside>
<aside class="package-widget widget-tour-categoris mt-30">
<div class="widget-title">
<h4>Category</h4>
</div>
<div class="widget-body">
<ul>
<li class="category-check">
<label class="form-check-label" for="cate">
<i class="bi bi-chevron-double-right"></i> Vizag City
</label>
<input class="form-check-input" type="checkbox" id="cate">
</li>
<li class="category-check">
<label class="form-check-label" for="cate2">
<i class="bi bi-chevron-double-right"></i>Adventure Tour
</label>
<input class="form-check-input" type="checkbox" id="cate2">
</li>
<li class="category-check">
<label class="form-check-label" for="cate3">
<i class="bi bi-chevron-double-right"></i> Couple Tour
</label>
<input class="form-check-input" type="checkbox" id="cate3">
</li>
<li class="category-check">
<label class="form-check-label" for="cate4">
<i class="bi bi-chevron-double-right"></i> Village Tour
</label>
<input class="form-check-input" type="checkbox" id="cate4">
</li>
<li class="category-check">
<label class="form-check-label" for="cate5">
<i class="bi bi-chevron-double-right"></i>Group Tour
</label>
<input class="form-check-input" type="checkbox" id="cate5">
</li>
</ul>
</div>
</aside>
<aside class="package-widget widget-duration mt-30">
<div class="widget-title">
<h4>Choose Your Duration</h4>
</div>
<div class="widget-body">
<ul>
<li class="deration-check">
<input class="form-check-input" type="checkbox" id="dura1">
<label class="form-check-label" for="dura1">
1 - 3 Days
</label>
</li>
<li class="deration-check">
<input class="form-check-input" type="checkbox" id="dura2">
<label class="form-check-label" for="dura2">
3 - 5 Days
</label>
</li>
<li class="deration-check">
<input class="form-check-input" type="checkbox" id="dura3">
<label class="form-check-label" for="dura3">
5 - 7 Days
</label>
</li>
<li class="deration-check">
<input class="form-check-input" type="checkbox" id="dura4">
<label class="form-check-label" for="dura4">
7 - 9 Days
</label>
</li>
<li class="deration-check">
<input class="form-check-input" type="checkbox" id="dura5">
<label class="form-check-label" for="dura5">
9 - 11 Days
</label>
</li>
</ul>
</div>
</aside>
<aside class="package-widget widget-recent-package-entries mt-30">
<div class="widget-title">
<h4>Choose Your Duration</h4>
</div>
<div class="widget-body">
<ul>
<li class="package-sm">
<div class="thumb">
<a href="package.php">
<img src="/vizagtourism/pictures/best of vizag.jpg" alt="">
</a>
</div>
<div class="info">
<h6><a href="package.php">Best of Vizag</a></h6>
<div class="price">
<span> From</span>
 <h6> 2875 rupees <span>Per Person</span></h6>
</div>
</div>
</li>
<li class="package-sm">
<div class="thumb">
<a href="package.php">
<img src="/vizagtourism/pictures/araku valley tour.jpg" alt="">
</a>
</div>
<div class="info">
<h6><a href="package.php">Best of Araku</a></h6>
<div class="price">
<span>From</span>
<h6>2000 <span>Per Person</span></h6>
</div>
</div>
</li>

<li class="package-sm">
<div class="thumb">
<a href="package.php">
<img src="/vizagtourism/pictures/annavram.jpg" alt="">
</a>
</div>
<div class="info">
<h6><a href="package.php">Vizag and Araku with Annavaram</a></h6>
<div class="price">
<span> From</span>
 <h6> 3000 rupees <span>Per Person</span></h6>
</div>
</div>
</li>
</ul>
</div>
</aside>
<aside class="widget-banner mt-30">
<a href="#">
<img src="assets/images/banner/sidebar-banner.png" alt="" class="img-fluid">
</a>
</aside>
</div>
</div>
</div>
</div>
</div>
<?php include 'footer.php'?>
</body>
</html>