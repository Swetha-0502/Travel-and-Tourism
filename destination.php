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
<h2 class="breadcrumb-title">Destination</h2>
<ul class="d-flex justify-content-center breadcrumb-items">
<li class="breadcrumb-item"><a href="index.php">Home</a></li>
<li class="breadcrumb-item active">Destination</li>
</ul>
</div>
</div>
</div>

<div class="destination-wrapper pt-110">
<div class="container">
<div class="row g-3">
<div class="col-lg-3 col-md-4 col-sm-6">
<div class="destination-card-style-two">
<div class="d-card-thumb">
<a href="Shimhachalam.php"><img src="/vizagtourism/pictures/shimhachalam temple.jpg" alt="" style="height:300px"></a>
</div>
<div class="d-card-content">
<h4 class="destination-title"><a href="Shimhachalam.php">Shimhachalam</a></h4>
<div class="place-count">
<span></span> Temple
</div>
</div>
</div>
</div>
<div class="col-lg-3 col-md-4 col-sm-6">
<div class="destination-card-style-two">
<div class="d-card-thumb">
<a href="kailashgiri.php"><img src="/vizagtourism/pictures/kailashgiri1.jpg" alt="" style="height:300px"></a>
</div>
<div class="d-card-content">
<h4 class="destination-title"><a href="kailashgiri.php">Kailashgiri</a></h4>
<div class="place-count">
<span></span> View Point
</div>
</div>
</div>
</div>
<div class="col-lg-3 col-md-4 col-sm-6">
<div class="destination-card-style-two">
<div class="d-card-thumb">
<a href="borra caves.php"><img src="/vizagtourism/pictures/borra caves.jpg" alt="" style="height:300px"></a>
</div>
<div class="d-card-content">
<h4 class="destination-title"><a href="borra caves.php">Borra</a></h4>
<div class="place-count">
<span></span> Caves
</div>
</div>
</div>
</div>
<div class="col-lg-3 col-md-4 col-sm-6">
<div class="destination-card-style-two">
<div class="d-card-thumb">
<a href="zoo.php"><img src="/vizagtourism/pictures/indragandhi zoological park.jpg" alt="" style="height:300px"></a>
</div>
<div class="d-card-content">
<h4 class="destination-title"><a href="zoo.php">Indragandhi Zoological Park</a></h4>
<div class="place-count">
<span></span> Park
</div>
</div>
</div>
</div>
<div class="col-lg-3 col-md-4 col-sm-6">
<div class="destination-card-style-two">
<div class="d-card-thumb">
<a href="RK Beach.php"><img src="/vizagtourism/pictures/ramakrishna mision beach.jpg" alt="" style="height:300px"></a>
</div>
<div class="d-card-content">
<h4 class="destination-title"><a href="RK Beach.php">Ramakrishna Beach</a></h4>
<div class="place-count">
<span></span>R.K Beach
</div>
</div>
</div>
</div>
<div class="col-lg-3 col-md-4 col-sm-6">
<div class="destination-card-style-two">
<div class="d-card-thumb">
<a href="Tenneti park.php"><img src="/vizagtourism/pictures/tenneti park.jpg" alt="" style="height:300px"></a>
</div>
<div class="d-card-content">
<h4 class="destination-title"><a href="Tenneti park.php">Tenneti</a></h4>
<div class="place-count">
<span></span> Park
</div>
</div>
</div>
</div>
<div class="col-lg-3 col-md-4 col-sm-6">
<div class="destination-card-style-two">
<div class="d-card-thumb">
<a href="Katiki.php"><img src="/vizagtourism/pictures/katiki waterfalls.jpg" alt="" style="height:300px"></a>
</div>
<div class="d-card-content">
<h4 class="destination-title"><a href="Katiki.php">Katiki</a></h4>
<div class="place-count">
<span></span> Water Falls
</div>
</div>
</div>
</div>
<div class="col-lg-3 col-md-4 col-sm-6">
<div class="destination-card-style-two">
<div class="d-card-thumb">
<a href="Kambalkonda.php"><img src="/vizagtourism/pictures/kamabalkonda wildlife sanctuary.jpg" alt="" style="height:300px"></a>
</div>
<div class="d-card-content">
<h4 class="destination-title"><a href="Kambalkonda.php">Kambalkonda</a></h4>
<div class="place-count">
<span></span> Wild Life Sanctuary
</div>
</div>
</div>
</div>
<div class="col-lg-3 col-md-4 col-sm-6">
<div class="destination-card-style-two">
<div class="d-card-thumb">
<a href="air craft museum.php"><img src="/vizagtourism/pictures/TU 142 Aircraft Museum.jpg" alt="" style="height:300px"></a>
</div>
<div class="d-card-content">
<h4 class="destination-title"><a href="air craft museum.php">TU 142 Aircraft Museum</a></h4>
<div class="place-count">
<span></span> Museum
</div>
</div>
</div>
</div>
<div class="col-lg-3 col-md-4 col-sm-6">
<div class="destination-card-style-two">
<div class="d-card-thumb">
<a href="temple.php"><img src="/vizagtourism/pictures/annavram.jpg" alt="" style="height:300px"></a>
</div>
<div class="d-card-content">
<h4 class="destination-title"><a href="temple.php">Annavaram</a></h4>
<div class="place-count">
<span></span>Temple
</div>
</div>
</div>
</div>
<div class="col-lg-3 col-md-4 col-sm-6">
<div class="destination-card-style-two">
<div class="d-card-thumb">
<a href="dolphins nose.php"><img src="/vizagtourism/pictures/dolphin hill or nose.jpg" alt="" style="height:300px"></a>
</div>
<div class="d-card-content">
<h4 class="destination-title"><a href="dolphins nose.php">Dolphins Nose</a></h4>
<div class="place-count">
<span></span>Hill
</div>
</div>
</div>
</div>
<div class="col-lg-3 col-md-4 col-sm-6">
<div class="destination-card-style-two">
<div class="d-card-thumb">
<a href="lambasingi.php"><img src="/vizagtourism/pictures/lambasingi.jpg" alt="" style="height:300px"></a>
</div>
<div class="d-card-content">
<h4 class="destination-title"><a href="lambasingi.php">Lambasingi</a></h4>
<div class="place-count">
<span></span> View Point
</div>
</div>
</div>
</div>
<div class="col-lg-3 col-md-4 col-sm-6">
<div class="destination-card-style-two">
<div class="d-card-thumb">
<a href="padmapuram.php"><img src="/vizagtourism/pictures/padmapuram gardens.jpg" alt="" style="height:300px"></a>
</div>
<div class="d-card-content">
<h4 class="destination-title"><a href="padmapuram.php">Padmapuram </a></h4>
<div class="place-count">
<span></span> Gardens
</div>
</div>
</div>
</div>
<div class="col-lg-3 col-md-4 col-sm-6">
<div class="destination-card-style-two">
<div class="d-card-thumb">
<a href="tribal.php"><img src="/vizagtourism/pictures/tribal museum.jpg" alt="" style="height:300px"></a>
</div>
<div class="d-card-content">
<h4 class="destination-title"><a href="tribal.php">Tribal Museum</a></h4>
<div class="place-count">
<span></span> Museum
</div>
</div>
</div>
</div>
<div class="col-lg-3 col-md-4 col-sm-6">
<div class="destination-card-style-two">
<div class="d-card-thumb">
<a href="vanjangi.php"><img src="/vizagtourism/pictures/vanjangi.jpg" alt="" style="height:300px"></a>
</div>
<div class="d-card-content">
<h4 class="destination-title"><a href="vanjangi.php">Vanjangi(Araku)</a></h4>
<div class="place-count">
<span></span>View Point
</div>
</div>
</div>
</div>
<div class="col-lg-3 col-md-4 col-sm-6">
<div class="destination-card-style-two">
<div class="d-card-thumb">
<a href="yarada.php"><img src="/vizagtourism/pictures/yarada beach.jpg" alt="" style="height:300px"></a>
</div>
<div class="d-card-content">
<h4 class="destination-title"><a href="yarada.php">Yarada</a></h4>
<div class="place-count">
<span></span>Beach
</div>
</div>
</div>
</div>







<div class="row">
<div class="col-lg-12">
<nav>
<ul class="pagination pagination-style-one justify-content-center pt-50">
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
</div>

<?php include'footer.php'?>


</body>
</html>