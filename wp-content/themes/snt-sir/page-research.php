<?php
/*
Template Name: Research Page
*/
get_header();
?>
<?php
function render_research_accordion($publications, $accordionIdPrefix)
{
    if (empty($publications)) {
        echo '<p class="text-muted">No publications available in this category.</p>';
        return;
    }

    echo '<div class="accordion" id="' . esc_attr($accordionIdPrefix) . 'Accordion">';

    foreach ($publications as $index => $pub) {
        $collapseId = $accordionIdPrefix . 'Collapse' . ($index + 1);
        $headingId = $accordionIdPrefix . 'Heading' . ($index + 1);
        $isFirst = $index === 0;
?>
        <div class="accordion-item">
            <h2 class="accordion-header" id="<?php echo esc_attr($headingId); ?>">
                <button class="accordion-button <?php echo !$isFirst ? 'collapsed' : ''; ?>" type="button"
                    data-bs-toggle="collapse"
                    data-bs-target="#<?php echo esc_attr($collapseId); ?>"
                    aria-expanded="<?php echo $isFirst ? 'true' : 'false'; ?>"
                    aria-controls="<?php echo esc_attr($collapseId); ?>">
                    <?php echo esc_html($pub->title); ?>
                </button>
            </h2>
            <div id="<?php echo esc_attr($collapseId); ?>" class="accordion-collapse collapse <?php echo $isFirst ? 'show' : ''; ?>"
                aria-labelledby="<?php echo esc_attr($headingId); ?>"
                data-bs-parent="#<?php echo esc_attr($accordionIdPrefix); ?>Accordion">
                <div class="accordion-body">
                    <?php echo esc_html($pub->authors); ?><br>
                    <em><?php echo esc_html($pub->journal); ?></em><br>
                    <span><?php echo esc_html($pub->details); ?></span><br>
                    <?php if (!empty($pub->doi_link) && !empty($pub->doi)): ?>
                        DOI: <a href="<?php echo esc_url($pub->doi_link); ?>" target="_blank" rel="noopener noreferrer"><?php echo esc_html($pub->doi); ?></a><br>
                    <?php endif; ?>
                    <?php if (!empty($pub->indexing)): ?>
                        <strong>Indexing:</strong> <?php echo esc_html($pub->indexing); ?>
                    <?php endif; ?>
                </div>
            </div>
        </div>
<?php
    }

    echo '</div>';
}
?>

<main class="main">

    <!-- Starter Section Section -->
    <section id="starter-section" class="starter-section section position-relative">
        <!-- Section Title -->
        <div class="container section-title aos-init aos-animate" data-aos="fade-up">
            <span>Research Section</span>
            <h2>Research Section</h2>
        </div><!-- End Section Title -->

        <!-- Page Title -->
        <div class="page-title position-absolute bottom-0 w-100">
            <div class="container d-lg-flex justify-content-between align-items-center">
                <h1 class="mb-2 mb-lg-0">Research Page</h1>
                <nav class="breadcrumbs">
                    <ol>
                        <li><a href="index.html">Home</a></li>
                        <li class="current">Research Page</li>
                    </ol>
                </nav>
            </div>
        </div><!-- End Page Title -->
    </section><!-- /Starter Section Section -->

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

    <!-- Section - 1 / Research Publication -->
    <section id="about" class="about section">
        <div class="container my-5">
            <h3 class="text-center">Research Publication</h3>
            <p class="text-center">
                Advancing Knowledge, Pioneering Ideas, Inspiring Innovation, Published for the World
                Research Publications
            </p>
            <div class="row gy-4">
                <div class="col-lg-6 position-relative align-self-start aos-init aos-animate" data-aos="fade-up" data-aos-delay="100">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/section/section_research_publication.png" class="w-100 rounded-4" style="height: 360px" alt="Research Publication">
                </div>
                <div class="col-lg-6 content aos-init aos-animate align-content-center" data-aos="fade-up" data-aos-delay="200">
                    <p class="text-justify">
                        Showcasing peer-reviewed articles and conference papers that contribute to advancing knowledge in cutting-edge domains such as Artificial Intelligence, Federated Learning, XAI, Counterfactual Explanation, and Digital Health. These works reflect a commitment to impactful research, innovation, and collaboration with global academic and industry partners.
                    </p>
                    <div class="text-center my-3">
                        <button class="btn btn-primary bg-gradient"><a href="<?php echo home_url('/research-publication'); ?>" class="text-light">Dive Deeper into the Full Insights</a><i class="fa fa-long-arrow-right text-light px-2" aria-hidden="true"></i></button>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Section - 2 / Book Chapters -->
    <section class="project section" style="background: #ffe5e5;">
        <div class="container my-5">
            <div class="row gy-4">
                <h3 class="text-center font-bold">Book Chapters</h3>
                <p class="text-center">
                    Writing the Future of Innovation, Collaborating for Intellectual Impact, Shaping Ideas into Authoritative References
                </p>
                <div class="col-lg-6 content aos-init aos-animate align-content-center" data-aos="fade-up" data-aos-delay="200">
                    <p>
                        Contributions to edited volumes published by leading international publishers, presenting specialized insights in emerging technologies, data science, and AI applications. These chapters serve as authoritative references, bridging theory with practice and enriching the global body of scholarly literature.
                    </p>
                    <div class="text-center my-3">
                        <button class="btn btn-success bg-gradient"><a href="<?php echo home_url('/book-chapter'); ?>" class="text-light">Dive Deeper into the Full Insights</a><i class="fa fa-long-arrow-right text-light px-2" aria-hidden="true"></i></button>
                    </div>
                </div>
                <div class="col-lg-6 position-relative align-self-start aos-init aos-animate" data-aos="fade-up" data-aos-delay="100">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/section/section_book_chapter.png" class="img-fluid rounded-4" alt="">
                </div>
            </div>
        </div>
    </section>

    <!-- Section - 3 -->
    <section class="academic section" style="background: #def4fd;">
        <div class="container my-5">
            <div class="row gy-4">
                <h3 class="text-center font-bold">Research Guidance</h3>
                <p class="fst-italic text-center">
                    Mentoring Minds, Creating Innovators
                    Nurturing Talent for Academic Excellence
                    Shaping the Researchers of Tomorrow
                </p>
                <div class="col-lg-6 position-relative align-self-start aos-init aos-animate" data-aos="fade-up" data-aos-delay="100">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/section/section_research_guidence.png" class="img-fluid rounded-4" alt="">
                </div>
                <div class="col-lg-6 content aos-init aos-animate align-content-center" data-aos="fade-up" data-aos-delay="200">
                    <p>
                        Mentoring doctoral and postgraduate scholars through innovative research projects. Providing academic supervision, technical expertise, and strategic direction to ensure high-quality outcomes, publication-ready results, and solutions with societal impact.
                    </p>
                    <div class="text-center my-3">
                        <button class="btn btn-primary bg-gradient"><a href="<?php echo home_url('/research-guidance'); ?>" class="text-light">Dive Deeper into the Full Insights</a><i class="fa fa-long-arrow-right text-light px-2" aria-hidden="true"></i></button>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Section - 4 -->
    <section class="health-wellness section" style="background: #f0e9d0;">
        <div class="container my-5">
            <div class="row gy-4">
                <h3 class="text-center font-bold">
                    Peer Reviewer
                </h3>
                <p class="fst-italic text-center">
                    Guardian of Research Quality | Advancing Knowledge Through Rigorous Review | Upholding the Standards of Science | Trusted Voice in Scholarly Evaluation | Strengthening the Academic Community
                </p>
                <div class="col-lg-6 content aos-init aos-animate align-content-center" data-aos="fade-up" data-aos-delay="200">
                    <p>
                        Serving as a trusted evaluator for national and international journals and conferences. Ensuring research integrity by assessing originality, methodology, and significance, thereby upholding academic standards and contributing to the advancement of scientific knowledge.
                    </p>
                    <div class="text-center my-3">
                        <button class="btn btn-success bg-gradient"><a href="#" class="text-light">Dive Deeper into the Full Insights</a><i class="fa fa-long-arrow-right text-light px-2" aria-hidden="true"></i></button>
                    </div>
                </div>
                <div class="col-lg-6 position-relative align-self-start aos-init aos-animate text-center" data-aos="fade-up" data-aos-delay="100">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/section/section_peer_review.png" class="img-fluid rounded-4" alt="">
                </div>
            </div>
        </div>
    </section>

    <!-- Section - 5 -->
    <section class="research_interests section">
        <div class="container py-5 text-center">
            <h2 class="fw-bold"><span class="category-title">Research </span> Interests</h2>
            <p class="text-muted mb-5 px-md-5">
                Specializing in advanced domains including <strong>Artificial Intelligence</strong>, <strong>Big Data Analytics</strong>, <strong>Cloud Computing</strong>, <strong>Digital Twins</strong>, <strong>Explainable AI</strong>, and <strong>IoT</strong>. Integrating research expertise into teaching to inspire innovation, critical thinking, and problem-solving among students.
            </p>
            <div class="row">
                <div class="col-12 col-md-4 category-card">
                    <div class="category-box">
                        <img src="<?php echo get_template_directory_uri() ?>/assets/img/research/Digital Health.png" alt="Digital Health" class="category-img">
                        <div class="category-text">Digital Health</div>
                    </div>
                </div>
                <div class="col-12 col-md-4 category-card">
                    <div class="category-box">
                        <img src="<?php echo get_template_directory_uri() ?>/assets/img/research/Data Governance.png" alt="Data Governance" class="category-img">
                        <div class="category-text">Data Governance</div>
                    </div>
                </div>
                <div class="col-12 col-md-4 category-card">
                    <div class="category-box">
                        <img src="<?php echo get_template_directory_uri() ?>/assets/img/research/Big Data Analytics.png" alt="Big Data Analytics" class="category-img">
                        <div class="category-text">Big Data Analytics</div>
                    </div>
                </div>
                <div class="col-12 col-md-4 category-card">
                    <div class="category-box">
                        <img src="<?php echo get_template_directory_uri() ?>/assets/img/research/Explainable AI(XAI).png" alt="Explainable AI" class="category-img">
                        <div class="category-text">Explainable AI (XAI)</div>
                    </div>
                </div>
                <div class="col-12 col-md-4 category-card">
                    <div class="category-box">
                        <img src="<?php echo get_template_directory_uri() ?>/assets/img/research/Federated Learning.png" alt="Federated Learning" class="category-img">
                        <div class="category-text">Federated Learning</div>
                    </div>
                </div>
                <div class="col-12 col-md-4 category-card">
                    <div class="category-box">
                        <img src="<?php echo get_template_directory_uri() ?>/assets/img/research/Internet of Things.png" alt="Internet of Things" class="category-img">
                        <div class="category-text">Internet of Things</div>
                    </div>
                </div>
                <div class="col-12 col-md-4 category-card">
                    <div class="category-box">
                        <img src="<?php echo get_template_directory_uri() ?>/assets/img/research/Counterfactual Explanation.png" alt="Counterfactual Explanation" class="category-img">
                        <div class="category-text">Counterfactual Explanation</div>
                    </div>
                </div>
                <div class="col-12 col-md-4 category-card">
                    <div class="category-box">
                        <img src="<?php echo get_template_directory_uri() ?>/assets/img/research/Causal AI.png" alt="Causal AI" class="category-img">
                        <div class="category-text">Causal AI</div>
                    </div>
                </div>
                <div class="col-12 col-md-4 category-card">
                    <div class="category-box">
                        <img src="<?php echo get_template_directory_uri() ?>/assets/img/research/Digital Twins Technology.png" alt="Digital Twins Technology" class="category-img">
                        <div class="category-text">Digital Twins Technology</div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- Section - Professional Membership  -->
    <section id="service-details" class="service-details section">
        <div class="container">
            <h4 class="text-center">Professional Membership</h4>
            <p class="text-muted mb-3 px-md-5">
                Associated with Distinguished Academic & Research Networks | Strengthening Academia through Professional Membership and Collaboration | Global Collaboration and Local Transformation | Part of Prestigious Academic Networks
            </p>
            <div class="row gy-5">
                <div class="col-lg-5 position-relative align-self-start aos-init aos-animate" data-aos="fade-up" data-aos-delay="100">
                    <img src="<?php echo get_template_directory_uri() ?>/assets/img/section/section_professional_membership.png" class="img-fluid rounded-4" alt="Professional Membership">
                </div>
                <div class="col-lg-7 content aos-init aos-animate" data-aos="fade-up" data-aos-delay="200">
                    <p class="text-muted">Active member of prestigious academic and professional societies such as the Computer Society of India and the International Association of Engineers. These memberships foster collaboration, professional growth, and contribution to global knowledge networks.
                    </p>

                    <div class="accordion" id="intJournalAccordion">
                        <!-- Publication 1 -->
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="intHeading1">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#intCollapse1">
                                    OITS - Orissa Information Technology Society
                                </button>
                            </h2>
                            <div id="intCollapse1" class="accordion-collapse collapse" data-bs-parent="#intJournalAccordion">
                                <div class="accordion-body">
                                    Life Member of Orissa Information Technology Society (OITS) since 1999.
                                </div>
                            </div>
                        </div>
                        <!-- Publication 2 -->
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="intHeading2">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#intCollapse2">
                                    CSI - Computer Society of India
                                </button>
                            </h2>
                            <div id="intCollapse2" class="accordion-collapse collapse" data-bs-parent="#intJournalAccordion">
                                <div class="accordion-body">
                                    Life Member of Computer Society of India (CSI) since 2015
                                </div>
                            </div>
                        </div>
                        <!-- Publication 3 -->
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="intHeading3">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#intCollapse3">
                                    AIENG - International Association of Engineers
                                </button>
                            </h2>
                            <div id="intCollapse3" class="accordion-collapse collapse" data-bs-parent="#intJournalAccordion">
                                <div class="accordion-body">
                                    Member of the International Association of Engineers (AIENG) since 2016
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>



    <!-- Section - 5 -->
    <section class="blog section">
        <div class="container my-5">
            <div class="row gy-4">
                <h3 class="text-center font-bold">
                    Participation in Seminars, Conferences & Workshops
                </h3>
                <p class="text-muted text-center">
                    Learning, Sharing, Leading: A Lifelong Commitment to Learning
                    Engaging with the Academic World, Where Ideas Converge From Attendee to Influencer
                </p>
                <div class="col-lg-6 position-relative align-self-start aos-init aos-animate" data-aos="fade-up" data-aos-delay="100">
                    <img src="<?php echo get_template_directory_uri() ?>/assets/img/section/section_participation_seminar.png" class="img-fluid rounded-4" alt="">
                </div>
                <div class="col-lg-6 content aos-init aos-animate align-content-center" data-aos="fade-up" data-aos-delay="200">
                    <p class="text-muted">
                        Engaging in national and international academic events as a participant, presenter, and resource person. These platforms provide opportunities for knowledge exchange, networking, and staying updated on the latest research and technological advancements.
                    </p>
                    <div class="text-center my-3">
                        <button class="btn btn-primary bg-gradient"><a href="<?php echo home_url('/seminar-conference')?>" class="text-light">Dive Deeper into the Full Insights</a><i class="fa fa-long-arrow-right text-light px-2" aria-hidden="true"></i></button>
                    </div>
                </div>
            </div>
        </div>
    </section>




















    <!-- Section - 1 / Research Publication -->
    <section id="about" class="about section">
        <div class="container my-5">
            <div class="row gy-4">
                <div class="col-lg-6 position-relative align-self-start aos-init aos-animate" data-aos="fade-up" data-aos-delay="100">
                    <img src="https://camo.githubusercontent.com/c2fd2f94aa55544327fc8ed8901aedb2eec8e3535243452b43646eb8086efe1a/68747470733a2f2f796176757a63656c696b65722e6769746875622e696f2f73616d706c652d696d616765732f696d6167652d34342e6a7067" class="w-100 rounded-4" style="height: 360px" alt="">
                </div>
                <div class="col-lg-6 content aos-init aos-animate align-content-center" data-aos="fade-up" data-aos-delay="200">
                    <h3>Research Publication</h3>
                    <p class="fst-italic text-justify">
                        The research journey reflects a commitment to innovation, discovery, and academic excellence. Below is a categorized list of peer-reviewed publications, highlighting contributions to international journals, national journals, and other scholarly works. Click on each section to explore the detailed list of publications.
                    </p>
                </div>
            </div>
        </div>
        <section id="service-details" class="service-details section">
            <div class="container">
                <!-- Complete Accordion Setup -->
                <?php
                $researches = get_researches();
                $keys = array_keys($researches);
                ?>

                <div class="row gy-5">
                    <!-- Sidebar Tabs -->
                    <div class="col-lg-3" data-aos="fade-up" data-aos-delay="100">
                        <div class="service-box">
                            <h4>Research List</h4>
                            <div class="services-list">
                                <div class="nav flex-column nav-pills mb-3" id="pubTab" role="tablist" aria-orientation="vertical">
                                    <?php foreach ($researches as $key => $category): ?>
                                        <button
                                            class="nav-link text-start text-decoration-none py-4 <?php echo ($key === $keys[0]) ? 'active' : ''; ?>"
                                            id="<?php echo esc_attr($key); ?>-tab"
                                            data-bs-toggle="pill"
                                            data-bs-target="#<?php echo esc_attr($key); ?>"
                                            type="button"
                                            role="tab"
                                            aria-controls="<?php echo esc_attr($key); ?>"
                                            aria-selected="<?php echo ($key === $keys[0]) ? 'true' : 'false'; ?>">
                                            <i class="bi bi-chevron-right"></i>
                                            <?php echo ucwords(str_replace('_', ' ', $key)); ?>
                                        </button>
                                        <hr class="my-2 text-muted">
                                    <?php endforeach; ?>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Tab Content -->
                    <div class="col-lg-9 ps-lg-5" data-aos="fade-up" data-aos-delay="200">
                        <div class="tab-content" id="pubTabContent">
                            <?php foreach ($researches as $key => $category): ?>
                                <div class="tab-pane fade <?php echo ($key === $keys[0]) ? 'show active' : ''; ?>"
                                    id="<?php echo esc_attr($key); ?>"
                                    role="tabpanel"
                                    aria-labelledby="<?php echo esc_attr($key); ?>-tab">

                                    <div class="mb-4">
                                        <h4 class="fw-bold"><?php echo esc_html($category->title); ?></h4>
                                        <p class="text-muted"><?php echo esc_html($category->description); ?></p>
                                    </div>

                                    <?php render_research_accordion($category->data, ucfirst(str_replace('_', '', $key))); ?>
                                </div>
                            <?php endforeach; ?>
                        </div>
                    </div>
                </div>

            </div>
        </section>
    </section>

    <ul class="nav nav-tabs justify-content-center mb-4" id="myTab" role="tablist">
        <li class="nav-item" role="presentation">
            <button class="nav-link active" id="books-chapter-tab" data-bs-toggle="tab" data-bs-target="#books-chapter" type="button" role="tab">Books Chapter</button>
        </li>
        <li class="nav-item" role="presentation">
            <button class="nav-link" id="books-tab" data-bs-toggle="tab" data-bs-target="#books" type="button" role="tab">Books</button>
        </li>
        <li class="nav-item" role="presentation">
            <button class="nav-link" id="research-project-tab" data-bs-toggle="tab" data-bs-target="#research-project" type="button" role="tab">Research Project</button>
        </li>
        <li class="nav-item" role="presentation">
            <button class="nav-link" id="research-guidance-tab" data-bs-toggle="tab" data-bs-target="#research-guidance" type="button" role="tab">Research Guidance</button>
        </li>
        <li class="nav-item" role="presentation">
            <button class="nav-link" id="consultancy-tab" data-bs-toggle="tab" data-bs-target="#consultancy" type="button" role="tab">Consultancy</button>
        </li>
    </ul>

    <div class="tab-content" id="myTabContent">
        <!-- Section - 2 / Books Chapter -->
        <div class="tab-pane fade show active" id="books-chapter" role="tabpanel">
            <div class="container my-5">
                <div class="row gy-4">
                    <div class="col-lg-6 content align-content-center aos-init aos-animate" data-aos="fade-up" data-aos-delay="200">
                        <h3>Book Chapters</h3>

                        <p class="fst-italic text-justify">
                            The following book chapters reflect significant research contributions in the fields of Artificial Intelligence, Cybersecurity, IoT, Digital Health, and Sustainable Technologies. These chapters have been published by reputed publishers such as CRC Press, Springer, IGI Global, and Scrivener Publishing.
                        </p>
                    </div>
                    <div class="col-lg-6 position-relative aos-init aos-animate text-center" data-aos="fade-up" data-aos-delay="100">
                        <img src="https://sample-files.com/downloads/images/jpg/landscape_hires_4000x2667_6.83mb.jpg" class="img-fluid rounded-4 w-75" alt="">
                    </div>
                    <div class="col-12" style="place-items: center;">

                        <ul class="list-unstyled w-75">
                            <li class="mb-3"><i class="bi bi-check2-all"></i> Pragnya Das, Satya Narayan Tripathy, and Kali Prasad Rath — "Artificial Intelligence-Based Medical Imaging for Cancer", ICORSVB-2025, ISBN: 978-81-984602-3-3, pp. 71, Feb. 2025.</li>
                            <li class="mb-3"><i class="bi bi-check2-all"></i> Lalit Kumar Behera, Satya Narayan Tripathy, and Tumbanath Samantara — "Integrating Deep Learning into Decision-Making Systems by Medical Image Analysis for Advanced Disease Diagnosis", ICORSVB-2025, ISBN: 978-81-984602-3-3, pp. 61, Feb. 2025.</li>
                            <li class="mb-3"><i class="bi bi-check2-all"></i> Pragnya Das, Satya Narayan Tripathy — "Analysis of CT Scan Lung Cancer Image for Early Prediction", SMSI-2024, CRC Press, ISBN: 9781032980409, DOI: 10.1201/9781003596776-24, pp. 115-119.</li>
                            <li class="mb-3"><i class="bi bi-check2-all"></i> Lalit Kumar Behera, Satya Narayan Tripathy — "e-healthcare system for skin care", SMSI-2024, CRC Press, DOI: 10.1201/9781003596776-44, pp. 215-219.</li>
                            <li class="mb-3"><i class="bi bi-check2-all"></i> Diptimayee Sahu, Satya Narayan Tripathy, Sisira Kumar Kapat, Soujanya Morty — "A DNN Approach to Design a Smart Security System for Android Platform", IGI Global, ISBN13: 9798369311868, DOI: 10.4018/979-8-3693-1186-8.ch001.</li>
                            <li class="mb-3"><i class="bi bi-check2-all"></i> Om Prakash Samantray, Satya Narayan Tripathy — "An Efficient Hybrid Approach for Malware Detection using Frequent Opcodes and API Call Sequences", LNEE, Vol. 968, DOI: 10.1007/978-981-19-7346-8_63, Feb. 2023.</li>
                            <li class="mb-3"><i class="bi bi-check2-all"></i> Om Prakash Samantray, Satya Narayana Tripathy — "IoT-Malware Classification Model Using Byte Sequences and Supervised Learning Techniques", LNNS, Vol. 201, DOI: 10.1007/978-981-16-0666-3_6.</li>
                            <li class="mb-3"><i class="bi bi-check2-all"></i> Satya Narayan Tripathy, Sisira Kumar Kapat, Susanta Kumar Das — "Security Threats and Vulnerabilities in E-business", in *Cyber Security in Parallel and Distributed Computing*, Scrivener Publishing, ISBN: 9781119488057, pp. 51-59.</li>
                            <li class="mb-3"><i class="bi bi-check2-all"></i> Satya Narayan Tripathy, Sisira Kumar Kapat — "UGC Regulations, 2016: A Step in the Right Direction...", B.R. International Publication, ISBN: 978-81-932419-8-1, pp. 144–148.</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <!-- Section - 3 / Book -->
        <div class="tab-pane fade" id="books" role="tabpanel">
            <div class="container my-5">
                <div class="row gy-4">
                    <div class="col-lg-6 position-relative text-center aos-init aos-animate" data-aos="fade-up" data-aos-delay="100">
                        <img src="https://www.sample-videos.com/img/Sample-jpg-image-10mb.jpg" class="img-fluid rounded-4 w-75" alt="">
                    </div>
                    <div class="col-lg-6 content aos-init aos-animate align-content-center" data-aos="fade-up" data-aos-delay="200">
                        <h3>Books</h3>
                        <ul class="list-unstyled">
                            <li><i class="bi bi-check2-all"></i> Satya Narayan Tripathy — “Digital Twin Technology: Concepts, Architecture, Applications, and Insights”, Amazon Kindle Direct Publishing, ISBN-13: 979-8292717096, ASIN: B0FJ28XG45, 319 pages.</li>
                        </ul>
                    </div>
                </div>

            </div>
        </div>

        <!-- Section - 4 / Research Project -->
        <div class="tab-pane fade" id="research-project" role="tabpanel">
            <div class="container my-5">
                <div class="row gy-4">
                    <div class="col-lg-6 content aos-init aos-animate" data-aos="fade-up" data-aos-delay="200">
                        <h3>Research Project</h3>
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
                    <div class="col-lg-6 position-relative align-self-start aos-init aos-animate" data-aos="fade-up" data-aos-delay="100">
                        <img src="https://camo.githubusercontent.com/c2fd2f94aa55544327fc8ed8901aedb2eec8e3535243452b43646eb8086efe1a/68747470733a2f2f796176757a63656c696b65722e6769746875622e696f2f73616d706c652d696d616765732f696d6167652d34342e6a7067" class="img-fluid rounded-4" alt="">
                    </div>
                </div>

            </div>
        </div>

        <!-- Section - 5 / Research Guidance -->
        <div class="tab-pane fade" id="research-guidance" role="tabpanel">
            <div class="container my-5">
                <div class="card shadow-sm mb-4">
                    <div class="card-body">
                        <h3 class="card-title fw-bold mb-3">Research Guidance</h3>

                        <!-- Doctoral Research Guidance -->
                        <div class="mb-4">
                            <h5 class="fw-bold">Doctoral Research Guidance</h5>

                            <!-- Awarded Research Work -->
                            <div class="mt-3">
                                <h6 class="fw-semibold text-primary">Awarded Research Work</h6>
                                <ul class="ps-3">
                                    <li class="mb-2">
                                        <strong>Sisira Kumar Kapat</strong> — “An Intelligent Spyware Detection System based on Association Mining”<br>
                                        <small>Reg. No: 21/2016-17 | Notification No: 3530/EC-II (M.Phil./Ph.D.)/2022 dated 30/09/2022</small>
                                    </li>
                                    <li class="mb-2">
                                        <strong>Binayak Panda</strong> — “Designing an Optimizing Strategy for Malware Analysis using Innovative Techniques from Data Mining”<br>
                                        <small>Reg. No: 65/2015-16 | Notification No: 2994/EC-II (M.Phil./Ph.D.)/2022 dated 30/08/2022</small>
                                    </li>
                                    <li class="mb-2">
                                        <strong>Om Prakash Samantray</strong> — “A Study to Develop a Knowledge Domain Analyzer using Data Mining Concepts for Malware Analysis”<br>
                                        <small>Reg. No: 67/2015-16 | Notification No: 1669/EC-II (M.Phil./Ph.D.)/2022 dated 31/05/2022</small>
                                    </li>
                                </ul>
                            </div>

                            <!-- Ongoing Research Work -->
                            <div class="mt-4">
                                <h6 class="fw-semibold text-primary">Ongoing Research Work</h6>
                                <ul class="ps-3">
                                    <li class="mb-2">
                                        <strong>Diptimayee Sahu</strong> — "Android Malware Detection using Deep Learning Approach"<br>
                                        <small>Reg. No: 11/U-2019</small>
                                    </li>
                                    <li class="mb-2">
                                        <strong>Dibas Kumar Hembram</strong> — “Stages of Heart Disease Prediction Applying Explainable Artificial Intelligence Techniques”<br>
                                        <small>Reg. No: 41/U-2020</small>
                                    </li>
                                    <li class="mb-2">
                                        <strong>Pragnya Das</strong> — "Hybrid Ensemble Deep Learning Approach for Detection of Cancer"<br>
                                        <small>Reg. No: 43/U-2020</small>
                                    </li>
                                    <li class="mb-2">
                                        <strong>Lalit Kumar Behera</strong> — "Enhancing Diagnostic Accuracy and Explainability in Medical Imaging with Deep Learning and XAI"<br>
                                        <small>Reg. No: 20/U-2020</small>
                                    </li>
                                </ul>
                            </div>
                        </div>

                        <!-- Master Degree Research Guidance -->
                        <div class="mt-4">
                            <h5 class="fw-bold">Master Degree Research Guidance</h5>
                            <ul class="ps-3">
                                <li class="mb-2">
                                    <strong>Laxminarayan Dash</strong> — “Sensor-Based Data Acquisition for CVD System”<br>
                                    <small>Reg. No: 01479/2019 | Roll No: 23COMP010</small>
                                </li>
                                <li class="mb-2">
                                    <strong>Chinmaya Kumar Panda</strong> — “Designing Interface for Body Composition Analysis”<br>
                                    <small>Reg. No: 20277/2023 | Roll No: 23COMP006</small>
                                </li>
                                <li class="mb-2">
                                    <strong>Beadprakasha Pattnaik</strong> — “Explainable AI and Counterfactuals in CVD System”<br>
                                    <small>Reg. No: 14651/2020 | Roll No: 23COMP002</small>
                                </li>
                                <li class="mb-2">
                                    <strong>Mandakini Parida</strong> — “Model Development and Evaluation for CVD Prediction”<br>
                                    <small>Reg. No: 20282/2023 | Roll No: 23COMP006</small>
                                </li>
                                <li class="mb-2">
                                    <strong>Ranjan Gouda</strong> — “System Design of CVD Risk Prediction System”<br>
                                    <small>Reg. No: 09456/2017 | Roll No: 23COMP019</small>
                                </li>
                                <li class="mb-2">
                                    <strong>Nilanchala Nahak</strong> — “Database and Interface Design for CVD System”<br>
                                    <small>Reg. No: 21186/2023 | Roll No: 23COMP014</small>
                                </li>
                                <li class="mb-2">
                                    <strong>Sritam Pradhan</strong> — “Input Interface Designing of Online Examination System”<br>
                                    <small>Reg. No: 00540/2019 | Roll No: 23COMP025</small>
                                </li>
                                <li class="mb-2">
                                    <strong>Binayak Sethy</strong> — “Doctor Appointment Web APP”<br>
                                    <small>Reg. No: 20181/2020 | Roll No: 23COMP005</small>
                                </li>
                                <li class="mb-2">
                                    <strong>Sudhir Bishoyi</strong> — “Output Interface Designing of Examination System”<br>
                                    <small>Reg. No: 44753/2020 | Roll No: 23COMP027</small>
                                </li>
                                <li class="mb-2">
                                    <strong>Binayak Dash</strong> — “LingOLearn (Language Learning Web APP)”<br>
                                    <small>Reg. No: 06421/2020 | Roll No: 23COMP004</small>
                                </li>
                                <li class="mb-2">
                                    <strong>Nayan Mahapatra</strong> — “XX”<br>
                                    <small>Reg. No: CC | Roll No: MTC116</small>
                                </li>
                                <li class="mb-2">
                                    <strong>Ankita Sabata</strong> — “Android Malware Detection using Association Mining”<br>
                                    <small>Year: 2021</small>
                                </li>
                                <li class="mb-2">
                                    <strong>Dipika Ratha</strong> — “Data mining methods to study malware behavior and their Specifications”<br>
                                    <small>Year: 2019</small>
                                </li>
                                <li class="mb-2">
                                    <strong>Sapana Kumar Padhy</strong> — “Detection of malicious android application using permission Mapping”<br>
                                    <small>Year: 2019</small>
                                </li>
                                <li class="mb-2">
                                    <strong>Sushree Smita Nanda</strong> — “A structural Analysis of android malware and its detection based on data mining approach”<br>
                                    <small>Year: 2019</small>
                                </li>
                                <li class="mb-2">
                                    <strong>Sachin Kumar Patra</strong> — “Fine grained android malware detection using data mining”<br>
                                    <small>Year: 2019</small>
                                </li>
                                <li class="mb-2">
                                    <strong>Mrutyunjaya Satapathy</strong> — “Applying data mining approach for threat analysis in android environment”<br>
                                    <small>Year: 2019</small>
                                </li>
                                <li class="mb-2">
                                    <strong>Sashmita Kumari Panda</strong> — “A Study on Performance Evaluation of Classifiers in Malware Classification”<br>
                                    <small>Reg. No: 52/2016</small>
                                </li>
                                <li class="mb-2">
                                    <strong>Alisha Padhy</strong> — “A Study and Analysis of Malware Security Threats and Risks Anatomy”<br>
                                    <small>Reg. No: 48/2016</small>
                                </li>
                                <li class="mb-2">
                                    <strong>Diptimayee Sahu</strong> — “A Malware Detection model by EULA classification using Text Mining”<br>
                                    <small>Roll No: MTC116</small>
                                </li>
                                <li class="mb-2">
                                    <strong>Manoswini Mohanty</strong> — “An Adware Detection System using Classification Mining”<br>
                                    <small>Reg. No: 30047/2015 | Roll No: MTC316</small>
                                </li>
                                <li class="mb-2">
                                    <strong>Giribala Sahu</strong> — “A Study and Analysis of Trojan Horse using Classification”<br>
                                    <small>Reg. No: 49/2014 | Roll No: MTC1015</small>
                                </li>
                                <li class="mb-2">
                                    <strong>M. Soujanya</strong> — “A Study and Classification of Spyware using Detection Tree Analysis”<br>
                                    <small>Reg. No: 51/2014 | Roll No: MTC215</small>
                                </li>
                                <li class="mb-2">
                                    <strong>Sasmita Kumari Choudhury</strong> — “A Comparative Study on Botnet using Classification Mining”<br>
                                    <small>Reg. No: 70/1995 | Roll No: MTC915</small>
                                </li>
                                <li class="mb-2">
                                    <strong>Debasish Pradhan</strong> — “A Study and Classification of ROOTKITs Using Decision Tree Analysis”<br>
                                    <small>Reg. No: 46/2014 | Roll No: MTC315</small>
                                </li>
                                <li class="mb-2">
                                    <strong>Sisira Kumar Kapat</strong> — “A Spyware Detection System with a Comparative Study of Spywares using Classification Rule Mining”<br>
                                    <small>Reg. No: 47/2013 | Roll No: MTC614</small>
                                </li>
                                <li class="mb-2">
                                    <strong>Shasanka Sekhar Panda</strong> — “A Comparative Study and Performance Analysis of Adware Detection Technique using Classification Rule Mining”<br>
                                    <small>Reg. No: 3552/2006 | Roll No: MTC1214</small>
                                </li>
                                <li class="mb-2">
                                    <strong>Ramakrushna Dash</strong> — “A Comparative Study of Worm Detection Techniques using Classification Rule Mining”<br>
                                    <small>Reg. No: 45/2013 | Roll No: MTC0114</small>
                                </li>
                                <li class="mb-2">
                                    <strong>Mamarani Sahu</strong> — “A Key Logger Detection Architecture with Analysis of some classification algorithms using Key Logger data”<br>
                                    <small>Reg. No: 42/2013 | Roll No: MTC1514</small>
                                </li>
                                <li class="mb-2">
                                    <strong>Chaitanya Patnaik</strong> — “A Study and Analysis on SQL Injection Attacking Process”<br>
                                    <small>Reg. No: 6147/1982</small>
                                </li>
                                <li class="mb-2">
                                    <strong>Aratibala Sahu</strong> — “A Comprehensive Study and Analysis on Browser Hijackers Attacking Process”<br>
                                    <small>Reg. No: 2182/2012</small>
                                </li>
                                <li class="mb-2">
                                    <strong>Sugyani Panigrahi</strong> — “A Study on Browser Hijackers Attacking Process”<br>
                                    <small>Reg. No: 2194/2012</small>
                                </li>
                                <li class="mb-2">
                                    <strong>Jaya Panigrahi</strong> — “A Comprehensive Study and Analysis on Phishing Attacking Process”<br>
                                    <small>Reg. No: 128/2002</small>
                                </li>
                                <li class="mb-2">
                                    <strong>Gayatri Kumari Panda</strong> — “A Study and Analysis on Exploit Attacking Process”<br>
                                    <small>Reg. No: 2185/2012</small>
                                </li>
                                <li class="mb-2">
                                    <strong>Prasanta Kumar Panda</strong> — “A Comprehensive Study and Analysis on Backdoor Attacking Process”<br>
                                    <small>Reg. No: 2190/2012</small>
                                </li>
                                <li class="mb-2">
                                    <strong>Sreemayee Padhi</strong> — “A Study and Analysis on Adware Attacking Process”<br>
                                    <small>Reg. No: 2193/2012</small>
                                </li>
                                <li class="mb-2">
                                    <strong>Deeptimayee Dash</strong> — “A Study on Machine Learning Approaches for Malware Analysis”<br>
                                    <small>Reg. No: 2184/2012</small>
                                </li>
                                <li class="mb-2">
                                    <strong>M. Biswajit</strong> — “A Study on Trojan Attacking Process”<br>
                                    <small>Reg. No: 2186/2012</small>
                                </li>
                                <li class="mb-2">
                                    <strong>M. Venkata Laxmi Srinivas</strong> — “A Study and Analysis on Botnet Attacking Process”<br>
                                    <small>Reg. No: 2187/2012</small>
                                </li>
                                <li class="mb-2">
                                    <strong>Ranjeeta Kumbhar</strong> — “A Study and Analysis on Spyware Attacking Process for Malware Detection”<br>
                                    <small>Reg. No: 2191/2012</small>
                                </li>
                                <li class="mb-2">
                                    <strong>Swagatika Kar</strong> — “A Study on Data Mining Approaches for Malware Analysis”<br>
                                    <small>Reg. No: 2195/2012</small>
                                </li>
                                <li class="mb-2">
                                    <strong>Uma Shankar Mohanty</strong> — “An Exhaustive Study on Keylogger Attacking Process”<br>
                                    <small>Reg. No: 2196/2012</small>
                                </li>

                            </ul>
                        </div>
                    </div>
                </div>
            </div>

        </div>

        <!-- Section - 6 / Consultancy Services -->
        <div class="tab-pane fade" id="consultancy" role="tabpanel">
            <div class="container my-5">
                <div class="row gy-4">
                    <div class="col-lg-6 content aos-init aos-animate" data-aos="fade-up" data-aos-delay="200">
                        <h3>Consultancy Services</h3>
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
                    <div class="col-lg-6 position-relative align-self-start aos-init aos-animate" data-aos="fade-up" data-aos-delay="100">
                        <img src="https://www.sample-videos.com/img/Sample-jpg-image-10mb.jpg" class="img-fluid rounded-4" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- Section - 7 / Participation in Seminars and Conferences -->
    <section>
        <div class="card container shadow-sm pt-5">
            <div class="row g-0">
                <div class="col-md-5 text-center">
                    <img src="<?php echo get_template_directory_uri() ?>/assets/img/research_seminar.jpg" class="img-fluid rounded-4 w-75" alt="Seminar/Conference Participation">
                </div>
                <div class="col-md-7 align-content-center">
                    <div class="card-body">
                        <h4 class="card-title fw-bold">Participation in Seminars & Conferences</h4>
                        <p class="card-text text-muted text-justify">
                            Engaged in various international and national conferences, seminars, and workshops on cutting-edge technologies and academic advancements, showcasing active involvement in the global research and academic community.
                        </p>
                        <button class="btn btn-outline-success" type="button" data-bs-toggle="collapse" data-bs-target="#conferenceDetails">
                            View Participation Details
                        </button>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="container p-5">

                        <div class="collapse mt-3" id="conferenceDetails">
                            <h6 class="fw-bold">International</h6>
                            <hr class="mb-2">
                            <ul class="small ps-3 mb-4">
                                <li class="mb-2">Participated in the <strong>5th International Conference on Machine Learning, Internet of Things and Big Data (ICMIB-2025)</strong>, organized by the Department of Computer Science Engineering, Parala Maharaja Engineering College, Berhampur, during 4th–6th April 2025, with publication support from Springer.</li>
                                <li class="mb-2">Participated in the <strong>UGC-sponsored International Conference</strong> on “Cross Cultural Dimensions of Management: Issues and Challenges in the Era of Globalization,” organized by the Department of Business Administration, Berhampur University, Berhampur, Odisha, on 24th–25th November 2016.</li>
                                <li class="mb-2">Participated in the <strong>UGC-sponsored International Conference on Analysis and Applications (ICAA-2012)</strong>, organized by the Department of Mathematics, Berhampur University, Odisha, on 20th–21st July 2012.</li>
                                <li class="mb-2">Participated in the <strong>International Conference on Wireless Technology: Current Issues and Applications</strong>, organized by the Regional College of Management, Bhubaneswar, Odisha, on 14th July 2007.</li>
                            </ul>

                            <h6 class="fw-bold mt-4">National</h6>
                            <hr class="mb-2">
                            <ul class="small mb-3 ps-3">
                                <li class="mb-2">Participated in <strong>DST-Sponsored offline State-Level Workshop (Orientation and Sensitization Programme)</strong> on "Funding Landscapes" organized by Berhampur University, Berhampur, Odisha on 14th and 15th December 2024.</li>
                                <li class="mb-2">Participated and presented a paper in the <strong>National Seminar on “Emerging Applications of Artificial Intelligence and Data Science (NSEAAIDS-2023)”</strong> organized by P.G. Department of Computer Science, Berhampur University, Odisha on 26th–27th September 2023.</li>
                                <li class="mb-2">Participated in <strong>World Bank OHEPEE Project Sponsored Webinar</strong> on “Recent Advances in Emerging Electronics” organized by P.G. Department of Electronic Science & Technology, Berhampur University, Odisha on 22nd–23rd February 2022 (online mode).</li>
                                <li class="mb-2">Participated as a <strong>Session Chair</strong> for the topic “Edge Computing - An Emerging Paradigm of Cloud Computing” in the <strong>National Webinar on "Edge Computing and Emerging Security Technologies"</strong> organized by P.G. Department of Computer Science, Berhampur University, Odisha on 9th October 2021 (Saturday) through online mode.
                                    <br><small class="text-primary">[<a href="https://meet.google.com/zjw-jhxk-csk" target="_blank">Meet Link</a>]</small>
                                </li>
                                <li class="mb-2">Participated in <strong>UGC-sponsored National Seminar on Advances in ICT (NSAICT-2013)</strong> and presented “A Survey on Vulnerability Management for Web Security” at P.G. Department of Computer Science, Berhampur University, Odisha on 8th–9th Feb 2013.</li>
                                <li class="mb-2">Participated in <strong>UGC-sponsored National Seminar on Advances in ICT (NSAICT-2013)</strong> and presented “A Review of Vulnerability in Mobile and Wireless Security” at P.G. Department of Computer Science, Berhampur University, Odisha on 8th–9th Feb 2013.</li>
                                <li class="mb-2">Participated in <strong>National Seminar on Advancement in IT – Its Role for Protection of Environment-Vision 2020</strong> and presented “Trust Evaluation Mechanism in Ad Hoc Social Network using Communication Data Value” at Rajdhani Engineering College, Bhubaneswar, Odisha on 21st February 2008.</li>
                                <li class="mb-2">Participated and presented in <strong>UGC-sponsored National Seminar on “Advances in Information and Communication Technology”</strong> at Berhampur University, Odisha on 8th–9th February 2013.</li>
                                <li class="mb-2">Participated in the <strong>Software Freedom Day’09 Workshop</strong> organized in collaboration with CDAC Kolkata, deeprootlinux Bengaluru, and NRCFOSS at Roland Institute of Technology for Open Source Software from 19th to 21st September 2009.</li>
                                <li class="mb-2">Participated in the <strong>National Conference on “Current Trend of Information and Technology (NCIT-2007)”</strong>, sponsored by AICTE, New Delhi and organized by Krupajal Engineering College, Bhubaneswar on 16th–17th May 2007.</li>
                                <li class="mb-2">Participated in the <strong>Seminar on “Virtual Instrumentation”</strong> jointly organized by Roland Institute of Technology, Berhampur and Trident Techlabs, New Delhi on 3rd August 2007.</li>
                                <li class="mb-2">Participated and presented in <strong>National Conference (BITCON-2007)</strong> on “Innovative Information Technologies and Secure Transactions,” organized by the Department of IT, Bhilai Institute of Technology, Durg on 16th–17th March 2007.</li>
                                <li class="mb-2">Participated in the <strong>National Conference on TECHNOLOGIA-2007</strong>, organized by M.P. Christian College of Engineering and Technology, Bhilai, Chhattisgarh on 2nd–3rd March 2007.</li>
                                <li class="mb-2">Participated in <strong>ISTE-sponsored National Conference on Intelligent Systems (NCIS-07)</strong> organized by the Institute of Advanced Computer and Research, Rayagada, Odisha on 17th–18th February 2007.</li>
                                <li class="mb-2">Participated and presented in <strong>National Conference on “Innovative Computational Intelligence and Security Systems”</strong> organized by the CSE, IT, and MCA departments of Sona College of Technology, Salem, Tamil Nadu on 2nd–3rd February 2007.</li>
                                <li class="mb-2">Participated in panel discussion in <strong>AICTE-sponsored National Seminar on “Recent Advances in Certain Selected Areas of Computer Security (RACSACS)”</strong> at Dr. B.C. Roy Engineering College, Durgapur from 3rd to 5th November 2006.</li>
                                <li class="mb-2">Participated in the <strong>All India MCA Meet, RELATIONS’97</strong>, organized by the Department of Computer and Information Sciences, University of Hyderabad from 7th to 9th March 1997.</li>
                            </ul>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Accademic Profile Section -->
    <section>
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
                            <div class="px-2 py-4 text-white rounded-3 bg-warning text-center">
                                <i class="fa fa-laptop fa-2x mb-2"></i>
                                <h5 class="name text-white mt-2">Microsoft Academic</h5>
                                <small class="title">2790857415</small>
                            </div>
                        </a>
                    </div>

                </div>
            </div>
        </div>
    </section>

</main>
<?php get_footer(); ?>