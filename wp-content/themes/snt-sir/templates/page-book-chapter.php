<?php
/*
Template Name: Book Chapter Page
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
            <span>Book Chapter Section</span>
            <h2>Book Chapter Section</h2>
        </div>

        <!-- Page Title -->
        <div class="page-title position-absolute bottom-0 w-100">
            <div class="container d-lg-flex justify-content-between align-items-center">
                <h1 class="mb-2 mb-lg-0">Book Chapter Page</h1>
                <nav class="breadcrumbs">
                    <ol>
                        <li><a href="index.html">Home</a></li>
                        <li class="current">Book Chapter Page</li>
                    </ol>
                </nav>
            </div>
        </div>
    </section>

    <!-- Section - 1 / Book Chapter -->
    <section id="about" class="about section">

        <?php
        $book_images = [
            "image_1.png",
            "image_2.png",
            "image_3.png",
            "image_4.png",
            "image_5.png",
            "image_6.png",
            "image_7.png",
            "image_8.png",
            "image_9.png",
            "image_10.png",
            "image_11.png",
            "image_12.png",
        ];
        ?>

        <!-- Book Card Carousel using Swiper -->
        <div class="container my-5">
            <div class="row gy-4 justify-content-center">
                <div class="col-lg-12">
                    <!-- Swiper -->
                    <div class="swiper bookSwiper">
                        <div class="swiper-wrapper">
                            <?php foreach ($book_images as $image): ?>
                                <div class="swiper-slide text-center d-flex justify-content-center align-items-center">
                                    <div class="book-card">
                                        <img src="<?php echo get_template_directory_uri() . '/assets/img/book/' . htmlspecialchars($image); ?>"
                                            class="shadow"
                                            alt="Book">
                                    </div>
                                </div>
                            <?php endforeach; ?>
                        </div>
                        <!-- Navigation Arrows -->
                        <div class="swiper-button-next"></div>
                        <div class="swiper-button-prev"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Body -->
    <section id="service-details" class="service-details section">
        <?php $data = get_academic_data(); ?>

        <!-- Tabs -->
        <ul class="nav nav-tabs justify-content-center mb-4" id="myTab" role="tablist">
            <?php $i = 0;
            foreach ($data as $key => $section): ?>
                <li class="nav-item" role="presentation">
                    <button class="nav-link <?= $i === 0 ? 'active' : '' ?>"
                        id="<?= $key ?>-tab"
                        data-bs-toggle="tab"
                        data-bs-target="#<?= $key ?>"
                        type="button" role="tab">
                        <?= $section->title ?>
                    </button>
                </li>
            <?php $i++;
            endforeach; ?>
        </ul>

        <!-- Tab Content -->
        <div class="tab-content" id="myTabContent">
            <?php $i = 0;
            foreach ($data as $key => $section): ?>
                <div class="tab-pane fade <?= $i === 0 ? 'show active' : '' ?>" id="<?= $key ?>" role="tabpanel">
                    <div class="container my-5">

                        <!-- Book Chapters + Books -->
                        <?php if (in_array($key, ['books_chapter', 'books'])): ?>
                            <div class="row gy-4">
                                <?php if (!empty($section->image)): ?>
                                    <!-- <div class="col-lg-6 text-center" data-aos="fade-up" data-aos-delay="100">
                                        <img src="<?= $section->image ?>" class="img-fluid rounded-4 w-75" alt="">
                                    </div> -->
                                <?php endif; ?>

                                <div class="col-lg-12 content align-content-center" data-aos="fade-up" data-aos-delay="200">
                                    <h3><?= $section->title ?></h3>
                                    <?php if (!empty($section->description)): ?>
                                        <p class="fst-italic"><?= $section->description ?></p>
                                    <?php endif; ?>
                                    <ul class="list-unstyled">
                                        <?php foreach ($section->data as $item): ?>
                                            <li class="mb-3">
                                                <i class="bi bi-check2-all"></i>
                                                <strong><?= $item->authors ?></strong> —
                                                “<?= $item->title ?>”
                                                <?php if (!empty($item->journal)): ?>, <em><?= $item->journal ?></em><?php endif; ?>
                                            <?php if (!empty($item->details)): ?>, <?= $item->details ?><?php endif; ?>
                                            </li>
                                        <?php endforeach; ?>
                                    </ul>
                                </div>
                            </div>
                        <?php endif; ?>
                    </div>
                </div>
            <?php $i++;
            endforeach; ?>
        </div>

    </section>

</main>
<?php get_footer(); ?>