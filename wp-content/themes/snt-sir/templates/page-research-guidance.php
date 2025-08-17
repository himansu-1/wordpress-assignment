<?php
/*
Template Name: Research Guidance Page
*/
get_header();
?>
<main class="main">


    <!-- Starter Section Section -->
    <section id="starter-section" class="starter-section section position-relative">
        <!-- Section Title -->
        <div class="container section-title aos-init aos-animate" data-aos="fade-up">
            <span>Research Guidance</span>
            <h2>Research Guidance</h2>
        </div>

        <!-- Page Title -->
        <div class="page-title position-absolute bottom-0 w-100">
            <div class="container d-lg-flex justify-content-between align-items-center">
                <h1 class="mb-2 mb-lg-0">Research Guidance Page</h1>
                <nav class="breadcrumbs">
                    <ol>
                        <li><a href="index.html">Home</a></li>
                        <li class="current">Research Guidance Page</li>
                    </ol>
                </nav>
            </div>
        </div>
    </section>

    <!-- Section - 1 / Research Guidance -->
    <?php
    $doctoral = get_doctoral_guidance();
    ?>
    <!-- Doctoral Research Guidance -->
    <section class="testimonial-section">
        <h2>Doctoral Research Guidance</h2>
        <p class="text-muted">Appreciation is a wonderful thing. Our goal is to respond to the call of creating the emerging leaders of tomorrow</p>

        <!-- Swiper -->
        <div class="swiper researchSwiper mt-4">
            <div class="swiper-wrapper">

                <?php foreach ($doctoral as $student): ?>
                    <div class="swiper-slide">
                        <div class="testimonial-card">
                            <img src="<?php echo get_template_directory_uri() . "/assets/img/research_guidance/" . $student['image'] ?>" alt="<?= $student['name'] ?>">
                            <div>
                                <p><?= $student['description'] ?></p>
                                <h6 class="m-0"><?= $student['name'] ?></h6>
                                <p class="text-muted">( <?= $student['designation'] ?> )</p>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>

            </div>

            <!-- Swiper Pagination -->
            <div class="swiper-pagination mt-3"></div>
        </div>
    </section>

    <section id="research-guidance" class="py-5">
        <div class="container">
            <h2 class="mb-4 text-center">Master Degree Research Guidance</h2>
            <div class="row g-4 justify-content-center">

                <?php
                // Get all profiles
                $profiles = get_master_research_guidance();
                $totalProfiles = count($profiles);

                // Pagination setup
                $perPage = 10;
                $currentPage = isset($_GET['pg']) ? (int)$_GET['pg'] : 1;
                $start = ($currentPage - 1) * $perPage;

                // Slice array for current page
                $pagedProfiles = array_slice($profiles, $start, $perPage);
                ?>

                <!-- Profile Cards -->
                <?php foreach ($pagedProfiles as $profile): ?>
                    <div class="col-md-8">
                        <div class="card shadow-sm h-100">
                            <div class="row g-0 align-items-center">
                                <!-- Image -->
                                <div class="col-3">
                                    <img src="<?= !empty($profile['image']) ? $profile['image'] : 'https://cdn.pixabay.com/photo/2015/10/05/22/37/blank-profile-picture-973460_960_720.png' ?>"
                                        class="img-fluid rounded-start"
                                        alt="<?= $profile['name'] ?>" style="height: 200px;">
                                </div>

                                <!-- Card Body -->
                                <div class="col-9">
                                    <div class="card-body">
                                        <h5 class="card-title m-0"><?= $profile['name'] ?></h5>
                                        <p class="text-muted"><?= $profile['year'] ?? 'Year Not Available' ?></p>

                                        <!-- Collapsible Section -->
                                        <div class="collapse" id="details-<?= md5($profile['name'] . $profile['title']) ?>">
                                            <p class="m-0"><strong>Title:</strong> <?= $profile['title'] ?></p>
                                            <?php if (!empty($profile['registration_no'])): ?>
                                                <p class="m-0"><strong>Reg. No:</strong> <?= $profile['registration_no'] ?></p>
                                            <?php endif; ?>
                                            <?php if (!empty($profile['roll_no'])): ?>
                                                <p class="m-0"><strong>Roll No:</strong> <?= $profile['roll_no'] ?></p>
                                            <?php endif; ?>
                                        </div>

                                        <!-- View More Button -->
                                        <button class="btn btn-primary btn-sm mt-2"
                                            type="button"
                                            data-bs-toggle="collapse"
                                            data-bs-target="#details-<?= md5($profile['name'] . $profile['title']) ?>">
                                            View More
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>

            </div>

            <!-- Pagination Section -->
            <?php
            $totalPages = ceil($totalProfiles / $perPage);
            ?>
            <div class="mt-4 text-center">
                <p class="text-muted">Total Profiles: <?= $totalProfiles ?></p>
                <nav>
                    <ul class="pagination justify-content-center">
                        <!-- Previous Button -->
                        <li class="page-item <?= ($currentPage <= 1) ? 'disabled' : '' ?>">
                            <a class="page-link" href="?pg=<?= $currentPage - 1 ?>">Previous</a>
                        </li>

                        <!-- Page Numbers -->
                        <?php for ($i = 1; $i <= $totalPages; $i++): ?>
                            <li class="page-item <?= ($i == $currentPage) ? 'active' : '' ?>">
                                <a class="page-link" href="?pg=<?= $i ?>"><?= $i ?></a>
                            </li>
                        <?php endfor; ?>

                        <!-- Next Button -->
                        <li class="page-item <?= ($currentPage >= $totalPages) ? 'disabled' : '' ?>">
                            <a class="page-link" href="?pg=<?= $currentPage + 1 ?>">Next</a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </section>


    <!-- Research Guidance Section -->
    <section id="research-guidance" class="research-guidance section">
        <?php $guidance = get_research_guidance(); ?>

        <!-- Tabs -->
        <ul class="nav nav-tabs justify-content-center mb-4" id="guidanceTab" role="tablist">
            <?php $i = 0;
            foreach ($guidance as $key => $items): ?>
                <li class="nav-item" role="presentation">
                    <button class="nav-link <?= $i === 0 ? 'active' : '' ?>"
                        id="<?= $key ?>-tab"
                        data-bs-toggle="tab"
                        data-bs-target="#<?= $key ?>"
                        type="button" role="tab">
                        <?= ucwords(str_replace("_", " ", $key)) ?>
                    </button>
                </li>
            <?php $i++;
            endforeach; ?>
        </ul>

        <!-- Tab Content -->
        <div class="tab-content" id="guidanceTabContent">
            <?php $i = 0;
            foreach ($guidance as $key => $items): ?>
                <div class="tab-pane fade <?= $i === 0 ? 'show active' : '' ?>" id="<?= $key ?>" role="tabpanel">
                    <div class="container my-4">
                        <h3 class="mb-3 text-center"><?= ucwords(str_replace("_", " ", $key)) ?></h3>
                        <ul class="list-group list-group-flush">
                            <?php foreach ($items as $item): ?>
                                <li class="list-group-item">
                                    <i class="bi bi-check2-circle text-success"></i>
                                    <strong><?= $item['name'] ?></strong> —
                                    “<?= $item['title'] ?>”
                                    <?php if (!empty($item['registration_no'])): ?>
                                        <br><small><strong>Reg. No:</strong> <?= $item['registration_no'] ?></small>
                                    <?php endif; ?>
                                    <?php if (!empty($item['notification'])): ?>
                                        <br><small><strong>Notification:</strong> <?= $item['notification'] ?></small>
                                    <?php endif; ?>
                                    <?php if (!empty($item['roll_no'])): ?>
                                        <br><small><strong>Roll No:</strong> <?= $item['roll_no'] ?></small>
                                    <?php endif; ?>
                                </li>
                            <?php endforeach; ?>
                        </ul>
                    </div>
                </div>
            <?php $i++;
            endforeach; ?>
        </div>
    </section>


</main>
<?php get_footer(); ?>