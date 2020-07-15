<!DOCTYPE html>
<html lang="en-US">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="shortcut icon" href="assets/images/fevicon.png">
    <title>Delight Resort</title>
    <meta name='robots' content='noindex,follow' />
   <!-- Bootstrap -->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600|Tangerine' rel='stylesheet' type='text/css'>
	<link rel='stylesheet' id='howello-styles-css' href='assets/css/themestyles.css' type='text/css' media='all' />
    <link rel='stylesheet' id='howello-res-css' href='assets/css/responsive.css' type='text/css' media='all' />
	 <!-- Required Bootslider Styles -->
    <link href="assets/css/animate.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/bootslider.css" rel="stylesheet" type="text/css" />	
	<link rel="stylesheet" href="assets/css/jquery.datepicker.css">
	<script src="assets/js/modernizr-2.8.3.min.js"></script>
	 <link rel="stylesheet" href="assets/css/bundle.css">
	 <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
	  <link rel="stylesheet" href="assets/css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="assets/css/owl.theme.default.min.css" type="text/css">
	<link rel='stylesheet' id='howello-res-css' href='assets/css/style.css' type='text/css' media='all' />
     
      <!-- Page Level Styles -->
    <style>

    </style>
	
	 
</head>

<body>
<?php
    //Include database configuration file
    include('config.php');
    
    //Get all country data
    $query = "SELECT * FROM countries  ORDER BY country_name ASC";
    $run_query = mysqli_query($con, $query);
    //Count total number of rows
	$count = mysqli_num_rows($run_query);
    
    ?>

    <div id="preloader">
  <div id="status">&nbsp;</div>
</div>

    <!--================Header Area =================-->
    <header class="main_header_area">


        <div class="top-line header_top">
            <div class="container top-nav-container">
                <div class="header_top_inner">
                    <!-- Start left side content -->
                    <div class="left-content pull-left"> <span>
				<a href="tel:18004567890"><i class="wicon-phone-receiver"></i>+ (91) 7999094330</a>
			</span>
                        <span>
				<a href="mailto:example@example.com"><i class="wicon-send"></i>deepambahre@gmail.com</a>
			</span>
                    </div>
                    <!-- .left-content -->
                    <!-- Start right side content -->
                    <div class="right-content pull-right navbar-right">
                        <div class="social-icons">

                            <ul class="header_social">

                                <li>
								    
									<div class="effect jaques">
    <div class="buttons">
      <a href="#" class="fb" title="Join us on Facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a>
      <a href="#" class="tw" title="Join us on Twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a>
      <a href="#" class="g-plus" title="Join us on Google+"><i class="fa fa-google-plus" aria-hidden="true"></i></a>
      <a href="#" class="dribbble" title="Join us on Dribbble"><i class="fa fa-dribbble" aria-hidden="true"></i></a>
      <a href="#" class="vimeo" title="Join us on Vimeo"><i class="fa fa-vimeo" aria-hidden="true"></i></a>
    <a href="#" class="pinterest" title="Join us on Pinterest"><i class="fa fa-pinterest-p" aria-hidden="true"></i></a>
      <a href="#" class="insta" title="Join us on Instagram"><i class="fa fa-instagram" aria-hidden="true"></i></a>
      <a href="#" class="in" title="Join us on Linked In"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
    </div>
  </div>
								
								</li>
                            </ul>
                        </div>
                    </div>
                    <!-- .right-content -->
                </div>
            </div>
        </div>
        <div class="header_menu">
            <nav class="navbar navbar-default">
                <div class="container-fluid">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                        <!-- Logo -->

                        <a class="logo navbar-brand" href="#" title="">
	 		<img src="assets/images/logo.png" alt="Howello WordPress Theme" />
		<img src="assets/images/logo-sticky.png" alt="Howello WordPress Theme" />
	 	</a>
                    </div>

                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                        <!-- The WordPress Menu goes here -->
                        <div class="primary-menu-container">
                            <ul id="main-menu" class="nav navbar-nav">
							    <li id="menu-item-2415" class="menu-item menu-item-type-post_type menu-item-object-page nav-item menu-item-2415 active"><a title="Home" href="#" class="nav-link active">Home</a></li>
								<li id="menu-item-2415" class="menu-item menu-item-type-post_type menu-item-object-page nav-item menu-item-2415"><a title="About us" href="pages/aboutus.html" class="nav-link">About us</a></li>
                                <li id="menu-item-2414" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home current-menu-item page_item page-item-2267 current_page_item current-menu-ancestor current-menu-parent current_page_parent current_page_ancestor menu-item-has-children nav-item menu-item-2414 submenu dropdown"><a title="Home" href="#" data-toggle="dropdown" class="nav-link dropdown-toggle">Packages <span class="caret"></span></a>
                                    <ul class=" dropdown-menu" role="menu">
                                        <li id="menu-item-2435" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home current-menu-item page_item page-item-2267 current_page_item nav-item menu-item-2435"><a title="Packages" href="#Packages/" class="nav-link">Packages</a></li>
                                        <li id="menu-item-2427" class="menu-item menu-item-type-post_type menu-item-object-page nav-item menu-item-2427"><a title="Home 2" href="#Packages-2/" class="nav-link">Packages1</a></li>
                                        <li id="menu-item-2428" class="menu-item menu-item-type-post_type menu-item-object-page nav-item menu-item-2428"><a title="Home 3" href="#Packages-3/" class="nav-link">Packages 3</a></li>
                                        <li id="menu-item-2429" class="menu-item menu-item-type-post_type menu-item-object-page nav-item menu-item-2429"><a title="Home 4" href="#Packages-4/" class="nav-link">Packages 4</a></li>
                                    </ul>
                                </li>
                                    <ul class=" dropdown-menu" role="menu">
                                        <li id="menu-item-2432" class="menu-item menu-item-type-post_type menu-item-object-page nav-item menu-item-2432"><a title="Rooms Grid" href="#rooms-grid/" class="nav-link">Rooms Grid</a></li>
                                        <li id="menu-item-2433" class="menu-item menu-item-type-post_type menu-item-object-page nav-item menu-item-2433"><a title="Rooms List" href="#rooms-list/" class="nav-link">Rooms List</a></li>
                                        <li id="menu-item-2523" class="menu-item menu-item-type-post_type menu-item-object-hb_room nav-item menu-item-2523"><a title="Room Single" href="#rooms/gold-room-2/" class="nav-link">Room Single</a></li>
                                    </ul>
                                </li>
                                <li id="menu-item-2421" class="menu-item menu-item-type-post_type menu-item-object-page nav-item menu-item-2421"><a title="Reservation" href="#Reservation/" class="nav-link">Reservation</a></li>
								<li id="menu-item-2421" class="menu-item menu-item-type-post_type menu-item-object-page nav-item menu-item-2421"><a title="Gallery" href="pages/Gallery/gallery1.php" class="nav-link">Gallery</a></li>
                                    <ul class=" dropdown-menu" role="menu">
                                        <li id="menu-item-2443" class="menu-item menu-item-type-post_type menu-item-object-page nav-item menu-item-2443"><a title="Blog Right Sidebar" href="#blog/" class="nav-link">Blog Right Sidebar</a></li>
                                        <li id="menu-item-2420" class="menu-item menu-item-type-post_type menu-item-object-page nav-item menu-item-2420"><a title="Blog Left Sidebar" href="#blog-left-sidebar/" class="nav-link">Blog Left Sidebar</a></li>
                                        <li id="menu-item-2419" class="menu-item menu-item-type-post_type menu-item-object-page nav-item menu-item-2419"><a title="Blog Grid" href="#blog-grid/" class="nav-link">Blog Grid</a></li>
                                        <li id="menu-item-2454" class="menu-item menu-item-type-post_type menu-item-object-post nav-item menu-item-2454"><a title="Single Post" href="#many-desktop-publishing-packages-and-web-page-editors/" class="nav-link">Single Post</a></li>
                                    </ul>
                                </li>                               
                                <li id="menu-item-2421" class="menu-item menu-item-type-post_type menu-item-object-page nav-item menu-item-2421"><a title="Contact us" href="#contact-us/" class="nav-link">Contact us</a></li>
                                <li id="menu-item-2421" class="nav-search menu-item menu-item-type-post_type menu-item-object-page nav-item menu-item-2421">
                                    <form class="navbar-form" role="search">
    <div class="input-group search-group add-on">
      <input type="text" class="form-control Search" placeholder="Search" name="srch-term" id="srch-term">
      <div class="input-group-btn">
        <button class="btn btn-default search-btn" type="submit"><i class="glyphicon glyphicon-search"></i></button>
      </div>
    </div>
  </form>
								</li>
                            </ul>
                        </div>
                        <ul class="nav navbar-nav navbar-right">
                            <li class="search_dropdown">
                                
                            </li>
                            <li class="book_btn">
                                <a class="book_now_btn" href="#">Book Now</a>
                            </li>
                        </ul>
                    </div>
                    <!-- /.navbar-collapse -->
                </div>
                <!-- /.container-fluid -->
            </nav>
        </div>
    </header>
 
<div class="slider-with-form">   
   <div class="bootslider" id="bootslider">
        <!-- Bootslider Loader -->
        <div class="bs-loader">
            <img src="assets/images/slider/loader.gif" width="31" height="31" alt="Loading.." id="loader" />
        </div>
        <!-- /Bootslider Loader -->

        <!-- Bootslider Container -->
        <div class="bs-container">

            <!-- Bootslider Slide -->
            <div class="bs-slide active" data-animate-in="flipInX" data-animate-out="holeOut">
                <!-- <div class="bs-foreground">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12 bs-vertical-center">
                                <div data-animate-in="fadeInLeft" data-animate-out="fadeOutUpBig" data-delay="1600">
                                    <h1 class="heading">
                                        BOOTSLIDER
                                    </h1>
                                    <h2 class="subheading text-white">
                                        FREE YOUR IMAGINATION
                                    </h2>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> -->
                <div class="bs-background">
                    <!-- <img src="assets/images/slider/slide-4-layer-1.png" class="bs-layer" data-animate-in="fadeInRightBig" data-animate-out="fadeOutRightBig" data-delay="400" data-width="666" data-height="649" data-right="0" data-bottom="0" />
                     -->
					 <img src="assets/images/slider/slide1.jpg" alt="" />
                </div>
            </div>
            <!-- /Bootslider Slide -->

            <!-- Bootslider Slide -->
            <div class="bs-slide" data-animate-in="bounceInUp" data-animate-out="hinge">
                <!-- <div class="bs-foreground">
                    <div class="container">
                        <div class="row" data-animate-in="fadeInLeftBig" data-delay="1000" data-animate-out="fadeOutDown">
                            <div class="col-md-12">
                                <h1 class="heading">BOOTSLIDER</h1>
                                <p class="subheading text-white">SIMPLY LOVES BOOTSTRAP</p>
                                <p>
                                    <a class="btn btn-primary" href="http://codecanyon.net/item/bootslider-responsive-bootstrap-css3-slider/6477433?ref=AlexGrozav">BUY NOW</a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div> -->
                <div class="bs-background">
                    <!-- <img src="assets/images/slider/slide-1-layer-1.png" data-animate-in="fadeInUpBig" data-animate-out="fadeLeftDownBig" class="bs-layer" data-width="683" data-height="302" data-left="342" data-bottom="100" />
                    <img src="assets/images/slider/slide-1-layer-2.png" data-animate-in="fadeInLeftBig" data-animate-out="fadeInDownBig" class="bs-layer" data-width="442" data-height="273" data-left="382" data-bottom="0" data-delay="1200" />
                     -->
					 <img src="assets/images/slider/slide2.jpg" alt="" />
                </div>
            </div>
            <!-- /Bootslider Slide -->

            <!-- Bootslider Slide -->
            <div class="bs-slide" data-animate-in="bounceInDown" data-animate-out="flipOutX">
                <!-- <div class="bs-foreground">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12 text-center">
                                <div data-animate-in="tada" data-animate-out="fadeOutUpBig" data-delay="2000">
                                    <h1 class="heading">
                                        BOOTSLIDER
                                    </h1>
                                    <h2 class="subheading text-white">
                                        ABSOLUTELY RESPONSIVE
                                    </h2>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> -->
                <div class="bs-background">
                   <!--  <img src="assets/images/slider/slide-2-layer-4.png" class="bs-layer" data-animate-in="fadeInDown" data-animate-out="fadeOutUpBig" data-delay="2000" data-width="775" data-height="473" data-right="125" data-top="243" />
                    <img src="assets/images/slider/slide-2-layer-1.png" class="bs-layer" data-animate-in="fadeInDownBig" data-animate-out="fadeOutUpBig" data-delay="800" data-width="922" data-height="532" data-left="237" data-top="174" />
                    <img src="assets/images/slider/slide-2-layer-2.png" class="bs-layer" data-animate-in="fadeInRightBig" data-animate-out="fadeOutUpBig" data-delay="1200" data-width="208" data-height="410" data-right="322" data-top="276" />
                    <img src="assets/images/slider/slide-2-layer-3.png" class="bs-layer" data-animate-in="fadeInLeftBig" data-animate-out="fadeOutUpBig" data-delay="1600" data-width="423" data-height="512" data-left="183" data-top="203" />
                     -->
					 <img src="assets/images/slider/slide3.jpg" alt="" />
                </div>
            </div>
            <!-- /Bootslider Slide -->

            <!-- Bootslider Slide -->
            <div class="bs-slide" data-animate-in="rollIn" data-animate-out="flipOutX">
                <!-- <div class="bs-foreground">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <h1 class="heading" data-animate-in="fadeInLeftBig" data-animate-out="fadeOutLeftBig" data-delay="800">
                                    NOW LAYERED
                                </h1>
                                <h2 class="subheading text-white" data-animate-in="fadeInLeftBig" data-animate-out="fadeOutLeftBig" data-delay="2000">
                                    AND EVEN MORE AWESOME
                                </h2>
                            </div>
                        </div>
                    </div>
                </div> -->
                <div class="bs-background">
                    <!-- <img src="assets/images/slider/slide-3-layer-1.png" class="bs-layer" data-animate-in="fadeInRightBig" data-animate-out="fadeOutLeftBig" data-delay="800" data-width="854" data-height="508" data-left="82" data-top="200" />
                    <img src="assets/images/slider/slide-3-layer-2.png" class="bs-layer" data-animate-in="fadeInRightBig" data-animate-out="fadeOutLeftBig" data-delay="1200" data-width="854" data-height="508" data-left="336" data-top="140" />
                    <img src="assets/images/slider/slide-3-layer-3.png" class="bs-layer" data-animate-in="fadeInRightBig" data-animate-out="fadeOutLeftBig" data-delay="1600" data-width="854" data-height="508" data-right="23" data-top="95" />
                     -->
					 <img src="assets/images/slider/slide4.jpg" alt="" />
                </div>
            </div>
            <!-- /Bootslider Slide -->

            <!-- Bootslider Slide -->
            <div class="bs-slide" data-animate-in="scaleUpIn" data-animate-out="scaleUpOut">
                <div class="bs-background">
                    <img src="assets/images/slider/slide5.jpg" alt="" />
                </div>
            </div>
            <!-- /Bootslider Slide -->
			<!-- Bootslider Slide -->
            <div class="bs-slide" data-animate-in="scaleUpIn" data-animate-out="scaleUpOut">
                <div class="bs-background">
                    <img src="assets/images/slider/slide6.jpg" alt="" />
                </div>
            </div>
            <!-- /Bootslider Slide -->
			<!-- Bootslider Slide -->
            <div class="bs-slide" data-animate-in="scaleUpIn" data-animate-out="scaleUpOut">
                <div class="bs-background">
                    <img src="assets/images/slider/slide7.jpg" alt="" />
                </div>
            </div>
            <!-- /Bootslider Slide -->
			<!-- Bootslider Slide -->
            <div class="bs-slide" data-animate-in="scaleUpIn" data-animate-out="scaleUpOut">
                <div class="bs-background">
                    <img src="assets/images/slider/slide8.jpg" alt="" />
                </div>
            </div>
            <!-- /Bootslider Slide -->
			<!-- Bootslider Slide -->
            <div class="bs-slide" data-animate-in="scaleUpIn" data-animate-out="scaleUpOut">
                <div class="bs-background">
                    <img src="assets/images/slider/slide9.jpg" alt="" />
                </div>
            </div>
            <!-- /Bootslider Slide -->
			<!-- Bootslider Slide -->
            <div class="bs-slide" data-animate-in="scaleUpIn" data-animate-out="scaleUpOut">
                <div class="bs-background">
                    <img src="assets/images/slider/slide10.jpg" alt="" />
                </div>
            </div>
            <!-- /Bootslider Slide -->

            <!-- Bootslider Slide -->
            <!-- <div class="bs-slide" data-animate-in="openDownLeftReturn" data-animate-out="slideUp">
                <div class="bs-foreground">
                    <div class="bs-video-fullscreen">
                        <iframe width="560" height="315" src="https://www.youtube.com/embed/-qwevh0_bZY" data-bs-video-autoplay="true" frameborder="0" allowfullscreen></iframe>
                    </div>
                </div>
                <div class="bs-background">
                    <img src="assets/images/slider/slide6.jpg" alt="" />
                </div>
            </div> -->
            <!-- /Bootslider Slide -->

        </div>
        <!-- /Bootslider Container -->

        <!-- Bootslider Progress -->
        <div class="bs-progress progress">
            <div class="progress-bar progress-primary"></div>
        </div>
        <!-- /Bootslider Progress -->

        <!-- Bootslider Thumbnails -->
        <div class="bs-thumbnails text-center text-turquoise">
            <ul class=""></ul>
        </div>
        <!-- /Bootslider Thumbnails -->

        <!-- Bootslider Pagination -->
        <div class="bs-pagination text-center text-turquoise">
            <ul class="pagination"></ul>
        </div>
        <!-- /Bootslider Pagination -->

        <!-- Bootslider Controls -->
        <div class="bs-controls text-center">
            <div class="btn-group">
                <a href="javascript:void(0);" class="btn btn-primary slider-btn bs-prev">&lt;</a>
                <a href="javascript:void(0);" class="btn btn-primary slider-btn bs-next">&gt;</a>
            </div>
        </div>
        <!-- /Bootslider Controls -->

    </div>
	
	<div class="booking">
       <div class="col-md-6 banner-right">
        		<h3><span>Make reservation</span></h3>
                <form method="get" action="/action_page.php">
            		<div class="reservation">
					
					<div class="check-display">
                    <div class="autocomplete keywords">
                <!-- <input class="form-control mt10px input" size="16" id="myInput" type="text" name="myCountry" placeholder="Destination">
                   <span class="input-group-addon"><span class="glyphicon glyphicon-home"></span></span> -->
				    <div class="row">
				        <div class="col-md-4 col-xs-4">
				           <div class="section_room location">
            						<span class="fa fa-user"> </span>
            						<select name="country" id="country" class="frm-field required">
                                        <option value="">Select Country</option>
        <?php
        if($count > 0){
            while($row = mysqli_fetch_array($run_query)){
				$country_id=$row['country_id'];
				$country_name=$row['country_name'];
                echo "<option value='$country_id'>$country_name</option>";
            }
        }else{
            echo '<option value="">Country not available</option>';
        }
        ?>
            						</select>
            				</div>
					    </div>
						<div class="col-md-4 col-xs-4">
				           <div class="section_room location">
            						<span class="fa fa-user"> </span>
            						<select name="state" id="state" class="frm-field required">
                                        <option value="">Select State</option>
            						</select>
            				</div>
					    </div>
						<div class="col-md-4 col-xs-4">
				           <div class="section_room location">
            						<span class="fa fa-user"> </span>
            						<select name="city" id="city" class="frm-field required">
                                        <option value="">Select city</option>
            						</select>
            				</div>
					    </div>
					</div>
				   
				   
				   </div>

                <div class="input-group check-group  keywords date">
				    <span class="input-group-btn"><button type="button" class="btn btn-default cal-btn" data-toggle="datepicker"><i class="fa fa-calendar"></i></button></span>
                    <input class="form-control" name="date" id="date" data-select="datepicker" data-toggle="datepicker" data-locked="25/12/2014;1/1/2015" size="16" type="text" value="" placeholder="Check in">					
                </div>
			


                <div class="input-group check-group keywords date ">
				     <span class="input-group-btn"><button type="button" class="btn btn-default cal-btn" data-toggle="datepicker"><i class="fa fa-calendar"></i></button></span>
                    <input class="form-control" size="16" name="date" id="date2" data-select="datepicker" data-toggle="datepicker" data-locked="25/12/2014;1/1/2015" type="text" value="" placeholder="Check out">  
			   </div>
                </div>
            			<div class="reservation-grids">
            				<div class="reservation-grid-left">
            					<div class="section_room">
            						<span class="fa fa-user"> </span>
            						<select name="adults" id="adults" class="frm-field required" title="Adults">
                                        <option hidden="hidden">Adults</option>
            							<option value="1" selected="selected">1</option>         
            							<option value="2">2</option>
            							<option value="3">3</option>
            							<option value="4">4</option>
                                        <option value="5">5</option>
                                        <option value="6">6</option>
                                        <option value="7">7</option>
                                        <option value="8">8</option>
                                        <option value="9">9</option>
                                        <option value="10">10</option>
            						</select>
            					</div>
            				</div>
            				<div class="reservation-grid-right">
            					<div class="section_room">
				  		          <span class="fa fa-users"></span>
            						<select name="kids" id="kids" class="frm-field required" title="Kids">
                                        <option value="0" hidden="hidden">Kids</option>
            							<option value="1">1</option>         
            							<option value="2">2</option>
            							<option value="3">3</option>
            							<option value="4">4</option>
                                        <option value="5">5</option>
                                        <option value="6">6</option>
                                        <option value="7">7</option>
                                        <option value="8">8</option>
                                        <option value="9">9</option>
                                        <option value="10">10</option>
            						</select>
            					</div>
            				</div>
            				<div class="clearfix"> </div>
            			</div>
                        <input type="hidden" name="room_type" value="">
            			<div class="keywords">	
				   	         <input type="submit" value="Search">
            			</div>
            		</div>
                </form>
        	</div>
   </div>
	</div>

    <main id="main" class="site-main">
	
	 <!-- Activities of Resort style-->
    <div class="resot-activities clearfix">
        <div class="container clearfix common-pad">
            <div class="row">
                <div class="col-lg-6 col-md-6 activities-cont">
                    <div class="sec-header3">
                        <h2>Activities of Resort</h2>
                        <h3>Pick a room that best suits your taste and budget</h3>
                    </div>
                    <p>Tdolor sit amet, consectetur, adipis civelit sed quia non qui dolorem ipsum quia dolor sit amet, consectetur, adipis civelit. Red quia numquam.</p>
                    <p>Tdolor sit amet, consectetur, adipis civelit sed quia non qui dolorem ipsum quia dolor sit amet, consectetur, adipis civelit. Red quia numquam eius modi. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet</p><a href="aboutus.html"
                        class="res-btn">About us<i class="fa fa-arrow-right"></i></a>
                </div>
                <div class="col-lg-6 col-md-6 col-xs-12">
                    <div class="row nasir-welboxes">
                        <div class="single_wel_cont col-sm-6">
                            <a href="#" class="wel-box">
                                <div class="icon-box"><img src="assets/images/welcome/icon-3.png" alt=""></div>
                                <h4>Lexuary Spa</h4>
                                <div class="overlay transition3s">
                                    <div class="icon_position_table">
                                        <div class="icon_container border_round">
                                            <h2>Lexuary Spa</h2>
                                            <p>Neque porro quisquam est, qui dolorem ipsum quia orro quisquam estdqAolor </p>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="single_wel_cont col-sm-6">
                            <a href="#" class="wel-box">
                                <div class="icon-box"><img src="assets/images/welcome/icon-1.png" alt=""></div>
                                <h4>Inhouse Restaurant</h4>
                                <div class="overlay transition3s">
                                    <div class="icon_position_table">
                                        <div class="icon_container border_round">
                                            <h2>Inhouse Restaurant</h2>
                                            <p>Neque porro quisquam est, qui dolorem ipsum quia orro quisquam estdqAolor </p>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="single_wel_cont col-sm-6">
                            <a href="#" class="wel-box">
                                <div class="icon-box"><img src="assets/images/welcome/icon-2.png" alt=""></div>
                                <h4>Fitness Gym</h4>
                                <div class="overlay transition3s">
                                    <div class="icon_position_table">
                                        <div class="icon_container border_round">
                                            <h2>Fitness Gym</h2>
                                            <p>Neque porro quisquam est, qui dolorem ipsum quia orro quisquam estdqAolor </p>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="single_wel_cont col-sm-6">
                            <a href="#" class="wel-box">
                                <div class="icon-box"><img src="assets/images/welcome/icon-4.png" alt=""></div>
                                <h4>Delicious Food</h4>
                                <div class="overlay transition3s">
                                    <div class="icon_position_table">
                                        <div class="icon_container border_round">
                                            <h2>Delicious Food</h2>
                                            <p>Neque porro quisquam est, qui dolorem ipsum quia orro quisquam estdqAolor </p>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
	
	<!--Start -->
     <div class="resot-activities clearfix offers">
        <div class="container">
          <div class="row">
            <div class="col-md-4 our-offer-left">
                <div class="sec-header3">
                        <h2>Our Offers</h2>
                        <h3>Pick a room that best suits</h3>
                </div>
                    <p>Tdolor sit amet, consectetur, adipis civelit sed quia non qui dolorem ipsum quia dolor sit amet, consectetur, adipis civelit. Red quia numquam.</p>
                    <p>Tdolor sit amet, consectetur, adipis civelit sed quia non qui dolorem ipsum quia dolor sit amet, consectetur, adipis civelit. Red quia numquam eius modi. Neque porro quisquam.</p>
            </div>
			<div class="col-md-8 offer-right">
			    <div class="row">
                    <div class="col-md-6 col-md-12">
					    <div class="zoom-container">
					    <div class="zoom">
					        <img class="image-zoom " src="assets/images/our-resort/1.jpg" alt="" class="img-responsive">
					   
					    <div class="overlay">
                            <div class="room-ad-cont">
                                <h2>25% <span>off</span></h2>
                                <h3>Weeken Spa Offer</h3>
                                <p>Enjoy a luxurious SPA weekend dedicated to helping you unwind.</p><a href="booking.html">Read more</a>
                            </div>
                        </div>
					 </div>
						</div>
					</div>
					<div class="col-md-6 col-md-12">
					<div class="box">
					<div class="zoom-container zoom-pt2">
					    <div class="zoom">
					<img src="assets/images/our-resort/2.jpg" class="line-high" alt="" class="img-responsive">
					<div class="overlay2">
                      <div class="text1">* condition apply</div>
                      <div class="offertext1">
                        <p>15% <span class="off-txt">off</span><span class="winter-txt">In Winter<br>Season</span></p>
                      </div>
                    </div>
					</div>
					</div>
					</div>
					<div class="box">
					<div class="zoom-container zoom-pt3">
					    <div class="zoom">
					<img src="assets/images/our-resort/3.jpg" alt="" class="img-responsive">
					<div class="overlay3">
                      <p>Honeymoon <span>Offer</span></p>
                      <h2>25% <span>off</span></h2>
                      <h6>* condition apply</h6>
                    </div>
					</div>
					</div>
					</div>
					
					</div>
					</div>
	
			</div>
          </div>
        </div>
     </div>
    <!--///End -->
	
     <section id="menu" class="parallax">
            <div class="container">
                <div class="section-content">
                    <div class="title center mb-100">
                        <h2 class="cursive mb-0">Discover</h2>
                        <h3 class="upper">Our Menu<span class="red-dot"></span></h3>
                        <hr>
                    </div>
                </div>
            </div>
            <!-- end of container-->
    </section>
     <section class="grey pt-0 ov-v food-menu">
        <div class="container">
            <div class="restaurant-menu">
                <div class="row">
                    <div class="col-md-6">
                        <div class="rs-menu image-right">
                            <div class="rs-menu-media">
                                <img src="assets/images/menu/1.jpg" alt="" class="thumb-placeholder">
                            </div>
                            <div class="rs-menu-body">
                                <h2 class="cursive">Italian Pasta</h2>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod.</p>
                                <h4>From $9.99</h4>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="rs-menu image-right">
                            <div class="rs-menu-media">
                                <img src="assets/images/menu/2.jpg" alt="" class="thumb-placeholder">
                            </div>
                            <div class="rs-menu-body">
                                <h2 class="cursive">Spaghetti</h2>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod.</p>
                                <h4>From $6.99</h4>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="rs-menu">
                            <div class="rs-menu-media">
                                <img src="assets/images/menu/3.jpg" alt="" class="thumb-placeholder">
                            </div>
                            <div class="rs-menu-body">
                                <h2 class="cursive">Pizza</h2>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod.</p>
                                <h4>From $79.99</h4>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="rs-menu">
                            <div class="rs-menu-media">
                                <img src="assets/images/menu/4.jpg" alt="" class="thumb-placeholder">
                            </div>
                            <div class="rs-menu-body">
                                <h2 class="cursive">Banana Split</h2>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod.</p>
                                <h4>From $12.99</h4>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="rs-menu image-right">
                            <div class="rs-menu-media">
                                <img src="assets/images/menu/5.jpg" alt="" class="thumb-placeholder">
                            </div>
                            <div class="rs-menu-body">
                                <h2 class="cursive">Muffin</h2>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod.</p>
                                <h4>From $4.99</h4>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="rs-menu image-right">
                            <div class="rs-menu-media">
                                <img src="assets/images/menu/6.jpg" alt="" class="thumb-placeholder">
                            </div>
                            <div class="rs-menu-body">
                                <h2 class="cursive">Spinach Salad</h2>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod.</p>
                                <h4>From $8.99 </h4>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end of row-->
            </div>
        </div>
        <!-- end of container-->
    </section>
	
                <!--==== portfolio Section =====-->
    <section class="portfolio-area" id="work">
        <div class="container">
            <div class="row portfolio-title">
                <div class="col-md-12">
                    <div class="section-title text-center">
                        <h2> Tourist Place</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div id="portfolio-grid" class="portfolio-grid">
                    <div class="grid">
                        <div class="col-md-4 col-sm-6 col-xs-12 grid-item cat2">
                            <div class="portfolio">
                                <a href="#" data-toggle="modal" data-target="#project-01">
                                        <img src="assets/images/portfolio/1.jpg" alt="" />
                                        <div class="portfolio-view">
                                            <i class="fa fa-search"></i>							
                                        </div>
                                    </a>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6 col-xs-12 grid-item cat1 cat3">
                            <div class="portfolio">
                                <a href="#" data-toggle="modal" data-target="#project-02">
                                        <img src="assets/images/portfolio/2.jpg" alt="" />
                                        <div class="portfolio-view">
                                            <i class="fa fa-search"></i>							
                                        </div>
                                    </a>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6 col-xs-12 grid-item cat1">
                            <div class="portfolio">
                                <a href="#" data-toggle="modal" data-target="#project-03">
                                        <img src="assets/images/portfolio/3.jpg" alt="" />
                                        <div class="portfolio-view">
                                            <i class="fa fa-search"></i>							
                                        </div>
                                    </a>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6 col-xs-12 cat1 grid-item cat2">
                            <div class="portfolio">
                                <a href="#" data-toggle="modal" data-target="#project-04">
                                        <img src="assets/images/portfolio/4.jpg" alt="" />
                                        <div class="portfolio-view">
                                            <i class="fa fa-search"></i>							
                                        </div>
                                    </a>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6 col-xs-12 grid-item cat2 cat1">
                            <div class="portfolio">
                                <a href="#" data-toggle="modal" data-target="#project-05">
                                        <img src="assets/images/portfolio/5.jpg" alt="" />
                                        <div class="portfolio-view">
                                            <i class="fa fa-search"></i>							
                                        </div>
                                    </a>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6 col-xs-12 grid-item cat1 cat3">
                            <div class="portfolio">
                                <a href="#" data-toggle="modal" data-target="#project-06">
                                        <img src="assets/images/portfolio/6.jpg" alt="" />
                                        <div class="portfolio-view">
                                            <i class="fa fa-search"></i>							
                                        </div>
                                    </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--/.row-->
        </div>
        <!--/.container-->

        <!-- Modal-01 start  -->
        <div class="modal fade" id="project-01" tabindex="-1" role="dialog">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h2 class="modal-title">Taj Mahal</h2>
                    </div>
                    <div class="modal-body">
                        <img src="assets/images/portfolio/1-1.jpg" alt="work-1">
                        <p>Taj Mahal is an amazing specimen of architectural art. It was built by Shah Jahan. After the death of Mumtaz Mahal, Shah Jahan had decided to build Taj Mahal in her loving memory.</p>
                        <p>For more information you can visit to our office.</p>
						<ul class="project-details">
                            <li><i class="fa fa-home"></i> Delight Resort</li>
                            <li><i class="fa fa-globe"></i><a href="#">www.delightresort.com</a></li>
                            <li><i class="fa fa-phone"></i>+91 7999094330</li>
                        </ul>
                        <div class="share-btn">
                            <div class="title">
                                <h3>Share</h3>
                            </div>
                            <a href="#"><i class="fa fa-facebook"></i> </a>
                            <a href="#"><i class="fa fa-twitter"></i> </a>
                            <a href="#"><i class="fa fa-dribbble"></i> </a>
                            <a href="#"><i class="fa fa-github"></i> </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Modal-01  end  -->

        <!-- Modal-02 start  -->
        <div class="modal fade" id="project-02" tabindex="-1" role="dialog">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h2 class="modal-title">Burj al Arab</h2>
                    </div>
                    <div class="modal-body">
                        <img src="assets/images/portfolio/2.jpg" alt="work-1">

                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab perspiciatis et, voluptas esse ex expedita atque. Impedit porro eveniet, culpa rerum in doloremque velit perspiciatis doloribus ratione. Nobis, nisi, quasi.</p>
                        <ul class="project-details">
                            <li><i class="fa fa-user"></i> alex smith</li>
                            <li><i class="fa fa-globe"></i><a href="#">www.example.com</a></li>
                            <li><i class="fa fa-calendar"></i> 12 June 2018</li>
                        </ul>
                        <div class="share-btn">
                            <div class="title">
                                <h3>Share</h3>
                            </div>
                            <a href="#"><i class="fa fa-facebook"></i> </a>
                            <a href="#"><i class="fa fa-twitter"></i> </a>
                            <a href="#"><i class="fa fa-dribbble"></i> </a>
                            <a href="#"><i class="fa fa-github"></i> </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Modal-02 end  -->		
		<!-- Modal-03 start  -->
        <div class="modal fade" id="project-03" tabindex="-1" role="dialog">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h2 class="modal-title">Machu Picchu</h2>
                    </div>
                    <div class="modal-body">
                        <img src="assets/images/portfolio/3.jpg" alt="work-1">

                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab perspiciatis et, voluptas esse ex expedita atque. Impedit porro eveniet, culpa rerum in doloremque velit perspiciatis doloribus ratione. Nobis, nisi, quasi.</p>
                        <ul class="project-details">
                            <li><i class="fa fa-user"></i> alex smith</li>
                            <li><i class="fa fa-globe"></i><a href="#">www.example.com</a></li>
                            <li><i class="fa fa-calendar"></i> 12 June 2018</li>
                        </ul>
                        <div class="share-btn">
                            <div class="title">
                                <h3>Share</h3>
                            </div>
                            <a href="#"><i class="fa fa-facebook"></i> </a>
                            <a href="#"><i class="fa fa-twitter"></i> </a>
                            <a href="#"><i class="fa fa-dribbble"></i> </a>
                            <a href="#"><i class="fa fa-github"></i> </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Modal-03 end  -->
		<!-- Modal-04 start  -->
        <div class="modal fade" id="project-04" tabindex="-1" role="dialog">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h2 class="modal-title">Mount Bachelor</h2>
                    </div>
                    <div class="modal-body">
                        <img src="assets/images/portfolio/4.jpg" alt="work-1">

                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab perspiciatis et, voluptas esse ex expedita atque. Impedit porro eveniet, culpa rerum in doloremque velit perspiciatis doloribus ratione. Nobis, nisi, quasi.</p>
                        <ul class="project-details">
                            <li><i class="fa fa-user"></i> alex smith</li>
                            <li><i class="fa fa-globe"></i><a href="#">www.example.com</a></li>
                            <li><i class="fa fa-calendar"></i> 12 June 2018</li>
                        </ul>
                        <div class="share-btn">
                            <div class="title">
                                <h3>Share</h3>
                            </div>
                            <a href="#"><i class="fa fa-facebook"></i> </a>
                            <a href="#"><i class="fa fa-twitter"></i> </a>
                            <a href="#"><i class="fa fa-dribbble"></i> </a>
                            <a href="#"><i class="fa fa-github"></i> </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Modal-04 end  -->
		<!-- Modal-05 start  -->
        <div class="modal fade" id="project-05" tabindex="-1" role="dialog">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h2 class="modal-title">Amalfi Coast</h2>
                    </div>
                    <div class="modal-body">
                        <img src="assets/images/portfolio/5.jpg" alt="work-1">

                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab perspiciatis et, voluptas esse ex expedita atque. Impedit porro eveniet, culpa rerum in doloremque velit perspiciatis doloribus ratione. Nobis, nisi, quasi.</p>
                        <ul class="project-details">
                            <li><i class="fa fa-user"></i> alex smith</li>
                            <li><i class="fa fa-globe"></i><a href="#">www.example.com</a></li>
                            <li><i class="fa fa-calendar"></i> 12 June 2018</li>
                        </ul>
                        <div class="share-btn">
                            <div class="title">
                                <h3>Share</h3>
                            </div>
                            <a href="#"><i class="fa fa-facebook"></i> </a>
                            <a href="#"><i class="fa fa-twitter"></i> </a>
                            <a href="#"><i class="fa fa-dribbble"></i> </a>
                            <a href="#"><i class="fa fa-github"></i> </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Modal-05 end  -->
		<!-- Modal-06 start  -->
        <div class="modal fade" id="project-06" tabindex="-1" role="dialog">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h2 class="modal-title">Neuschwanstein Castle</h2>
                    </div>
                    <div class="modal-body">
                        <img src="assets/images/portfolio/6.jpg" alt="work-1">

                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab perspiciatis et, voluptas esse ex expedita atque. Impedit porro eveniet, culpa rerum in doloremque velit perspiciatis doloribus ratione. Nobis, nisi, quasi.</p>
                        <ul class="project-details">
                            <li><i class="fa fa-user"></i> alex smith</li>
                            <li><i class="fa fa-globe"></i><a href="#">www.example.com</a></li>
                            <li><i class="fa fa-calendar"></i> 12 June 2018</li>
                        </ul>
                        <div class="share-btn">
                            <div class="title">
                                <h3>Share</h3>
                            </div>
                            <a href="#"><i class="fa fa-facebook"></i> </a>
                            <a href="#"><i class="fa fa-twitter"></i> </a>
                            <a href="#"><i class="fa fa-dribbble"></i> </a>
                            <a href="#"><i class="fa fa-github"></i> </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Modal-06 end  -->
	
    </section>
        <!-- / END Portfolio Section -->
    
	<!--==== reviews-events =====-->
    <section class="reviews-events">
	<div class="container clearfix common-pad">
        <div class="row">
            <div class="col-lg-6 col-md-6">
                <div class="sec-header-two">
                    <h2>Users Review</h2>
                </div>
                    <div class="testimonials-wrapper">
                       <div class="testimonial-carousel owl-carousel">
                <div class="single-testimonial">
                    <p class="text">There are many variations of passages of Lorem Ipsum available but the at the majority have suffered alteration in some form by injected humour or the and randomised the words which don't look even slightly believable. humour or the
                        randomised look even slightly believable.</p>
                    <div class="author">
                        <div class="img">
                            <img src="assets/images/testimonial-author-1.jpg" alt="">
                        </div>
                        <div class="details">
                            <h4 class="name">Maria Thomas</h4>
                            <p class="desg">Loyal Customer</p>
							<ul class="user-star">
                                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="single-testimonial">
                    <p class="text">There are many variations of passages of Lorem Ipsum available but the at the majority have suffered alteration in some form by injected humour or the and randomised the words which don't look even slightly believable. humour or the
                        randomised look even slightly believable.</p>
                    <div class="author">
                        <div class="img">
                            <img src="assets/images/testimonial-author-2.jpg" alt="">
                        </div>
                        <div class="details">
                            <h4 class="name">David Maxwell</h4>
                            <p class="desg">Loyal Customer</p>
							<ul class="user-star">
                                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="single-testimonial">
                    <p class="text">There are many variations of passages of Lorem Ipsum available but the at the majority have suffered alteration in some form by injected humour or the and randomised the words which don't look even slightly believable. humour or the
                        randomised look even slightly believable.</p>
                    <div class="author">
                        <div class="img">
                            <img src="assets/images/testimonial-author-1.jpg" alt="">
                        </div>
                        <div class="details">
                            <h4 class="name">Maria Thomas</h4>
                            <p class="desg">Loyal Customer</p>
							<ul class="user-star">
                                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="single-testimonial">
                    <p class="text">There are many variations of passages of Lorem Ipsum available but the at the majority have suffered alteration in some form by injected humour or the and randomised the words which don't look even slightly believable. humour or the
                        randomised look even slightly believable.</p>
                    <div class="author">
                        <div class="img">
                            <img src="assets/images/testimonial-author-2.jpg" alt="">
                        </div>
                        <div class="details">
                            <h4 class="name">David Maxwell</h4>
                            <p class="desg">Loyal Customer</p>
							<ul class="user-star">
                                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
					   
                        
				    </div>
                </div>
            
            <div class="col-lg-6 col-md-6 event-wrapper">
                <div class="sec-header-two">
                    <h2>Our Events</h2>
                </div>
                <div class="our-event-t-wrapper">
                    <div class="media">
                        <div class="media-left">
                            <div class="date-box">
                                <div class="date-inner">
                                    <div class="date-c-inner">
                                        <p>25<span>June</span></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="media-body">
                            <h2>Host a Family Party</h2>
                            <p>Nemo enim ipsam voluptatem quia voluptas sit aspern atur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem.</p>
                        </div>
                    </div>
                    <div class="media">
                        <div class="media-left">
                            <div class="date-box">
                                <div class="date-inner">
                                    <div class="date-c-inner">
                                        <p>08<span>June</span></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="media-body">
                            <h2>Host a Anna's Wedding Party</h2>
                            <p>Nemo enim ipsam voluptatem quia voluptas sit aspern atur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem.</p>
                        </div>
                    </div>
                    <div class="media media-last">
                        <div class="media-left">
                            <div class="date-box">
                                <div class="date-inner">
                                    <div class="date-c-inner">
                                        <p>08<span>June</span></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="media-body">
                            <h2>Host a John's Birthday Party</h2>
                            <p>Nemo enim ipsam voluptatem quia voluptas sit aspern atur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem.</p>
                        </div>
                    </div>
                </div>
            </div>
			</div>
        </div>
     <!-- / END review-events Section -->	

	
	 <!-- section partners starts
	============================================ -->
    <section class="partners ptb-80">

        <div class="section_title mb-70 text-center">
            <h2>media partners</h2>
            <p>Corem ipsum dolor sit amet consecter adipsicing elit sed usm tempor incididunt ut reitad dolore magna aliqua ut enim minim beniaps quis nostrual exercitationullamco laboris sed.</p>
        </div>
        <!-- End of .section_title -->

        <div class="container">
            <div class="partner_logos owl-carousel owl-theme">
                <div class="item">
                    <img src="assets/images/partners/logo1-1.png" alt="partners logo" class="img-responsive">
                </div>
                <!-- End of .item -->

                <div class="item">
                    <img src="assets/images/partners/logo2-1.png" alt="partners logo" class="img-responsive">
                </div>
                <!-- End of .item -->

                <div class="item">
                    <img src="assets/images/partners/logo3-1.png" alt="partners logo" class="img-responsive">
                </div>
                <!-- End of .item -->

                <div class="item">
                    <img src="assets/images/partners/logo4-1.png" alt="partners logo" class="img-responsive">
                </div>
                <!-- End of .item -->

                <div class="item">
                    <img src="assets/images/partners/logo5-1.png" alt="partners logo" class="img-responsive">
                </div>
                <!-- End of .item -->

                <div class="item">
                    <img src="assets/images/partners/logo6-1.png" alt="partners logo" class="img-responsive">
                </div>
                <!-- End of .item -->

                <div class="item">
                    <img src="assets/images/partners/logo1-1.png" alt="partners logo" class="img-responsive">
                </div>
                <!-- End of .item -->

                <div class="item">
                    <img src="assets/images/partners/logo2-1.png" alt="partners logo" class="img-responsive">
                </div>
                <!-- End of .item -->

                <div class="item">
                    <img src="assets/images/partners/logo3-1.png" alt="partners logo" class="img-responsive">
                </div>
                <!-- End of .item -->

                <div class="item">
                    <img src="assets/images/partners/logo4-1.png" alt="partners logo" class="img-responsive">
                </div>
                <!-- End of .item -->

                <!-- to add more items copy and paste one of
				the items underneath the last item -->

            </div>
            <!-- End of .partner_logos -->
        </div>
        <!-- End of .container -->
    </section>
    <!-- End of .partners -->
	
	 <!-- Get in Touch & Drop a Message style-->
	<section id="contact" class="contact-us">
      <div class="resot-activities clearfix">
        <div class="container clearfix common-pad">
          <div class="row">
            <div class="col-lg-6 col-md-7 get-touch-two">
              <div class="get-touch-wrapper row m0">
                <div class="touch-img">
                  <img src="assets/images/MyPhoto.jpg" alt="" class="img-responsive">
                </div>
                <div class="touch-txt">
                  <div class="sec-header-touch contact-head">
                    <h2>Get in Touch
                    </h2>
                  </div>
                  <h3>Deepam Bahre
                    <span>(Software Engineer)
                    </span>
                  </h3>
                  <p>Phone : +91 7999094330
                  </p>
                  <p>Email : deepambahre@gmail.com
                  </p>
                </div>
				 <!-- insert map -->
    <!-- using a responsive iframe -->
    <div class="responsive-map-container">
      <!-- place the iframe code between here... -->
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d972.173896021597!2d77.66881322609318!3d12.927276619348296!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bae139d95295fa1%3A0x51aabf492c544701!2sRaghavendra+luxury+PG!5e0!3m2!1sen!2sin!4v1531630554536" width="600" height="450" frameborder="0" style="border:0">
      </iframe>
      <!-- ... and here -->
    </div>
    <!-- /insert map -->
				
				
              </div>
            </div>
            <div class="col-lg-6 col-md-5 home-two-msgwrapper">
              <div class="sec-header-touch contact-head2">
                <h2>Drop a Message
                </h2>
              </div>
              <div class="drop-wrapper input_form">
                <form id="contactForm" action="sendemail.php" method="post">
                  <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                      <input id="name" type="text" name="name" placeholder="Your name" class="form-control">
                    </div>
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                      <input id="email" type="email" name="email" placeholder="Your Email" class="form-control">
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                      <input id="subject" type="text" name="subject" placeholder="Subject" class="form-control">
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                      <textarea id="message" rows="6" name="message" placeholder="Message" class="form-control">                      </textarea>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                      <button type="submit" class="res-btn">Submit Now 
                        <i class="fa fa-arrow-right">
                        </i>
                      </button>
                    </div>
                  </div>
                </form>
                <!-- <div id="success">
<p>Your message sent successfully.</p>
</div>
<div id="error">
<p>Something is wrong. Message cant be sent!</p>
</div> -->
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

<!-- /insert map -->
    <!--Start Newsletter -->
    <!-- <div class="newsletter-section">
<div class="container">
<div class="row">
<div class="col-md-12 col-sm-12">
<div class="newsletter">
<div class="newsletter-title">
<h2><span>Our Newsletters</span></h2>
<label>Subscribe to our newsletters now and stay up-to-date with new collections, the latest lookbooks and exclusive offers.</label>		
</div>
<form class="form subscribe" novalidate="novalidate" action="http://magento2.roadthemes.com/aboss/english1/newsletter/subscriber/new/" method="post" id="newsletter-validate-detail">
<div class="control">
<input name="email" type="email" id="newsletter" placeholder="Enter your email address" data-validate="{required:true, 'validate-email':true}">
<button class="action subscribe primary" title="Subscribe" type="submit">
<span>Subscribe</span>
</button>			
</div>
</form>
</div>
</div>
</div>
</div>
</div>-->
    <!--///End Newsletter-->
	
	<!--- Footer  -->	
	    
		<footer id="footer">
            <div class="footer_top_part">
                <div class="container">
                    <div class="row clearfix">
                        <div class="col-lg-3 col-md-3 col-sm-3 m_xs_bottom_30">
                            <h3 class="color_light_2 m_bottom_20">About</h3>
                            <p class="m_bottom_25">Ut pharetra augue nec augue. Nam elit agna, endrerit sit amet, tincidunt ac, viverra sed, nulla. Donec porta diam eu massa. Quisque diam lorem, interdum vitae, dapibus ac, scelerisque.</p>
                            <!--social icons-->
                            <ul class="clearfix horizontal_list social_icons">
                                <li class="facebook m_bottom_5 relative">
                                    <span class="tooltip tr_all_hover r_corners color_dark f_size_small">Facebook</span>
                                    <a href="#" class="r_corners t_align_c tr_delay_hover f_size_ex_large">
											<i class="fa fa-facebook"></i>
										</a>
                                </li>
                                <li class="twitter m_left_5 m_bottom_5 relative">
                                    <span class="tooltip tr_all_hover r_corners color_dark f_size_small">Twitter</span>
                                    <a href="#" class="r_corners f_size_ex_large t_align_c tr_delay_hover">
											<i class="fa fa-twitter"></i>
										</a>
                                </li>
                                <li class="google_plus m_left_5 m_bottom_5 relative">
                                    <span class="tooltip tr_all_hover r_corners color_dark f_size_small">Google Plus</span>
                                    <a href="#" class="r_corners f_size_ex_large t_align_c tr_delay_hover">
											<i class="fa fa-google-plus"></i>
										</a>
                                </li>
                                <li class="rss m_left_5 m_bottom_5 relative">
                                    <span class="tooltip tr_all_hover r_corners color_dark f_size_small">Rss</span>
                                    <a href="#" class="r_corners f_size_ex_large t_align_c tr_delay_hover">
											<i class="fa fa-rss"></i>
										</a>
                                </li>
                                <li class="pinterest m_left_5 m_bottom_5 relative">
                                    <span class="tooltip tr_all_hover r_corners color_dark f_size_small">Pinterest</span>
                                    <a href="#" class="r_corners f_size_ex_large t_align_c tr_delay_hover">
											<i class="fa fa-pinterest"></i>
										</a>
                                </li>
                                <li class="instagram m_left_5 m_bottom_5 relative">
                                    <span class="tooltip tr_all_hover r_corners color_dark f_size_small">Instagram</span>
                                    <a href="#" class="r_corners f_size_ex_large t_align_c tr_delay_hover">
											<i class="fa fa-instagram"></i>
										</a>
                                </li>
                                <li class="linkedin m_bottom_5 m_sm_left_5 relative">
                                    <span class="tooltip tr_all_hover r_corners color_dark f_size_small">LinkedIn</span>
                                    <a href="#" class="r_corners f_size_ex_large t_align_c tr_delay_hover">
											<i class="fa fa-linkedin"></i>
										</a>
                                </li>
                                <li class="vimeo m_left_5 m_bottom_5 relative">
                                    <span class="tooltip tr_all_hover r_corners color_dark f_size_small">Vimeo</span>
                                    <a href="#" class="r_corners f_size_ex_large t_align_c tr_delay_hover">
											<i class="fa fa-vimeo-square"></i>
										</a>
                                </li>
                                <li class="youtube m_left_5 m_bottom_5 relative">
                                    <span class="tooltip tr_all_hover r_corners color_dark f_size_small">Youtube</span>
                                    <a href="#" class="r_corners f_size_ex_large t_align_c tr_delay_hover">
											<i class="fa fa-youtube-play"></i>
										</a>
                                </li>
                                <li class="flickr m_left_5 m_bottom_5 relative">
                                    <span class="tooltip tr_all_hover r_corners color_dark f_size_small">Flickr</span>
                                    <a href="#" class="r_corners f_size_ex_large t_align_c tr_delay_hover">
											<i class="fa fa-flickr"></i>
										</a>
                                </li>
                                <li class="envelope m_left_5 m_bottom_5 relative">
                                    <span class="tooltip tr_all_hover r_corners color_dark f_size_small">Contact Us</span>
                                    <a href="#" class="r_corners f_size_ex_large t_align_c tr_delay_hover">
											<i class="fa fa-envelope-o"></i>
										</a>
                                </li>
                            </ul>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-3 m_xs_bottom_30">
                            <h3 class="color_light_2 m_bottom_20">The Service</h3>
                            <ul class="vertical_list">
                                <li><a class="color_light tr_delay_hover" href="#">My account<i class="fa fa-angle-right"></i></a></li>
                                <li><a class="color_light tr_delay_hover" href="#">Order history<i class="fa fa-angle-right"></i></a></li>
                                <li><a class="color_light tr_delay_hover" href="#">Wishlist<i class="fa fa-angle-right"></i></a></li>
                                <li><a class="color_light tr_delay_hover" href="#">Vendor contact<i class="fa fa-angle-right"></i></a></li>
                                <li><a class="color_light tr_delay_hover" href="#">Front page<i class="fa fa-angle-right"></i></a></li>
                                <li><a class="color_light tr_delay_hover" href="#">Virtuemart categories<i class="fa fa-angle-right"></i></a></li>
                            </ul>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-3 m_xs_bottom_30">
                            <h3 class="color_light_2 m_bottom_20">Information</h3>
                            <ul class="vertical_list">
                                <li><a class="color_light tr_delay_hover" href="#">About us<i class="fa fa-angle-right"></i></a></li>
                                <li><a class="color_light tr_delay_hover" href="#">New collection<i class="fa fa-angle-right"></i></a></li>
                                <li><a class="color_light tr_delay_hover" href="#">Best sellers<i class="fa fa-angle-right"></i></a></li>
                                <li><a class="color_light tr_delay_hover" href="#">Manufacturers<i class="fa fa-angle-right"></i></a></li>
                                <li><a class="color_light tr_delay_hover" href="#">Privacy policy<i class="fa fa-angle-right"></i></a></li>
                                <li><a class="color_light tr_delay_hover" href="#">Terms &amp; condition<i class="fa fa-angle-right"></i></a></li>
                            </ul>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-3">
                            <h3 class="color_light_2 m_bottom_20">Newsletter</h3>
                            <p class="f_size_medium m_bottom_15">Sign up to our newsletter and get exclusive deals you wont find anywhere else straight to your inbox!</p>
                            <form id="newsletter">
                                <input type="email" placeholder="Your email address" class="m_bottom_20 news r_corners f_size_medium full_width" name="newsletter-email">
                                <button type="submit" class="button_type_8 r_corners bg_scheme_color color_light tr_all_hover">Subscribe</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!--copyright part-->
            <div class="footer_bottom_part">
                <div class="container clearfix t_mxs_align_c">
                    <p class="f_left f_mxs_none m_mxs_bottom_10">© 2018 <span class="color_light">Delight Resort</span>. All Rights Reserved.</p>
                    <ul class="f_right horizontal_list clearfix f_mxs_none d_mxs_inline_b">
                        <li><img src="assets/images/payment_img_1.png" alt=""></li>
                        <li class="m_left_5"><img src="assets/images/payment_img_2.png" alt=""></li>
                        <li class="m_left_5"><img src="assets/images/payment_img_3.png" alt=""></li>
                        <li class="m_left_5"><img src="assets/images/payment_img_4.png" alt=""></li>
                        <li class="m_left_5"><img src="assets/images/payment_img_5.png" alt=""></li>
                    </ul>
                </div>
            </div>
        </footer>
	
	<!---/ End Footer  -->	

    </main>
  

    <a href="#" class="scrollup"></a>
    <script type='text/javascript'>
        /* <![CDATA[ */
        var hotel_booking_i18n = {

        };
      
        /* ]]> */
    </script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<script type="text/javascript">
$(document).ready(function(){
    $('#country').on('change',function(){
        var countryID = $(this).val();
        if(countryID){
            $.ajax({
                type:'POST',
                url:'ajaxFile.php',
                data:'country_id='+countryID,
                success:function(html){
                    $('#state').html(html);
                    $('#city').html('<option value="">Select state first</option>'); 
                }
            }); 
        }else{
            $('#state').html('<option value="">Select country first</option>');
            $('#city').html('<option value="">Select state first</option>'); 
        }
    });
    
    $('#state').on('change',function(){
        var stateID = $(this).val();
        if(stateID){
            $.ajax({
                type:'POST',
                url:'ajaxFile.php',
                data:'state_id='+stateID,
                success:function(html){
                    $('#city').html(html);
                }
            }); 
        }else{
            $('#city').html('<option value="">Select state first</option>'); 
        }
    });
});
</script>
	    <!-- Include all compiled plugins (below), or include individual files as needed -->
   <!--  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>	 -->
	<script src="assets/js/isotope.min.js"></script>
	 <script src="assets/js/plugins.js"></script>
	 <script type="text/javascript" src="assets/js/bundle.js"></script>
	<script src="assets/js/jquery.grozav.plugins.min.js" type="text/javascript"></script>
	<script type="text/javascript" src="assets/js/date-time-picker.min.js"></script>
    <script src="assets/js/jquery.grozav.bootslider.min.js" type="text/javascript"></script>
    <script>
        $(document).ready(function() {
            var slider = new bootslider('#bootslider', {
                animationIn: "fadeInUp",
                animationOut: "flipOutX",
                timeout: 5000,
                autoplay: true,
                preload: true,
                pauseOnHover: false,
                thumbnails: false,
                pagination: false,
                mousewheel: false,
                keyboard: true,
                touchscreen: true,
                layout: 'default',
                canvas: {
                    width: 1440,
                    height: 720
                }
            });
            slider.init();

            var slider2 = new bootslider('#bootsliderContent', {
                animationIn: "fadeInLeft",
                animationOut: "fadeOutRight",
                timeout: 5000,
                autoplay: false,
                preload: false,
                pauseOnHover: false,
                thumbnails: false,
                pagination: false,
                mousewheel: false,
                keyboard: true,
                touchscreen: true,
                layout: 'content'

            });
            slider2.init();


            $('a[data-animation-test]').click(function() {
                var anim = $(this).attr('data-animation-test');
                $(this).removeClass(anim).addClass(anim + ' animated').one('webkitAnimationEnd oAnimationEnd', function() {
                    $(this).removeClass(anim);
                });
            });
        });
    </script>
 <script type='text/javascript' src='assets/js/jquery.scrollTo.min.js'></script>
    <script type='text/javascript' src='assets/js/theme.js'></script>
	<script type="text/javascript" src="assets/js/jquery.datepicker.min.js"></script>
	<script type="text/javascript" src="assets/js/script.js" charset="UTF-8"></script>
	 


</body>

</html>