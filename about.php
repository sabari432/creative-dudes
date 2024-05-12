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
<html lang="zxx">
    
<!-- Mirrored from wpthemebooster.com/demo/themeforest/html/mrittik/light/contact.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 24 Dec 2023 13:46:44 GMT -->
<head>
        <!-- Meta Tags -->
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0">
        <meta name="description" content="Mrittik is a Modern Architecture Theme">
        <meta name="author" content="">

        <!-- Favicon and touch Icons -->
        <link href="../assets/img/favicon.png" rel="shortcut icon" type="image/png">
        <link href="../assets/img/apple-touch-icon.html" rel="apple-touch-icon">
        <link href="../assets/img/apple-touch-icon-72x72.html" rel="apple-touch-icon" sizes="72x72">
        <link href="../assets/img/apple-touch-icon-114x114.html" rel="apple-touch-icon" sizes="114x114">
        <link href="../assets/img/apple-touch-icon-144x144.html" rel="apple-touch-icon" sizes="144x144">

        <!-- Page Title -->
        <title>Creative Dudes  - Modern Designers </title>    
        
        <!-- Styles Include -->
        <link rel="stylesheet" href="../assets/css/style.css">
        
    </head>

    <body class="bg-white">

        <!-- Preloader -->
        <?php include 'pre-loader.php'; ?>


        <!-- Color Mode Switcher -->
		<div id="mode_switcher" class="d-none">
			<span><i class="bi bi-moon-fill"></i></span>	
		</div>        

        <!-- Cursor Effect -->
        <div class="pointer bnz-pointer" id="bnz-pointer"></div>

        <?php include 'header.php'; ?>

        <!-- Mobile Responsive Menu -->
		<div class="mr_menu">
			<div class="mr_menu_overlay"></div>
			<button type="button" class="mr_menu_close"><i class="bi bi-x-lg"></i></button>
            <div class="logo"></div> <!-- Keep this div empty. Logo will come here by JavaScript -->
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
                                <p>Creative Dudes 2024. All Rights Reserved</p>
                            </div>
                        </div>
                    </div>
                </div>
            </footer>
		</div>

        <?php include 'side.php';?>

        
        <!-- Main Wrapper-->
        <main class="wrapper">
            <div class="theme_slider bg-black">
                <div class="container">
                    <div class="swiper swiper_theme_slider">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="slider" style="background-image: url('../assets/img/slider/05.png')">
                                    <div class="slide_content">
                                        <div class="slide_content_wrapper mb-0 h-auto bg-dark-100">
                                            <div class="slide_content_inner">
                                                <div class="meta m-0">
                                                    <div class="category text-olive text-uppercase">Condominium</div>
                                                </div>
                                                <h4><a href="project-details.php" class="text-white">Creative young menz club in the city center</a></h4>
                                                <div class="details_link">
                                                    <a href="project-details.php">
                                                        <span class="link_text">View Details</span> 
                                                        <span class="link_icon">
                                                            <span class="line"></span> 
                                                            <span class="circle"></span>
                                                            <span class="dot"></span>
                                                        </span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            
                        </div>
                        <!-- Add Pagination -->
                        <div class="swiper-pagination"></div>

                        <!-- Add Buttons -->
                        <div class="swiper-navigation">
                            <div class="swiper-button-prev"><i class="bi bi-arrow-left"></i></div>
                            <div class="swiper-button-next"><i class="bi bi-arrow-right"></i></div>
                        </div>
                    </div>
                </div>
                <div class="divider_bg bg-dark-100"></div>
            </div>

            <section class="services bg-dark-100 pt-4 pb-0">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-4" data-aos="fade-up" data-aos-duration="500">
                            <div class="icon_box">
                                <h6>01</h6>
                               
                                <h4 class="text-white"><a href="blog.php">Web Design</a></h4>
                                <p class="text-gray-600">"Creative-Dudes" we are providing good services and also we have a team to develop an professional  websites , Portfolio , E-Commerce site...</p>
                                <div class="arrow_effect">
                                    <a href="blog.php"><span class="crossline1"></span><span class="crossline2"></span></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4" data-aos="fade-up" data-aos-duration="700">
                            <div class="icon_box">
                                <h6>02</h6>
                                
                                <h4 class="text-white"><a href="blog.php">Portfolio Design</a></h4>
                                <p class="text-gray-600">"Creative-Dudes" we are providing good services and also we have a team to develop an professional  websites , Portfolio , E-Commerce site...</p>
                                <div class="arrow_effect">
                                    <a href="blog.php"><span class="crossline1"></span><span class="crossline2"></span></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4" data-aos="fade-up" data-aos-duration="900">
                            <div class="icon_box">
                                <h6>03</h6>
                               
                                <h4 class="text-white"><a href="blog.php">E-commerce Design</a></h4>
                                <p class="text-gray-600">"Creative-Dudes" we are providing good services and also we have a team to develop an professional  websites , Portfolio , E-Commerce site...</p>
                                <div class="arrow_effect">
                                    <a href="blog.php"><span class="crossline1"></span><span class="crossline2"></span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="about bg-dark-100">
                <div class="large_font">
                    <h2 class="floating_element text-dark-200 d-flex justify-content-center" data-aos="fade-right" data-aos-duration="1000">About</h2>
                </div>
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-5 col-md-5">
                            <div class="about_image">
                                <img src="../assets/img/about/a1.jpg" alt="img" height="500px">
                                <img src="">
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-7">
                            <div class="about_text_inner">
                                <div class="about_text">
                                    <h2 class="text-white">ABOUT CREATIVE DUDES</h2>
                                    <p>CREATIVE DUDES is a full-service design firm providing Web-design, Portfolio , E-Commerce design, Final Year Project , we provide course to how to develop an website and  programming language. Our portfolio of completed work includes highly acclaimed and award-winning projects for clients.</p>
                                </div>

                                <div class="about_icon_box">
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="icon_box_flex">
                                                <div class="icon_size">
                                                   
                                                </div>
                                                <h6>Web-design Designing</h6>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="icon_box_flex">
                                                <div class="icon_size">
                                                    
                                                </div>
                                                <h6>Portfolio Drawing</h6>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="icon_box_flex">
                                                <div class="icon_size">
                                                  
                                                </div>
                                                <h6>E-Commerce building</h6>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="icon_box_flex">
                                                <div class="icon_size">
                                                   
                                                </div>
                                                <h6>Final Year Project</h6>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="btn_group" data-aos="fade-down" data-aos-duration="1000">
                                    <a href="about.php" class="btn gray">Read More</a>  
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

            <section class="running_projects"> 
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
                <div class="large_font">
                    <h2 class="floating_element text-dark-200 d-flex justify-content-center" data-aos="fade-right" data-aos-duration="1000">Running</h2>
                </div>  
                <div class="container">
                    <div class="row justify-content-between">
                        <div class="col-lg-5 col-md-5 col-sm-5">
                            <div class="left_part">
                                <div class="grid-item" data-aos="fade-right" data-aos-duration="1000">
                                    <div class="thumb">
                                        <img class="item_image" src="../assets/img/image_box/03.png" alt="img" width="100%" height="400px">
                                        <div class="works-info">
                                            <div class="label-text">
                                                <h5><a href="project-details.php">CREATIVE DUDES WEB DEV'S</a></h5>
                                            </div>
                                        </div>
                                    </div>
                                </div> 
                            </div> 
                        </div>

                        <div class="col-lg-5 col-md-5 col-sm-5">
                            <div class="right_part">
                                <div class="grid-item" data-aos="fade-left" data-aos-duration="1000">
                                    <div class="thumb">
                                        <img class="item_image" src="../assets/img/image_box/02.png" alt="img">
                                        <div class="works-info">
                                            <div class="label-text">
                                               
                                                <h5><a href="project-details.php">CREATIVE DUDES WEB DEV'S</a></h5>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="grid-item active" data-aos="fade-left" data-aos-duration="1500">
                                    <div class="thumb">
                                        <img class="item_image" src="../assets/img/image_box/01.png" alt="img">
                                        <div class="works-info">
                                            <div class="label-text">
                                                
                                                <h5><a href="project-details.php">CREATIVE DUDES WEB DEV'S</a></h5>
                                            </div>
                                        </div>
                                    </div>
                                </div> 
                            </div> 
                        </div>
                    </div>
                </div>        
            </section>

            <section class="projects packery">
                
                        
                <ul class="grid_lines d-none d-md-flex justify-content-between">
                    <li class="grid_line"></li>
                    <li class="grid_line"></li>
                    <li class="grid_line"></li>
                    <li class="grid_line"></li>
                    <li class="grid_line"></li>
                    <li class="grid_line"></li>
                    <li class="grid_line"></li>
                </ul>
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

            <section class="blog pt-lg bg-dark-100">
                <div class="large_font">
                    <h2 class="floating_element text-dark-200 d-flex justify-content-center">Latest</h2>
                </div>
                <div class="container">
                    <div class="section-header text-center has_line">
                        <h2 class="text-white">LATEST BLOGS</h2>
                    </div>
                    <div class="row">
                            <div class="col-lg-4 col-md-6">
                                <div class="blog_post mb-0">
                                    <img src="../assets/img/blog/01.jpg" alt="img">
                                    <div class="blog_content">                                    
                                        <h2 class="post-count">01</h2>
                                        <div class="meta">
                                            <time class="text-olive" datetime="2022-10-20">December 20, 2023</time>
                                        </div>
                                        <h5><a href="#" class="text-white">INTERFACE DESIGN</a></h5>
                                        <p>Creative Dudes is not just a web developer,they are an architect of digital realms, weaving together code, design, and functionality to create seamless and visually stunning websites. Armed with a deep understanding of the latest technologies and trends, they have established themselves as a go-to resource for anyone seeking to elevate their online presence.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <div class="blog_post mb-0">
                                    <img src="../assets/img/blog/02.png" alt="img">
                                    <div class="blog_content">                                    
                                        <h2 class="post-count">02</h2>
                                        <div class="meta">
                                            <time class="text-olive" datetime="2022-10-20">December 20, 2023</time>
                                        </div>
                                        <h5><a href="#" class="text-white">AI TECH</a></h5>
                                        <p>AI uses multiple technologies that equip machines to sense, comprehend, plan, act, and learn with human-like levels of intelligence. Fundamentally, AI systems perceive environments, recognize objects, contribute to decision making, solve complex problems, learn from past experiences, and imitate patterns.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <div class="blog_post mb-0">
                                    <img src="../assets/img/about/a1.webp" alt="img" height="490px">
                                    <div class="blog_content">                                    
                                        <h2 class="post-count">03</h2>
                                        <div class="meta">
                                            <time class="text-olive" datetime="2022-10-20">December 20, 2023</time>
                                        </div>
                                        <h5><a href="#" class="text-white">Future development</a></h5>
                                        <p>In the world of web development, the integration of AI will bring personalized experiences, better processes, strong security, and cool designs. As AI keeps growing, it will change the internet into a more exciting and user-friendly place.</p>
                                    </div>
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
        <script src="../plugins/isotope/isotope-init.js"></script>
        
        

        <!-- Cursor Effect -->
        <script src="../plugins/cursor-effect/cursor-effect.js"></script>
        
        <!-- Select2 -->
        <script src="../plugins/select2/js/select2.min.js"></script>
        
        <!-- AOS effect JS -->
        <script src="../plugins/aos/aos.js"></script>
        
        <!-- Theme Custom JS -->
        <script src="../assets/js/theme.js"></script>
    </body>

<!-- Mirrored from wpthemebooster.com/demo/themeforest/php/mrittik/light/ by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 24 Dec 2023 13:45:59 GMT -->
</html>