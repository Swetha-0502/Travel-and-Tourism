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
<h2 class="breadcrumb-title">Annavram Temple</h2>
<ul class="d-flex justify-content-center breadcrumb-items">
<li class="breadcrumb-item"><a href="index.php">Home</a></li>
<li class="breadcrumb-item active"><a href="destination.php">Destination</a></li>
</ul>
</div>
</div>
</div><br><br>
<h2><center>Annavaram Temple</center></h2>
<div class="row">
    <center>
    <div class="column">
        <div style="width:1350px;height:700px;margin-left:9%;">
         <img src="/vizagtourism/pictures/annavram.jpg" alt="Vanjangi" style="width: 50%;height: 430px;">
        </div>
    </div>
    <div class="column" style="margin-left:5%">
      Annavaram, on the banks of the Pampa River, is a temple town. It is found in the Indian state of Andhra Pradesh’s East Godavari. On the Ratnagiri Hill, the village has the temple of Veera Venkata Satyanarayana, a form of Vishnu.Annavaram Temple is one of the most visited holy shrines in the country, second only to Tirupati Temple in Andhra Pradesh in terms of pilgrimage. The Dravidian style was used to construct the Satyanarayana Swamy Temple in Annavaram. The Revakhanda of the Holy Skandhapuranam extols Lord Satyadeva, the temple’s deity, for his wealth and glory.Lord Satyadeva is the God of Truth, and in his beautifully manifested form as the divine trinity known as Hari Hara Hiranyagarbha Trimurti Yatmaka, he bestows his eternal blessings on all humankind. As a result, the temple is the only one that attracts both Vishanava and Saiva Hindu pilgrims.Annavaram Temple is one of the most visited holy shrines in the country, second only to Tirupati Temple in Andhra Pradesh in terms of pilgrimage. The Dravidian style was used to construct the Satyanarayana Swamy Temple in Annavaram. The Revakhanda of the Holy Skandhapuranam extols Lord Satyadeva, the temple’s deity, for his wealth and glory.Lord Satyadeva is the God of Truth, and in his beautifully manifested form as the divine trinity known as Hari Hara Hiranyagarbha Trimurti Yatmaka, he bestows his eternal blessings on all humankind. As a result, the temple is the only one that attracts both Vishanava and Saiva Hindu pilgrims.Annavaram is a village in Andhra Pradesh’s east Godavari district, close to the Pampa River. 

</div></center>
</div><br><br><br>
<div style="margin-left: 5%;">
<h4>Poojas and Rituals at Annavaram Temple:</h4><br>
The Sathya Narayan Vratham is performed on Ekadashi and has a specific procedure. First Lord Ganesha and the Navagrahas are offered respect and then the image of the deity is placed on a clean spot.<br>


The Lord is appeased through chants, flowers, and prasadam that includes fruits, sweet wheat flour, and sweets are offered to the deity. The story is then narrated and Aarti is performed at the end. After the prayer, a small lamp is lit near the idol is known as the Aratika. The devotees take prasadam at the conclusion of the pooja.<br>
<h4>Pooja timings:</h4><br>
<table style="width:60%;border-color: #090909;">
  <tr>
    <th>Poojas and Seva Details</th>
    <th>Timings</th>
    
  </tr>
  <tr>
    <td>Suprabhatha Seva</td>
    <td>4:00 AM</td>
    
  </tr>
  <tr>
    <td>Dhoop Seva</td>  
    <td>5:00 AM</td>
    
  </tr>
   <tr>
    <td>Sarva Darshan Starting time</td>
    <td>6:00 AM</td>
    
  </tr>
   <tr>
    <td>Bala Bhogam</td>
    <td>7:00 AM</td>
    
  </tr>
   <tr>
    <td>Bali Harana</td>
    <td>7:30 AM</td>
    
  </tr>
   <tr>
    <td>Chaturvedi Praynam</td>
    <td>8:00 AM to 11:00 AM</td>
    
  </tr>
   <tr>
    <td>Swamy Nitya Kalyanam</td>
    <td>9:30 AM to 11:30 AM</td>
    
  </tr>
   <tr>
    <td>Abhishekam to Lord Shiva</td>
    <td>12:00 PM</td>
    
  </tr>
   <tr>
    <td>Maha Nivedana</td>
    <td>6:00 PM</td>
    
  </tr>
   <tr>
    <td>Dhoop Seva</td>
    <td>6:30 PM to 7:30 PM</td>
    
  </tr>
   <tr>
    <td>Darbaru Seva</td>
    <td>7:30 PM to 8:30 PM</td>
    
  </tr>
  <td>Ekantha SevaDarbaru Seva</td>
    <td>8:30 PM to 9:00 PM</td>
    
  </tr>
</table><br>
<h4>Vratham Timings:</h4><br>The Vratham timings in the Annavaram temple are the same throughout the week. The timings are as follows:<b>Every day: 6:00 AM to 5:00 PM</b><br><br>

<h4>Annavaram Temple Accommodation:</h4><br>
<table style="width:60%;border-color: #090909;">
  <tr>
    <th>S.No</th>
    <th>Guest House/Cottage Name</th>
    <th>Rent Per Day/Per Room (in Rs.)</th>
  </tr>
  <tr>
    <td>1.</td>
    <td>Sri Seetha Rama Choultry</td>
    <td>200</td>
    
  </tr>
  <tr>
    <td>2.</td>  
    <td>Old Centenary Cottages</td>
    <td>400</td>
    
  </tr>
   <tr>
    <td>3.</td>
    <td>New Centenary Cottages</td>
    <td>500</td>
    
  </tr>
   <tr>
    <td>4.</td>
    <td>Sri Vana Durga Choultry</td>
    <td>200</td>
    
  </tr>
   <tr>
    <td>5.</td>
    <td>Satya Niketan(Down Hill)</td>
    <td>200</td>
    
  </tr>
   <tr>
    <td>6.</td>
    <td>Sri Satyadeva Guest House</td>
    <td>400</td>
    
  </tr>
   <tr>
    <td>7.</td>
    <td>Prakash Sadan Ordinary Room</td>
    <td>650</td>
    
  </tr>
   <tr>
    <td>8.</td>
    <td>Prakash Sadan A.C. Room</td>
    <td>1050</td>
    
  </tr>
   <tr>
    <td>9.</td>
    <td>Prakash Sadan Double Room</td>
    <td>1600</td>
    
  </tr>
   <tr>
    <td>10.</td>
    <td>Hari Hara Sadan</td>
    <td>600</td>
    
  </tr>
   <tr>
    <td>11.</td>
    <td>Hari Hara Sadan Single Rooms</td>
    <td>400</td>
    
  </tr>
  <td>12.</td>
    <td>Hari Hara Sadan AC Rooms</td>
    <td>950</td>
    
  </tr>
</table><br>
<img src="/vizagtourism/pictures/location icon.png.png" style="width:20px;height:20px"><b>Location</b><br>
 Annavaram, Andhra Pradesh,India.
<h4><img src="/vizagtourism/pictures/transport.png" style="width:20px;height:20px" >&nbsp Transportation Details:<br></h4><br>
<img src="/vizagtourism/pictures/bus.png" style="width:50px;height:50px;" ><b>By Road:-</b><br>
There are regular buses to Vishakhapatnam as well as Annavaram from all major cities. Madras to Calcutta, National Highway-5 road is going via Annavaram. Regular bus service is available from all nearby towns.<br><br>
<img src="/vizagtourism/pictures/aeroplane.png" style="width:60px;height:60px;" ><b>By Air:-</b><br>
The nearest airport is at the east side of Annavaram at Visakhapatnam and all flights fly to Vishakhapatnam. Annavaram is at a distance of 3 hrs from Visakhapatnam. On the west side of Annvaram, the Rajahmundry Airport is located.<br><br>
<img src="/vizagtourism/pictures/train 1.png" style="width:60px;height:60px;" ><b>By Train:-</b><br>
Many trains that pass between Kolkata and Vijayawada stop at the Annavaram station. One can also stop at Visakhapatnam.  <br><br>

</div>
<?php include'footer.php'?>
</body>
</html>
