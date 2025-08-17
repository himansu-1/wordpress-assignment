<?php
get_header();
?>
<main class="main">
    <!-- Hero Section -->
    <section class="hero">
        <img src="<?php echo get_template_directory_uri() ?>/assets/img/hero_desktop.png" alt="Hero Image" class="img-fluid w-100 d-block">
    </section>

    <!--  -->
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



    <!-- Accademic Profile Section -->
    <section class="accademic section" style="background-color: #fff6d9;">
        <div class="team-boxed">
            <div class="container">
                <div class="intro">
                    <h2 class="text-center">Academic Identity</h2>
                    <hr class="mb-4">
                </div>
                <div class="row g-3 justify-content-start flex-wrap">

                    <!-- Item - 1: Vidwan-ID -->
                    <div class="col-sm-6 col-md-4 col-lg-2 item mb-3">
                        <a href="https://vidwan.inflibnet.ac.in/profile/161197" target="_blank" class="text-decoration-none">
                            <div class="px-2 py-4 text-white rounded-3 bg-primary text-center">
                                <i class="fa fa-id-card fa-2x mb-2"></i>
                                <h5 class="name text-white mt-2">Vidwan-ID</h5>
                                <small class="title">161197</small>
                            </div>
                        </a>
                    </div>

                    <!-- Item - 2: ORCID ID -->
                    <div class="col-sm-6 col-md-4 col-lg-2 item mb-3">
                        <a href="https://orcid.org/0000-0002-6005-687X" target="_blank" class="text-decoration-none">
                            <div class="px-2 py-4 text-white rounded-3 bg-secondary text-center">
                                <i class="fa fa-user-circle fa-2x mb-2"></i>
                                <h5 class="name text-white mt-2">ORCID ID</h5>
                                <small class="title">0000-0002-6005-687X</small>
                            </div>
                        </a>
                    </div>

                    <!-- Item - 3: SCOPUS ID -->
                    <div class="col-sm-6 col-md-4 col-lg-2 item mb-3">
                        <a href="https://www.scopus.com/authid/detail.uri?authorId=57202509897" target="_blank" class="text-decoration-none">
                            <div class="px-2 py-4 text-white rounded-3 bg-success text-center">
                                <i class="fa fa-database fa-2x mb-2"></i>
                                <h5 class="name text-white mt-2">SCOPUS ID</h5>
                                <small class="title">57202509897</small>
                            </div>
                        </a>
                    </div>

                    <!-- Item - 4: Researcher ID -->
                    <div class="col-sm-6 col-md-4 col-lg-2 item mb-3">
                        <a href="https://www.researchgate.net/profile/Satya-Tripathy" target="_blank" class="text-decoration-none">
                            <div class="px-2 py-4 text-white rounded-3 bg-info text-center">
                                <i class="fa fa-flask fa-2x mb-2"></i>
                                <h5 class="name text-white mt-2">Researcher ID</h5>
                                <small class="title">Satya Tripathy</small>
                            </div>
                        </a>
                    </div>

                    <!-- Item - 5: Google Scholar ID -->
                    <div class="col-sm-6 col-md-4 col-lg-2 item mb-3">
                        <a href="https://scholar.google.com/citations?hl=en&user=KJJrtPEAAAAJ" target="_blank" class="text-decoration-none">
                            <div class="px-2 py-4 text-white rounded-3 bg-danger text-center">
                                <i class="fa fa-graduation-cap fa-2x mb-2"></i>
                                <h5 class="name text-white mt-2">Google Scholar</h5>
                                <small class="title">KJJrtPEAAAAJ</small>
                            </div>
                        </a>
                    </div>

                    <!-- Item - 6: Microsoft Academic -->
                    <div class="col-sm-6 col-md-4 col-lg-2 item mb-3">
                        <a href="https://academic.microsoft.com/author/2790857415/publication/search?q=Satya%20Narayan%20Tripathy&qe=Composite(AA.AuId%253D2790857415)&f=&orderBy=0&paperId=2907151249" target="_blank" class="text-decoration-none">
                            <div class="px-0 py-4 text-white rounded-3 bg-warning text-center">
                                <i class="fa fa-laptop fa-2x mb-2"></i>
                                <h5 class="name text-white mt-2" style="font-size: large;">Microsoft Academic</h5>
                                <small class="title">2790857415</small>
                            </div>
                        </a>
                    </div>

                </div>
            </div>
        </div>
    </section>

    <!-- Section - 1 -->
    <section class="research section py-2" style="background-color: #9fffd9;">
        <div class="container my-5">
            <div class="row gy-4">
                <h3 class="text-center font-bold"><span class="hilight-1">Research:</span> Exploring Tomorrow’s Innovations Today</h3>
                <div class="col-lg-6 content aos-init aos-animate" data-aos="fade-up" data-aos-delay="200">
                    <p>
                        Showcasing impactful scholarly contributions through publications, authored book chapters, and active research mentorship. Engaged as a peer reviewer, driven by diverse teaching and research interests, strengthened by professional memberships, and enriched through active participation in national and international seminars, conferences, and workshops.
                        Major focus on cutting-edge research in
                    </p>
                    <ul>
                        <li><span>Deep Learning</span></li>
                        <li><span>Federated Learning</span></li>
                        <li><span>Explainable Artificial Intelligence (XAI)</span></li>
                        <li><span>Counterfactual Explanations</span></li>
                        <li><span>Causal Inference (Cause-and-Effect Learning)</span></li>
                    </ul>
                    <p>
                        His work bridges theory and real-world applications, advancing AI systems that are transparent, trustworthy, and impactful.
                        He has successfully led and managed multiple interdisciplinary projects across academia, research, and industry, driving innovation, scalability, and societal benefit.
                    </p>
                </div>
                <div class="col-lg-6 position-relative align-self-start aos-init aos-animate" data-aos="fade-up" data-aos-delay="100">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/section/section_research.png" class="img-fluid rounded-4" alt="">
                    <div class="text-center my-3">
                        <button class="btn btn-info"><a href="" class="text-light">Dive Deeper into the Full Insights</a><i class="fa fa-long-arrow-right text-light px-2" aria-hidden="true"></i></button>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Increment Counter Section -->
    <section id="stats-section" class="p-0">
        <div class="container">
            <div class="row">
                <div class="four col-md-3">
                    <div class="counter-box rounded-4 colored2">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo_research.png" alt="Research Logo" class="img-fluid rounded-4" width="90">
                        <span class="counter text-light">70</span>
                        <p class="text-light">Research Publications</p>
                    </div>
                </div>
                <div class="four col-md-3">
                    <div class="counter-box rounded-4 colored1">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo_projects.png" alt="Research Logo" class="img-fluid rounded-4" width="90">
                        <span class="counter text-light">50</span>
                        <p class="text-light">Projects Supervised</p>
                    </div>
                </div>
                <div class="four col-md-3">
                    <div class="counter-box rounded-4 colored3">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo_book.png" alt="Research Logo" class="img-fluid rounded-4" width="90">
                        <span class="counter text-light">20</span>
                        <p class="text-light">Books & Book-Chapters</p>
                    </div>
                </div>
                <div class="four col-md-3">
                    <div class="counter-box rounded-4 colored4">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo_research_guidence.png" alt="Research Logo" class="img-fluid rounded-4" width="90">
                        <span class="counter text-light">30</span>
                        <p class="text-light">Research Guidance</p>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- Section - 2 -->
    <section class="project section" style="background: #ffe5e5;">
        <div class="container my-5">
            <div class="row gy-4">
                <h3 class="text-center font-bold"><span class="hilight-2">Projects:</span> Innovation and Implementation Showcase</h3>
                <p>
                    We have led interdisciplinary projects across academia, research, and industry, excelling in innovation, scalability, and impact, with expertise from conceptualisation to execution, including funding, coordination, supervision, monitoring, and reporting. Key highlights include:
                </p>
                <div class="col-lg-6 content aos-init aos-animate" data-aos="fade-up" data-aos-delay="200">
                    <ul>
                        <li><span>Core Research Areas: Deep Learning · Federated Learning · XAI · Counterfactual Explanations · Causal Inference (Cause–Effect)</span></li>
                        <li><span>Vision: Build transparent, trustworthy, and deployable AI bridging theory and real-world impact.</span></li>
                        <li><span>Methodology: Data-centric modelling, interpretable pipelines, causal reasoning, and privacy-preserving learning at scale.</span></li>
                        <li><span>Application Focus: Healthcare analytics, smart systems, and decision support under real-world constraints.</span></li>
                        <li><span>Collaboration: Interdisciplinary work across academia–industry; funding acquisition and partnership development.</span></li>
                        <li><span>Governance & Quality: Technical supervision, risk management, M&E frameworks, and dissemination (reports, papers, workshops).</span></li>
                        <li><span>Strengths: Strategic planning · Cross-functional leadership · Technical oversight · Scalability & impact orientation.</span></li>
                    </ul>
                </div>
                <div class="col-lg-6 position-relative align-self-start aos-init aos-animate" data-aos="fade-up" data-aos-delay="100">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/section/section_project.png" class="img-fluid rounded-4" alt="">
                    <div class="text-center my-3">
                        <button class="btn btn-success bg-gradient"><a href="" class="text-light">Dive Deeper into the Full Insights</a><i class="fa fa-long-arrow-right text-light px-2" aria-hidden="true"></i></button>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Section - 3 -->
    <section class="academic section">
        <div class="container my-5">
            <div class="row gy-4">
                <h3 class="text-center font-bold">Taking <span class="hilight-3">Education</span> to the Next Level with Technology</h3>
                <p class="fst-italic">
                    Knowledge enhancement and skills through structured learning, research-driven insights, and interactive discussions, fostering intellectual growth and critical thinking in a professional, goal-oriented environment.
                    <br>
                    Dr. Satya Narayan Tripathy, Associate Professor, P.G. Department of Computer Science, Berhampur University, brings extensive expertise in cutting-edge domains of Computer Science. His teaching portfolio spans IoT, Operating Systems, Data Communications, Networks, Data Mining, AI, Big Data Analytics, and Cloud Computing.
                </p>
                <div class="col-lg-6 position-relative align-self-start aos-init aos-animate" data-aos="fade-up" data-aos-delay="100">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/section/section_accademic.png" class="img-fluid rounded-4" alt="">
                </div>
                <div class="col-lg-6 content aos-init aos-animate" data-aos="fade-up" data-aos-delay="200">
                    <p>
                        With a strong foundation in programming, database systems, and security, he integrates theory with practical applications, fostering industry-relevant skills.
                        <br>
                        His courses, including Data Structures, Web Technologies, and Data Warehousing, prepare students for academic excellence and professional success in emerging technology landscapes, empowering them with analytical, problem-solving, and innovation-driven capabilities.
                    </p>
                    <div class="text-center my-3">
                        <button class="btn btn-primary bg-gradient"><a href="" class="text-light">Dive Deeper into the Full Insights</a><i class="fa fa-long-arrow-right text-light px-2" aria-hidden="true"></i></button>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Section - 4 -->
    <section class="health-wellness section" style="background: #ffe5e5;">
        <div class="container my-5">
            <div class="row gy-4">
                <h3 class="text-center font-bold"><span class="hilight-2">Healthy Habits:</span> Your Path to Health & Wellness</h3>
                <p class="fst-italic">
                    A dedicated space for promoting holistic well-being through science-based guidance on nutrition, fitness, mental health, and preventive care, empowering individuals with practical strategies for balanced, healthy, fulfilling living, and blending modern health science with sustainable lifestyle practices.
                </p>
                <div class="col-lg-6 content aos-init aos-animate" data-aos="fade-up" data-aos-delay="200">
                    <ul>
                        <li>Dedicated space for holistic well-being and lifestyle enhancement.</li>
                        <li>Covers nutrition, fitness, mental health, stress management, and preventive care.</li>
                        <li>Offers science-backed insights and practical wellness tips.</li>
                        <li>Provides evidence-based articles, wellness programs, and expert recommendations.</li>
                        <li>Focuses on improving physical vitality, emotional balance, and overall life quality.</li>
                        <li>Combines modern health science with sustainable lifestyle practices.</li>
                        <li>Aims to empower individuals with actionable strategies for healthier living.</li>
                    </ul>
                </div>
                <div class="col-lg-6 position-relative align-self-start aos-init aos-animate" data-aos="fade-up" data-aos-delay="100">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/section/section_health.png" class="img-fluid rounded-4" alt="">
                    <div class="text-center my-3">
                        <button class="btn btn-success bg-gradient"><a href="" class="text-light">Dive Deeper into the Full Insights</a><i class="fa fa-long-arrow-right text-light px-2" aria-hidden="true"></i></button>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Section - 5 -->
    <section class="blog section">
        <div class="container my-5">
            <div class="row gy-4">
                <h3 class="text-center font-bold"><span class="hilight-1">Blogs and Articles:</span> The Knowledge Hub for Insights & Inspirations</h3>
                <div class="col-lg-6 position-relative align-self-start aos-init aos-animate" data-aos="fade-up" data-aos-delay="100">
                    <img src="https://sample-files.com/downloads/images/jpg/landscape_hires_4000x2667_6.83mb.jpg" class="img-fluid rounded-4" alt="">
                </div>
                <div class="col-lg-6 content aos-init aos-animate" data-aos="fade-up" data-aos-delay="200">
                    <p class="fst-italic">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
                        dolore
                        magna aliqua.
                    </p>
                    <ul>
                        <li><i class="bi bi-check2-all"></i> <span>Ullamco laboris nisi ut aliquip ex ea commodo consequat.</span>
                        </li>
                        <li><i class="bi bi-check2-all"></i> <span>Duis aute irure dolor in reprehenderit in voluptate
                                velit.</span></li>
                        <li><i class="bi bi-check2-all"></i> <span>Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis
                                aute irure dolor in reprehenderit in voluptate trideta storacalaperda mastiro dolore eu fugiat nulla
                                pariatur.</span></li>
                    </ul>
                    <p>
                        Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in
                        voluptate
                        velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident
                    </p>
                </div>
            </div>
        </div>
    </section>
    
    <!-- Section - 6 -->
    <section class="media_outreach section">
        <div class="container my-5">
            <div class="row gy-4">
                <h3 class="text-center font-bold"><span class="hilight-3">Media & Outreach:</span> Impact,  Engagement, Visibility, Spotlight & Stories</h3>
                <p class="fst-italic">
                    Innovations, public interactions, media presence, collaborations, and societal initiatives offer a visually engaging gateway to his influence, achievements, and transformative contributions.
                </p>
                <div class="col-lg-6 content aos-init aos-animate" data-aos="fade-up" data-aos-delay="200">
                    <ul>
                        <li>Showcases academic, research, and community engagement initiatives.</li>
                        <li>Features press coverage, interviews, publications, and event highlights.</li>
                        <li>Presents collaborative projects and societal development contributions.</li>
                        <li>Clean, professional design for easy navigation and quick updates.</li>
                        <li>Includes news, multimedia galleries, and outreach program details.</li>
                        <li>Enhances visibility and connection with diverse audiences.</li>
                        <li>Highlights thought leadership, impactful projects, and public engagements.</li>
                    </ul>
                    <div class="text-center my-3">
                        <button class="btn btn-info"><a href="" class="text-light">Dive Deeper into the Full Insights</a><i class="fa fa-long-arrow-right text-light px-2" aria-hidden="true"></i></button>
                    </div>
                </div>
                <div class="col-lg-6 position-relative align-self-start aos-init aos-animate" data-aos="fade-up" data-aos-delay="100">
                    <img src="https://www.sample-videos.com/img/Sample-jpg-image-10mb.jpg" class="img-fluid rounded-4" alt="">
                </div>
            </div>

        </div>
    </section>
    
    <!-- Section - 7 -->
    <section class="startup section">
        <div class="container my-5">
            <div class="row gy-4">
                <h3 class="text-center font-bold"><span class="hilight-1">Start-Up Opportunity Orbit:</span> Innovators’ Launchpad</h3>
                <p class="fst-italic">
                    Guided Start-Up Opportunity delivers professional coaching and mentoring, minimal capital needs, structured learning, and safe growth strategies, enabling flexible living, financial independence, and the pursuit of personal aspirations.
                </p>
                <div class="col-lg-6 position-relative align-self-start aos-init aos-animate" data-aos="fade-up" data-aos-delay="100">
                    <img src="https://camo.githubusercontent.com/c2fd2f94aa55544327fc8ed8901aedb2eec8e3535243452b43646eb8086efe1a/68747470733a2f2f796176757a63656c696b65722e6769746875622e696f2f73616d706c652d696d616765732f696d6167652d34342e6a7067" class="img-fluid rounded-4" alt="">
                </div>
                <div class="col-lg-6 content aos-init aos-animate" data-aos="fade-up" data-aos-delay="200">
                    <ul>
                        <li>Expert Guidance – Step-by-step mentorship from direct selling industry experts to build and grow your business faster.</li>
                        <li>Business Education System – A structured framework to follow for consistent growth and success.</li>
                        <li>Low Investment – Proven strategies requiring minimal initial capital.</li>
                        <li>Risk-Free Approach – Support to avoid common business hazards.</li>
                        <li>Lifestyle Freedom – Opportunity to enjoy more time, financial independence, and flexibility.</li>
                        <li>Passion-Driven Success – Freedom to execute your ideas and live life on your terms.</li>
                    </ul>
                    <div class="text-center my-3">
                        <button class="btn btn-danger"><a href="" class="text-light">Dive Deeper into the Full Insights</a><i class="fa fa-long-arrow-right text-light px-2" aria-hidden="true"></i></button>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <!-- Section - 8 -->
    <section class="empowering_mind section">
        <div class="container my-5">
            <div class="row gy-4">
                <h3 class="text-center">Your Path to Empowering Mind, Body & Spirit</h3>
                <p class="fst-italic">
                    Holistic Health Community unites individuals through wellness education, mindful practices, sustainable lifestyle ideas, and interactive exchanges, inspiring balanced living and collective growth in a supportive, knowledge-sharing environment. 
                </p>
                <div class="col-lg-6 content aos-init aos-animate" data-aos="fade-up" data-aos-delay="200">
                    <ul>
                        <li>Purpose: Dedicated platform promoting complete well-being—physical, mental, emotional, and social.</li>
                        <li>Content: Offers expert insights, wellness resources, and evidence-based health practices.</li>
                        <li>Features:
                            <ul>
                                <li>Nutrition and fitness guidance</li>
                                <li>Mindfulness and stress management tips</li>
                                <li>Sustainable living ideas</li>
                            </ul>
                        </li>
                        <li>Community Engagement: Interactive forums, events, and collaborative initiatives.</li>
                        <li>User Experience: Intuitive design for easy navigation and resource access.</li>
                        <li>Impact: Empowers individuals to lead healthier, more balanced lives.</li>
                        <li>Vision: Foster a vibrant, informed, and health-conscious global community.</li>
                    </ul>
                </div>
                <div class="col-lg-6 position-relative align-self-start aos-init aos-animate" data-aos="fade-up" data-aos-delay="100">
                    <img src="https://sample-files.com/downloads/images/jpg/landscape_hires_4000x2667_6.83mb.jpg" class="img-fluid rounded-4" alt="">
                </div>
            </div>
        </div>
    </section>
    
    <!-- Section - 9 -->
    <section class="photo_gallery section">
        <div class="container my-5">
            <div class="row gy-4">
                <div class="col-lg-6 position-relative align-self-start aos-init aos-animate" data-aos="fade-up" data-aos-delay="100">
                    <img src="https://www.sample-videos.com/img/Sample-jpg-image-10mb.jpg" class="img-fluid rounded-4" alt="">
                </div>
                <div class="col-lg-6 content aos-init aos-animate" data-aos="fade-up" data-aos-delay="200">
                    <h3>Photo Gallery: Visual Frames & Stories</h3>
                    <p class="fst-italic">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
                        dolore
                        magna aliqua.
                    </p>
                    <ul>
                        <li><i class="bi bi-check2-all"></i> <span>Ullamco laboris nisi ut aliquip ex ea commodo consequat.</span>
                        </li>
                        <li><i class="bi bi-check2-all"></i> <span>Duis aute irure dolor in reprehenderit in voluptate
                                velit.</span></li>
                        <li><i class="bi bi-check2-all"></i> <span>Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis
                                aute irure dolor in reprehenderit in voluptate trideta storacalaperda mastiro dolore eu fugiat nulla
                                pariatur.</span></li>
                    </ul>
                    <p>
                        Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in
                        voluptate
                        velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident
                    </p>
                </div>
            </div>
        </div>
    </section>

</main>
<?php get_footer(); ?>