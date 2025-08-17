<?php
/*
Template Name: Health and Wellness Page
*/
get_header();
?>
<main class="">

    <!-- Starter Section Section -->
    <section id="starter-section" class="starter-section section position-relative">
        <!-- Section Title -->
        <div class="container section-title aos-init aos-animate" data-aos="fade-up">
            <span>Health & Wellness</span>
            <h2>Health & Wellness</h2>
        </div>

        <!-- Page Title -->
        <div class="page-title position-absolute bottom-0 w-100">
            <div class="container d-lg-flex justify-content-between align-items-center">
                <h1 class="mb-2 mb-lg-0">Health & Wellness Page</h1>
                <nav class="breadcrumbs">
                    <ol>
                        <li><a href="index.html">Home</a></li>
                        <li class="current">Health & Wellness Page</li>
                    </ol>
                </nav>
            </div>
        </div>
    </section>

    <!-- Carousel Slider Section -->
    <section class="hero__v6 section" id="home">
        <div id="heroCarousel" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <?php
                $slider_data = get_slider_data(); // Fetch slider data

                // Loop through each slide and display it
                $active = true; // Set first slide as active
                foreach ($slider_data as $slide) {
                    $image = $slide['image'];
                    $title = $slide['title'];
                    $description = $slide['description'];
                    $button_name = $slide['button_name'];
                    $button_link = $slide['button_link'];

                    // Check if the button name or link is available, else set default values
                    $button_name = !empty($button_name) ? $button_name : 'Learn More';
                    $button_link = !empty($button_link) ? $button_link : '#';
                ?>
                    <div class="carousel-item <?php echo $active ? 'active' : ''; ?>">
                        <div class="container">
                            <div class="row align-items-center">
                                <div class="col-lg-8">
                                    <div class="hero-img">
                                        <img class="img-main w-100 rounded-4" src="<?php echo esc_url($image); ?>" alt="Hero Image" data-aos="fade-in" data-aos-delay="500">
                                    </div>
                                </div>
                                <div class="col-lg-4 mb-4 mb-lg-0">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <h3 class="hero-title mb-3" data-aos="fade-up" data-aos-delay="100"><?php echo esc_html($title); ?></h3>
                                            <p class="hero-description mb-4 mb-lg-5 text-justify" data-aos="fade-up" data-aos-delay="200"><?php echo esc_html($description); ?></p>
                                            <div class="cta d-flex gap-2 mb-4 mb-lg-5" data-aos="fade-up" data-aos-delay="300">
                                                <a class="btn btn-white-outline" href="<?php echo esc_url($button_link); ?>"><?php echo esc_html($button_name); ?>
                                                    <svg class="lucide lucide-arrow-up-right" xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                                        <path d="M7 7h10v10"></path>
                                                        <path d="M7 17 17 7"></path>
                                                    </svg>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php
                    $active = false; // Set all subsequent slides to not active
                }
                ?>
            </div>

            <!-- Controls -->
            <button class="carousel-control-prev" type="button" data-bs-target="#heroCarousel" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#heroCarousel" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </section>

</main>