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
<h2 class="breadcrumb-title">Gallery</h2>
<ul class="d-flex justify-content-center breadcrumb-items">
<li class="breadcrumb-item"><a href="index.php">Home</a></li>
<li class="breadcrumb-item active">Gallery</li>
</ul>
</div>
</div>
</div>

<div class="gallary-wrapper">
<div class="container">
<div class="gallary-group pt-80">
<div class="gallary-group-header">
<h4 class="gallary-group-title">Tour Gallery</h4>
<div class="gallary-arrows text-center d-lg-block d-none">
<div class="gallary-button-prev gallary-prev1" tabindex="0" role="button" aria-label="Previous slide"><i class="bi bi-chevron-double-left"></i></div>
<div class="gallary-button-next gallary-next1" tabindex="0" role="button" aria-label="Next slide"><i class="bi bi-chevron-double-right"></i></div>
</div>
</div>
<div class="row">
<div class="swiper gallary-slider">
<div class="swiper-wrapper">
<div class="swiper-slide">
<div class="gallary-item">
<img src="/vizagtourism/pictures/beaches.jpg" alt="Image Gallery" style="height:206px">
<a href="/vizagtourism/pictures/beaches.jpg" data-fancybox="gallery" data-caption="Caption Here" class="gallary-item-overlay">
<i class="bi bi-eye"></i>
</a>
</div>
<div class="gallary-item">
<img src="/vizagtourism/pictures/tenneti park.jpg" alt="Image Gallery" style="height:206px">
<a href="/vizagtourism/pictures/tenneti park.jpg" data-fancybox="gallery" data-caption="Caption Here" class="gallary-item-overlay">
<i class="bi bi-eye"></i>
</a>
</div>
<div class="gallary-item">
<img src="/vizagtourism/pictures/Victory-at-Sea-War-Memorial.jpg" alt="Image Gallery"  style="height:300px">
<a href="/vizagtourism/pictures/Victory-at-Sea-War-Memorial.jpg" data-caption="Caption Here" class="gallary-item-overlay"> <i class="bi bi-eye"></i> </a>
</div>
</div>
<div class="swiper-slide">
<div class="gallary-item">
<img src="/vizagtourism/pictures/Bojjannakonda.jpg" alt="Image Gallery" style="height:450px">
<a class="gallary-item-overlay" data-fancybox="gallery" data-caption="Caption Here" href="/vizagtourism/pictures/Bojjannakonda.jpg">
<i class="bi bi-eye"></i>
</a>
</div>
<div class="gallary-item">
<img src="/vizagtourism/pictures/kamabalkonda wildlife sanctuary.jpg" alt="Image Gallery" style="height:300px">
<a href="/vizagtourism/pictures/kamabalkonda wildlife sanctuary.jpg" data-fancybox="gallery" data-caption="Caption Here" class="gallary-item-overlay"> <i class="bi bi-eye"></i> </a>
</div>
</div>
<div class="swiper-slide">
<div class="gallary-item">
<img src="/vizagtourism/pictures/shimhachalam temple.jpg" alt="Image Gallery" style="height:450px">
<a href="/vizagtourism/pictures/shimhachalam temple.jpg" data-fancybox="gallery" data-caption="Caption Here" class="gallary-item-overlay">
<i class="bi bi-eye"></i>
</a>
</div>
<div class="gallary-item">
<img src="/vizagtourism/pictures/kailashgiri1.jpg" alt="Image Gallery"  style="height:300px">
<a href="/vizagtourism/pictures/kailashgiri1.jpg" data-fancybox="gallery" data-caption="Caption Here" class="gallary-item-overlay"> <i class="bi bi-eye"></i> </a>
</div>
</div>
</div>
</div>
</div>
</div>
<!--<div class="gallary-group pt-80">
<div class="gallary-group-header">
<h4 class="gallary-group-title">Tour Guide Gallery</h4>
<div class="gallary-arrows text-center d-lg-block d-none">
<div class="gallary-button-prev gallary-prev2" tabindex="0" role="button" aria-label="Previous slide"><i class="bi bi-chevron-double-left"></i></div>
<div class="gallary-button-next gallary-next2" tabindex="0" role="button" aria-label="Next slide"><i class="bi bi-chevron-double-right"></i></div>
</div>
</div>
<div class="row">
<div class="swiper gallary-slider2">
<div class="swiper-wrapper">
<div class="swiper-slide">
<div class="gallary-item">
<img src="assets/images/gallary/g-sm3.png" alt="Image Gallery">
<a href="assets/images/gallary/g-sm3.png" data-fancybox="gallery" data-caption="Caption Here" class="gallary-item-overlay">
<i class="bi bi-eye"></i>
</a>
</div>
<div class="gallary-item">
<img src="assets/images/gallary/g-sm4.png" alt="Image Gallery">
<a href="assets/images/gallary/g-sm4.png" data-fancybox="gallery" data-caption="Caption Here" class="gallary-item-overlay">
<i class="bi bi-eye"></i>
</a>
</div>
<div class="gallary-item">
<img src="assets/images/gallary/g-16.png" alt="Image Gallery">
<a href="assets/images/gallary/g-16.png" data-fancybox="gallery" data-caption="Caption Here" class="gallary-item-overlay"> <i class="bi bi-eye"></i> </a>
</div>
</div>
<div class="swiper-slide">
<div class="gallary-item">
<img src="assets/images/gallary/g-xl4.png" alt="Image Gallery">
<a class="gallary-item-overlay" data-fancybox="gallery" data-caption="Caption Here" href="assets/images/gallary/g-xl4.png">
<i class="bi bi-eye"></i>
</a>
</div>
<div class="gallary-item">
<img src="assets/images/gallary/g-15.png" alt="Image Gallery">
<a href="assets/images/gallary/g-15.png" data-fancybox="gallery" data-caption="Caption Here" class="gallary-item-overlay"> <i class="bi bi-eye"></i> </a>
</div>
</div>
<div class="swiper-slide">
<div class="gallary-item">
<img src="assets/images/gallary/g-xl3.png" alt="Image Gallery">
<a href="assets/images/gallary/g-xl3.png" data-fancybox="gallery" data-caption="Caption Here" class="gallary-item-overlay">
<i class="bi bi-eye"></i>
</a>
</div>
<div class="gallary-item">
<img src="assets/images/gallary/g-14.png" alt="Image Gallery">
<a href="assets/images/gallary/g-14.png" data-fancybox="gallery" data-caption="Caption Here" class="gallary-item-overlay"> <i class="bi bi-eye"></i> </a>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>-->
</div>
<?php include'footer.php'?>
</body>
</html>