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
<h2 class="breadcrumb-title">Shimhachalam</h2>
<ul class="d-flex justify-content-center breadcrumb-items">
<li class="breadcrumb-item"><a href="destination.php">Home</a></li>
<li class="breadcrumb-item active"><a href="destination.php">Destination</a></li>
</ul>
</div>
</div>
</div><br><br>
<h2><b><center>Shimhachalam Temple</center></b></h2>
<div class="row">
    <center>
    <div class="column">
        <div style="width:1350px;height:700px;margin-left:9%;">
          <img src="/vizagtourism/pictures/shimhachalam temple.jpg" alt="Shimhachalam" style="width: 50%;">
        </div>
    </div>
    <div class="column" style="margin-left:5%">
        The<b> Varaha Lakshmi Narasimha Temple</b> is located on the Simhachalam Hill Range, about 984 foot above sea level in Visakhapatnam, Andhra Pradesh. The temple is dedicated to Lord Vishnu who is worshiped as Varaha Narasimha, the avatar Vishnu took of half-lion and half-man to save his devotee Prahlad from a murder attempt by his father King Hiranyakashipu. The idol of Narasimha is covered in sandalwood paste through the year, making it resemble a lingam. The Simhachalam Temple is among the 32 Narasimha temples in Andhra Pradesh and also an important centre of Vaishnavism. One of the temple’s earliest inscriptions dates back to the 11th century mentioning the gift given by a person in the time of Chalukya Chola king, Kulottunga I. The later half of the 13th century saw the changes made to the complex during the reign of Eastern Ganga king, Narasimhadeva I. The temple appears like a fortress from a distance with its five gateways and three outer courtyards, with the architectural styles being a mix of Kalinga, Chalukya, Kakatiya and Chola variants. The temple is believed to fulfill women’s wishes of having a baby. Kalyanotsava and Chandanotsava are its two major festivals celebrated with great pomp. The entry to the temple is free and it is open on all days of the week. For a special darshan you need to pay INR 100 per devotee - tickets can be bought from the temple ticket counter, though there is no facility for an online puja booking. The Visakhapatnam International Airport is the nearest airport to the temple, being about 14 kilometre away, while the Visakhapatnam Railway Station is the closest railway station to the temple at a distance of 18 kilometre.
    </div></center>
</div><br><br><br>
<div style="margin-left:5%">
<b>It Is Known For:-</b><br>
<ul style="line-height:50px;">
<li><img src="/vizagtourism/pictures/icon.png" style="height:14px;width: 14px;">It is one of the 32 temples of Lord Vishnu and is said to be existing since the medieval era.</li>
<li><img src="/vizagtourism/pictures/icon.png" style="height:14px;width: 14px;">It reflects the Kalinga-Dravidian style of architecture.</li> 
<li><img src="/vizagtourism/pictures/icon.png" style="height:14px;width: 14px;">It is also said that Saint Ramanujan, a great Indian scholar & mathematician, visited this temple to seek salvation.</li>
<li><img src="/vizagtourism/pictures/icon.png" style="height:14px;width: 14px;">The festivals like Narasimha Jayanti, Kalyanotsava, Chandanotsava, Navratrotsava, Krishna Janmashtami, Diwali etc.</li>
</ul>
<br>
<b>Best Time To Visit:-</b><br>
<p>Simhachalam Temple is a famous shrine and it is always flooded by the devotees. On a daily basis, it sees hundreds of devotees offering their prayers to Lord Vishnu. Therefore, one can pay a visit to this temple at any time of the year. However, the best time is during the celebration of the festivals listed above.</p><br>
<b>Reaching There:-</b><br>
Simhachalam Temple has a well-established connectivity of roadways and railways. People from distant places can reach by hiring the service of the local transit like the bus, taxi, and autos.<br><br>
<button style="width:40%;padding:1%;background-color: green;color: white;"><b><img src="/vizagtourism/pictures/train.png" style="height:20px;width:20px;"> &nbsp  Nearest Railway Station</b>:-Visakhapatnam Railway Station</button>
<button  style="margin-left:10%;width:40%;padding:1%;background-color: green;color: white;"><b><img src="/vizagtourism/pictures/plane.png"  style="height:20px;width:20px;"> &nbsp  Nearest Airport:-</b> Visakhapatnam Airport</button>
</div>
<?php include'footer.php'?>
</body>
</html>



