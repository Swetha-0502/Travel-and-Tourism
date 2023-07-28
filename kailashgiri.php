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
<h2 class="breadcrumb-title">Kailashgiri</h2>
<ul class="d-flex justify-content-center breadcrumb-items">
<li class="breadcrumb-item"><a href="index.php">Home</a></li>
<li class="breadcrumb-item active"><a href="destination.php">Destination</li>
</ul>
</div>
</div>
</div><br><br>
<h1><b><center>Kailashgiri</center></b></h1>
<div class="row">
    <center>
    <div class="column">
        <div style="width:1350px;height:700px;margin-left:9%;">
          <img src="/vizagtourism/pictures/araku and vizag.jpg" alt="Kailashgiri" style="width: 50%;">
        </div>
    </div>
    <div class="column" style="margin-left:5%">
        It is one of the prominent hill top parks with panoramic sea view on the East Coast. The divine view from the hilltop accompanies devotional overtones as the Lord Shiva and Goddess Parvathi sits ever so peacefully as if at the Manasa Sarovar in the great Himalayas. One can view the entire city of Visakhapatnam from the top of this Eco-Rich hill.

Located on a picturesque hill with enchanting panoramic sea view, Kailasagiri Situated at an altitude of 360 ft., the hill park gives fascinating views of sun kissed beaches on one side and the lush green forests on the other side beside an enthralling view of the bustling metropolis of Visakhapatnam. Kailasagiri is a favourite location among the filmmakers all over India. Besides the eye-catching and holy statues of Lord Shiva and Goddess Parvathi, the hilltop has many wonderful attractions like the Titanic viewpoint, floral clock, Shanku-Chakra Namas of Lord Venkateswara of Tirupati, Gliding point, delicious food courts and so on. The floral clock one of the biggest of India with a diameter of 10 ft. 
The Government of Andhra Pradesh has awarded Kailasagiri as "the Best Tourist Spot" in 2003. The hilltop is well connected by all means of transport through ghat road Facing the City and seawaters. Two stairways are provided for pedestrians Pleasant weather prevails throughout the year on the hilltop.

An exclusive Butterfly Park, Highest Manmade Water Falls are proposed projects on the hilltop. It became a must-see place for all the visitors coming to Visakhapatnam including State guests and other VIPs. Above all Kailasagiri is the first location where plastic use is banned and implemented strictly to protect and promote healthy eco-balance.

VMRDA has declared the hill a plastic-free zone. Tourists are not insisted and imposed rules to follow orders on plastic ban but educated and convinced to practice it voluntarily and succeeded to that effect.
</div></center>
</div><br><br><br><br><br><br>
<div style="margin-left: 5%;">
  <h3>Visakhapatnam Metropolitan Region Development Authority (VMRDA) Kailasagiri</h3><br>
  <h4>VMRDA Kailasagiri Opening Timings</h4><br>
  <b>Monday to Sunday Opening Hours:</b> 10:00am-8:00pm<br><br>
  <h4>Kailasagiri Entry Fee</h4><br>
<table style="width:80%;border-color: #090909;">
  <tr>
    <th>Film shooting/TV Serial</th>
    <td> Rs.6000/- + GST 18%</td>
    
  </tr>
  <tr>
    <th>Entry fee for Pedestrians</th>
    <td>Rs.5/-</td>
    
  </tr>
  <tr>
    <th>Park entry fee for RTC passengers</th>  
    <td>Rs.5/-</td>
    
  </tr>
</table><br>
<h4>Kailasagiri Hill Parking Fee</h4><br>
<table style="width:80%;border-color: #090909;">
  <tr>
    <th>2 wheelers</th>
    <td>Rs.20/-</td>
    
  </tr>
  <tr>
    <th>4 wheelers</th>
    <td>Rs.50/-</td>
    
  </tr>
  <tr>
    <th>4 wheelers big</th>  
    <td>Rs.70/- </td>
    
  </tr>
  <tr>
    <th> Mini bus</th>  
    <td>Rs.150/-</td>
    
  </tr>
  <tr>
    <th>Tourist bus </th>  
    <td>Rs. 300/- </td>
    
  </tr>
</table><br>
<h4>Bus Routes to kailasagiri from RTC Complex</h4><br>
<table style="width:80%;border-color: #090909;">
  <tr>
    <th>Bus No.</th>
    <td>10K</td>
    
  </tr>
  <tr>
    <th> Bus Route Starting Stage</th>
    <td>RTC Complex</td>
    
  </tr>
  <tr>
    <th>Bus Route Ending Stage</th>  
    <td>Kailasagiri </td>
    
  </tr>
  <tr>
    <th> Total Distance</th>  
    <td>9 Km</td>
    
  </tr>
</table><br>
<h4>VMRDA Kailasagiri ropeway</h4><br>
Kailasagiri Ropeway is the third route to the Kailasagiri Hilltop. Its a first of its kind in Andhra Pradesh as well as in the whole of coastal India. It offer a 360 Degree view from the fibreglass cabins while travelling up and down the 375 meter rope way.<br><br>
<h4>Kailasagiri Ropeway Timings</h4><br>
<b>Monday to Sunday  Ropeway Opening Timings : </b> 11:00am to 1:00pm. ( Lunch Break : 1.00pm to 2.00pm )<br><br>
<h4>Kailasagiri Ropeway Tickets Charges</h4><br>
<table style="width:80%;border-color: #090909;">
  <tr>
    <th>Adults </th>
    <td>Rs. 55/- (One Side)</td>
    
  </tr>
  <tr>
    <th>Adults </th>
    <td>Rs. 150/- (Both Sides)</td>
    
  </tr>
  <tr>
    <th>Child( Age 4 to 7 Years)</th>  
    <td>Rs. 28 (one Side)</td>
    
  </tr>
  <tr>
    <th> Child</th>  
    <td>Rs. 60 (Both Sides)</td>
    
  </tr>
</table><br>
<h4><img src="/vizagtourism/pictures/transport.png" style="width:20px;height:20px" >&nbsp Transportation Details:<br></h4><br>
<img src="/vizagtourism/pictures/bus.png" style="width:50px;height:50px;" ><b>By Road:-</b><br>
Kailasagiri is located at Hilltop Road, Visakhapatnam. There are several local modes of transportation that are frequently run towards Kailasagiri such as Auto, taxi etc. One can enjoy road trips from nearby cites of Vishakhapatnam such as Kakinada (famous for sweet Kaaja), Rajahmundry (riverside ISKON Temple), Vijaywada (Kanak Durga Temple) etc.<br><br>
<img src="/vizagtourism/pictures/aeroplane.png" style="width:60px;height:60px;" ><b>By Air:-</b><br>
Visakhapatnam International Airport is the nearest airport to Kailasagiri. It is located at the Viman Nagar in Vishakhapatnam. Situated at a distance of 19 kilometres, it will take around 45 minutes to reach the hill station. The well-established airport is well-served with renowned airline services like AirAsia, AirAsia India, IndiGo, SilkAir ensuring regular national and international flights. <br><br>
<img src="/vizagtourism/pictures/train 1.png" style="width:60px;height:60px;" ><b>By Train:-</b><br>
Vizag Railway Station is the nearest railway station which is just 9 kilometres away from Kailasagiri. The railway station is well-networked with other major cities of India. <br><br>
</div>
<?php include'footer.php'?>
</body>
</html>