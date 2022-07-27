<!DOCTYPE html>
<html lang="zxx">  
    <head> 
         
        <!-- meta tag -->
        <meta charset="utf-8">
        <title>Home - Hire Course Help.Com</title>
        <meta name="description" content="">
        <!-- responsive tag -->
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- favicon -->
        <link rel="apple-touch-icon" href="apple-touch-icon.png">
        <link rel="shortcut icon" type="image/x-icon" href="assets/images/fav.png">
        <!-- Bootstrap v4.4.1 css -->
        <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
        <!-- font-awesome css -->
        <link rel="stylesheet" type="text/css" href="assets/css/font-awesome.min.css">
        <!-- animate css -->
        <link rel="stylesheet" type="text/css" href="assets/css/animate.css">
        <!-- owl.carousel css -->
        <link rel="stylesheet" type="text/css" href="assets/css/owl.carousel.css">
        <!-- slick css --> 
        <link rel="stylesheet" type="text/css" href="assets/css/slick.css">
        <!-- off canvas css -->
        <link rel="stylesheet" type="text/css" href="assets/css/off-canvas.css">
        <!-- linea-font css -->
        <link rel="stylesheet" type="text/css" href="assets/fonts/linea-fonts.css">
        <!-- flaticon css  -->
        <link rel="stylesheet" type="text/css" href="assets/fonts/flaticon.css">
        <!-- magnific popup css -->
        <link rel="stylesheet" type="text/css" href="assets/css/magnific-popup.css">
        <!-- Main Menu css -->
        <link rel="stylesheet" href="assets/css/rsmenu-main.css">
        <!-- spacing css -->
        <link rel="stylesheet" type="text/css" href="assets/css/rs-spacing.css">
        <!-- style css -->
        <link rel="stylesheet" type="text/css" href="style.css"> <!-- This stylesheet dynamically changed from style.less -->
        <!-- responsive css -->
        <link rel="stylesheet" type="text/css" href="assets/css/responsive.css">
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
            <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
        
    </head>
    <body class="defult-home">
        
        <!--Preloader area start here-->
        <!--<div id="loader" class="loader orange-color">-->
        <!--    <div class="loader-container">-->
        <!--        <div class='loader-icon'>-->
        <!--            <img src="assets/images/pre-logo1.png" alt="">-->
        <!--        </div>-->
        <!--    </div>-->
        <!--</div>-->
        <!--Preloader area End here--> 

		<!-- Main content Start -->
        <div class="main-content">
            <?php include 'assets/PHP/header.php'; ?>

            <!-- Banner Section Start -->
            <div id="rs-banner" class="rs-banner style8">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-7">
                            <div class="banner-content">
                                <div class="sl-sub-title wow bounceInLeft" data-wow-delay="300ms" data-wow-duration="2000ms">Get 40% Off Today On Complete Course</div>
                                <h1 class="sl-title wow fadeInRight" data-wow-delay="600ms" data-wow-duration="2000ms">A Little Help To Make Your Life Easier!</h1>
                                <div class="sl-btn wow fadeInUp" data-wow-delay="900ms" data-wow-duration="2000ms">
                                    <a class="readon yellow-btn" href="#">Discover More</a>
                                </div>
                           </div>
                        </div>
                        <div class="col-lg-1"></div>
                        <div class="col-lg-3">
                            <div class="free-course-contact">
                                <span class="mb-20">SignUp & Get 40% Discount </span>
                                <div id="form-messages"></div>
                                <form id="contact-form" method="POST" class="php-email-form" action="./assets/form/mail.php">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="form-field">
                                                <input class="from-control" type="text" placeholder="Full Name" id="name" required="required" name="Lead_Name" onkeypress="return Validate_name(event);" data-rule="minlen:4" data-msg="Please enter at least 4 chars">
                                                <div class="validate"></div>
                                            </div>                               
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="form-field">
                                                <input class="from-control" type="email" id="email" placeholder="E-mail Address" required="required" name="Lead_Email" onkeypress="return Validate_email(event);" data-rule="email" data-msg="Please enter a valid email">
                                                <div class="validate"></div>
                                            </div> 
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="form-field">
                                                <input class="from-control" type="number" id="phone" placeholder="Phone Number" required="required" name="Lead_Phone" onkeypress="return Validate_num(event);" data-rule="minlen:11" data-msg="Please enter correct Contact Number">
                                                <div class="validate"></div>
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="form-field">
                                                <input class="from-control" type="text" id="subject" name="Lead_Subject" placeholder="Subject" required="">
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-field">
                                                <textarea class="from-control" id="message" placeholder="Something Write For Us" name="Lead_Message" onkeypress="return Validate_message(event);" data-rule="required" data-msg="Please write something for us"></textarea>
                                                <div class="validate"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group form-btn submit-btn mt-30">
                                        <button class="readon yellow-btn" type="submit" name="leads_sbmit_btn" style="width: 100% !important;">Submit request</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Banner Section End -->

            <!-- Features Section start -->
            <div id="rs-features" class="rs-features style2">
                <div class="container">
                   <div class="row">
                        <div class="col-lg-3 col-md-6 md-mb-30">
                            <div class="rs-iconbox-area">
                                <div class="icon-area">
                                   <img src="assets/images/features/style2/1.png" alt="">
                                </div>
                                <div class="text-area">
                                   <h3 class="icon-title">Future Students</h3>
                                </div>
                            </div>
                        </div>  
                        <div class="col-lg-3 col-md-6 md-mb-30">
                            <div class="rs-iconbox-area">
                                <div class="icon-area">
                                   <img src="assets/images/features/style2/2.png" alt="">
                                </div>
                                <div class="text-area">
                                   <h3 class="icon-title">World Students</h3>
                                </div>
                            </div> 
                        </div>  
                        <div class="col-lg-3 col-md-6 sm-mb-30">
                            <div class="rs-iconbox-area">
                                <div class="icon-area">
                                   <img src="assets/images/features/style2/3.png" alt="">
                                </div>
                                <div class="text-area">
                                   <h3 class="icon-title">Current Students</h3>
                                </div>
                            </div>
                        </div>  
                        <div class="col-lg-3 col-md-6">
                            <div class="rs-iconbox-area">
                                <div class="icon-area">
                                   <img src="assets/images/features/style2/4.png" alt="">
                                </div>
                                <div class="text-area">
                                   <h3 class="icon-title">Alumni & Donors</h3>
                                </div>
                            </div>
                        </div> 
                    </div>
                </div>
            </div>
            <!-- Features Section End -->

            <!-- About Section Start -->
            <div class="rs-about style9 pt-100 pb-100 md-pt-70 md-pb-70">
              <div class="container">
                  <div class="row align-items-center">
                      <div class="col-lg-6 col-md-12 md-mb-40">
                         <div class="img-part js-tilt">
                             <img src="assets/images/about/home9/about.png" alt="images">
                         </div>
                      </div>
                      <div class="col-lg-6 pl-100 md-pl-15 col-md-12">
                          <div class="content">
                              <div class="sub-title mb-20">
                                  About Us
                              </div>
                              <h2 class="sl-title mb-40 md-mb-20">Is It Okay To Hire Someone To Assist You With Your Online Classes?</h2>
                              <p class="desc mb-50">Hirecoursehelp.com offers services that have been meticulously planned and executed.We have a team of highly qualified practitioners who can take your online classes as needed.The take my class service includes a number of complimentary extra services.We can do your online class at any time because we are available 24 hours a day, 7 days a week. <br><br>
                              Hirecoursehelp.com is an online network that provides customers with dependable assistance through online courses.Yes, indeed! We'll address your most recent concerns about my online course, Because we always offer the best services to our clients, we are known as the best service in online courses. Choose us and we will provide you with the best online class instructor for your online course.
                              </p>
                          </div>
                            <div class="btn-part">
                                <a class="readon yellow-btn" href="our-courses">Offered Courses</a>
                            </div>
                      </div>
                  </div>
              </div>
            </div>
            <!-- About Section End -->

            <!-- Categories Section Start -->
            <div id="rs-categories" class="rs-categories home9-style event-bg pt-100 pb-100 md-pt-70 md-pb-70">
                <div class="container">
                    <div class="sec-title3 text-center mb-45">
                        <div class="sub-title yellow-color">Choose Your Path</div>
                        <h2 class="title black-color">Let us assist you with it !</h2>
                    </div>
                    <div class="row">
                        <div class="col-lg-4 md-mb-40">
                            <div class="categories-items">
                                <div class="images-part">
                                    <a href="#"><img src="assets/images/categories/home9/1.jpg" alt=""></a>
                                </div>
                                <div class="image-content">
                                   <div class="effect-icon">
                                       <i class="fa fa-paperclip"></i>
                                   </div>
                                   <div class="title">
                                       <a href="#">Online Classes</a>
                                   </div>
                                   <div class="description">
                                       <p>Let The Professionals Deal With Your Online Classes While You Relax.</p>
                                   </div>
                                    <div class="button-bottom">
                                        <div class="button-effect">
                                            <a href="#">Join Program</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>  
                        <div class="col-lg-4 md-mb-40">
                            <div class="categories-items">
                                <div class="images-part">
                                    <a href="#"><img src="assets/images/categories/home9/2.jpg" alt=""></a>
                                </div>
                                <div class="image-content">
                                   <div class="effect-icon">
                                       <i class="fa fa-graduation-cap"></i>
                                   </div>
                                   <div class="title">
                                       <a href="#">Online tests & quizzes</a>
                                   </div>
                                   <div class="description">
                                       <p>Want To Get Your Tests And Quizzes Done Paid? Well we Can Help You With That.</p>
                                   </div>
                                    <div class="button-bottom">
                                        <div class="button-effect">
                                            <a href="#">Join Program</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>  
                        <div class="col-lg-4">
                            <div class="categories-items">
                                <div class="images-part">
                                    <a href="#"><img src="assets/images/categories/home9/3.jpg" alt=""></a>
                                </div>
                                <div class="image-content">
                                   <div class="effect-icon">
                                       <i class="fa fa-laptop"></i>
                                   </div>
                                   <div class="title">
                                       <a href="#">Homework & Assignments</a>
                                   </div>
                                   <div class="description">
                                       <p>Pay Me To Do Your Homework And We Promise That A Grade You Want So Bad!</p>
                                   </div>
                                    <div class="button-bottom">
                                        <div class="button-effect">
                                            <a href="#">Join Program</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Categories Section End -->

            <!-- Video Section Start -->
            <!--<div class="rs-video-home9">-->
            <!--    <div class="img-part media-icon yellow-color">-->
            <!--        <a class="popup-videos" href="https://www.youtube.com/watch?v=atMUy_bPoQI">-->
            <!--            <i class="fa fa-play"></i>-->
            <!--        </a>-->
            <!--    </div>-->
            <!--</div>-->
            <!-- Video Section Start -->

            <!-- CTA Section Start -->
            <div class="rs-cta home9-style">
                <div class="partition-bg-wrap">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="col-lg-12">
                                    <div class="free-course-contact">
                                        <span class="mb-20">SignUp & Get 40% Discount </span>
                                        <div id="form-messages"></div>
                                        <form id="contact-form" method="POST" class="php-email-form" action="./assets/form/mail.php">
                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <div class="form-field">
                                                        <input class="from-control" type="text" placeholder="Full Name" id="name" required="required" name="Lead_Name" onkeypress="return Validate_name(event);" data-rule="minlen:4" data-msg="Please enter at least 4 chars">
                                                        <div class="validate"></div>
                                                    </div>                               
                                                </div>
                                                <div class="col-lg-12">
                                                    <div class="form-field">
                                                        <input class="from-control" type="email" id="email" placeholder="E-mail Address" required="required" name="Lead_Email" onkeypress="return Validate_email(event);" data-rule="email" data-msg="Please enter a valid email">
                                                        <div class="validate"></div>
                                                    </div> 
                                                </div>
                                                <div class="col-lg-12">
                                                    <div class="form-field">
                                                        <input class="from-control" type="number" id="phone" placeholder="Phone Number" required="required" name="Lead_Phone" onkeypress="return Validate_num(event);" data-rule="minlen:11" data-msg="Please enter correct Contact Number">
                                                        <div class="validate"></div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-12">
                                                    <div class="form-field">
                                                        <input class="from-control" type="text" id="subject" name="Lead_Subject" placeholder="Subject" required="">
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <div class="form-field">
                                                        <textarea class="from-control" id="message" placeholder="Something Write For Us" name="Lead_Message" onkeypress="return Validate_message(event);" data-rule="required" data-msg="Please write something for us"></textarea>
                                                        <div class="validate"></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group form-btn submit-btn mt-30">
                                                <button class="readon yellow-btn" type="submit" style="width: 100% !important;" name="leads_sbmit_btn">Submit request</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 pl-90 md-pl-15">
                                <div class="sec-title3 mb-40">
                                    <div class="sub-title big">Get Started Today!!!</div>
                                        <h2 class="title white-color pr-70">How Would I Get Assistance For My Class?</h2>
                                    <div class="desc white-color mb-40">You should get the job on time when you pay someone to do your online course! We make sure that by doing the job efficiently, the clients are not losing out on their deadline.Place your order today and get it done!
                                    </div>
                                  <div class="btn-part">
                                      <a class="readon yellow-btn transparent3" href="#">Get Qoutes</a>
                                  </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- CTA Section End --> 


            <!-- Testimonial Section Start -->
            <div class="rs-testimonial home9-style pt-100 pb-100 md-pt-70 md-pb-70">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6 col-md-6 sm-mb-40">
                            <div class="image-part js-tilt">
                                <img src="assets/images/testimonial/style9/1.png" alt="images">
                            </div>
                        </div> 
                        <div class="col-lg-6 pl-65 md-pl-15 col-md-6">
                          <div class="img-part mb-30">
                              <img src="assets/images/testimonial/style9/2.png" alt="images">
                          </div>
                          <div class="rs-carousel owl-carousel" 
                              data-loop="true" 
                              data-items="6" 
                              data-margin="30" 
                              data-autoplay="true" 
                              data-hoverpause="true" 
                              data-autoplay-timeout="5000" 
                              data-smart-speed="800" 
                              data-dots="true" 
                              data-nav="false" 
                              data-nav-speed="false" 

                              data-md-device="1" 
                              data-md-device-nav="false" 
                              data-md-device-dots="true" 
                              data-center-mode="false"

                              data-ipad-device2="1" 
                              data-ipad-device-nav2="false" 
                              data-ipad-device-dots2="true"

                              data-ipad-device="1" 
                              data-ipad-device-nav="false" 
                              data-ipad-device-dots="true" 

                              data-mobile-device="1" 
                              data-mobile-device-nav="false" 
                              data-mobile-device-dots="false">
                              <div class="testi-item">
                                 <div class="item-content">
                                    <p>Thanks for helping me take my latest math test, Hirecoursehelp. I still had problems with math, and I was worried that I was going to fail. But I have been saved thanks to your test taking services. I liked your customer service workers, and they were really corporate.</p>
                                     <div class="testi-information">
                                         <div class="name">Johnna</div>
                                         <span class="designation"> CSE Student</span>
                                     </div>
                                 </div>           
                              </div>
                              <div class="testi-item">
                                 <div class="item-content">
                                    <p>Sincerely, initially I was very skeptical of your programs, but after pursuing you guys with my current coursework, I have to admit I'm a fan. I'm going to recommend Hirecoursehelp to my friends for sure. Keep the good work guys up there.</p>
                                     <div class="testi-information">
                                         <div class="name">Drake</div>
                                         <span class="designation"> MSE Student</span>
                                     </div>
                                 </div>           
                              </div>
                              <div class="testi-item">
                                 <div class="item-content">
                                    <p>My mom was really sick last month, and I was not able to attend my class work properly because of that. I've been getting myself ready for the worst question. Can I pay anyone to teach me for my test? That's when I was told about Hirecoursehelp.Com by a classmate. For learners like me, this is an incredible support forum. I'm genuinely happy that I find you guys.</p>
                                     <div class="testi-information">
                                         <div class="name">Blake</div>
                                         <span class="designation"> CS Student</span>
                                     </div>
                                 </div>           
                              </div>
                              <div class="testi-item">
                                 <div class="item-content">
                                    <p>This is Emily. I wanted to tell you guys that I completed my exam you guys taught me for. All went really well, and you guys kept your word once more. Thanks!</p>
                                     <div class="testi-information">
                                         <div class="name">Emily J.</div>
                                         <span class="designation"> CSE Student</span>
                                     </div>
                                 </div>           
                              </div>
                          </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Testimonial Section End -->
            
            <!-- Blog Section Start -->
            <!--<div id="rs-blog" class="rs-blog home9-style event2-bg pt-94 pb-100 md-pt-64 md-pb-70">-->
            <!--    <div class="container">-->
            <!--        <div class="row">-->
            <!--            <div class="col-lg-7 col-md-12 pr-75 md-pr-15 md-mb-50">-->
            <!--                <div class="sec-title3 mb-50 md-mb-30">-->
            <!--                    <div class="sub-title yellow-color">News</div>-->
            <!--                    <h2 class="title black-color">Latest News</h2>-->
            <!--                </div>-->
            <!--                <div class="row align-items-center no-gutter white-bg blog-item mb-30 wow fadeInUp" data-wow-delay="300ms" data-wow-duration="2000ms">-->
            <!--                    <div class="col-md-6">-->
            <!--                        <div class="image-part">-->
            <!--                            <a href="#"><img src="assets/images/blog/1.jpg" alt=""></a>-->
            <!--                        </div>-->
            <!--                    </div>-->
            <!--                    <div class="col-md-6">-->
            <!--                        <div class="blog-content">-->
            <!--                            <ul class="blog-meta">-->
            <!--                              <li><i class="fa fa-calendar-check-o"></i>August 28, 2020</li>-->
            <!--                            </ul>-->
            <!--                            <h3 class="title"><a href="#">Pandemic drives millions from Latin America’s</a></h3>-->
            <!--                            <p class="txt">We denounce with righteous indige nation and...</p>-->
            <!--                        </div>-->
            <!--                    </div>-->
            <!--                </div>-->
            <!--                <div class="row align-items-center no-gutter white-bg blog-item mb-30 wow fadeInUp" data-wow-delay="400ms" data-wow-duration="2000ms">-->
            <!--                    <div class="col-md-6">-->
            <!--                        <div class="image-part">-->
            <!--                            <a href="#"><img src="assets/images/blog/2.jpg" alt=""></a>-->
            <!--                        </div>-->
            <!--                    </div>-->
            <!--                    <div class="col-md-6">-->
            <!--                        <div class="blog-content">-->
            <!--                            <ul class="blog-meta">-->
            <!--                              <li><i class="fa fa-calendar-check-o"></i>August 28, 2020</li>-->
            <!--                            </ul>-->
            <!--                            <h3 class="title"><a href="#">This is a great source of content for anyone…</a></h3>-->
            <!--                            <p class="txt">We denounce with righteous indige nation and...</p>-->
            <!--                        </div>-->
            <!--                    </div>-->
            <!--                </div>-->
            <!--                <div class="row align-items-center no-gutter white-bg blog-item wow fadeInUp" data-wow-delay="500ms" data-wow-duration="2000ms">-->
            <!--                    <div class="col-md-6">-->
            <!--                        <div class="image-part">-->
            <!--                            <a href="#"><img src="assets/images/blog/3.jpg" alt=""></a>-->
            <!--                        </div>-->
            <!--                    </div>-->
            <!--                    <div class="col-md-6">-->
            <!--                        <div class="blog-content">-->
            <!--                            <ul class="blog-meta">-->
            <!--                              <li><i class="fa fa-calendar-check-o"></i>August 19, 2020</li>-->
            <!--                            </ul>-->
            <!--                            <h3 class="title"><a href="#">Shutdown of schools extended to Aug 31</a></h3>-->
            <!--                            <p class="txt">We denounce with righteous indige nation and...</p>-->
            <!--                        </div>-->
            <!--                    </div>-->
            <!--                </div>-->
            <!--            </div>-->
            <!--            <div class="col-lg-5 lg-pl-0">-->
            <!--                <div class="sec-title3 mb-50 md-mb-30">-->
            <!--                    <div class="sub-title yellow-color">Events</div>-->
            <!--                    <h2 class="title black-color">Latest Events</h2>-->
            <!--                </div>-->
            <!--                <div class="events-short-top mb-30 wow fadeInUp" data-wow-delay="400ms" data-wow-duration="2000ms">-->
            <!--                    <div class="date-part">-->
            <!--                        <span class="month">June</span>-->
            <!--                        <div class="date">20</div>-->
            <!--                    </div>-->
            <!--                    <div class="content-part">-->
            <!--                        <div class="categorie">-->
            <!--                            <a href="#">Recipes</a>-->
            <!--                        </div>-->
            <!--                        <h3 class="title"><a href="#">Spicy Quince And Cranberry Chutney</a></h3>-->
            <!--                        <p class="txt">Educavo Events Description Lorem ipsum dolor sit amet, consectetuer...</p>-->
            <!--                    </div>-->
            <!--                </div>-->
            <!--                <div class="events-short-top mb-30 wow fadeInUp" data-wow-delay="400ms" data-wow-duration="2000ms">-->
            <!--                    <div class="date-part">-->
            <!--                        <span class="month">June</span>-->
            <!--                        <div class="date">20</div>-->
            <!--                    </div>-->
            <!--                    <div class="content-part">-->
            <!--                        <div class="categorie">-->
            <!--                            <a href="#">Recipes</a>-->
            <!--                        </div>-->
            <!--                        <h3 class="title"><a href="#">Persimmon, Pomegranate, And Massaged Kale Salad</a></h3>-->
            <!--                        <p class="txt">Educavo Events Description Lorem ipsum dolor sit amet, consectetuer...</p>-->
            <!--                    </div>-->
            <!--                </div> -->
            <!--                <div class="events-short-top wow fadeInUp" data-wow-delay="500ms" data-wow-duration="2000ms">-->
            <!--                    <div class="date-part">-->
            <!--                        <span class="month">June</span>-->
            <!--                        <div class="date">20</div>-->
            <!--                    </div>-->
            <!--                    <div class="content-part">-->
            <!--                        <div class="categorie">-->
            <!--                            <a href="#">Recipes</a>-->
            <!--                        </div>-->
            <!--                        <h3 class="title"><a href="#">Essential Fall Fruits That Aren’t Apples</a></h3>-->
            <!--                        <p class="txt">Educavo Events Description Lorem ipsum dolor sit amet, consectetuer...</p>-->
            <!--                    </div>-->
            <!--                </div> -->
            <!--            </div>-->
            <!--        </div>-->
            <!--    </div>-->
            <!--</div>-->
            <!-- Blog Section End -->

            <?php include 'assets/PHP/footer.php'; ?>

        <!-- modernizr js -->
        <script src="assets/js/modernizr-2.8.3.min.js"></script>
        <!-- jquery latest version -->
        <script src="assets/js/jquery.min.js"></script>
        <!-- Bootstrap v4.4.1 js -->
        <script src="assets/js/bootstrap.min.js"></script>
        <!-- Menu js -->
        <script src="assets/js/rsmenu-main.js"></script> 
        <!-- op nav js -->
        <script src="assets/js/jquery.nav.js"></script>
        <!-- owl.carousel js -->
        <script src="assets/js/owl.carousel.min.js"></script>
        <!-- Slick js -->
        <script src="assets/js/slick.min.js"></script>
        <!-- isotope.pkgd.min js -->
        <script src="assets/js/isotope.pkgd.min.js"></script>
        <!-- imagesloaded.pkgd.min js -->
        <script src="assets/js/imagesloaded.pkgd.min.js"></script>
        <!-- wow js -->
        <script src="assets/js/wow.min.js"></script>
        <!-- Skill bar js -->
        <script src="assets/js/skill.bars.jquery.js"></script>
        <script src="assets/js/jquery.counterup.min.js"></script>        
         <!-- counter top js -->
        <script src="assets/js/waypoints.min.js"></script>
        <!-- video js -->
        <script src="assets/js/jquery.mb.YTPlayer.min.js"></script>
        <!-- magnific popup js -->
        <script src="assets/js/jquery.magnific-popup.min.js"></script>
        <!-- tilt js -->
        <script src="assets/js/tilt.jquery.min.js"></script>           
        <!-- plugins js -->
        <script src="assets/js/plugins.js"></script>
        <!-- main js -->
        <script src="assets/js/main.js"></script>
        <!-- Form Validations -->
        <!--<script src="assets/form/php-validate-form.js"></script>-->
        <!--<script src="assets/form/Script.js"></script>-->
    </body>
</html>