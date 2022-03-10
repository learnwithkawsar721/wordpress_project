<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>

</head>

<body>
    <!-- Header Section Start -->

    <section id="">
        <div class="container">
            <div class="row">
                <!-- Header Top -->
                <div class="header-top">
                    <div class="row">
                        <div class="header-top-left col-6">
                            <p>বাংলাদেশ জাতীয় তথ্য বাতায়ন</p>
                        </div>
                        <div class="header-top-right col-6">
                            <p>২০ মাঘ, ১৪২৮</p>
                            <a href="#">English</a>
                        </div>
                    </div>
                </div>

                <!-- Header Bottom -->
                <div class="header-bottom">
                    <div class="row">
                        <div class="header-bottom-left col-5">
                            <?php
                            the_custom_logo();
                            ?>
                            <!-- <img src="<?= get_template_directory_uri(); ?>/images/logo_bn.png" alt=""> -->
                        </div>
                        <div class="header-bottom-middle col-5">
                            <input type="text" name="" id="" placeholder="খুঁজুন">
                            <input type="submit" value="অনুসন্ধান">
                        </div>
                        <div class="header-bottom-right col-2">
                            <div class="a2i-logo">
                                <img src="<?= get_template_directory_uri(); ?>/images/icons/a2i-logo-footer.png" alt="">
                            </div>
                            <div class="social-box">
                                <p>সাথে থাকুন:</p>
                                <div class="icons">
                                    <img src="<?= get_template_directory_uri(); ?>/images/icons/facebook-icon.png" alt="">
                                    <img src="<?= get_template_directory_uri(); ?>/images/icons/twitter-blue-icon.png" alt="">
                                    <img src="<?= get_template_directory_uri(); ?>/images/icons/youtube-icon.png" alt="">
                                    <img src="<?= get_template_directory_uri(); ?>/images/icons/gplus-icon.png" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- Header Section End -->

    <!-- Navbar Section Start -->
    <div class="container">
        <div class="row">
            <nav class="navbar navbar-expand-lg navbar-light bg-light ps-0">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <?php
                    wp_nav_menu(
                        array(
                            'theme_location' => 'menu-1',
                            'menu_id'        => 'primary-menu',
                            'menu_class'    => 'navbar-nav',
                        )
                    );
                    ?>

                </div>
            </nav>
        </div>
    </div>
    <!-- Navbar Section End -->

    <!-- Main Content Section Start -->
    <div class="container">
        <div class="row">
            <!-- Main Content -->
            <div class="main-content col-8">
                <!-- Banner -->
                <div class="row">
                    <div class="banner col-12 p-0">
                        <?php dynamic_sidebar("Banner"); ?>
                    </div>
                </div>

                <!-- Marquee -->
                <div class="row">
                    <div class="marquee col-12 p-0">
                        <marquee direction="left" scrollamount="4" onmouseover="this.stop()" onmouseout="this.start()">
                            <?php dynamic_sidebar("mark"); ?>
                        </marquee>
                    </div>
                </div>
                <!-- Slider -->
                <div class="row">
                    <div class="slider col-12 p-0">
                        <div id="carouselExampleFade" class="carousel slide carousel-fade" data-bs-ride="carousel">
                            <div class="carousel-inner">
                                <?php if (have_posts()) : ?>
                                    <?php $x=0; while (have_posts()) { the_post(); $x++; ?>
                                        <div class="carousel-item <?=($x==1)?'active':''?>">
                                            <?= the_post_thumbnail(); ?>
                                        </div>
                                    
                                <?php } endif; ?>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Main Content End -->

            <!-- Sidebar Content -->
            <div class="sidebra-content-wrap col-4">
                <div class="row">
                    <div class="sidebra-content col-12">

                        <!-- Sidebar Image BOx -->
                        <div class="row">
                            <div class="sidebar-img-box col-12">
                                <?php dynamic_sidebar('sidebar-1'); ?>
                            </div>
                        </div>

                        <!-- Sokol Batayon -->
                        <div class="row">
                            <div class="sokol-batayon col-12">
                                <div class="heading">
                                    <h3>সকল বাতায়ন</h3>
                                </div>
                                <div class="dropdown-option">
                                    <select name="" id="">
                                        <option value="">ওয়েবসাইট বাছাই করুন</option>
                                        <option value="#">মন্ত্রণালয়</option>
                                        <option value="#">ঢাকা বিভাগ</option>
                                        <option value="#">চট্টগ্রাম বিভাগ</option>
                                        <option value="#">রাজশাহী বিভাগ</option>
                                        <option value="#">খুলনা বিভাগ</option>
                                        <option value="#">বরিশাল বিভাগ</option>
                                        <option value="#">রংপুর বিভাগ</option>
                                        <option value="#">সিলেট বিভাগ</option>
                                    </select>
                                    <input type="submit" value="চলুন">
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="mujib-app col-12">
                                <div class="heading">
                                    <h3>মুজিব১০০ আ্যাপ</h3>
                                </div>
                                <div class="content">
                                    <?php dynamic_sidebar('youtube'); ?>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <!-- Sidebar Content End -->

        </div>
    </div>
    <!-- Main Content Section End -->

    <!-- Footer Section Start -->
    <section>
        <div class="container">
            <div class="row">
                <!-- Big Footer -->
                <div class="big-footer col-12 p-0">
                    <img src="<?= get_template_directory_uri(); ?>/images/footer_top_bg.png" class="d-block w-100" alt="">
                </div>

                <!-- Footer -->
                <div class="footer col-12">
                    <div class="row">
                        <div class="footer-left col-7 ps-0">
                            <nav class="navbar navbar-expand-lg navbar-light ps-0">
                                <div class="collapse navbar-collapse" id="navbarNav">
                                    <ul class="navbar-nav">
                                        <li class="nav-item"><a class="nav-link" href="#">গোপনীয়তার নীতিমালা</a></li>
                                        <li class="nav-item"><a class="nav-link" href="#">ব্যবহারের শর্তাবলি</a></li>
                                        <li class="nav-item"><a class="nav-link" href="#">সার্বিক সহযোগিতায়</a></li>
                                        <li class="nav-item"><a class="nav-link" href="#">সাইট ম্যাপ</a></li>
                                        <li class="nav-item"><a class="nav-link" href="#">সচরাচর জিজ্ঞাসা</a></li>
                                    </ul>
                                </div>
                            </nav>
                            <p>সাইটটি শেষ হাল-নাগাদ করা হয়েছে: ২০২২-০২-০২ ১২:১১:০৪</p>
                        </div>
                        <div class="footer-right col-5">
                            <div class="footer-right-bottom">
                                <p>কারিগরি সহায়তায়:</p>
                                <img src="<?= get_template_directory_uri(); ?>/images/np-logo-set.png" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Footer Section End -->





    <?php wp_footer(); ?>

</body>

</html>