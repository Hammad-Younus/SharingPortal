<!doctype html>
<html>
<head>
	<!-- Basic Page Needs -->
        <meta charset="utf-8">
        <title>Demo</title>
        <meta name="description" content="A Template by Gozha.net">
        <meta name="keywords" content="HTML, CSS, JavaScript">
        <meta name="author" content="Gozha.net">
    
    <!-- Mobile Specific Metas-->
    	<meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="telephone=no" name="format-detection">
    
    <!-- Fonts -->
        <!-- Font awesome - icon font -->
        <link href="http://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
        <!-- Roboto -->
        <link href='http://fonts.googleapis.com/css?family=Roboto:400,100,700' rel='stylesheet' type='text/css'>
        <!-- Open Sans -->
        <link href='http://fonts.googleapis.com/css?family=Open+Sans:800italic' rel='stylesheet' type='text/css'>
    
    <!-- Stylesheets -->

        <!-- Mobile menu -->
        <link href="<?php echo base_url();?>assets/css/gozha-nav.css" rel="stylesheet" />
        <!-- Select -->
        <link href="<?php echo base_url();?>assets/css/external/jquery.selectbox.css" rel="stylesheet" />

        <!-- REVOLUTION BANNER CSS SETTINGS -->
        <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/rs-plugin/css/settings.css" media="screen" />
    
        <!-- Custom -->
        <link href="<?php echo base_url();?>assets/css/style.css" rel="stylesheet" />


        <!-- Modernizr --> 
        <script src="<?php echo base_url();?>assets/js/external/modernizr.custom.js"></script>
    
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries --> 
    <!--[if lt IE 9]> 
    	<script src="http://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7/html5shiv.js"></script> 
		<script src="http://cdnjs.cloudflare.com/ajax/libs/respond.js/1.3.0/respond.js"></script>		
    <![endif]-->
</head>

<body>
    <div class="wrapper">
        <!-- Header section -->
        <?php $this->load->view('includes/header');?>
        <!-- Slider -->
          <div class="col-sm-12">
            <div class="row">
              <div class="col-sm-8 col-md-9">
                    <aside style="margin-left: -21px;" class="col-sm-4">
                        <div  style="margin-top: -17px;" class="sitebar first-banner--left">
                            <div class="banner-wrap first-banner--left">
                                <img  alt='banner' src="http://placehold.it/2000x3100">
                            </div>    
                        </div>
                    </aside>
                  <div style="margin-left: 33%;" class="bannercontainer">
                    <div class="banner"> 
                        <ul>

                            <li data-transition="fade" data-slotamount="7" class="slide" data-slide=''>
                                <img alt='' src="<?php echo base_url();?>assets/images/banners/banner.jpg">

                            </li>

                            <li data-transition="fade" data-slotamount="7" class="slide" data-slide=''>      
                                <img alt='' src="<?php echo base_url();?>assets/images/banners/img1.jpg">
                            </li>

                             <li data-transition="fade" data-slotamount="7" class="slide" data-slide=''>
                                <img alt='' src="<?php echo base_url();?>assets/images/banners/img2.jpg">
                            </li>

                        </ul>
                    </div>
                </div>
                    </div>

                </div>
            </div>
        
        
        <!-- Main content -->
        <section style="margin-top: 50%;" class="container">
            
              <div class="movie-best">
                 <div style="width: 99%;" class="col-sm-10 movie-best__rating">Recently Updated</div>
            </div>
            <div style="margin-left: -10px; " class="col-sm-12">
            
            <div class="row">
            <div class="col-md-9">  
                <div>
                <a style="float: right; margin: 13px 26px;" href="<?php echo site_url('movies');?>">View More</a>
                <h3 style="background-color:rgb(93, 180, 187)"; id='target' class="page-heading heading--outcontainer">Movies</h3>
                </div>
                <div style="margin-top: -18px;">
              <div class="col-sm-3">
                        <div class="gallery-item">
                            <a href='http://placehold.it/2150x1200' class="gallery-item__image gallery-item--photo">
                                <img alt='' src="<?php echo base_url();?>assets/images/movie/movie-sample1.jpg">
                            </a>
                            <a href='http://placehold.it/424x424"' class="gallery-item__descript gallery-item--photo-link">
                                <span class="gallery-item__icon">5.0</span>
                                <p class="gallery-item__name">Camden Town Odeon</p>
                                <p class="gallery-item__name">Adventure | Drama | Fantasy </p>
                                <p class="gallery-item__name">38 views</p>
                                <p class="gallery-item__name">42 Downloads</p>
                            </a>
                        </div>
                </div>

                <div class="col-sm-3">
                        <div class="gallery-item">
                            <a href='http://placehold.it/2150x1200' class="gallery-item__image gallery-item--photo">
                                <img alt='' src="<?php echo base_url();?>assets/images/movie/movie-sample1.jpg">
                            </a>
                            <a href='"' class="gallery-item__descript gallery-item--photo-link">
                                <span class="gallery-item__icon">5.0</span>
                                <p class="gallery-item__name">Camden Town Odeon</p>
                                <p class="gallery-item__name">Adventure | Drama | Fantasy </p>
                                <p class="gallery-item__name">38 views</p>
                                <p class="gallery-item__name">42 Downloads</p>
                            </a>
                        </div>
                </div>

                <div class="col-sm-3">
                       <div class="gallery-item">
                            <a href='http://placehold.it/2150x1200' class="gallery-item__image gallery-item--photo">
                                <img alt='' src="<?php echo base_url();?>assets/images/movie/movie-sample1.jpg">
                            </a>
                            <a href='http://placehold.it/424x424"' class="gallery-item__descript gallery-item--photo-link">
                                <span class="gallery-item__icon">5.0</span>
                                <p class="gallery-item__name">Camden Town Odeon</p>
                                <p class="gallery-item__name">Adventure | Drama | Fantasy </p>
                                <p class="gallery-item__name">38 views</p>
                                <p class="gallery-item__name">42 Downloads</p>
                            </a>
                        </div>
                </div>

                              <div class="col-sm-3">
                        <div class="gallery-item">
                            <a href='http://placehold.it/2150x1200' class="gallery-item__image gallery-item--photo">
                                <img alt='' src="<?php echo base_url();?>assets/images/movie/movie-sample1.jpg">
                            </a>
                            <a href='http://placehold.it/424x424"' class="gallery-item__descript gallery-item--photo-link">
                                <span class="gallery-item__icon">5.0</span>
                                <p class="gallery-item__name">Camden Town Odeon</p>
                                <p class="gallery-item__name">Adventure | Drama | Fantasy </p>
                                <p class="gallery-item__name">38 views</p>
                                <p class="gallery-item__name">42 Downloads</p>
                            </a>
                        </div>
                </div>
            </div>
                </div>
                <div class="col-sm-3">
                    <h3 style="margin-right: 0px;" id='target' class="adv page-heading heading--outcontainer">Advertisment</h3>
                    <div class="sitebar first-banner--left">
                            <div class="banner-wrap first-banner--left">
                                <img alt='banner' src="http://placehold.it/500x500">
                            </div>
                    </div>
                </div>
              <div class="col-md-9">  
              <div class="col-sm-3">
                        <div class="gallery-item">
                            <a href='http://placehold.it/2150x1200' class="gallery-item__image gallery-item--photo">
                                <img alt='' src="<?php echo base_url();?>assets/images/movie/movie-sample1.jpg">
                            </a>
                            <a href='http://placehold.it/424x424"' class="gallery-item__descript gallery-item--photo-link">
                                <span class="gallery-item__icon">5.0</span>
                                <p class="gallery-item__name">Camden Town Odeon</p>
                                <p class="gallery-item__name">Adventure | Drama | Fantasy </p>
                                <p class="gallery-item__name">38 views</p>
                                <p class="gallery-item__name">42 Downloads</p>
                            </a>
                        </div>
                </div>

                <div class="col-sm-3">
                        <div class="gallery-item">
                            <a href='http://placehold.it/2150x1200' class="gallery-item__image gallery-item--photo">
                                <img alt='' src="<?php echo base_url();?>assets/images/movie/movie-sample1.jpg">
                            </a>
                            <a href='http://placehold.it/424x424"' class="gallery-item__descript gallery-item--photo-link">
                                <span class="gallery-item__icon">5.0</span>
                                <p class="gallery-item__name">Camden Town Odeon</p>
                                <p class="gallery-item__name">Adventure | Drama | Fantasy </p>
                                <p class="gallery-item__name">38 views</p>
                                <p class="gallery-item__name">42 Downloads</p>
                            </a>
                        </div>
                </div>

                <div class="col-sm-3">
                       <div class="gallery-item">
                            <a href='http://placehold.it/2150x1200' class="gallery-item__image gallery-item--photo">
                                <img alt='' src="<?php echo base_url();?>assets/images/movie/movie-sample1.jpg">
                            </a>
                            <a href='http://placehold.it/424x424"' class="gallery-item__descript gallery-item--photo-link">
                                <span class="gallery-item__icon">5.0</span>
                                <p class="gallery-item__name">Camden Town Odeon</p>
                                <p class="gallery-item__name">Adventure | Drama | Fantasy </p>
                                <p class="gallery-item__name">38 views</p>
                                <p class="gallery-item__name">42 Downloads</p>
                            </a>
                        </div>
                </div>

                              <div class="col-sm-3">
                        <div class="gallery-item">
                            <a href='http://placehold.it/2150x1200' class="gallery-item__image gallery-item--photo">
                                <img alt='' src="<?php echo base_url();?>assets/images/movie/movie-sample1.jpg">
                            </a>
                            <a href='http://placehold.it/424x424"' class="gallery-item__descript gallery-item--photo-link">
                                <span class="gallery-item__icon">5.0</span>
                                <p class="gallery-item__name">Camden Town Odeon</p>
                                <p class="gallery-item__name">Adventure | Drama | Fantasy </p>
                                <p class="gallery-item__name">38 views</p>
                                <p class="gallery-item__name">42 Downloads</p>
                            </a>
                        </div>
                </div>
                </div>
                <div class="col-sm-3">
                    <div class="sitebar first-banner--left">
                            <div class="banner-wrap first-banner--left">
                                <img alt='banner' src="http://placehold.it/500x500">
                            </div>
                    </div>
                </div>
                </div>
            </div>
            <div style="margin-left: -10px;" class="col-sm-12">
                            <div class="row">
            <div class="col-md-9">  
                <div>
                <a style="float: right; margin: 13px 26px;" href="<?php echo site_url('games');?>">View More</a>    
                <h3 style="background-color:rgb(82, 110, 109);" id='target' class="page-heading heading--outcontainer">Games</h3>
                </div>
                <div style="margin-top: -18px;">
              <div class="col-sm-3">
                        <div class="gallery-item">
                            <a href='http://placehold.it/2150x1200' class="gallery-item__image gallery-item--photo">
                                <img alt='' src="<?php echo base_url();?>assets/images/movie/img1.jpg">
                            </a>
                            <a href='http://placehold.it/424x424"' class="gallery-item__descript gallery-item--photo-link">
                                <span class="gallery-item__icon">5.0</span>
                                <p class="gallery-item__name">Camden Town Odeon</p>
                                <p class="gallery-item__name">Adventure | Drama | Fantasy </p>
                                <p class="gallery-item__name">38 views</p>
                                <p class="gallery-item__name">42 Downloads</p>
                            </a>
                        </div>
                </div>

                <div class="col-sm-3">
                        <div class="gallery-item">
                            <a href='http://placehold.it/2150x1200' class="gallery-item__image gallery-item--photo">
                                <img alt='' src="<?php echo base_url();?>assets/images/movie/img2.jpg">
                            </a>
                            <a href='http://placehold.it/424x424"' class="gallery-item__descript gallery-item--photo-link">
                                <span class="gallery-item__icon">5.0</span>
                                <p class="gallery-item__name">Camden Town Odeon</p>
                                <p class="gallery-item__name">Adventure | Drama | Fantasy </p>
                                <p class="gallery-item__name">38 views</p>
                                <p class="gallery-item__name">42 Downloads</p>
                            </a>
                        </div>
                </div>

                <div class="col-sm-3">
                       <div class="gallery-item">
                            <a href='http://placehold.it/2150x1200' class="gallery-item__image gallery-item--photo">
                                <img alt='' src="<?php echo base_url();?>assets/images/movie/img3.jpg">
                            </a>
                            <a href='http://placehold.it/424x424"' class="gallery-item__descript gallery-item--photo-link">
                                <span class="gallery-item__icon">5.0</span>
                                <p class="gallery-item__name">Camden Town Odeon</p>
                                <p class="gallery-item__name">Adventure | Drama | Fantasy </p>
                                <p class="gallery-item__name">38 views</p>
                                <p class="gallery-item__name">42 Downloads</p>
                            </a>
                        </div>
                </div>

                              <div class="col-sm-3">
                        <div class="gallery-item">
                            <a href='http://placehold.it/2150x1200' class="gallery-item__image gallery-item--photo">
                                <img alt='' src="<?php echo base_url();?>assets/images/movie/img4.jpg">
                            </a>
                            <a href='http://placehold.it/424x424"' class="gallery-item__descript gallery-item--photo-link">
                                <span class="gallery-item__icon">5.0</span>
                                <p class="gallery-item__name">Camden Town Odeon</p>
                                <p class="gallery-item__name">Adventure | Drama | Fantasy </p>
                                <p class="gallery-item__name">38 views</p>
                                <p class="gallery-item__name">42 Downloads</p>
                            </a>
                        </div>
                </div>
            </div>
                </div>
                <div class="col-sm-3">
                    <h3 style="margin-right: 0px;" id='target' class="adv page-heading heading--outcontainer">Advertisment</h3>
                    <div class="sitebar first-banner--left">
                            <div class="banner-wrap first-banner--left">
                                <img alt='banner' src="http://placehold.it/500x500">
                            </div>
                    </div>
                </div>
              <div class="col-md-9">  
              <div class="col-sm-3">
                        <div class="gallery-item">
                            <a href='http://placehold.it/2150x1200' class="gallery-item__image gallery-item--photo">
                                <img alt='' src="<?php echo base_url();?>assets/images/movie/img9.jpg">
                            </a>
                            <a href='http://placehold.it/424x424"' class="gallery-item__descript gallery-item--photo-link">
                                <span class="gallery-item__icon">5.0</span>
                                <p class="gallery-item__name">Camden Town Odeon</p>
                                <p class="gallery-item__name">Adventure | Drama | Fantasy </p>
                                <p class="gallery-item__name">38 views</p>
                                <p class="gallery-item__name">42 Downloads</p>
                            </a>
                        </div>
                </div>

                <div class="col-sm-3">
                        <div class="gallery-item">
                            <a href='http://placehold.it/2150x1200' class="gallery-item__image gallery-item--photo">
                                <img alt='' src="<?php echo base_url();?>assets/images/movie/img8.jpg">
                            </a>
                            <a href='http://placehold.it/424x424"' class="gallery-item__descript gallery-item--photo-link">
                                <span class="gallery-item__icon">5.0</span>
                                <p class="gallery-item__name">Camden Town Odeon</p>
                                <p class="gallery-item__name">Adventure | Drama | Fantasy </p>
                                <p class="gallery-item__name">38 views</p>
                                <p class="gallery-item__name">42 Downloads</p>
                            </a>
                        </div>
                </div>

                <div class="col-sm-3">
                       <div class="gallery-item">
                            <a href='http://placehold.it/2150x1200' class="gallery-item__image gallery-item--photo">
                                <img alt='' src="<?php echo base_url();?>assets/images/movie/img7.jpg">
                            </a>
                            <a href='http://placehold.it/424x424"' class="gallery-item__descript gallery-item--photo-link">
                                <span class="gallery-item__icon">5.0</span>
                                <p class="gallery-item__name">Camden Town Odeon</p>
                                <p class="gallery-item__name">Adventure | Drama | Fantasy </p>
                                <p class="gallery-item__name">38 views</p>
                                <p class="gallery-item__name">42 Downloads</p>
                            </a>
                        </div>
                </div>

                              <div class="col-sm-3">
                        <div class="gallery-item">
                            <a href='http://placehold.it/2150x1200' class="gallery-item__image gallery-item--photo">
                                <img alt='' src="<?php echo base_url();?>assets/images/movie/img6.jpg">
                            </a>
                            <a href='http://placehold.it/424x424"' class="gallery-item__descript gallery-item--photo-link">
                                <span class="gallery-item__icon">5.0</span>
                                <p class="gallery-item__name">Camden Town Odeon</p>
                                <p class="gallery-item__name">Adventure | Drama | Fantasy </p>
                                <p class="gallery-item__name">38 views</p>
                                <p class="gallery-item__name">42 Downloads</p>
                            </a>
                        </div>
                </div>
                </div>
                <div class="col-sm-3">
                    <div class="sitebar first-banner--left">
                            <div class="banner-wrap first-banner--left">
                                <img alt='banner' src="http://placehold.it/500x500">
                            </div>
                    </div>
                </div>
                </div>
            </div>

        </section>
        
        <div class="clearfix"></div>

        <?php $this->load->view('includes/footer');?>
    </div>

    <!-- open/close -->
        <div class="overlay overlay-hugeinc">
            
            <section class="container">

                <div class="col-sm-4 col-sm-offset-4">
                    <button type="button" class="overlay-close">Close</button>
                    <form id="login-form" class="login" method='get' novalidate=''>
                        <p class="login__title">sign in <br><span class="login-edition">welcome to A.Movie</span></p>

                        <div class="social social--colored">
                                <a href='#' class="social__variant fa fa-facebook"></a>
                                <a href='#' class="social__variant fa fa-twitter"></a>
                                <a href='#' class="social__variant fa fa-tumblr"></a>
                        </div>

                        <p class="login__tracker">or</p>
                        
                        <div class="field-wrap">
                        <input type='email' placeholder='Email' name='user-email' class="login__input">
                        <input type='password' placeholder='Password' name='user-password' class="login__input">

                        <input type='checkbox' id='#informed' class='login__check styled'>
                        <label for='#informed' class='login__check-info'>remember me</label>
                         </div>
                        
                        <div class="login__control">
                            <button type='submit' class="btn btn-md btn--warning btn--wider">sign in</button>
                            <a href="#" class="login__tracker form__tracker">Forgot password?</a>
                        </div>
                    </form>
                </div>

            </section>
        </div>

	<!-- JavaScript-->
        <!-- jQuery 1.9.1--> 
        <script src="<?php echo base_url();?>assets/http://ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="<?php echo base_url();?>assets/js/external/jquery-1.10.1.min.js"><\/script>')</script>
        <!-- Migrate --> 
        <script src="<?php echo base_url();?>assets/js/external/jquery-migrate-1.2.1.min.js"></script>
        <!-- Bootstrap 3--> 
        <script src="<?php echo base_url();?>assets/http://netdna.bootstrapcdn.com/bootstrap/3.0.2/js/bootstrap.min.js"></script>

        <!-- jQuery REVOLUTION Slider -->
        <script type="text/javascript" src="<?php echo base_url();?>assets/rs-plugin/js/jquery.themepunch.plugins.min.js"></script>
        <script type="text/javascript" src="<?php echo base_url();?>assets/rs-plugin/js/jquery.themepunch.revolution.min.js"></script>

        <!-- Mobile menu -->
        <script src="<?php echo base_url();?>assets/js/jquery.mobile.menu.js"></script>
         <!-- Select -->
        <script src="<?php echo base_url();?>assets/js/external/jquery.selectbox-0.2.min.js"></script>
        <!-- Stars rate -->
        <script src="<?php echo base_url();?>assets/js/external/jquery.raty.js"></script>
        
        <!-- Form element -->
        <script src="<?php echo base_url();?>assets/js/external/form-element.js"></script>
        <!-- Form validation -->
        <script src="<?php echo base_url();?>assets/js/form.js"></script>

        <!-- Twitter feed -->
        <script src="<?php echo base_url();?>assets/js/external/twitterfeed.js"></script>

        <!-- Custom -->
        <script src="<?php echo base_url();?>assets/js/custom.js"></script>
		
	      <script type="text/javascript">
              $(document).ready(function() {
                init_Home();
              });
		    </script>


</script>
</body>
</html>
