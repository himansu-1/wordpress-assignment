<?php
/*
Template Name: Seminar Conference Page
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
            <span>Seminar Conference</span>
            <h2>Seminar Conference</h2>
        </div><!-- End Section Title -->

        <!-- Page Title -->
        <div class="page-title position-absolute bottom-0 w-100">
            <div class="container d-lg-flex justify-content-between align-items-center">
                <h1 class="mb-2 mb-lg-0">Seminar Conference Page</h1>
                <nav class="breadcrumbs">
                    <ol>
                        <li><a href="index.html">Home</a></li>
                        <li class="current">Seminar Conference Page</li>
                    </ol>
                </nav>
            </div>
        </div>
    </section>

    <!-- Body -->
    <section id="service-details" class="service-details section">
        <div class="container">
            <!-- Complete Accordion Setup -->
            <?php
            $researches = get_researches();
            $keys = array_keys($researches);
            ?>
            <!-- Horizontal Nav Tabs -->
            <ul class="nav nav-tabs justify-content-center mb-4" id="pubTab" role="tablist">
                <?php foreach ($researches as $key => $category): ?>
                    <li class="nav-item" role="presentation">
                        <button
                            class="nav-link <?php echo ($key === $keys[0]) ? 'active' : ''; ?>"
                            id="<?php echo esc_attr($key); ?>-tab"
                            data-bs-toggle="tab"
                            data-bs-target="#<?php echo esc_attr($key); ?>"
                            type="button"
                            role="tab"
                            aria-controls="<?php echo esc_attr($key); ?>"
                            aria-selected="<?php echo ($key === $keys[0]) ? 'true' : 'false'; ?>">
                            <?php echo ucwords(str_replace('_', ' ', $key)); ?>
                        </button>
                    </li>
                <?php endforeach; ?>
            </ul>

            <!-- Tab Content -->
            <div class="tab-content" id="pubTabContent">
                <?php foreach ($researches as $key => $category): ?>
                    <div
                        class="tab-pane fade <?php echo ($key === $keys[0]) ? 'show active' : ''; ?>"
                        id="<?php echo esc_attr($key); ?>"
                        role="tabpanel"
                        aria-labelledby="<?php echo esc_attr($key); ?>-tab">
                        <div class="mb-4 text-center">
                            <h4 class="fw-bold"><?php echo esc_html($category->title); ?></h4>
                            <p class="text-muted"><?php echo esc_html($category->description); ?></p>
                        </div>
                        <?php render_research_accordion($category->data, ucfirst(str_replace('_', '', $key))); ?>
                    </div>
                <?php endforeach; ?>
            </div>

        </div>
    </section>

</main>
<?php get_footer(); ?>