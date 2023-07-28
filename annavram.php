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
<h2 class="breadcrumb-title">Vizag and Araku with Annavaram</h2>
<ul class="d-flex justify-content-center breadcrumb-items">
<li class="breadcrumb-item"><a href="index.php">Home</a></li>
<li class="breadcrumb-item active"><a href="destination.php">Destination</a></li>
</ul>
</div>
</div>
</div><br><br>
<h1 style="text-align:center;">Vizag and Araku with Annavaram</h1>
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
        <a href="dolphins nose.php"> <img src="/vizagtourism/pictures/dolphin hill or nose.jpg" alt="Dolphins nose" style="width: 50%;height: 430px;"></a>
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

<h2 style="margin-left:5%">9)Borra Caves</h2>
<div class="row">
    <center>
    <div class="column">
        <div style="width:1350px;height:700px;margin-left:9%;">
         <a href="borra caves.php"> <img src="/vizagtourism/pictures/borra caves.jpg" alt="Borra caves" style="width: 50%;height: 410px;"></a>
        </div>
    </div>
    <div class="column" style="margin-left:5%">
        Located in the Ananthagiri mandal of the Visakhapatnam district in Andhra Pradesh are one of the largest caves of the country known as Borra Caves.There are several legends regarding the discovery of the caves among the tribals living here. According to a popular legend, Borra caves were discovered when a cowherd while searching for his lost cow came across these caves. He found a Shiva Lingam inside the cave and believed that Lord Shiva has saved his cow.The villagers built a small temple outside the cave which is visited by the people coming here. Another popular belief is that the Shiva Lingam found here had a stone formation of cow above it and the udder of this cow is believed to be the source for Gosthani river that flows through the Vizag city.Borra Caves were formed as a result of the flow of Gosthani River on the limestone deposits. These caves are known for the breathtaking stalactite and stalagmite formations such as Shiva-Parvathi, Rishi's Beard, Mother-Child, Crocodile, Human Brain, Tiger and Cows udder.Borra Caves are mainly inhabited by the bats that feed on flowers and fruits such as jamun, guava, mango etc. The caves, beautifully lit by the Andhra Pradesh Tourism Development Corporation give these caves an enchanting look.One of the major attractions of Vizag, Borra Caves is a must visit tourist destination. The various interesting formations, the beautiful lighting, the temple make these caves a popular tourist site in Vizag which should not be missed by anyone. 

</div></center>
</div><br><br><br>

<h2 style="margin-left:5%">10)Ananthagiri Hills</h2>
<div class="row">
    <center>
    <div class="column">
        <div style="width:1350px;height:700px;margin-left:9%;">
        <a href="Ananthagiri.php">   <img src="/vizagtourism/pictures/Ananthagiri hills.jpg" alt="Ananthagiri" style="width: 50%;height: 410px;"></a>
        </div>
    </div>
    <div class="column" style="margin-left:5%">
       Anantagiri Hills are well known for its scenic beauty and charming weather. It is a perfect gateway to spend some time amidst the lap of nature. Anantagiri is paradise for coffee lovers and nature enthusiasts. The village is surrounded by coffee estates that emit the rich aroma of coffee and the surrounding hillocks are home to cascading waterfalls that feed the lush greenery.The famous Borra Caves are very close to Anantagiri. This unexplored and peaceful environment of the hill station attracts tourists from various parts of the state. Watching the panoramic views ranging from sunrise, sunset, thick forests and mountain ranges cover the route between Vizag to Anantagiri. The Anantagiri hill resort is a perfect getaway from the hot and humid weather of Vizag in summer months.Accommodation is easily available in Anantagiri Hills. There are various types of hotels and lodges in the area which offer pleasant lodging facilities and services. AP tourism runs a resort is the Anantagiri village. Jungle Bells resort at Tyda is about 11 km from Anantagiri and it's a wonderful option to stay.Anantagiri hills can be reached via both road and rail. The closest railhead to these hills is 9 km away at Borra Caves. State buses are also available, in order to reach these hills.At a distance of 26 km from Araku, 85 km from Vizag & 660 km from Hyderabad, Anantagiri is a lovely tiny hill station between Vizag and Araku Valley. It is one of the top tourist places to visit in Araku Valley and is also among the top hill station in Andhra Pradesh apart from being a popular weekend getaway from Vizag city.



</div></center>
</div><br><br><br>

<h2 style="margin-left:5%">11)Chaaparai/Chaparai Waterfalls</h2>
<div class="row">
    <center>
    <div class="column">
        <div style="width:1350px;height:700px;margin-left:9%;">
         <a href="Chaparai.php"> <img src="/vizagtourism/pictures/chaparai.jpg" alt="Chaaparai" style="width: 50%;height: 410px;"></a>
        </div>
    </div>
    <div class="column" style="margin-left:5%">
        Chaparai is a well known picnic spot in Araku valley. A scenic place with water falls and surrounding forest area makes people relax and spend their holiday joyfully. Usually people who visit Araku valley won't miss this place as it is very nearer to the main Araku valley place. It is better not to enter into water flow area during rainy season as the water current will be high and dangerous. During winter season the water flow is less and people can enjoy their stay here. Landscapes and gardens are located surrounding this place. One can experience the beauty of water gushing through natural rocks.At a distance of just 13 km from Araku, the Chaparai waterfalls or the Dumbriguda waterfalls is one of the most popular weekend destinations as well as a much sought after place for the Telugu film industry.With a perfectly serene environment, you have quite a few local vendors to offer you special delicacies like grilled chicken, kulfi etc. The best time to feel the nature closest to you would be at sunrise or sunset. One can also take a dip in the water as it is not too deep or slippery.People can reach Araku valley by train or bus. Tourist normally plan to reach Araku valley from Visakhapatnam by taking the train ticket for Vizag Kirandul passenger train and send their private vehicle to Araku. During this journey they enjoy the scenic beauty of the valley, tunnels and bridges.Dumbriguda Chaaparai is not included in the one day Araku Package trip conducted by APTDC. People have to take their own vehicles or hire a taxi/auto from Araku and visit this place. 
</div></center>
</div><br><br><br>

<h2 style="margin-left:5%">12)Tribal Museum</h2>
<div class="row">
    <center>
    <div class="column">
        <div style="width:1350px;height:700px;margin-left:9%;">
        <a href="tribal.php"> <img src="/vizagtourism/pictures/tribal museum.jpg" alt="Yarada" style="width: 50%;height: 410px;"></a>
        </div>
    </div>
    <div class="column" style="margin-left:5%">
       At a distance of 200 m from Araku Bus Station, Araku Tribal Museum is a wonderful place which explores the tribal culture of Eastern Ghats. It is one of the top tourist places to visit in Araku Valley.The Andhra Pradesh Tourism Development Corporation established this museum in 1996. Araku Valley boasts of 19 tribes that live in the vicinity of the town. The purpose of the museum is to create awareness about tribal culture and lifestyle. Araku Tribal Museum is not a historical place but offers information about the tribes that currently live here.Araku Tribal Museum is spread over two levels, built with mud and real metals to portray tribal life. The museum has been designed to showcase tribal lifestyle in motion, starting with a kitchen that displays utensils made of iron and mud. A series of 10 photographs capturing the wedding ceremony of the tribal is very interesting at the entrance. The passages within the museum that connect various sections are constructed of mud walls adorned with drawings and artwork made by tribals. The most impressive section of the Tribal Museum is the one that exhibits the local tribal Mayur and Dhimsa dance.The museum consists of several clay monuments that depict their day-to-day activities. Various artifacts of the tribal people are exhibited which includes jewellery, hunting tools and kitchen utensils. The museum is well equipped with sign boards, which provides requisite information to aid the visitors. There is a stall in the museum where handicrafts items of the tribes are sold. 

</div></center>
</div><br><br><br>

<h2 style="margin-left:5%">13)Katiki Waterfalls</h2>
<div class="row">
    <center>
    <div class="column">
        <div style="width:1350px;height:700px;margin-left:9%;">
        <a href="Katiki.php"> <img src="/vizagtourism/pictures/download.jpg" alt="Katiki Waterfalls" style="width: 50%;height: 430px;"></a>
        </div>
    </div>
    <div class="column" style="margin-left:5%">
       Visakhapatnam is one of the few places in India that gives you endless options to truly escape from the monotonous humdrum of our daily lives into the wilderness of forests, cool clear waters of the Bay of Bengal, hills, beaches, historical excavations among so many others. The list is endless.One such exciting location that you should surely visit is the Katiki Waterfalls. Paradise awaits you among dense forests and steep hills to cascading water from the top of the hill, at the end of the trail. In the lap of nature, you can eat, sleep, relax, and simply take a big breath of fresh air. The falls derive its name from its location, Katiki. It is about 50 feet high and originated from the Gosthani River.Katiki waterfalls is a nature lover’s paradise. It is as if the entire location has been tailor-made to suit the adventurous, trotting through dense forest and creating some beautiful memories.If you are not up for some heavy task, be rest assured that Katiki accommodates you as well. Katiki waterfalls promote ultimate relaxation and take your stress away from you.To reach the waterfall, you need to trek up a hill. It is a very short trek, hardly twenty- or thirty-minutes duration and fairly easy in comparison to trekking up to reach waterfalls. This ensures that Katiki welcomes people of all ages, sizes and capacities but gives you a short duration of strenuous task with the highest form of relaxation. While you trek up the hill, make sure to witness some of the unique birds, animals and trees around you. Katiki waterfalls is a prominent place for camping. Live the dream of camping in the woods by setting up tents here with your friends and family. 
</div></center>
</div><br><br><br>

<h2 style="margin-left:5%">14)Padmapuram Gardens</h2>
<div class="row">
    <center>
    <div class="column">
        <div style="width:1350px;height:700px;margin-left:9%;">
        <a href="Padmapuram.php">  <img src="/vizagtourism/pictures/padmapuram gardens.jpg" alt="Padmapuram gradens" style="width: 50%;height: 410px;"></a>
        </div>
    </div>
    <div class="column" style="margin-left:5%">
       Padmapuram Botanical Gardens are a part of the Eastern Ghats and are situated in the Araku road. The garden was built during the time of the Second World War with the aim of growing vegetables for the soldiers who were fighting in the war. It was simply called Botanical Garden back then. However, now there is much more to the gardens than simply growing vegetables. Padmapuram Botanical Gardens now contain a horticultural nursery that includes exotic and rare species of flowers and trees. Another important feature of the Padmapuram Botanical Gardens is a toy train that is enjoyed by both kids and adults alike. The toy train has been planted within the Gardens, to give the tourists a tour of the entire area. The garden also has interesting features such as an exclusive rose garden as well as tree-top huts These huts are available for rent and have to be booked in advance.The garden was built in 1942 on a 26-acre plot to supply vegetables to the soldiers who fought in World War II. After the War, it was converted into a Horticultural Nursery cum Training Center where orchards, rare species of flowers and trees, tree houses and stone sculptures greet the eye.A pleasurable way of seeing the gardens is to get on to the Araku Express toy train, popular with visitors to the gardens. Along with the toy train, the garden also contains tree top huts, which can be booked by the tourists. These tree huts, also known as hanging cottages, are ten feet above the ground level. It is a thrilling experience to stay in a hanging cottage and one can experience a rare swing as the tree sways to a heavy breeze. 


</div></center>
</div><br><br><br>

<h2 style="margin-left:5%">15)Lambasingi View Point</h2>
<div class="row">
    <center>
    <div class="column">
        <div style="width:1350px;height:700px;margin-left:9%;">
        <a href="lambasingi.php"> <img src="/vizagtourism/pictures/lambasingi.jpg" alt="Lambasingi" style="width: 50%;height: 410px;"></a>
        </div>
    </div>
    <div class="column" style="margin-left:5%">
      Lambasingi is a village in Visakhapatnam district of Andhra Pradesh. The place is located at 1000 meters above sea level and the region is cooler than the other plains of Visakhapatnam. Lambasingi is famous for its tea and coffee plantations. Moreover, the place is abounding with a variety of wildlife, flora, and fauna. If you are planning to explore this hamlet in Andhra Pradesh then make sure that you include all these places to visit in Lambasingi as they are worth a visit.Here is the list of handpicked places to visit in Lambasingi that any traveler must not miss out on. Note the list and make sure that you cover most of them on your vacation. The place has bagged the title of ‘Kashmir of Andhra Pradesh’ due to a bit of snowfall every year.From reservoirs to waterfalls, you will find several tourist places in Lambasingi to explore.<br>
      1)Thajangi Reservoir: Soothe Your Eyes With A View<br>
      2)Kothapalli Waterfalls: Watch White Water Cascading<br>
      3)Susan Garden: Admire The Yellow Beauty<br>
      4)Ghat Road: Stroll Around With A Good Company<br>
      5)Bojjannakonda: Gape At The Surreal Paddy Fields<br>
      6)Kondakarla Bird Sanctuary: Haven For Bird Lovers<br>
      7)Annavaram Temple: Pay Your Tributes Here<br>
      8)Yerravaram Waterfalls: Relax Amidst Green Pastures<br> 
</div></center>
</div><br><br><br>

<h2 style="margin-left:5%">16)Vanjangi View Point</h2>
<div class="row">
    <center>
    <div class="column">
        <div style="width:1350px;height:700px;margin-left:9%;">
        <a href="vanjangi.php"> <img src="/vizagtourism/pictures/vanjangi.jpg" alt="Vanjangi" style="width: 50%;height: 430px;"></a>
        </div>
    </div>
    <div class="column" style="margin-left:5%">
      Vanjangi village is located in the Visakhapatnam district of Andhra Pradesh, India, in the Paderu Tehsil. It is 8 kilometres from the sub-district headquarters in Paderu and 125 kilometres from the district headquarters in Visakhapatnam. With the incredible sights on offer, Vanjangi, which is 3400 feet above sea level, has become a tourist hotspot. Scenes of dense clouds floating endlessly amid the hills form a sight to behold as you approach the vantage point at the location early in the morning. The most auspicious time to visit Vanjangi is at sunrise, when an orange twilight proudly announces the arrival of the sun beyond the cloud cover. Many visitors are choosing to camp in the open spaces because the village does not yet have any tourist accommodation facilities.Megha Samudram, or the Ocean of Clouds, is the name given to this newly discovered hill heaven. And the name seems fitting, given that tourists have never seen such an assemblage of clouds at such high altitudes, every beautiful morning. A sight not to be missed is the golden light tinting the cloud cover as it floats endlessly.The dawn unfolds gradually, and a golden horizon pops into view as the sun rises from the midst of dense, wispy clouds. The morning is cool and crisp, and every sense is heightened as one witnesses the dreamlike cascade of clouds billow like a river. The sun rises over the cleaving of two hills and soon you find yourself standing above a veritable abode of clouds, which float like sea waves would, under the influence. Soon, the mountain tops reveal themselves, leaving you to behold the canvas of a beautiful morning.
</div></center>
</div><br><br><br>

<h2 style="margin-left:5%">17)Annavaram</h2>
<div class="row">
    <center>
    <div class="column">
        <div style="width:1350px;height:700px;margin-left:9%;">
        <a href="temple.php"> <img src="/vizagtourism/pictures/annavram.jpg" alt="Vanjangi" style="width: 50%;height: 430px;">
        </div></a>
    </div>
    <div class="column" style="margin-left:5%">
      Annavaram, on the banks of the Pampa River, is a temple town. It is found in the Indian state of Andhra Pradesh’s East Godavari. On the Ratnagiri Hill, the village has the temple of Veera Venkata Satyanarayana, a form of Vishnu.Annavaram Temple is one of the most visited holy shrines in the country, second only to Tirupati Temple in Andhra Pradesh in terms of pilgrimage. The Dravidian style was used to construct the Satyanarayana Swamy Temple in Annavaram. The Revakhanda of the Holy Skandhapuranam extols Lord Satyadeva, the temple’s deity, for his wealth and glory.Lord Satyadeva is the God of Truth, and in his beautifully manifested form as the divine trinity known as Hari Hara Hiranyagarbha Trimurti Yatmaka, he bestows his eternal blessings on all humankind. As a result, the temple is the only one that attracts both Vishanava and Saiva Hindu pilgrims.Annavaram Temple is one of the most visited holy shrines in the country, second only to Tirupati Temple in Andhra Pradesh in terms of pilgrimage. The Dravidian style was used to construct the Satyanarayana Swamy Temple in Annavaram. The Revakhanda of the Holy Skandhapuranam extols Lord Satyadeva, the temple’s deity, for his wealth and glory.Lord Satyadeva is the God of Truth, and in his beautifully manifested form as the divine trinity known as Hari Hara Hiranyagarbha Trimurti Yatmaka, he bestows his eternal blessings on all humankind. As a result, the temple is the only one that attracts both Vishanava and Saiva Hindu pilgrims.Annavaram is a village in Andhra Pradesh’s east Godavari district, close to the Pampa River. 

</div></center>
</div><br><br><br>
<a href="package.php"><center><button class="button">Book Now</button></center></a>
<?php include'footer.php'?>
</body>
</html>
