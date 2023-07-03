<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<title><?php wp_title('&laquo;', true, 'right'); ?> <?php bloginfo('name'); ?></title>
        <meta name="viewport" content="width=device-width">
		<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
		<?php wp_head(); ?>
	</head>
    <body>
    <!-- header-area START -->
    <div class="header-area">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-2 col-3">
                    <div class="logo-area">
                        <a href="/"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo.png" class="logoDesktop" alt="logo"></a>
                        <a href="/"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/logoMobile.png" class="logoMobile" alt=""></a>
                    </div>
                </div>
                <div class="col-lg-10 col-6  text-right">
                    <div class="menu-area">
                        <nav class="d-none d-lg-block">
                            <ul id="nav">
                                <li><a href="#"><span>About</span> <img src="<?php echo get_template_directory_uri(); ?>/assets/img/angle-down.png" alt=""></a></li>
                                <li><a href="#"><span>affiliates</span> <img src="<?php echo get_template_directory_uri(); ?>/assets/img/angle-down.png" alt=""></a></li> 
                                <li><a href="#"><span>trading</span> <img src="<?php echo get_template_directory_uri(); ?>/assets/img/angle-down.png" alt=""></a></li> 
                                <li><a href="#"><span>resources</span> <img src="<?php echo get_template_directory_uri(); ?>/assets/img/angle-down.png" alt=""></a></li> 
                                <li><a href="#"><span>Markets</span> <img src="<?php echo get_template_directory_uri(); ?>/assets/img/angle-down.png" alt=""></a></li>    
                            </ul>
                        </nav>
                        <div class="login_btn">
                            <a href="#" class="thm_btn">log in </a>
                            <a href="#" class="thm_btn"> sign up</a>
                        </div>
                    </div>
                </div>
                <div class="col-3 d-block d-lg-none text-center">
                    <div class="bar">
                        <a class="bar-icon siteBar-btn" href="#">
                            <span></span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
        <!-- mobile-menu START -->
        <div class="mobile-menu">
            <div  class="accordion mobile">

                <div class="accordion-box">
                    <a href="#" class="accordion-header active-accordion" data-target="acrd_1">Trading</a>
                    <div class="accordion-content" id="acrd_1" style="display:block">
                        <ul>
                            <li><a href="#">Features</a></li>
                            <li><a href="#">Products & Spreads</a></li>
                            <li><a href="#">Account Types</a></li>
                            <li><a href="#">Metatrader</a></li>
                            <li><a href="#">Demo Account</a></li>
                            <li><a href="#">Funded Accounts</a></li>
                        </ul>
                    </div>
                </div>
                
                <div class="accordion-box">
                    <a href="#" class="accordion-header" data-target="acrd_2">Affiliate</a>
                    <div class="accordion-content" id="acrd_2">
                        <ul>
                            <li><a href="#">Afiliate Program</a></li>
                            <li><a href="#">PAMM Accounts</a></li>
                        </ul>
                    </div>
                </div>
                
                <div class="accordion-box">
                <a href="#" class="accordion-header" data-target="acrd_3">Help</a>
                    <div class="accordion-content" id="acrd_3">
                        <ul>
                            <li><a href="#">FAQ</a></li>
                            <li><a href="#">Contact Us</a></li>
                        </ul>
                    
                    </div>
                </div>
                
                <div class="accordion-box">
                    <a href="#" class="accordion-header " data-target="acrde_1">Learn</a>
                    <div class="accordion-content" id="acrde_1" >
                        <ul>
                            <li><a href="#">Education</a></li>
                            <li><a href="#">News</a></li>
                        </ul>
                    </div>
                </div>
                
                <div class="accordion-box">
                    <a href="#" class="accordion-header" data-target="acrde_2">About</a>
                    <div class="accordion-content" id="acrde_2">
                        <ul>
                            <li><a href="#">About Us</a></li>
                        </ul>
                    </div>
                </div>
                
                <div class="accordion-box">
                    <a href="#" class="accordion-header" data-target="acrde_3">Resources</a>
                    <div class="accordion-content" id="acrde_3">
                        <ul>
                            <li><a href="#">Economic Calculator</a></li>
                            <li><a href="#">Forex Calculators</a></li>
                            <li><a href="#">Interest Calculator</a></li>
                            <li><a href="#">Educational Blogs</a></li>
                        </ul>
                    
                    </div>
                </div>
                
            </div> 
        </div> 
    <!-- header-area END -->
	<?php //include 'navigation.php';?> <!-- In case needed to register menu inside wordpress -->