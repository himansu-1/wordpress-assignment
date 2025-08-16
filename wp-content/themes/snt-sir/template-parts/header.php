<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- ============= Favicon Start ============== -->
    <!-- Standard Favicon -->
    <!-- <link rel="icon" href="<?php echo get_template_directory_uri(); ?>/assets/favicon/favicon.ico" type="image/x-icon">
    <link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/assets/favicon/favicon.ico" type="image/x-icon"> -->

    <!-- PNG Icons -->
    <!-- <link rel="icon" type="image/png" sizes="32x32" href="<?php echo get_template_directory_uri(); ?>/assets/favicon/icons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="<?php echo get_template_directory_uri(); ?>/assets/favicon/icons/favicon-16x16.png"> -->

    <!-- Apple Touch Icon -->
    <!-- <link rel="apple-touch-icon" sizes="180x180" href="<?php echo get_template_directory_uri(); ?>/assets/favicon/icons/apple-touch-icon.png"> -->

    <!-- Android Chrome -->
    <!-- <link rel="icon" type="image/png" sizes="192x192" href="<?php echo get_template_directory_uri(); ?>/assets/favicon/icons/android-chrome-192x192.png">
    <link rel="icon" type="image/png" sizes="512x512" href="<?php echo get_template_directory_uri(); ?>/assets/favicon/icons/android-chrome-512x512.png"> -->

    <!-- Manifest for PWA (optional) -->
    <!-- <link rel="manifest" href="<?php echo get_template_directory_uri(); ?>/assets/favicon/icons/site.webmanifest"> -->

    <!-- Safari Pinned Tab -->
    <!-- <link rel="mask-icon" href="<?php echo get_template_directory_uri(); ?>/assets/favicon/icons/safari-pinned-tab.svg" color="#5bbad5"> -->

    <!-- Windows Tile -->
    <!-- <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="<?php echo get_template_directory_uri(); ?>/assets/favicon/icons/mstile-144x144.png"> -->

    <!-- Theme Color for Mobile Browsers -->
    <!-- <meta name="theme-color" content="#ffffff"> -->

    <!-- ============= Favicon End ============== -->


    <!-- Fonts -->
    <link href="https://fonts.googleapis.com" rel="preconnect">
    <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Ubuntu:ital,wght@0,300;0,400;0,500;0,700;1,300;1,400;1,500;1,700&display=swap" rel="stylesheet">

    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> -->
    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

    <!-- Vendor CSS Files -->
    <link href="<?php echo get_template_directory_uri(); ?>/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo get_template_directory_uri(); ?>/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="<?php echo get_template_directory_uri(); ?>/assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="<?php echo get_template_directory_uri(); ?>/assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="<?php echo get_template_directory_uri(); ?>/assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    <!-- Main CSS File -->
    <link href="<?php echo get_template_directory_uri(); ?>/assets/css/main.css" rel="stylesheet">

    <?php wp_head(); ?>

    <style>
    </style>

</head>

<body <?php body_class(); ?> style="background-color: ;">

    <header id="header" class="header align-items-center sticky-top pb-0 pt-1">
        <div class="container-fluid container-xl position-relative d-flex align-items-center">

            <a href="<?php echo home_url('/'); ?>" class="logo d-flex align-items-center me-auto">
                <!-- Uncomment the line below if you also wish to use an image logo -->
                <img src="<?php echo get_template_directory_uri(); ?>/assets/favicon/logo.png" alt="SNT">
                <!-- <h1 class="sitename">SNT</h1> -->
            </a>

            <nav id="navmenu" class="navmenu">
                <ul>
                    <li><a class="<?php if (is_front_page()) echo 'active'; ?>" href="<?php echo home_url('/'); ?>">Home</a></li>
                    <li><a class="<?php if (is_page('research')) echo 'active'; ?>" href="<?php echo home_url('/research'); ?>">Research</a></li>
                    <li><a class="<?php if (is_page('project')) echo 'active'; ?>" href="<?php echo home_url('/project'); ?>">Project</a></li>
                    <li><a class="<?php if (is_page('academic')) echo 'active'; ?>" href="<?php echo home_url('/academic'); ?>">Academic</a></li>
                    <li><a class="<?php if (is_page('health-and-wellness')) echo 'active'; ?>" href="<?php echo home_url('/health-and-wellness'); ?>">Health & Welness</a></li>
                    <li><a class="<?php if (is_page('blogs')) echo 'active'; ?>" href="<?php echo home_url('/blogs'); ?>">Blogs</a></li>
                    <li><a class="<?php if (is_page('media_outreach')) echo 'active'; ?>" href="<?php echo home_url('/media_outreach'); ?>">Media & Outreach</a></li>
                    <li><a class="<?php if (is_page('startup')) echo 'active'; ?>" href="<?php echo home_url('/startup'); ?>">Start-Up</a></li>
                    <li><a class="<?php if (is_page('album')) echo 'active'; ?>" href="<?php echo home_url('/album'); ?>">Album</a></li>
                    <li class="m-0 p-0">
                        <hr class="m-0 p-0">
                    </li>
                    <li><a class="d-block d-md-none <?php if (is_page('innovator')) echo 'active'; ?>" href="<?php echo home_url('/innovator'); ?>">Innovator</a></li>
                    <li><a class="d-block d-md-none <?php if (is_page('educator')) echo 'active'; ?>" href="<?php echo home_url('/educator'); ?>">Educator</a></li>
                    <li><a class="d-block d-md-none <?php if (is_page('researcher')) echo 'active'; ?>" href="<?php echo home_url('/researcher'); ?>">Researcher</a></li>
                    <li><a class="d-block d-md-none <?php if (is_page('enterpreneru')) echo 'active'; ?>" href="<?php echo home_url('/enterpreneru'); ?>">Entrepreneur</a></li>
                    <li><a class="d-block d-md-none <?php if (is_page('community_builder')) echo 'active'; ?>" href="<?php echo home_url('/community_builder'); ?>">Community Builder</a></li>

                </ul>
                <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
            </nav>

        </div>
        <?php if (is_front_page()) { ?>
            <div class="d-none d-sm-block">
                <!-- Sub-navigation Section -->
                <nav id="sub-navmenu" class="sub-navmenu m-0 p-3 bg-secondary bg-gradient">
                    <ul class="d-flex justify-content-center m-0">
                        <li><a style="color: greenyellow;" class="font-bold <?php if (is_page('innovator')) echo 'active'; ?>" href="<?php echo home_url('/innovator'); ?>">Innovator</a></li>
                        <li><a style="color: #ffc0c0;" class="font-bold <?php if (is_page('educator')) echo 'active'; ?>" href="<?php echo home_url('/educator'); ?>">Educator</a></li>
                        <li><a style="color: #fffe86;" class="font-bold <?php if (is_page('researcher')) echo 'active'; ?>" href="<?php echo home_url('/researcher'); ?>">Researcher</a></li>
                        <li><a style="color: #2bffe7;" class="font-bold <?php if (is_page('enterpreneru')) echo 'active'; ?>" href="<?php echo home_url('/enterpreneru'); ?>">Entrepreneur</a></li>
                        <li><a style="color: white;" class="font-bold <?php if (is_page('community_builder')) echo 'active'; ?>" href="<?php echo home_url('/community_builder'); ?>">Community Builder</a></li>
                    </ul>
                </nav>
            </div>
        <?php } ?>
    </header>