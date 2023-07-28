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
.button{
  border-radius:12px;
  width:150px;
  height:50px ;
  background-color: #f44336;
  color: white;

}
.button:hover{
  background-color: black;
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
<h2 class="breadcrumb-title">Best of Vizag</h2>
<ul class="d-flex justify-content-center breadcrumb-items">
<li class="breadcrumb-item"><a href="index.php">Home</a></li>
<li class="breadcrumb-item active"><a href="destination.php">Destination</a></li>
</ul>
</div>
</div>
</div><br><br>
<h1 style="text-align:center;">Best of Vizag</h1>
<h2 style="margin-left:5%">1)Submarine Museum</h2>
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

<h2 style="margin-left:5%">2)Kailashgiri</h2>
<div class="row">
    <center>
    <div class="column">
        <div style="width:1350px;height:700px;margin-left:9%;">
          <a href="kailashgiri.php"><img src="/vizagtourism/pictures/araku and vizag.jpg" alt="Kailashgiri" style="width: 50%;height: 430px;"></a>
        </div>
    </div>
    <div class="column" style="margin-left:5%">
       One place in Visakhapatnam which is as famous as the sprawling beaches here is the Kailasagiri Park situated on a hilltop. Kailasagiri is one of the prime attractions and a popular picnic spot for all the tourists visiting the beautiful city of Vizag.Spread over 100 acres on a hilltop, Kailasagiri offers a panoramic view of the surroundings that every nature lover craves for. A well-maintained park, Kailasagiri is always bustling with people enjoying the tranquil atmosphere and scenic beauty around.The major attraction of Kailasagiri is the 40 feet tall statue of Shiva and Parvathi. Kailasagiri derives its name from this statue depicting the abode of Lord Shiva and Parvathi. This hilltop can be reached by ropeway as well as by road.The experience of taking a ropeway while enjoying the breathtaking view of the city is something that everyone should cherish.The journey through the curved roads around the hill is also equally enjoyable. Along with this, there are a number of other attractions in and around Kailasagiri park like the Floral clock, Titanic viewpoint, Jungle trails, Shanthi Ashram, and Shanku Chakra Nama.Another remarkable attraction popular among the kids is the Toy train. This train gives a circular tour of the park and is thoroughly enjoyed by the tiny tots.The children's play park and horse rides are also equally popular among the kids.Kailasagiri is also a famous place for paragliding with excellent gliding facilities. To satisfy one’s hunger pangs there are a number of eateries around this park.Kailasagiri offers spectacular views from many locations owing to the beautiful landscape surrounding it. The view of the illuminated city in the evenings is definitely going to enthrall you.
</div></center>
</div><br><br><br>

<h2 style="margin-left:5%">3)Rushikonda Beach</h2>
<div class="row">
    <center>
    <div class="column">
        <div style="width:1350px;height:700px;margin-left:9%;">
          <a href="Rushikondha.php"><img src="/vizagtourism/pictures/rushikonda beach.jpg" alt="Rushikonda" style="width: 50%;height: 430px;"></a>
        </div>
    </div>
    <div class="column" style="margin-left:5%">
       The beach city of Andhra Pradesh, Visakhapatnam attracts huge number of tourists from all over the country looking to spend some relaxed moments amidst the pristine sandy beaches located here. Situated at around 8 km from the Vizag city is the beautiful Rushikonda beach, a popular beach of Vizag that attracts tourists as well as the locals here.Rushikonda beach is widely known for its golden sands and tidy waves of Bay of Bengal. Surrounded by green plants, Rushikonda beach looks picture perfect attracting nature lovers in huge numbers. With its vast stretch of waters, Rushikonda beach is the perfect place to enjoy water sports like swimming, water skiing and wind surfing.Known as one of the virgin beaches of South India, Rushikonda beach is no doubt one of the best beaches of Vizag. During the evening time, this beach is surrounded by nature lovers and adventure enthusiasts enjoying some beautiful moments amidst the scenic view of the beach with cool breeze caressing them.
       Tourists indulging in water sports in the clear waters of the beach is a regular sight here. Additionally, AP Tourism has built up cottages around the beach along with restaurants and other amenities making it an attractive tourist spot.Rushikonda beach is a place that can be visited by young and old people alike. With its wide stretch of golden sands, crystal clear waters, lush green plants in the surroundings, Rushikonda beach is definitely one of the major attractions of Vizag and a paradise for nature lovers. Also an ideal place for enjoying water sports, Rushikonda beach is a must visit place for adventure lovers as well.
</div></center>
</div><br><br><br>

<h2 style="margin-left:5%">4)Yarada Beach</h2>
<div class="row">
    <center>
    <div class="column">
        <div style="width:1350px;height:700px;margin-left:9%;">
         <a href="yarada.php"> <img src="/vizagtourism/pictures/yarada beach.jpg" alt="Yarada" style="width: 50%;height: 430px;">
        </div></a>
    </div>
    <div class="column" style="margin-left:5%">
       A must-visit destination on your Vizag tour, Yarada Beach is a well-maintained beach in India at present and has a calm atmosphere for all age groups. Unlike other tourist attractions, it is far away from the madding crowd and presents an exclusive range of activities that never lets you get bored, no matter what.On one hand, the lush greenery and scenic beauty let tourists admire nature as they overlook the breathtaking view of the sunrise and sunsets while on the other hand, soft golden sands when combined with crystal clear waters and deep blue colour of the sea, make the beach appear no less than a paradise.From soaking the warmth of the sun, to lounging under the shade, to walking hand-in-hand with your loved ones, to enjoying a fun-filled family picnic, to capturing photographs with a die-to-fall background at the backdrop, to going on a bike ride in the evening and what not, you can wish for anything when you are at the beach. And Yarada Beach promises you to fulfil all your desires so that you can cherish your visit forever!.Dolphin’s Nose is the first nearby attraction that you can visit after experiencing a peaceful beach life at Yarada Beach. Named after a hill that features a dolphin shape, the Dolphin’s Nose offers a 360-degree of the Vizag city from the top and is a good place to hang out with your friends/families. Here you can just sit back and relax for a long time without worrying about the fast-moving life and screeching noise. It is just 4.6 km away from Yarada Beach.Another equally fascinating destination is the Ross Hill Church. Constructed in the year 1867 by Mr. Monsieur Ross, the Ross Hill Church is a British era catholic church.
</div></center>
</div><br><br><br>

<h2 style="margin-left:5%">5)Ramakrishna Beach</h2>
<div class="row">
    <center>
    <div class="column">
        <div style="width:1350px;height:700px;margin-left:9%;">
         <a href="RK Beach.php"> <img src="/vizagtourism/pictures/ramakrishna mision beach.jpg" alt="Ramakrishna beach" style="width: 50%;height: 430px;"></a>
        </div>
    </div>
    <div class="column" style="margin-left:5%">
       Visakhapatnam is known as the beach city of Andhra Pradesh with its alluring beaches attracting hordes of visitors every day. One of the most popular beaches of Vizag is Ramakrishna beach, more commonly known as RK beach bustling with young and old people alike.RK Beach gets its name from the Ramakrishna Mission ashram situated near the beach. With its serene waters and cool atmosphere, the beach offers a wonderful view of the countryside.The view of the sunset from this beach is truly mesmerizing and one can find a number of people enjoying some relaxed moments in this beautiful beach enjoying the perfect view.Ramakrishna Beach is popular not just among the tourists but the locals as well. In the evening time this beach gets crowded with people having a fun time on the sands. Swimming, sunbathing, surfing and playing beach volleyball are some of the popular activities that can be seen here.One can also enjoy a camel ride on the sands of the beach. There are a number of boats and ships operating on one side of the shore and one can go for a ride in the traditional fishing boat arranged by the fishers or can take a local cruise to enjoy the beautiful view of the sunset.To pamper your taste buds there are a number of roadside restaurants around the beach offering the best seafood which everyone should definitely try. There are a number of other eateries along the beach side to keep your appetite full.Along with this, there are other attractions in and around the Ramakrishna Beach with INS Kurusura Submarine Museum, an aquarium, the Kali temple, Visakha museum and VUDA park being the most popular ones.
</div></center>
</div><br><br><br>

<h2 style="margin-left:5%">6)Dolphins Nose</h2>
<div class="row">
    <center>
    <div class="column">
        <div style="width:1350px;height:700px;margin-left:9%;">
          <img src="/vizagtourism/pictures/dolphin hill or nose.jpg" alt="Dolphins nose" style="width: 50%;height: 430px;">
        </div>
    </div>
    <div class="column" style="margin-left:5%">
       A hidden gem nestled in the southern part of the city, Dolphin’s Nose is one of the popular tourist places to visit in Visakhapatnam that treats your eyes with an enchanting view of the breathtaking landscapes, lush-greenery, harbour and the entire city from the top of the hill.Positioned at a height of 358 meters above the sea level, Dolphin’s Nose boasts of an amazing location with a cool and breezy atmosphere where you can relax, rejuvenate and soothe your senses with a view to die for.Owing to its scenic beauty, surreal setting and tranquil environment, this attraction has become a must-visit place for holiday makers of all ages. It is a paradise for nature lovers and is no less than a heaven for instagrammers.Do not forget to pay a visit to the Dolphin’s Nose Lighthouse, which is located above the Dolphin’s Nose hill. Else, you will miss regretting your trip after coming back home. There is nothing like witnessing the romantic sunset with your loved ones. So, why not enjoy it the most at Dolphin’s Nose that gives you an opportunity to say goodbye to the sun with hues spreading all over the place.Have a fun-filled day out with your loved ones. It is a great place for couples and families to spend some quality time together.Have a fun-filled day out with your loved ones. It is a great place for couples and families to spend some quality time together.Capture the mesmerizing scenery with a jaw-dropping background in the backdrop. The place offers innumerable opportunities to get yourself photographed.Very similar to a dolphins nose, this 174 m high rocky headland is situated in the south of Vizag.
</div></center>
</div><br><br><br>

<h2 style="margin-left:5%">7)Air Craft Museum</h2>
<div class="row">
    <center>
    <div class="column">
        <div style="width:1350px;height:700px;margin-left:9%;">
         <a href="air craft museum.php"> <img src="/vizagtourism/pictures/TU 142 Aircraft Museum.jpg" alt="Air craft museum" style="width: 50%;height: 430px;"></a>
        </div>
    </div>
    <div class="column" style="margin-left:5%">
       If you are in Visakhapatnam, you cannot ignore a wide variety of museums that the city boasts of, displaying a fantastic combination of old history with modern culture. Out of all those museums, one of the museums that is unique in its own ways is – TU 142 Naval Aircraft Museum.Also known as the “Pride for the City”, TU 142 Naval Aircraft Museum offers a delightful experience for sightseeing lovers, history buffs and experience seekers interested in learning everything about the lives of Navy people. Located on the beach road, this museum gives you a chance to enter the aircraft that was earlier used for the Indian Navy.Perfect for people of all ages, TU 142 Naval Aircraft Museum has an exhibition hall where you can see plenty of equipment such as survival kit, engine, data recorder, propeller, anti-submarine missiles and sonobuoys. All these equipment and parts of the aircraft are displayed in detail so that you can get enough information about the aircraft. Other than that, the museum also features VR rides that are a bit expensive but worth trying.All-in-all, it won’t be wrong to say that TU 142 Naval Aircraft Museum is a not-to-miss attraction on your Vizag tour especially if you are travelling with your family as it gives a great exposure to the children.Even though the TU 142 Naval Aircraft has served the Indian Navy for a long period of 29 years, it was converted into a museum after it was decommissioned at the Visakhapatnam Beach. Formed in the year 2017, the foundation of the museum was laid by Shri Nara Chandrababu Naidu, the former Chief Minister of Andhra Pradesh State and was inaugurated by Ram Nath Kovind who is the president of India.
</div></center>
</div><br><br><br>

<h2 style="margin-left:5%">8)Shimhachalam</h2>
<div class="row">
    <center>
    <div class="column">
        <div style="width:1350px;height:700px;margin-left:9%;">
         <a href="Shimhachalam.php" > <img src="/vizagtourism/pictures/shimhachalam temple.jpg" alt="shimhachalam" style="width: 50%;height: 430px;"></a>
        </div>
    </div>
    <div class="column" style="margin-left:5%">
      The Varaha Lakshmi Narasimha Temple is located on the Simhachalam Hill Range, about 984 foot above sea level in Visakhapatnam, Andhra Pradesh. The temple is dedicated to Lord Vishnu who is worshiped as Varaha Narasimha, the avatar Vishnu took of half-lion and half-man to save his devotee Prahlad from a murder attempt by his father King Hiranyakashipu.  The Simhachalam Temple is among the 32 Narasimha temples in Andhra Pradesh and also an important centre of Vaishnavism. One of the temple’s earliest inscriptions dates back to the 11th century mentioning the gift given by a person in the time of Chalukya Chola king, Kulottunga I. The later half of the 13th century saw the changes made to the complex during the reign of Eastern Ganga king, Narasimhadeva I. The temple appears like a fortress from a distance with its five gateways and three outer courtyards, with the architectural styles being a mix of Kalinga, Chalukya, Kakatiya and Chola variants. The temple is believed to fulfill women’s wishes of having a baby. Kalyanotsava and Chandanotsava are its two major festivals celebrated with great pomp. The entry to the temple is free and it is open on all days of the week. Simhachalam temple darshan timings is 07:00 am and 04:00 pm and again from 06:00 pm to 09:00 pm. For a special darshan you need to pay INR 100 per devotee - tickets can be bought from the temple ticket counter, though there is no facility for an online puja booking. The Visakhapatnam International Airport is the nearest airport to the temple, being about 14 kilometre away, while the Visakhapatnam Railway Station is the closest railway station to the temple 
</div></center>
</div><br><br><br>
<a href="package.php"><center><button class="button">Book Now</button></center></a>
<?php include'footer.php'?>
</body>
</html>