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
<h2 class="breadcrumb-title">Destination Details</h2>
<ul class="d-flex justify-content-center breadcrumb-items">
<li class="breadcrumb-item"><a href="index.php">Home</a></li>
<li class="breadcrumb-item active">Destination Details</li>
</ul>
</div>
</div>
</div>

<div class="destination-details-wrapper pt-110">
<div class="container">
<div class="row">
<div class="col-lg-8">
<div class="destination-details">
<div class="dd-thumb">
<img src="/vizagtourism/pictures/wallpaper1.jpg" alt="">
</div>
<div class="dd-body">
 <h3 class="dd-subtitle">Discover Vizag</h3>
<p>Visakhapatnam (locally known also Vaishakhapuram or Vizag) is the largest metropolis in the state of Andhra Pradesh and seventh largest in India. It covers an area of 544 sq km on the South-East cost of India about 625 km away from Hyderabad. The city is surrounded by the Mountain ranges of Eastern Ghats to the south, north and west. Its eastern side is protected by the Bay of Bengal.<br>

Visakhapatnam was a small fishing village at early twentieth century (about 1900 AD) but it has changed rapidly in last century and it turned into a new looks with lots of large industries, IT Hubs, Shopping complex and many more. Visakhapatnam Sea port is one of the largest seaports in India and it also the headquarters of Eastern Naval Command for Indian Navy. Languages and Religions in Visakapatnam.</p>
<div class="row dd-img-group g-3">
<div class="col-sm-6">
<div class="dd-inner-group">
<img src="/vizagtourism/pictures/love vizag.jpg" alt="">
</div>
</div>
<div class="col-sm-6">
<div class="dd-inner-group">
<img src="/vizagtourism/pictures/shilparamam.jpg" alt="" style="height:400px;">
</div>
</div>
</div>
<p>Araku Valley is the best tour spot in Vizag or Visakhapatnam city located about 112 km away (six hours journey by train or bus) from city center. You have to book a government rest house (rest house constructed by APTDC) in advance for night stay. Padmavathi botanical gardens are the major attraction in Araku Valley.<br>

Borra Caves is located close to Araku Valley. Recently, it was modified by the Andhra Pradesh Tourism Development Corporation (APTDC). There is an entry fee of thirty rupees to enter this cave.<br>

Kailasagiri hill gives you a spectacular view of the sea, Ramkrishna Beach and Rishikonda Beach of Vizag. Visitors often fall in love with the city especially after visiting this hill.<br>

Ross Hill is an area where three different religious places situated on three hill tops. Ross Hill, named after a certain Monsieur Ross who built a house on it in 1864, it has now been converted into a chapel Mother Mary's Church. A Roman Catholic Church was constructed in 1864 respect to Mother Mary. A temple of Hindu god Venkateswara Konda and a mosque a are also available nearby.<br>

Simhachalam or Simhadri is a hill Temple located about 16 km north from Visakhapatnam city. The temple is dedicated to the Hindu God Narasimha or Vishnu. The temple was constructed by Gajapathi Kings of Orissa before 15th century.</p>
<div class="destination-overview-table">
<h3 class="dd-subtitle">Overview</h3>
<table class="table overview-table">
<tbody>
<tr>
<th>Destination</th>
<td>Visakhapatanam</td>
</tr>
<tr>
<th>Departure</th>
<td>Yes Required</td>
</tr>
<tr>
<th>Departure Time</th>
<td>01 july, 2022 <span>10.00AM</span></td>
</tr>
<tr>
<th>Return Time</th>
<td>08 july, 2021 <span>10.00AM</span></td>
</tr>
 </tbody>
</table>
</div>
<div class="destination-map">
<h3 class="dd-subtitle">Map</h3>
<div class="mapouter">
<div class="gmap_canvas">
<!--<iframe id="gmap_canvas" src="https://maps.google.com/maps?q=2880%20Broadway,%20New%20York&amp;t=&amp;z=9&amp;ie=UTF8&amp;iwloc=&amp;output=embed"></iframe><a href="https://123movies-to.org/"></a><br>-->

     <iframe style="width:100%;height: 500px;" frameborder="0" src="https://www.bing.com/maps/embed?h=400&w=500&cp=17.677063386394025~83.17062377929688&lvl=12&typ=d&sty=r&src=SHELL&FORM=MBEDV8" scrolling="no">
     </iframe>
     <div style="white-space: nowrap; text-align: center; width: 500px; padding: 6px 0;">
        <a id="largeMapLink" target="_blank" href="https://www.bing.com/maps?cp=17.677063386394025~83.17062377929688&amp;sty=r&amp;lvl=12&amp;FORM=MBEDLD">View Larger Map</a> &nbsp; | &nbsp;
        <a id="dirMapLink" target="_blank" href="https://www.bing.com/maps/directions?cp=17.677063386394025~83.17062377929688&amp;sty=r&amp;lvl=12&amp;rtp=~pos.17.677063386394025_83.17062377929688____&amp;FORM=MBEDLD">Get Directions</a>

</div>
</div>
</div>
</div>
</div>
</div>
</div>
<div class="col-lg-4 mt-5 mt-lg-0">
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
<i class="bi bi-chevron-double-right"></i> Vizag
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
<aside class="package-widget widget-gallary mt-30">
<div class="widget-title">
<h4>New Destination</h4>
</div>
<ul class=" widget-body">
<li>
<a href="/vizagtourism/pictures/araku and vizag.jpg" data-fancybox="gallery" data-caption="Caption Here">
<img src="/vizagtourism/pictures/araku and vizag.jpg" alt="">
</a>
</li>
<li>
<a href="/vizagtourism/pictures/araku valley tour.jpg" data-fancybox="gallery" data-caption="Caption Here">
<img src="/vizagtourism/pictures/araku valley tour.jpg" alt="" style="height:85px;">
</a>
</li>
<li>
<a href="/vizagtourism/pictures/beach1.jpg" data-fancybox="gallery" data-caption="Caption Here">
<img src="/vizagtourism/pictures/beach1.jpg" alt="" style="height:85px;">
</a>
</li>
<li>
<a href="/vizagtourism/pictures/best of araku.jpg" data-fancybox="gallery" data-caption="Caption Here">
<img src="/vizagtourism/pictures/best of araku.jpg" alt="" style="height:85px;">
</a>
</li>
<li>
<a href="/vizagtourism/pictures/kailashgiri.jpg" data-fancybox="gallery" data-caption="Caption Here">
<img src="/vizagtourism/pictures/kailashgiri.jpg" alt="" style="height:85px;">
</a>
</li>
<li>
<a href="/vizagtourism/pictures/beaches.jpg" data-fancybox="gallery" data-caption="Caption Here">
<img src="/vizagtourism/pictures/beaches.jpg" alt="" style="height:85px;">
</a>
</li>
</ul>
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