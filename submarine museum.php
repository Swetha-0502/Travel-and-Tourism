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
<style type="text/css">
.column {
  float: left;
  width: 45%;
  padding: 10px;
  height: 400px;
  text-align: justify; 
}
.row{
    content: "";
    display: table;
    clear: both;
}
</style>

</head>
<body>


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
<h2 class="breadcrumb-title">SUBMARINE MUSEUM</h2>
<ul class="d-flex justify-content-center breadcrumb-items">
<li class="breadcrumb-item"><a href="index.php">Home</a></li>
<li class="breadcrumb-item active"><a href="destination.php">Destination</a></li>
</ul>
</div>
</div>
</div><br><br>
<h2 style="text-align: center;">Submarine Museum</h2>
<div class="row">
    <center>
    <div class="column">
        <div style="width:1350px;height:700px;margin-left:9%;">
          <a href="submarine museum.php"><img src="/vizagtourism/pictures/submarine meusiam.jpg" alt="Submarine" style="width: 50%;height: 430px;"></a>
        </div>
    </div>
    <div class="column" style="margin-left:5%">
        Vizag is known not just for the amazing beaches, but many other places that attract visitors from all over the country. One such place is INS Kurusura submarine museum, a museum established at the beach of Rama Krishna. INS Kurusura is a submarine constructed by Russians in the year 1969. It reached Visakhapatnam in 1970 via the Baltic Sea and since then served the Indian Navy.INS Kurusura served the Indian Navy for 31 years and then it was decommissioned and turned into a museum in 2001. With a length of 91.3 meters and breadth of 8 meters, the INS Kurusura submarine played a vital role in a number of wars including the 1971 Indo-Pak war.The INS Kurusura submarine museum at RK beach is the first submarine turned into a museum in the whole of Asia and second in the world. Various parts of the submarine like the radar room, sonar room, control room, and the weapons used during war are in display in this museum.The museum depicts the milestones of the evolution of submarine through artifacts, photographs and written scripts. The museum showcases the life inside a submarine and hardships faced by the submariners in the sea. There are around 6 guides in the museum who explain the history and activities of the submarine in great detail to the visitors.With its great history and uniqueness, the INS Kurusura submarine museum attracts a number of tourists and plays a significant role in imparting knowledge about submarines to the visitors. This well-maintained museum is a great mode of entertainment as well as knowledge and motivates youth to be a part of the elite group of Indian Navy. 

</div></center>
</div><br><br><br>
<div style="margin-left: 5%;">
<h4>Entry Fee for Submarine Museum</h4><br>
<table style="width:80%;border-color: #090909;">
  <tr>
    <th>Adult</th>
    <td>Rs.40 /person</td> 
    
  </tr>
  <tr>
    <th> Children(below 12)</th>
    <td>Rs.20 /person</td>
    
  </tr>
  <tr>
    <th>Still Camera</th>  
    <td>Rs.50 </td>
    
  </tr>
  <tr>
    <th>Video Camera</th>  
    <td>Rs.200</td>
    
  </tr>
  </table><br>

<h4> Museum Timings</h4><br>
<table style="width:80%;border-color: #090909;">
  <tr>
    <th>Monday</th>
    <td>Holiday</td> 
    
  </tr>
  <tr>
    <th>Tuesday to Saturday</th>
    <td>2:00 pm – 8:30 pm</td>
    
  </tr>
  <tr>
    <th>Sunday</th>  
    <td>10:00 am – 12:30 pm<br>
        2:00 pm –8:30 pm</td>
    
  </tr>
  </table><br>
  <div style="line-height:50px">
  <img src="/vizagtourism/pictures/distance.png" style="width:20px;height:20px"> &nbsp <b>Distance (From Vizag Railway Station):</b> 6 Kms<br>
  <img src="/vizagtourism/pictures/duration.png" style="width:20px;height:20px">&nbsp <b>Trip Duration (Including Travel):</b> 1 Hour<br>
  <img src="/vizagtourism/pictures/location icon.png.png" style="width:20px;height:20px" >&nbsp <b>Place Location:</b> On Beach Road<br>
<img src="/vizagtourism/pictures/transport.png" style="width:20px;height:20px" >&nbsp <b>Transportation Details:</b><br>
<img src="/vizagtourism/pictures/bus.png" style="width:50px;height:50px;" ><b>By Road:-</b><br>
Visakhapatnam is fairly well-connected via road with other Indian cities. Depending upon your location, you can consider traveling here by cab, personal vehicle, or bus. <br>
<ul style="list-style-type: circle;">
<li>From Jagdalpur - the bus fares start from Rs.450</li>
<li>From Vijaywada - the bus fares start from Rs.400-Rs.500</li>
<li>From Puri - the bus fares start from Rs.500</li>
<li>From Bhubaneswar - the bus fares start from Rs.1,000-Rs.1,500</li>
</ul>
Here is the route you can follow to reach Visakhapatnam from various other places.
<ul style="list-style-type: circle;">
<li>Hyderabad - 619 km via NH65 or AH45</li>
<li>Nagpur - 767 km via NH53 or AH45</li>
<li>Vijaywada - 347 km via NH16 or AH45</li>
<li>Chennai - 798 km via NH16</li>
<li>Bengaluru - 1,011 km via NH16 or AH45</li>
</ul>
</div>
<img src="/vizagtourism/pictures/aeroplane.png" style="width:60px;height:60px;" ><b>By Air:-</b><br>
Visakhapatnam Airport (VTZ) would be your best option to reach here. This airport operates as a civil enclave on one of the Indian Navy bases namely INS Dega. And it is connected with other Indian cities via many airlines like IndiGo, Air India, Spicejet, Air Asia, and many others. After you deboard at the airport, you will need to cover a distance of 15-20 km via some means of public transport.
<ul style="list-style-type: circle;line-height: 50px;">
<li>Hyderabad - Take Air India, IndiGo, Air Asia from Rajiv Gandhi International Airport. Starting airfares are from Rs.4,000</li>
<li>Bhubaneshwar - Take IndiGo or Air India flights from Biju Patnaik International Airport. The starting airfares are from Rs.10,000</li>
<li>Chennai - Take IndiGo, Air Asia, Air India, and Spicejet flights from Chennai International Airport. The airfares are starting from Rs.3,000</li>
<li>Mumbai - Take Air India, Spicejet, IndiGo, Air Asia from Chhatrapati Shivaji International Airport. The starting airfares are from Rs.6,000</li>
</ul>
<img src="/vizagtourism/pictures/train 1.png" style="width:60px;height:60px;" ><b>By Train:-</b><br>
Visakhapatnam has its own railway station that goes by the same name. This is one of the primary train stations and is operated under the South Coast Railway Zone. It is interesting to know that in 2017, this railway station was titled the cleanest railway station in our country. After you deboard at the station, you can easily take a cab or some other means of public transportation to reach your destination.<br><br>

Here is the route that you can follow to reach Visakhapatnam by train. 
<ul style="list-style-type: circle;line-height: 50px;">
<li>Delhi - Board Samta Express from H.Nizamuddin Station and deboard at the Visakhapatnam station</li>
<li>Pune - Board Konark Express from Pune Junction and deboard at the Visakhapatnam station</li>
<li>Aurangabad - Board SNSI VSKP Express from Aurangabad Junction and deboard at the Visakhapatnam station</li>
<li>Nashik - Board LTT VSKP SUP Express from Nashik Road station and deboard at the Visakhapatnam station</li>
</ul>



</div>
<?php include 'footer.php'?>
</body>
</html>