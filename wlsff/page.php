
<?php get_header(); ?>
<body <?php body_class( ); ?> >

 <!-- Navigation -->
 <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
                <div class="container">
                <a class="navbar-brand js-scroll-trigger" href="#"></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fa fa-bars"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link js-scroll-trigger" href="#home">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link js-scroll-trigger" href="#about">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link js-scroll-trigger" href="#perticipate">Participate</a>
                    </li>
                    </ul>
                </div>
                </div>
            </nav>


        <div class="hero-area" id="home">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-12">
                        <div class="hero-image">
                            <img src="<?php  echo get_template_directory_uri(); ?>/assets/img/hero.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
            <div class="hero-bottom">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-12">
                            <h3 class="schedule">SEPT. 7, 2019 4-10 PM  CAMP NORTH END <br>CHARLOTTE,NC</h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="about-area" id="about">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="about-img text-center">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/lit.png" alt="">
                            <h1 class="first">STREETFOOD, MUSIC & FUN </h1>
                            <h1 class="second">INTERNATIONAL VIBES</h1>
                        </div>
                        <p>The WORLDL!T Streetfood Festival brings the flavors of the world to Charlotte with a vibrant swirl of culture and fun. This festival will unite people to enjoy the increasingly popular streetfood culinary genre. Guests will enjoy authentic cuisines found in the streets of cities from various parts of the world to a soundtrack of live music and visuals from distant cityscapes.</p>
                        <p>Guests will party and be taught dance moves that go with  the various musical styles throughout the show. The performance lineup will include East African, West African, Latin American, Indian, and Arabic vibes. In addition to food and music, The festival will feature a marketplace filled with crafts, art & products by local entrepreneurs/retailers and information booths for non-profits with causes that align with WORLDL!T.  </p>
                        <p>The fun starts late-afternoon, extending into the night, (4pm-10pm) outdoors at the beautiful  Camp Northend, a historic industrial site that now serves as a hub for creativity and innovation in the heart of Charlotte's North End Smart District.</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="contact-area" id="perticipate">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-10">
                        
                <div class="row">
                        <div class="col-lg-12 text-center">
                            <div class="heading">
                                <h1>INTERESTED IN PARTICIPATING?</h1>
                            </div>
                            <div class="sub-heading">
                                <h3>WE ARE ACCEPTING PARTICIPANTS! CONTACT US VIA THE FORM BELOW:</h3>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="contact-side-txt">
                                <h3>STREET FOOD VENDORS</h3>
                                <h3>MUSICAL ACTS</h3>
                                <h3>MARKETPLACE VENDORS</h3>
                                <h3>SPONSORS</h3>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="contact-form">

                                <?php echo do_shortcode('[contact-form-7 id="431" title="wssf form"]') ?>
                            </div>
                        </div>
                    </div>
                    </div>
                </div>
            </div>
        </div>

<?php  get_footer(); ?>