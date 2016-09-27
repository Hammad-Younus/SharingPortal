<!doctype html>
<html>
<head>
	<!-- Basic Page Needs -->
        <meta charset="utf-8">
        <title>Games</title>
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
        <link href='http://fonts.googleapis.com/css?family=Roboto:400,700' rel='stylesheet' type='text/css'>
    
    <!-- Stylesheets --> 

        <!-- Mobile menu -->
        <link href="<?php echo base_url();?>assets/css/gozha-nav.css" rel="stylesheet" />
        <!-- Select -->
        <link href="<?php echo base_url();?>assets/css/external/jquery.selectbox.css" rel="stylesheet" />
        <!-- Magnific-popup -->
        <link href="<?php echo base_url();?>assets/css/external/magnific-popup.css" rel="stylesheet" />
    
        <!-- Custom -->
        <link href="<?php echo base_url();?>assets/css/style.css?v=1" rel="stylesheet" />

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
    <?php $this->load->view('includes/header'); ?>
        
        <!-- Search bar -->
        <div class="search-wrapper">
            <div class="container container--add">
                <form id='search-form' method='get' class="search">
                    <input type="text" class="search__field" placeholder="Search Games">
                    <select name="sorting_item" id="search-sort" class="search__sort" tabindex="0">
                        <option value="">All Categories</option>                     
                        <option value="351">Action</option>                     
                        <option value="352">Adventure</option>                      
                        <option value="354">Billiards</option>                      
                        <option value="214">Counter Strike</option>                     
                        <option value="355">Fighting</option>                       
                        <option value="356">Flight</option>                     
                        <option value="213">Game Tools</option>                     
                        <option value="358">Horror</option>                     
                        <option value="357">Kids</option>                       
                        <option value="359">Racing</option>                     
                        <option value="360">Role Playing</option>                       
                        <option value="372">Shooter</option>                        
                        <option value="409">Simulation</option>                     
                        <option value="376">Sports</option>                     
                        <option value="389">Strategy</option>
                    </select>
                    <button type='submit' class="btn btn-md btn--danger search__button">Search Games</button>
                </form>
            </div>
        </div>
        
        <!-- Main content -->
        <section class="container">
        <div style="margin-left: 21px;" class="columns large-12">
            <p class="breadcrumbs">
                <span>
                    <i class="fa fa-home"></i>
                </span>
                <a href="#">Home</a>
                
                <span>
                    <i class="fa fa-angle-right"></i>
                </span>
            
                <a href="#">Games</a>
            </p><!-- /.breadcrumbs -->
        </div><!-- /.columns large-12 -->

            <div class="col-sm-12">
                
                <div class="row">
            <div style="margin-left: -10px; margin-top: -12.5%;" class="col-sm-12">
            
            <div class="row">
            <div class="col-md-9">  
                <div>
                <h3 id='target' class="page-heading heading--outcontainer">Games</h3>
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
                    <h3 style="margin-right: 0px;" id='target' class="page-heading heading--outcontainer">Advertisment</h3>
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
                            <div class="col-sm-9">
                    <div class="pagination paginatioon--full">
                    <a href='#' class="pagination__prev">prev</a>
                    <a href='#' class="pagination__next">next</a>
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
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="<?php echo base_url();?>assets/js/external/jquery-1.10.1.min.js"><\/script>')</script>
        <!-- Migrate --> 
        <script src="<?php echo base_url();?>assets/js/external/jquery-migrate-1.2.1.min.js"></script>
        <!-- Bootstrap 3--> 
        <script src="http://netdna.bootstrapcdn.com/bootstrap/3.0.2/js/bootstrap.min.js"></script>

        <!-- Magnific-popup -->
        <script src="<?php echo base_url();?>assets/js/external/jquery.magnific-popup.min.js"></script>

        <!-- Mobile menu -->
        <script src="<?php echo base_url();?>assets/js/jquery.mobile.menu.js"></script>
         <!-- Select -->
        <script src="<?php echo base_url();?>assets/js/external/jquery.selectbox-0.2.min.js"></script>

        <!-- Form element -->
        <script src="<?php echo base_url();?>assets/js/external/form-element.js"></script>
        <!-- Form validation -->
        <script src="<?php echo base_url();?>assets/js/form.js"></script>

        <!-- Custom -->
        <script src="<?php echo base_url();?>assets/js/custom.js"></script>
		
		<script type="text/javascript">
            $(document).ready(function() {
                init_Gallery();
            });
		</script>

</body>
</html>
