<?php

include 'data.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $email = $_POST['email'];
    $city = $_POST['city'];
    $message = $_POST['message'];

    $sql = "INSERT INTO `users`(`first_name`,`last_name` ,`email`,  `city`, `message`) 
            VALUES ('$first_name','$last_name','$email','$city','$message')";

if ($conn->query($sql) === TRUE) {
   
    header("Location: index.php"); 
    exit();
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
}
?> 

<!DOCTYPE html>
<html lang="en">
    
<!-- Mirrored from wpthemebooster.com/demo/themeforest/php/mrittik/light/index-10.php by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 24 Dec 2023 13:46:24 GMT -->
<head>
        <!-- Meta Tags -->
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0">
        <meta name="description" content="Mrittik is a Modern Architecture Theme">
        <meta name="author" content="">

        <!-- Favicon and touch Icons -->
        <link href="../assets/img/favicon.png" rel="shortcut icon" type="image/png">
        <link href="../assets/img/apple-touch-icon.php" rel="apple-touch-icon">
        <link href="../assets/img/apple-touch-icon-72x72.php" rel="apple-touch-icon" sizes="72x72">
        <link href="../assets/img/apple-touch-icon-114x114.php" rel="apple-touch-icon" sizes="114x114">
        <link href="../assets/img/apple-touch-icon-144x144.php" rel="apple-touch-icon" sizes="144x144">

        <!-- Page Title -->
        <title>Creative Dudes  - Modern Designers </title>    
        
        <!-- Styles Include -->
        <link rel="stylesheet" href="../assets/css/style.css">
        
    </head>


    <body class="bg-white left_menu">

        <!-- Preloader -->
        <?php include 'pre-loader.php'; ?>
        <!-- Cursor Effect -->
        <div class="pointer bnz-pointer" id="bnz-pointer"></div>

        <!-- Header -->
		<header class="header bg-transparent">				
            <div class="container-fluid">
                <div class="header_inner d-flex align-items-center justify-content-between">
                    <br><br>

                    
                    <div class="mainnav d-none">                        
                        <ul class="main_menu">
                        <li class="menu-item"><a href="index.php"> <br><br> Home</a></li>
                                
                                </li>
                                <li class="menu-item"><a href="about.php"> <br><br> About Us</a></li>
    
                                <li class="menu-item"><a href="team-details.php"> <br><br> Team Details</a></li>
    
                                <li class="menu-item"><a href="index-11.php"> <br><br> Our Services</a></li>

                                <li class="menu-item"><a href="project-details-5.php"> <br><br> Portfolio </a></li>


                                <li class="menu-item"><a href="contact.php"> <br><br> Contacts</a></li>
    
                            </ul>
                        </div>
                    <div class="header_right_part d-flex align-items-center">
                        <button class="aside_open">
                            <span class="line"></span>
                            <span class="line"></span>
                            <span class="line"></span>
                        </button>
                        <div class="header_search">								
                            <button type="submit" class="form-control-submit"><i class="bi bi-search"></i></button>
                        </div>
                        <div class="open_search">
                            <form class="search_form" action="">
                                <input type="text" name="search" class="keyword form-control" placeholder="Search..." >
                                <button type="submit" class="form-control-submit"><i class="bi bi-search"></i></button>
                            </form>
                        </div>

                        <!-- Mobile Responsive Menu Toggle Button -->
                        <button type="button" class="mr_menu_toggle d-lg-none">
                            <i class="bi bi-list"></i>
                        </button>
                    </div>
                </div>
			</div>
		</header>

        <!-- Mobile Responsive Menu -->
		<div class="mr_menu">
			<div class="mr_menu_overlay"></div>
			<button type="button" class="mr_menu_close d-lg-none"><i class="bi bi-x-lg"></i></button>
			<div class="mr_navmenu"></div> <!-- Keep this div empty. Menu will come here by JavaScript -->

            <!-- Footer-->
            <footer class="footer p-0">
                <div class="footer_inner pb-0">
                    <div class="footer_elements d-flex align-items-center justify-content-center">
                        <div class="footer_elements_inner">
                            <div class="footer_social">
                                <ul class="social_list justify-content-center">
                                    <li class="facebook"><a href="#"><i class="bi bi-facebook"></i></a></li>
                                    <li class="twitter"><a href="#"><i class="bi bi-twitter"></i></a></li>
                                    <li class="instagram"><a href="#"><i class="bi bi-instagram"></i></a></li>
                                    <li class="youbetube"><a href="#"><i class="bi bi-youtube"></i></a></li>
                                </ul>
                            </div>
                            <div class="terms_condition">
                                <ul>
                                    <li><a href="#">Terms</a></li>
                                    <li><a href="#">Condition</a></li>
                                    <li><a href="#">Policy</a></li>
                                </ul>
                            </div>
                            <div class="copyright">
                                <p>Creative dudes 2024. All Rights Reserved</p>
                            </div>
                        </div>
                    </div>
                </div>
            </footer>
		</div>
        <div class="page_header_inner">


        
        <!-- Main Wrapper-->
       <!-- Main Wrapper-->
       <main class="wrapper">
            <div class="theme_slider_9 p-0">
                <div class="swiper swiper_theme_slider_7">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="slider" style="background-image: url('../assets/img/slider/17.jpg')">
                                <div class="container">
                                    <div class="slide_content">
                                        <div class="slide_content_wrapper mb-0 h-auto">
                                            <div class="slide_content_inner">
                                                <h4><a href="project-details.php" class="text-white text-uppercase">The Future Web Architecture Is Here</a></h4>
                                                <div class="details_link">
                                                    <a href="work-details.php">
                                                        <span class="link_text">Creative Dudes Details - </span>
                                                        <span class="link_icon">Click Here</span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="swiper-slide">
                            <div class="slider" style="background-image: url('../assets/img/slider/16.jpg')">
                                <div class="container">
                                    <div class="slide_content">
                                        <div class="slide_content_wrapper mb-0 h-auto">
                                            <div class="slide_content_inner">
                                                <h4><a href="project-details.php" class="text-white text-uppercase">We value your Dream</a></h4>
                                                <div class="details_link">
                                                    <a href="work-details.php">
                                                        <span class="link_text">Creative Dudes Details -</span>
                                                        <span class="link_icon">Click Here</span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="swiper-slide">
                            <div class="slider" style="background-image: url('../assets/img/slider/15.jpg')">
                                <div class="container">
                                    <div class="slide_content">
                                        <div class="slide_content_wrapper mb-0 h-auto">
                                            <div class="slide_content_inner">
                                                <h4><a href="project-details.php" class="text-white text-uppercase">Make true your Dream with Our tCompany</a></h4>
                                                <div class="details_link">
                                                    <a href="work-details.php">
                                                        <span class="link_text">Creative Dudes Details -</span>
                                                        <span class="link_icon">Click Here</span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Add Pagination -->
                    <!-- <div class="swiper-pagination"></div> -->

                    <!-- Add Buttons -->
                    <div class="swiper-button-prev details_link l-dir pagination-previous"><a href="#"><span class="link_icon"><span class="line"></span> <span class="circle"></span><span class="dot"></span></span></a></div>
                    <div class="swiper-button-next details_link r-dir pagination-next"><a href="#"><span class="link_icon"><span class="line"></span> <span class="circle"></span><span class="dot"></span></span></a></div>
                    
                </div>
            </div>

            <section class="about">
                <div class="large_font">
                    <h2 class="floating_element text-dark-200 d-flex justify-content-center" data-aos="fade-right" data-aos-duration="1000">About</h2>
                </div>
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-5 col-md-5 col-sm-6">
                            <div class="about_image style_two">
                                <img src="../assets/img/about/a02.png" alt="img" class="abt_img_1"  data-aos="fade-right" data-aos-duration="1000">
                                <img src="../assets/img/about/a03.jpg" alt="img" class="abt_img_2"  data-aos="fade-left" data-aos-duration="1000">
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-7 col-sm-6">
                            <div class="about_text_inner">
                                <div class="about_text">
                                    <h2 class="text-white">ABOUT OUR SERVICE AND WORKFLOW PROCESS</h2>
                                    <p>Embark on a transformative online journey with our professional web development services. Our team seamlessly integrates cutting-edge technologies such as HTML, CSS, JavaScript, AngularJS, ReactJS, MySQL, ASP.NET, Bootstrap, and PHP to craft visually stunning, responsive, and functionally robust websites. From meticulous content design and strategic marketing implementation to meticulous development and rigorous testing, we ensure your website not only meets but exceeds industry standards. Elevate your online presence with a website that captivates your audience, prioritizes user experience, and aligns seamlessly with your business goals.</p>
                                </div>

                                <div class="about_progress_box">
                                    <div class="progress-classic position-relative mb-4">
                                        <div class="progress-label fw-semibold mb-2"> Design</div>
                                        <div class="progress overflow-visible" style="height: 4px;">
                                            <div class="progress-bar overflow-visible" role="progressbar" aria-label="Red example" style="width: 70%" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"><span class="progress-value fw-semibold">70%</span></div>
                                        </div>
                                    </div>

                                    <div class="progress-classic position-relative mb-4">
                                        <div class="progress-label fw-semibold mb-2">Marketing </div>
                                        <div class="progress overflow-visible" style="height: 4px;">
                                            <div class="progress-bar overflow-visible" role="progressbar" aria-label="blue example" style="width: 90%" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"><span class="progress-value fw-semibold">90%</span></div>
                                        </div>
                                    </div>

                                    <div class="progress-classic position-relative">
                                        <div class="progress-label fw-semibold mb-2">Development</div>
                                        <div class="progress overflow-visible" style="height: 4px;">
                                            <div class="progress-bar overflow-visible" role="progressbar" aria-label="Red example" style="width: 80%" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"><span class="progress-value fw-semibold">80%</span></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="abt_author d-flex align-items-center gap-3 flex-wrap flex-lg-nowrap mt-5">
                                    <div class="abt_author_pic flex-shrink-0">
                                        <img src="../assets/img/author.png" alt="img">
                                    </div>
                                    <div class="abt_author_info flex-shrink-0">
                                        
                                    </div>
                                    <div class="abt_author_signature ps-3">
                                        <img src="../assets/img/sign.png" alt="signature">
                                    </div>
                                </div>
                            </div>
                                                
                        </div>
                    </div>
                </div>
            </section>

            

            <section class="services inner pb-0">
                <div class="container">
                    <div class="section-header text-center has_line">
                        <h2 class="text-white">Our Services</h2>
                    </div>
                    <div class="row">
                        <div class="col-lg-4" data-aos="fade-up" data-aos-duration="500">
                            <div class="icon_box">
                                <div class="icon_box_inner">
                                    <img src="../assets/img/icon_box/2.png" alt="Icon Box">
                                    <h4 class="text-white"><a href="service-1.php">Development</a></h4>
                                    <p class="text-gray-600">
                                        <li>HTML/CSS</li>
                                        <li>JAVA SCRIPT</li>
                                        <li>PHP</li>
                                        <li>ANGULAR JS</li>
                                        <li>MY SQL</li>
                                        <li>REACT JS</li>

                                    </p>
                                    <div class="arrow_effect">
                                        <a href="service-1.php"><span class="crossline1"></span><span class="crossline2"></span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4" data-aos="fade-up" data-aos-duration="700">
                            <div class="icon_box">
                                <div class="icon_box_inner">
                                    <img src="../assets/img/icon_box/1.png" alt="Icon Box">
                                    <h4 class="text-white"><a href="service-3.php">Brand Identity</a></h4>
                                    <p class="text-gray-600">
                                    <li>BRAND MARKETING</li>
                                    <li>BRAND ARCHITECTURE</li>
                                    <li>BRAND AUTHENTICITY</li>
                                    <li>BRAND AWARENESS</li>
                                    <li>BRAND MANAGEMENT</li>
                                    <li>BRAND METRICS</li></p>
                                    <div class="arrow_effect">
                                        <a href="service-3.php"><span class="crossline1"></span><span class="crossline2"></span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4" data-aos="fade-up" data-aos-duration="900">
                            <div class="icon_box">
                                <div class="icon_box_inner">
                                    <img src="../assets/img/icon_box/3.png" alt="Icon Box">
                                    <h4 class="text-white"><a href="service-4.php">SEO Marketing</a></h4>
                                    <p class="text-gray-600">
                                        <li>WHITE HAT SEO</li>
                                        <li>BLACK HAT SEO</li>
                                        <li>GREY HAT SEO</li>
                                        <li>NEGATIVE SEO</li>
                                        <li>ON-PAGE SEO</li>
                                        <li>E-COMMERCE SEO</li>
                                    </p>
                                    <div class="arrow_effect">
                                        <a href="service-4.php"><span class="crossline1"></span><span class="crossline2"></span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4" data-aos="fade-up" data-aos-duration="1100">
                            <div class="icon_box">
                                <div class="icon_box_inner">
                                    <img src="../assets/img/icon_box/4.png" alt="Icon Box">
                                    <h4 class="text-white"><a href="service-5.php">students projects</a></h4>
                                    <p class="text-gray-600">
                                        <li>CSE & IT STUDENTS PROJECTS</li>
                                        <li>WEBSITE DESIGN </li>
                                        <li>E-COMMERCE DESIGN</li>
                                        <li>PORTFOLIO DESIGN</li>
                                        <li>AI-CHAT BOT</li>
                                    </p>
                                    <div class="arrow_effect">
                                        <a href="service-5.php"><span class="crossline1"></span><span class="crossline2"></span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4" data-aos="fade-up" data-aos-duration="1300">
                            <div class="icon_box">
                                <div class="icon_box_inner">
                                    <img src="../assets/img/icon_box/5.png" alt="Icon Box">
                                    <h4 class="text-white"><a href="service-6.php">SERVICES</a></h4>
                                    <p class="text-gray-600">
                                        <li>BRANDING SERVICE</li>
                                        <li>WEB DEVELOPMENT</li>
                                        <li>MARKETING</li>
                                        <li>DESIGN RESEARCH</li>
                                        <li>ANY TIME SERVICE</li>
                                    </p>
                                    <div class="arrow_effect">
                                        <a href="service-6.php"><span class="crossline1"></span><span class="crossline2"></span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4" data-aos="fade-up" data-aos-duration="1500">
                            <div class="icon_box">
                                <div class="icon_box_inner">
                                    <img src="../assets/img/icon_box/6.png" alt="Icon Box">
                                    <h4 class="text-white"><a href="service-7.php">Static web service</a></h4>
                                    <p class="text-gray-600">
                                        <li>FIXED CONTENT</li>
                                        <li>COST_EFFECTIVE</li>
                                        <li>SECURITY</li>
                                        <li>EASE OF DEPLOYMENT</li>
                                        <li>EFFICIENCY</li>                                       
                                    </p>
                                    <div class="arrow_effect">
                                        <a href="service-7.php"><span class="crossline1"></span><span class="crossline2"></span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="funfacts bg_1" id="funfacts">
                <div class="container">
                    <div class="row">
                        <div class="col">

                            <div class="funfacts_inner">
                                <div class="funfact2 d-flex align-items-center">
                                    <div class="fun_img">
                                        <img src="../assets/img/fact-1.png" alt="img">
                                    </div>
                                    <div class="funfact_content">
                                        <p>Team Members</p>
                                        <div class="d-flex align-items-center"><h2>20+</h2></div>                                
                                    </div>
                                </div>                            
                                <div class="funfact2 d-flex align-items-center">
                                    <div class="fun_img">
                                        <img src="../assets/img/fact-2.png" alt="img">
                                    </div>
                                    <div class="funfact_content">
                                        <p>Project Completed</p>
                                        <div class="d-flex align-items-center"><h2>20+</h2><span></span></div>
                                    </div>
                                </div>                            
                                <div class="funfact2 d-flex align-items-center">
                                    <div class="fun_img">
                                        <img src="../assets/img/fact-3.png" alt="img">
                                    </div>
                                    <div class="funfact_content">
                                        <p>Design Award</p>
                                        <div class="d-flex align-items-center"><h2>10+</h2></div>
                                    </div>
                                </div>                            
                                <div class="funfact2 d-flex align-items-center">
                                    <div class="fun_img">
                                        <img src="../assets/img/fact-4.png" alt="img">
                                    </div>
                                    <div class="funfact_content">
                                        <p>Project Running</p>
                                        <div class="d-flex align-items-center"><h2>12+</h2></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="projects packery">
                <div class="large_font">
                    <h2 class="floating_element text-dark-200 d-flex justify-content-center" data-aos="fade-right" data-aos-duration="1000">Gallery</h2>
                </div>
                <div class="container">
                    <div class="section-header text-center has_line">
                        <h2 class="text-white">Project Gallery</h2>
                        <div class="section-desc row align-items-center justify-content-center">
                            <div class="col-lg-6 text-end">
                                <p>We will continue to grow and evolve Mrittik for the betterment of our clients and our people. Vision includes the continual expansion.</p>
                            </div>
                            <div class="col-lg-6 text-start">
                                <p>We will continue to grow and evolve Mrittik for the betterment of our clients and our people. Vision includes the continual expansion.</p>
                            </div>
                        </div>
                    </div>

                    <div class="swiper swiper_gallery_2">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="grid-item">
                                    <div class="thumb">
                                        <img class="item_image" src="../assets/img/image_box/03.png" alt="">
                                        <div class="works-info">
                                            <div class="label-text">
                                                <h6><a href="#">Lake Cabin</a></h6>
                                                <h5><a href="project-details.php">Creative young menz club</a></h5>
                                                <div class="details_link"><a href="project-details.php"><span class="link_text">View Details</span> <span class="link_icon"><span class="line"></span> <span class="circle"></span><span class="dot"></span></span></a></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>                     
                            <div class="swiper-slide">                     
                                <div class="grid-item"> 
                                    <div class="thumb">
                                        <img class="item_image" src="../assets/img/image_box/01.png" alt="">
                                        <div class="works-info">
                                            <div class="label-text">
                                                <h6><a href="#">Lake Cabin</a></h6>
                                                <h5><a href="project-details.php">Well decor website in Sydney</a></h5>
                                                <div class="details_link"><a href="project-details.php"><span class="link_text">View Details</span> <span class="link_icon"><span class="line"></span> <span class="circle"></span><span class="dot"></span></span></a></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>   
                            </div>
                            <div class="swiper-slide">                     
                                <div class="grid-item"> 
                                    <div class="thumb">
                                        <img class="item_image" src="../assets/img/image_box/02.png" alt="">
                                        <div class="works-info">
                                            <div class="label-text">
                                                <h6><a href="#">Lake Cabin</a></h6>
                                                <h5><a href="project-details.php">Huge large area database</a></h5>
                                                <div class="details_link"><a href="project-details.php"><span class="link_text">View Details</span> <span class="link_icon"><span class="line"></span> <span class="circle"></span><span class="dot"></span></span></a></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>    
                            </div>
                            
                            
                        </div>

                        <!-- Add Pagination -->
                        <!-- <div class="swiper-pagination"></div> -->

                        <!-- Add Buttons -->
                        <div class="swiper-button-prev details_link l-dir pagination-previous"><a href="#"><span class="link_icon"><span class="line"></span> <span class="circle"></span><span class="dot"></span></span></a></div>
                        <div class="swiper-button-next details_link r-dir pagination-next"><a href="#"><span class="link_icon"><span class="line"></span> <span class="circle"></span><span class="dot"></span></span></a></div>
                    </div>
                </div>
            </section>

            <section class="testimonial box_padding pb-0">
                <div class="has_line_lg"></div>
                <div class="testimonial_inner bg-black">
                    <!-- Swiper Testimonial -->
                    <div class="swiper swiper_testimonial">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="testimonial-block text-center">
                                    <p>“Great web design without functionality is like a sports car with no engine.”</p>
                                    <h6 class="text-olive"> Paul Cookson.</h6>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="testimonial-block text-center">
                                    <p>“We don't just build websites, we build websites that SELLS”</p>
                                    <h6 class="text-olive">Dr. Chris Dayagdag.</h6>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="testimonial-block text-center">
                                    <p>“There are three responses to a piece of design – yes, no, and WOW! Wow is the one to aim for”</p>
                                    <h6 class="text-olive">Milton Glaser.</h6>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="testimonial-block text-center">
                                    <p>“Websites promote you 24/7: No employee will do that.”</p>
                                    <h6 class="text-olive">  Paul Cookson. </h6>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="testimonial-block text-center">
                                    <p>“Web design is not just about creating pretty layouts. It's about understanding the marketing challenge behind your business.”</p>
                                    <h6 class="text-olive">Mohamed Saad.</h6>
                                </div>
                            </div>
                           
                        </div>
                        <div class="swiper-pagination"></div>
                    </div>
                </div>
            </section>

            <!-- Our Team -->
            <section>
                <div class="container">
                    <div class="section-header text-center has_line">
                        <h1 class="text-white">WORKING LANGUAGE</h1>
                    </div>
                    <div class="team_inner">
                        <!-- Swiper Team -->
                        <div class="swiper swiper_team">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <div class="team-block">
                                        <img src="../assets/img/team/01.jpg" alt="img" width="500px" height="250px">
                                        <h5 class="text-white"><a href="#">Michel Robertson</a></h5>
                                        <h6 class="text-uppercase text-olive">ARCHITECT</h6>
                                    </div>
                                </div>
        
                                <div class="swiper-slide">
                                    <div class="team-block">
                                        <img src="../assets/img/team/02.jpg" alt="img" width="500px" height="250px">
                                        <h5 class="text-white"><a href="#">Mellisa Johansen</a></h5>
                                        <h6 class="text-uppercase text-olive">ARCHITECT</h6>
                                    </div>
                                </div>

                                <div class="swiper-slide">
                                    <div class="team-block">
                                        <img src="../assets/img/team/03.webp" alt="img" width="500px" height="250px">
                                        <h5 class="text-white"><a href="#">Dave Crossby</a></h5>
                                        <h6 class="text-uppercase text-olive">ARCHITECT</h6>
                                    </div>
                                </div>
        
                                <div class="swiper-slide">
                                    <div class="team-block">
                                        <img src="../assets/img/team/04.png" alt="img" width="500px" height="250px">
                                        <h5 class="text-white"><a href="#">Hazel R. Grace</a></h5>
                                        <h6 class="text-uppercase text-olive">ARCHITECT</h6>
                                    </div>
                                </div>

                                <div class="swiper-slide">
                                    <div class="team-block">
                                        <img src="../assets/img/team/04.jpg" alt="img" width="500px" height="250px">
                                        <h5 class="text-white"><a href="#">Hazel R. Grace</a></h5>
                                        <h6 class="text-uppercase text-olive">ARCHITECT</h6>
                                    </div>
                                </div>

                                <div class="swiper-slide">
                                    <div class="team-block">
                                        <img src="../assets/img/team/05.jpg" alt="img" width="500px" height="250px">
                                        <h5 class="text-white"><a href="#">Hazel R. Grace</a></h5>
                                        <h6 class="text-uppercase text-olive">ARCHITECT</h6>
                                    </div>
                                </div>

                                <div class="swiper-slide">
                                    <div class="team-block">
                                        <img src="../assets/img/team/07.png" alt="img" width="500px" height="250px">
                                        <h5 class="text-white"><a href="#">Hazel R. Grace</a></h5>
                                        <h6 class="text-uppercase text-olive">ARCHITECT</h6>
                                    </div>
                                </div>

                                <div class="swiper-slide">
                                    <div class="team-block">
                                        <img src="../assets/img/team/08.png" alt="img" width="500px" height="250px">
                                        <h5 class="text-white"><a href="#">Hazel R. Grace</a></h5>
                                        <h6 class="text-uppercase text-olive">ARCHITECT</h6>
                                    </div>
                                </div>
        
                                <div class="swiper-slide">
                                    <div class="team-block">
                                        <img src="../assets/img/team/06.png" alt="img" width="500px" height="250px">
                                        <h5 class="text-white"><a href="#">Benjamin Brook</a></h5>
                                        <h6 class="text-uppercase text-olive">ARCHITECT</h6>
                                    </div>
                                </div>
                            </div>
                            <!-- Add Pagination -->
                            <!-- <div class="swiper-pagination"></div> -->
        
                            <!-- Add Buttons -->
                            <div class="swiper-navigation">
                                <div class="swiper-button-prev"><i class="bi bi-arrow-left"></i></div>
                                <div class="swiper-button-next"><i class="bi bi-arrow-right"></i></div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="contact_us bg-dark-200">
                <div class="container">
                    <div class="row justify-content-between">
                        <div class="col-lg-5" data-aos="fade-right" data-aos-duration="1000">
                            <div class="section-header">
                                <h1 class="text-white text-uppercase mb-4">LET’S DISCUSS NEXT PROJECTS</h1>
                                <p class="$gray-600">Our next project in web development aims to revolutionize online education by creating an interactive learning platform that seamlessly integrates multimedia content, real-time collaboration tools, and personalized learning experiences. Leveraging cutting-edge technologies such as AI-driven recommendation systems and adaptive learning algorithms, our platform will empower learners to engage with educational materials in a dynamic and immersive way.</p>
                            </div>
                        </div>
                        <div class="col-lg-6" data-aos="fade-left" data-aos-duration="1000">
                            <div class="home_contact">
                                <form action="index.php" method="POST">
                                    <input class="form-control form-control-lg" name="first_name" id="name" type="text" placeholder="Your Name*" required aria-label=".form-control-lg example">
                                    <input class="form-control form-control-lg" name="last_name" id="name" type="tel" placeholder="Your Number*" required aria-label=".form-control-lg example">
                                    <input class="form-control form-control-lg" name="email" id="email" type="email" placeholder="Your Email*" required aria-label=".form-control-lg example">
                                    <input class="form-control form-control-lg" name="city" id="city" type="text" placeholder="Your city*" required aria-label=".form-control-lg example">
                                    <textarea class="form-control pt-4" name="message" id="message" placeholder="Your Message" rows="3"></textarea>
                                    <div class="btn_group">
                                        <button type="submit" class="btn olive">Send Mail</button>  
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

                        <!-- Clients Logo -->
                
                    <!-- Section Grid Lines -->
                    <ul class="grid_lines d-none d-md-flex justify-content-between">
                        <li class="grid_line"></li>
                        <li class="grid_line"></li>
                        <li class="grid_line"></li>
                        <li class="grid_line"></li>
                        <li class="grid_line"></li>
                        <li class="grid_line"></li>
                        <li class="grid_line"></li>
                    </ul>
                </section>
        </main>

        <!-- Footer-->
        <?php include 'footer.php'; ?>


        <div class="totop">
            <a href="#">UP</a>
        </div>

        <!-- Section Grid Lines -->
        <ul class="grid_lines d-none d-md-flex justify-content-between">
            <li class="grid_line"></li>
            <li class="grid_line"></li>
            <li class="grid_line"></li>
            <li class="grid_line"></li>
            <li class="grid_line"></li>
            <li class="grid_line"></li>
            <li class="grid_line"></li>
        </ul>
        

        <!-- Core JS -->
        <script src="../assets/js/jquery-3.6.0.min.js"></script>
        <script src="../assets/js/bootstrap.bundle.min.js"></script>

        
        
        <!-- Swiper for Slider Type -->
        <script src="../plugins/swiper/swiper-bundle.min.js"></script>
        
        <!-- Funfacts -->
        <script src="../assets/js/funfacts.js"></script>
        
        <!-- Portfolio -->
        <script src="../plugins/isotope/isotope.pkgd.min.js"></script>
        <script src="../plugins/isotope/imagesloaded.pkgd.min.js"></script>
        <script src="../plugins/isotope/packery-mode.pkgd.js"></script>
        <script src="../plugins/isotope/tilt.jquery.js"></script>
        
        

        <!-- Cursor Effect -->
        <script src="../plugins/cursor-effect/cursor-effect.js"></script>
        
        <!-- Select2 -->
        <script src="../plugins/select2/js/select2.min.js"></script>
        
        <!-- AOS effect JS -->
        <script src="../plugins/aos/aos.js"></script>
        
        <!-- Theme Custom JS -->
        <script src="../assets/js/theme.js"></script>
    </body>

<!-- Mirrored from wpthemebooster.com/demo/themeforest/php/mrittik/light/index-10.php by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 24 Dec 2023 13:46:24 GMT -->
</html>