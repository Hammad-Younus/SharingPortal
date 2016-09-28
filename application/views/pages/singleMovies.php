<!doctype html>
<html>
<head>
    <!-- Basic Page Needs -->
        <meta charset="utf-8">
        <title>AMovie - Movie page</title>
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
        <!-- jQuery UI --> 
        <link href="http://code.jquery.com/ui/1.10.4/themes/smoothness/jquery-ui.css" rel="stylesheet">

        <!-- Mobile menu -->
        <link href="<?php echo base_url();?>assets/css/gozha-nav.css" rel="stylesheet" />
        <!-- Select -->
        <link href="<?php echo base_url();?>assets/css/external/jquery.selectbox.css" rel="stylesheet" />
        <!-- Swiper slider -->
        <link href="<?php echo base_url();?>assets/css/external/idangerous.swiper.css" rel="stylesheet" />
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
        <!-- Banner -->
        <!-- <div class="banner-top">
            <img alt='top banner' src="http://placehold.it/1600x90">
        </div> -->

        <!-- Header section -->
       <?php $this->load->view('includes/header')?>
        <!-- Search bar -->
        <div class="search-wrapper">
            <div class="container container--add">
                <form id='search-form' method='get' class="search">
                    <input type="text" class="search__field" placeholder="Search">
                    <select name="sorting_item" id="search-sort" class="search__sort" tabindex="0">
                        <option value="1" selected='selected'>By title</option>
                        <option value="2">By year</option>
                        <option value="3">By producer</option>
                        <option value="4">By title</option>
                        <option value="5">By year</option>
                    </select>
                    <button type='submit' class="btn btn-md btn--danger search__button">search a movie</button>
                </form>
            </div>
        </div>
        
        <!-- Main content -->
        <section class="container">
            <div class="col-sm-8 col-md-9">
                <div class="movie">
                    <h2 class="page-heading">The Hobbit: An Unexpected Journey</h2>
                    
                    <div class="movie__info">
                        <div class="col-sm-6 col-md-4 movie-mobile">
                            <div class="movie__images">
                                <span class="movie__rating">5.0</span>
                                <img alt='' src="http://placehold.it/526x773">
                            </div>
                            <div class="movie__rate">Your vote: <div id='score' class="score"></div></div>
                        </div>

                        <div class="col-sm-6 col-md-8">
                            <p class="movie__time">169 min</p>

                            <p class="movie__option"><strong>Country: </strong><a href="#">New Zeland</a>, <a href="#">USA</a></p>
                            <p class="movie__option"><strong>Year: </strong><a href="#">2012</a></p>
                            <p class="movie__option"><strong>Category: </strong><a href="#">Adventure</a>, <a href="#">Fantazy</a></p>
                            <p class="movie__option"><strong>Release date: </strong>December 12, 2012</p>
                            <p class="movie__option"><strong>Director: </strong><a href="#">Peter Jackson</a></p>
                            <p class="movie__option"><strong>Actors: </strong><a href="#">Martin Freeman</a>, <a href="#">Ian McKellen</a>, <a href="#">Richard Armitage</a>, <a href="#">Ken Stott</a>, <a href="#">Graham McTavish</a>, <a href="#">Cate Blanchett</a>, <a href="#">Hugo Weaving</a>, <a href="#">Ian Holm</a>, <a href="#">Elijah Wood</a> <a href="#">...</a></p>
                            <p class="movie__option"><strong>Age restriction: </strong><a href="#">13</a></p>
                            <p class="movie__option"><strong>Box office: </strong><a href="#">$1 017 003 568</a></p>

                            <a href="#" class="comment-link">Comments:  15</a>

                            <div class="movie__btns">
                                <a href="#" class="btn btn-md btn--warning">Download</a>
                                <!-- <a href="#" class="watchlist">Add to watchlist</a> -->
                            </div>

                            <div class="share">
                                <span class="share__marker">Share: </span>
                                <div class="addthis_toolbox addthis_default_style ">
                                    <a class="addthis_button_facebook_like" fb:like:layout="button_count"></a>
                                    <a class="addthis_button_tweet"></a>
                                    <a class="addthis_button_google_plusone" g:plusone:size="medium"></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="clearfix"></div>
                    
                    <h2 class="page-heading">The plot</h2>

                    <p class="movie__describe">Bilbo Baggins is swept into a quest to reclaim the lost Dwarf Kingdom of Erebor from the fearsome dragon Smaug. Approached out of the blue by the wizard Gandalf the Grey, Bilbo finds himself joining a company of thirteen dwarves led by the legendary warrior, Thorin Oakenshield. Their journey will take them into the Wild; through treacherous lands swarming with Goblins and Orcs, deadly Wargs and Giant Spiders, Shapeshifters and Sorcerers. Although their goal lies to the East and the wastelands of the Lonely Mountain first they must escape the goblin tunnels, where Bilbo meets the creature that will change his life forever ... Gollum. Here, alone with Gollum, on the shores of an underground lake, the unassuming Bilbo Baggins not only discovers depths of guile and courage that surprise even him, he also gains possession of Gollum's "precious" ring that holds unexpected and useful qualities ... A simple, gold ring that is tied to the fate of all Middle-earth in ways Bilbo cannot begin to ... </p>

                    <h2 class="page-heading">photos &amp; videos</h2>
                    
                    <div class="movie__media">
                        <div class="movie__media-switch">
                            <a href="#" class="watchlist list--photo" data-filter='media-photo'>234 photos</a>
                            <a href="#" class="watchlist list--video" data-filter='media-video'>10 videos</a>
                        </div>

                        <div class="swiper-container">
                          <div class="swiper-wrapper">
                              <!--First Slide-->
                              <div class="swiper-slide media-video">
                                <a href='https://www.youtube.com/watch?v=Y5AehBA3IsE' class="movie__media-item ">
                                     <img alt='' src="http://placehold.it/400x240">
                                </a>
                              </div>
                              
                              <!--Second Slide-->
                              <div class="swiper-slide media-video">
                                <a href='https://www.youtube.com/watch?v=Kb3ykVYvT4U' class="movie__media-item">
                                    <img alt='' src="http://placehold.it/400x240">
                                </a>
                              </div>
                              
                              <!--Third Slide-->
                              <div class="swiper-slide media-photo"> 
                                    <a href='http://placehold.it/2100x1250' class="movie__media-item">
                                        <img alt='' src="http://placehold.it/400x240">
                                     </a>
                              </div>

                              <!--Four Slide-->
                              <div class="swiper-slide media-photo"> 
                                    <a href='http://placehold.it/2100x1250' class="movie__media-item">
                                        <img alt='' src="http://placehold.it/400x240">
                                     </a>
                              </div>

                              <!--Slide-->
                              <div class="swiper-slide media-photo"> 
                                    <a href='http://placehold.it/2100x1250' class="movie__media-item">
                                        <img alt='' src="http://placehold.it/400x240">
                                     </a>
                              </div>

                              <!--Slide-->
                              <div class="swiper-slide media-photo"> 
                                    <a href='http://placehold.it/2100x1250' class="movie__media-item">
                                        <img alt='' src="http://placehold.it/400x240">
                                     </a>
                              </div>

                              <!--First Slide-->
                              <div class="swiper-slide media-video">
                                <a href='https://www.youtube.com/watch?v=Y5AehBA3IsE' class="movie__media-item ">
                                     <img alt='' src="http://placehold.it/400x240">
                                </a>
                              </div>
                              
                              <!--Second Slide-->
                              <div class="swiper-slide media-video">
                                <a href='https://www.youtube.com/watch?v=Kb3ykVYvT4U' class="movie__media-item">
                                    <img alt='' src="http://placehold.it/400x240">
                                </a>
                              </div>

                              <!--Slide-->
                              <div class="swiper-slide media-photo"> 
                                    <a href='http://placehold.it/2100x1250' class="movie__media-item">
                                        <img alt='' src="http://placehold.it/400x240">
                                     </a>
                              </div>

                              <!--Slide-->
                              <div class="swiper-slide media-photo"> 
                                    <a href='http://placehold.it/2100x1250' class="movie__media-item">
                                        <img alt='' src="http://placehold.it/400x240">
                                     </a>
                              </div>
                        
                          </div>
                        </div>

                    </div>

                </div>

            </div>

            <aside class="col-sm-4 col-md-3">
                <div class="sitebar">
                    <div class="banner-wrap">
                        <img alt='banner' src="http://placehold.it/500x500">
                    </div>

                     <div class="banner-wrap">
                        <img alt='banner' src="http://placehold.it/500x500">
                    </div>

                     <div class="banner-wrap banner-wrap--last">
                        <img alt='banner' src="http://placehold.it/500x500">
                    </div>

                    <div class="promo marginb-sm">
                      <div class="promo__head">A.Movie app</div>
                      <div class="promo__describe">for all smartphones<br> and tablets</div>
                      <div class="promo__content">
                          <ul>
                              <li class="store-variant"><a href="#"><img alt='' src="images/apple-store.svg"></a></li>
                              <li class="store-variant"><a href="#"><img alt='' src="images/google-play.svg"></a></li>
                              <li class="store-variant"><a href="#"><img alt='' src="images/windows-store.svg"></a></li>
                          </ul>
                      </div>
                  </div>

                    <div class="category category--discuss category--count marginb-sm mobile-category ls-cat">
                        <h3 class="category__title">the Most <br><span class="title-edition">discussed posts</span></h3>
                        <ol>
                            <li><a href="#" class="category__item">Gravity</a></li>
                            <li><a href="#" class="category__item">The Counselor</a></li>
                            <li><a href="#" class="category__item">Bad Grandpa</a></li>
                            <li><a href="#" class="category__item">Blue Is the Warmest Color</a></li>
                            <li><a href="#" class="category__item">Rush</a></li>
                            <li><a href="#" class="category__item">Captain Phillips</a></li>
                            <li><a href="#" class="category__item">Escape Plan</a></li>
                            <li><a href="#" class="category__item">Cloudy with a Chance of Meatballs 2</a></li>
                            <li><a href="#" class="category__item">Prisoners</a></li>
                            <li><a href="#" class="category__item">The Fifth Estate</a></li>
                        </ol>
                    </div>

                    <div class="category category--cooming category--count marginb-sm mobile-category rs-cat">
                        <h3 class="category__title">coming soon<br><span class="title-edition">movies</span></h3>
                        <ol>
                            <li><a href="#" class="category__item">Ender's Game</a></li>
                            <li><a href="#" class="category__item">About Time</a></li>
                            <li><a href="#" class="category__item">Last Vegas</a></li>
                            <li><a href="#" class="category__item">Free Birds</a></li>
                            <li><a href="#" class="category__item">The Wolf of Wall Street</a></li>
                            <li><a href="#" class="category__item">The Best Man Holiday</a></li>
                            <li><a href="#" class="category__item">The Book Thief</a></li>
                            <li><a href="#" class="category__item">The Hunger Games: Catching Fire</a></li>
                            <li><a href="#" class="category__item">Delivery Man</a></li>
                            <li><a href="#" class="category__item">Nebraska</a></li>
                        </ol>
                    </div>
                    
                   

                </div>
            </aside>

        </section>
        
        <div class="clearfix"></div>

        <?php $this->load->view('includes/footer')?>
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
        <script>window.jQuery || document.write('<script src="js/external/jquery-1.10.1.min.js"><\/script>')</script>
        <!-- Migrate --> 
        <script src="<?php echo base_url();?>assets/js/external/jquery-migrate-1.2.1.min.js"></script>
        <!-- jQuery UI -->
        <script src="<?php echo base_url();?>assets/http://code.jquery.com/ui/1.10.4/jquery-ui.js"></script>
        <!-- Bootstrap 3--> 
        <script src="<?php echo base_url();?>assets/http://netdna.bootstrapcdn.com/bootstrap/3.0.2/js/bootstrap.min.js"></script>

        <!-- Mobile menu -->
        <script src="<?php echo base_url();?>assets/js/jquery.mobile.menu.js"></script>
         <!-- Select -->
        <script src="<?php echo base_url();?>assets/js/external/jquery.selectbox-0.2.min.js"></script>

        <!-- Stars rate -->
        <script src="<?php echo base_url();?>assets/js/external/jquery.raty.js"></script>
        <!-- Swiper slider -->
        <script src="<?php echo base_url();?>assets/js/external/idangerous.swiper.min.js"></script>
        <!-- Magnific-popup -->
        <script src="<?php echo base_url();?>assets/js/external/jquery.magnific-popup.min.js"></script>  

        <!--*** Google map  ***-->
        <script src="<?php echo base_url();?>assets/https://maps.google.com/maps/api/js?sensor=true"></script> 
        <!--*** Google map infobox  ***-->
        <script src="<?php echo base_url();?>assets/js/external/infobox.js"></script> 

        <!-- Share buttons -->
        <script type="text/javascript">var addthis_config = {"data_track_addressbar":true};</script>
        <script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-525fd5e9061e7ef0"></script>

        <!-- Form element -->
        <script src="<?php echo base_url();?>assets/js/external/form-element.js"></script>
        <!-- Form validation -->
        <script src="<?php echo base_url();?>assets/js/form.js"></script>

        <!-- Custom -->
        <script src="<?php echo base_url();?>assets/js/custom.js"></script>
        
        <script type="text/javascript">
            $(document).ready(function() {
                init_MoviePage();
            });
        </script>

</body>
</html>
