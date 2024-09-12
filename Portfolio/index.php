<?php 
    session_start();
    require "./config/config.php";
   
    if(isset($_SESSION['auth_id'])){

        $id = $_SESSION['auth_id'];
        $user_query = "SELECT * FROM register WHERE id ='$id'";
        $user_conn = mysqli_query($conn,$user_query);
    
        $user = mysqli_fetch_assoc($user_conn);


        $link_query = "SELECT * FROM links WHERE status='active'";
        $link_connect = mysqli_query($conn,$link_query);
         
        $link = mysqli_fetch_assoc($link_connect);

    }

    $link_tnd = "SELECT * FROM link_tnd WHERE status='active'";
    $regultlink_tnd = mysqli_query($conn,$link_tnd);

    $service_read = "SELECT * FROM services WHERE status='active'";
    $services = mysqli_query($conn,$service_read); 


    $education = "SELECT * FROM education WHERE status = 'active'";
    $education_regult = mysqli_query($conn,$education);

    $portfolio_read = "SELECT * FROM portfolio WHERE status = 'active'";
    $portfolios = mysqli_query($conn,$portfolio_read);


    $fact_area = "SELECT * FROM fact_area WHERE status = 'active'";
    $regult = mysqli_query($conn,$fact_area);


    $testimonial = "SELECT * FROM testimonial WHERE status = 'active'";
    $testimonial_regult = mysqli_query($conn,$testimonial);


    $brand_read = "SELECT * FROM brand_area WHERE status = 'active'";
    $brand = mysqli_query($conn,$brand_read);


?>
<!doctype html>
<html class="no-js" lang="en">

<head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Kufa - Personal Portfolio HTML5 Template</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="shortcut icon" type="image/x-icon" href="./font_assects/css/./font_assects/img/favicon.png">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" integrity="sha512-5A8nwdMOWrSz20fDsjczgUidUBR8liPYU+WymTZP1lmY9G6Oc7HlZv156XqnsgNUzTyMefFTcsFH/tnJE/+xBg==" crossorigin="anonymous" referrerpolicy="no-referrer" />

        <!-- Place favicon.ico in the root directory -->

		<!-- CSS here -->
        <link rel="stylesheet" href="./font_assects/css/bootstrap.min.css">
        <link rel="stylesheet" href="./font_assects/css/animate.min.css">
        <link rel="stylesheet" href="./font_assects/css/magnific-popup.css">
        <link rel="stylesheet" href="./font_assects/css/fontawesome-all.min.css">
        <link rel="stylesheet" href="./font_assects/css/flaticon.css">
        <link rel="stylesheet" href="./font_assects/css/slick.css">
        <link rel="stylesheet" href="./font_assects/css/aos.css">
        <link rel="stylesheet" href="./font_assects/css/default.css">
        <link rel="stylesheet" href="./font_assects/css/style.css">
        <link rel="stylesheet" href="./font_assects/css/responsive.css">
    </head>
    <body class="theme-bg">

        <!-- preloader -->
        <div id="preloader">
            <div id="loading-center">
                <div id="loading-center-absolute">
                    <div class="object" id="object_one"></div>
                    <div class="object" id="object_two"></div>
                    <div class="object" id="object_three"></div>
                </div>
            </div>
        </div>
        <!-- preloader-end -->

        <!-- header-start -->
        <header>
            <div id="header-sticky" class="transparent-header">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="main-menu">
                                <nav class="navbar navbar-expand-lg">
                                    <a href="index.html" class="navbar-brand logo-sticky-none"><img src="./font_assects/img/logo/logo.png" alt="Logo"></a>
                                    <a href="index.html" class="navbar-brand s-logo-none"><img src="./font_assects/img/logo/s_logo.png" alt="Logo"></a>
                                    <button class="navbar-toggler" type="button" data-toggle="collapse"
                                        data-target="#navbarNav">
                                        <span class="navbar-icon"></span>
                                        <span class="navbar-icon"></span>
                                        <span class="navbar-icon"></span>
                                    </button>
                                    <div class="collapse navbar-collapse" id="navbarNav">
                                        <ul class="navbar-nav ml-auto">
                                            <li class="nav-item active"><a class="nav-link" href="#home">Home</a></li>
                                            <li class="nav-item"><a class="nav-link" href="#about">about</a></li>
                                            <li class="nav-item"><a class="nav-link" href="#service">service</a></li>
                                            <li class="nav-item"><a class="nav-link" href="#portfolio">portfolio</a></li>
                                            <li class="nav-item"><a class="nav-link" href="#contact">Contact</a></li>
                                            <?php if(isset($id)):?>
                                                <li class="nav-item"><a target="blank" class="nav-link" href="./dashbord/home/home.php">Deshbord</a></li>
                                            <?php else:?>
                                                <li class="nav-item"><a class="nav-link" href="./authentication/login.php">Login/Register</a></li>
                                            <?php endif;?>
                                        </ul>
                                    </div>
                                    <div class="header-btn">
                                        <a href="#" class="off-canvas-menu menu-tigger"><i class="flaticon-menu"></i></a>
                                    </div>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- offcanvas-start -->
            <div class="extra-info">
                <div class="close-icon menu-close">
                    <button>
                        <i class="far fa-window-close"></i>
                    </button>
                </div>
                <div class="logo-side mb-30">
                    <a href="index-2.html">
                        <img src="./font_assects/img/logo/logo.png" alt="" />
                    </a>
                </div>
                <div class="side-info mb-30">
                    <div class="contact-list mb-30">
                        <h4>Office Address</h4>
                        <p>123/A, Miranda City Likaoli
                            Prikano, Dope</p>
                    </div>
                    <div class="contact-list mb-30">
                        <h4>Phone Number</h4>
                        <p>+0989 7876 9865 9</p>
                    </div>
                    <div class="contact-list mb-30">
                        <h4>Email Address</h4>
                        <p>info@example.com</p>
                    </div>
                </div>
                <div class="social-icon-right mt-20">
                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                    <a href="#"><i class="fab fa-twitter"></i></a>
                    <a href="#"><i class="fab fa-google-plus-g"></i></a>
                    <a href="#"><i class="fab fa-instagram"></i></a>
                </div>
            </div>
            <div class="offcanvas-overly"></div>
            <!-- offcanvas-end -->
        </header>
        <!-- header-end -->

        <!-- main-area -->
        <main>

            <!-- banner-area -->
            <section id="home" class="banner-area banner-bg fix">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-xl-7 col-lg-6">
                            <div class="banner-content">
                                <?php 
                                
                                    foreach($regultlink_tnd as $regults):
                                ?>
                                <?php if(isset($id)):?>
                                    <h6 class="wow fadeInUp" data-wow-delay="0.2s"><?php echo $regults['wellcome']?></h6>
                                    <h2 class="wow fadeInUp" data-wow-delay="0.4s"> <?php echo $regults['name'] ." ".  $user['name']?></h2>
                                    <p class="wow fadeInUp" data-wow-delay="0.6s"> <?php echo $regults['description']?></p>
                                <?php else: ?>
                                    <h6 class="wow fadeInUp" data-wow-delay="0.2s">HELLO!</h6>
                                    <h2 class="wow fadeInUp" data-wow-delay="0.4s">I am type Name></h2>
                                    <p class="wow fadeInUp" data-wow-delay="0.6s">I'm Will Smith, professional web developer with long time experience in this field​.</p>
                                <?php endif; ?>
                                
                                <div class="banner-social wow fadeInUp" data-wow-delay="0.8s">
                                <?php 
                                    endforeach;
                                ?>
                                    <?php if(isset($id) && $link > 0) : ?>
                                    <ul>
                                        <li><a target="blank" href="<?= $link['facebook']?>"><i class="fab fa-facebook-f"></i></a></li>
                                        <li><a target="blank" href="<?= $link['instragram']?>"><i class="fab fa-twitter"></i></a></li>
                                        <li><a target="blank" href="<?= $link['instragram']?>"><i class="fab fa-instagram"></i></a></li>
                                        <li><a target="blank" href="<?= $link['facebook']?>"><i class="fab fa-pinterest"></i></a></li>
                                    </ul>
                                    <?php else: ?>
                                        <ul>
                                        <li><a href="noData.php"><i class="fab fa-facebook-f"></i></a></li>
                                        <li><a href="noData.php"><i class="fab fa-twitter"></i></a></li>
                                        <li><a href="noData.php"><i class="fab fa-instagram"></i></a></li>
                                        <li><a href="noData.php"><i class="fab fa-pinterest"></i></a></li>
                                    </ul> 
                                    <?php endif; ?>
                                </div>
                                <a href="noData.php" class="btn wow fadeInUp" data-wow-delay="1s">SEE PORTFOLIOS</a>
                            </div>
                        </div>
                        <div class="col-xl-5 col-lg-6 d-none d-lg-block">
                            <div class="banner-img text-right">
                                <?php if(isset($id)):?>
                                <img src="./public/profile/<?php echo $user['image'];?>" alt="" style="">
                                <?php else:?>
                                <img src="./font_assects/img/banner/banner_img.png" alt="">
                                <?php endif;?>  
                            </div>
                        </div>
                    </div>
                </div>
                <div class="banner-shape"><img src="./font_assects/img/shape/dot_circle.png" class="rotateme" alt="img"></div>
            </section>
            <!-- banner-area-end -->

            <!-- about-area-->
            <section id="about" class="about-area primary-bg pt-120 pb-120">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-6">
                            <div class="about-img">
                                <img src="./font_assects/img/banner/banner_img2.png" title="me-01" alt="me-01">
                            </div>
                        </div>
                        <div class="col-lg-6 pr-90">
                            <div class="section-title mb-25">
                                <span>Introduction</span>
                                <h2>About Me</h2>
                            </div>
                            <div class="about-content">
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rerum, sed repudiandae odit deserunt, quas
                                    quibusdam necessitatibus nesciunt eligendi esse sit non reprehenderit quisquam asperiores maxime
                                    blanditiis culpa vitae velit. Numquam!</p>
                                <h3>Education:</h3>
                            </div>

                            <?php 
                                foreach($education_regult as $view):
                            
                            ?>
                            <!-- Education Item -->
                            <div class="education">
                                <div class="year"><?= $view['year']?></div>
                                <div class="line"></div>
                                <div class="location">
                                    <span><?= $view['title']?> </span>
                                    <div class="progressWrapper">
                                        <div class="progress">
                                            <div class="progress-bar wow slideInLefts" data-wow-delay="0.2s" data-wow-duration="2s" role="progressbar" style="width: <?= $view['ratio']?>%;" aria-valuenow="<?= $view['ratio']?>" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End Education Item -->
                            <?php endforeach;?>
                        </div>
                    </div>
                </div>
            </section>
            <!-- about-area-end -->

            <!-- Services-area -->
            <section id="service" class="services-area pt-120 pb-50">
				<div class="container">
                    <div class="row justify-content-center">
                        <div class="col-xl-6 col-lg-8">
                            <div class="section-title text-center mb-70">
                                <span>WHAT WE DO</span>
                                <h2>Services and Solutions</h2>
                            </div>
                        </div>
                    </div>
					<div class="row">
                        <?php foreach($services as $service) :?>

						<div class="col-lg-4 col-md-6">
                                <div class="icon_box_01 wow fadeInLeft" data-wow-delay="0.6s">
                                    <i class="<?= $service['icon']?> "></i>
                                    <h3><?= $service['title']?></h3>
                                    <p> 
                                    <?= $service['description']?>
                                    </p>
                                </div>
                            </div>
                            <?php endforeach;?>
						
					</div>
				</div>
			</section>
            <!-- Services-area-end -->

            <!-- Portfolios-area -->
            <section id="portfolio" class="portfolio-area primary-bg pt-120 pb-90">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-xl-6 col-lg-8">
                            <div class="section-title text-center mb-70">
                                <span>Portfolio Showcase</span>
                                <h2>My Recent Best Works</h2>
                            </div>
                        </div>
                    </div>
                    <?php 
                        foreach($portfolios as $portfolio)
                    ?>
                    <div class="row">

                        <?php 
                            foreach($portfolios as $portfolio):
                        ?>
                            <div class="col-lg-4 col-md-6 pitem">
                                <div class="speaker-box">
                                    <div class="speaker-thumb">
                                        <img src="./public/portfolio/<?= $portfolio['image']?>" alt="img" style="width: 350px; height: 500px;">
                                    </div>
                                    <div class="speaker-overlay">
                                        <span><?= $portfolio['title']?></span>
                                        <h4><a href="portfolio-single.php?portfolio=<?= $portfolio['id']?>"><?= $portfolio['subtitle']?></a></h4>
                                        <a href="portfolio-single.php?portfolio=<?= $portfolio['id']?>" class="arrow-btn">More information <span></span></a>
                                    </div>
                            </div>
                        </div>
                        <?php endforeach;?>
                    
                    </div>
                </div>
            </section>
            <!-- services-area-end -->


            <!-- fact-area -->
            <section class="fact-area">
                <div class="container">
                    <div class="fact-wrap">
                        <div class="row justify-content-between">
                            <?php 
                                foreach($regult as $view):
                            ?>
                            <div class="col-xl-2 col-lg-3 col-sm-6">
                                <div class="fact-box text-center mb-50">
                                    <div class="fact-icon">
                                        <i class="<?= $view['icon']?>"></i>
                                    </div>
                                    <div class="fact-content">
                                        <h2><span class="count"><?= $view['number']?></span></h2>
                                        <span><?= $view['title']?></span>
                                    </div>
                                </div>
                            </div>
                            <?php endforeach;?>
                        </div>
                    </div>
                </div>
            </section>
            <!-- fact-area-end -->

            <!-- testimonial-area -->
            <section class="testimonial-area primary-bg pt-115 pb-115">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-xl-6 col-lg-8">
                            <div class="section-title text-center mb-70">
                                <span>testimonial</span>
                                <h2>happy customer quotes</h2>
                            </div>
                        </div>
                    </div>

                    <div class="row justify-content-center">
                        <div class="col-xl-9 col-lg-10">
                            <div class="testimonial-active">

                            <?php foreach($testimonial_regult as $view): ?>
                                <div class="single-testimonial text-center">
                                    <div class="testi-avatar">
                                        <img src="./public/testimonial/<?= $view['image']?>" alt="img" style="width: 100px;height: 100px;border-radius: 50%;">
                                    </div>
                                    <div class="testi-content">
                                        <h4><span>“</span> <?= $view['descprition']?><span>”</span></h4>
                                        <div class="testi-avatar-info">
                                            <h5><?= $view['nane']?></h5>
                                            <span><?= $view['name']?></span>
                                        </div>
                                    </div>
                                </div>
                            <?php endforeach;?>
                            </div>
                        </div>
                    </div>

                </div>
            </section>
            <!-- testimonial-area-end -->

            <!-- brand-area -->
            <div class="barnd-area pt-100 pb-100">
                <div class="container">
                    <div class="row brand-active">
                        <?php 
                            foreach($brand as $view):
                        ?>
                        <div class="col-xl-2">
                            <div class="single-brand">
                                <img src="./public/brand_area/<?= $view['image'];?>" alt="img" width="150px" height="50px">
                            </div>
                        </div>
                        <?php endforeach;?>
                       
                    </div>
                </div>
            </div>
            <!-- brand-area-end -->

            <!-- contact-area -->
            <section id="contact" class="contact-area primary-bg pt-120 pb-120">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-6">
                            <div class="section-title mb-20">
                                <span>information</span>
                                <h2>Contact Information</h2>
                            </div>
                            <div class="contact-content">
                                <p>Event definition is - somthing that happens occurre How evesnt sentence. Synonym when an unknown printer took a galley.</p>
                                <h5>OFFICE IN <span>NEW YORK</span></h5>
                                <div class="contact-list">
                                    <ul>
                                        <li><i class="fas fa-map-marker"></i><span>Address :</span>Event Center park WT 22 New York</li>
                                        <li><i class="fas fa-headphones"></i><span>Phone :</span>+9 125 645 8654</li>
                                        <li><i class="fas fa-globe-asia"></i><span>e-mail :</span>info@exemple.com</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="contact-form">
                                <form action="./dashbord/email/action.php" method="POST">
                                    <input type="text" placeholder="your name *" name="name">

                                    <!-- <input type="text" placeholder="your email *" name="email"> -->
                                    <input type="email" name="email">
                                    <textarea id="message" placeholder="your message *" name="body"></textarea>
                                    <button class="btn" type="submit" name="email_sender">SEND</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- contact-area-end -->

        </main>
        <!-- main-area-end -->

        <!-- footer -->
        <footer>
            <div class="copyright-wrap">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-12">
                            <div class="copyright-text text-center">
                                <p>Copyright© <span>Kufa</span> | All Rights Reserved</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- footer-end -->





		<!-- JS here -->
        <script src="./font_assects/js/vendor/jquery-1.12.4.min.js"></script>
        <script src="./font_assects/js/popper.min.js"></script>
        <script src="./font_assects/js/bootstrap.min.js"></script>
        <script src="./font_assects/js/isotope.pkgd.min.js"></script>
        <script src="./font_assects/js/one-page-nav-min.js"></script>
        <script src="./font_assects/js/slick.min.js"></script>
        <script src="./font_assects/js/ajax-form.js"></script>
        <script src="./font_assects/js/wow.min.js"></script>
        <script src="./font_assects/js/aos.js"></script>
        <script src="./font_assects/js/jquery.waypoints.min.js"></script>
        <script src="./font_assects/js/jquery.counterup.min.js"></script>
        <script src="./font_assects/js/jquery.scrollUp.min.js"></script>
        <script src="./font_assects/js/imagesloaded.pkgd.min.js"></script>
        <script src="./font_assects/js/jquery.magnific-popup.min.js"></script>
        <script src="./font_assects/js/plugins.js"></script>
        <script src="./font_assects/js/main.js"></script>
    </body>

</html>
