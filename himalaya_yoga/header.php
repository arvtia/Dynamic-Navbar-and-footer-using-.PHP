<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
<!--style sheet-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="assests/stylesheets/header-footer.css" type="text/css">
<!--bootstrap css-->

</head>
<body>

<header style="z-index: 33; position: absolute;">
    <!--top header-fixed position starts here-->
    <div class="top-header">
        <p>info@himalayayoga.net | +91- 7004851378 (India) | +001 4389 391 108 (Canada)</p>
    </div>
    <!--top header-ends here-->
    <!--navbar content starts here-->
    <div class="navbar">
        <!--logo+name div-->
        <div class="colum-1">
            <img src="assests/images/upscale-.svg" alt="upscale-">
            <h2>Himalaya Yoga</h2>
        </div>
        <!--navbar headingsstarts here-->
        <div class="colum-2">
            <!--list headings-->
            <div class="list-heading">
                <a href="#"><li>Home</li></a>
                <a href="#"><li>About Us</li></a>
                <!--drop down-->
                <li id="dropdown-0">
                    Our Instructor
                    <img src="assests/images/down.svg" alt="down" id="downIcon">
                    <div class="dropdown" id="first-drop">
                        <!--item drop down list class-->
                            <a href="#">Master Shivachitam</a>
                            <a href="#">Amit Kumar AKA Eknath</a>
                            <a href="#">Doctor Ashish</a>
                            <a href="#">Ravi Kumar (Sn Prakash Murty)</a>
                    </div>
                </li> 
                <!--drop down-->
                <li id="dropdown-1">Wellness Programs<img src="assests/images/down.svg" alt="down" id="downIcon"> 
                    <div class="dropdown" id="sec-drop">
                            <a href="#">Programs/ Campaign for overcoming Chronic Lifestyle</a>
                            <a href="#">Nature Therapy</a>
                            <a href="#">Alternative Therapy</a>
                    </div>
                </li>
                <!--drop down class-->
            
                <li id="dropdown-2">Yoga <img src="assests/images/down.svg" alt="down" id="downIcon"> 
                    <div class="dropdown" id="third-drop">
                        <!--item drop downlist class-->
                            <a href="#">Meditation</a>
                            <a href="#">Panch Karma</a>
                            <a href="#">Hath Yoga</a>
                            <a href="#">YTTC (Yoga Teaching Trainer Course)</a>
                            <a href="#">Health Management</a>
                            <a href="#">Week day course</a>
                            <a href="#">Weekend Retreat</a>
                        <!--item list ends here-->
                    </div>
                </li>
                    <!--drop down class-->
                
            
                <!--drop down end-->
                <a href="#"><li>Virtual Tour</li></a>
                <a href="#"><li>Accomodation</li></a>
                <a href="#"><li>Events</li></a>
                <!--headings ends here-->
            </div>
            <!--List heading ends here-->
            
        </div> 
        <!--colum 2 ends-->
        <div class="colum-3">
            <!--search icon + contact now btn-->
            <img src="assests/images/search-icon.svg" alt="search-icon" id="search-icon">
            <div class="btn">Contact Now</div>
            <!--toggle navigation icon-->
            <div class="ham-icon">
                <img src="assests/images/icon-ham.svg" alt="" id="hamburger">
            </div>
        </div>
    </div>
    <!--navbar content stops here-->

    <!--side nav bar open-->

    
    <div class="side" id="sidebar">


        <div class="container">
            <!--close side navbar icon-->
            <div class="close-side-nav">
                <img src="assests/images/close.svg" alt="close" id="close-side-navbar-icon">
            </div>
                <div class="list-side">
                   <!--Navbar Search bar icons--> 
                    <div class="searchbar">
                        <input type="search" value="Search.." id="search-box">
                        <button input type="submit"><img src="assests/images/search-1.svg" alt="search.gif" id="search-gif"></button>
                    </div>

                    <ul id="list-items">
                        <a href="#">Home</a>
                        <a href="#">About Us</a>
                        <li>
                            <div class="list-sub" id="dropdown-button">
                                <p>Our Instructors</p>
                                <img src="assests/images/down.svg" alt="down" id="first-down-arrow">
                            </div>
                            <div class="ul" id="sn-dropdown0">
                                <a href="#">Master Shivachitam</a>
                                <a href="#">Amit Kumar AKA Eknath</a>
                                <a href="#">Doctor Ashish</a>
                                <a href="#">Ravi Kumar (Sn Prakash Murty)</a>
                            </div>
                        </li>
                        <li>
                            <div class="list-sub" id="dp-db-2">
                                <p> Wellness Programs  </p>
                                <img src="assests/images/down.svg" alt="down" id="second-down-arrow">
                            </div>
                    
                            <div class="ul" id="sn-dropdown1">
                                <a href="#">Programs/ Campaign for overcoming Chronic Lifestyle</a>
                                <a href="#">Nature Therapy</a>
                                <a href="#">Alternative Therapy</a>
                            </div>
                        </li>
                        <li>
                            <div class="list-sub" id="dp-db-3">
                                <p>Yoga </p>
                                <img src="assests/images/down.svg" alt="down" id="third-down-arrow">
                            </div>
                            <div class="ul" id="sn-dropdown2">
                                <a href="#">Meditation</a>
                                <a href="#">Panch Karma</a>
                                <a href="#">Hath Yoga</a>
                                <a href="#">YTTC (Yoga Teaching Trainer Course)</a>
                                <a href="#">Health Management</a>
                                <a href="#">Week day course</a>
                                <a href="#">Weekend Retreat</a>                        
                            </div>
                        </li>
                        <a href="#">Virtual Tour</a>
                        <a href="#">Accomodation</a>
                        <a href="#">Events</a>
                    </ul>
                </div>
                <!--list side end here-->
        </div>
    </div>

</header>









