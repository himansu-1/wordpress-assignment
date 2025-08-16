<!-- Footer Section -->
<section>
    <footer id="footer" class="footer">
        <div class="container footer-top">
            <div class="row gy-4">
                <div class="col-lg-4 col-md-6 footer-about">
                    <a href="index.html" class="d-flex align-items-center">
                        <span class="sitename">Dr. S N Tripathy</span>
                    </a>
                    <div class="footer-contact pt-3">
                        <p>Associate Professor</p>
                        <p class="mt-3"><strong>Phone:</strong> <span>+91 79785 28079</span></p>
                        <p><strong>Email:</strong> <span>snt.cs@buodisha.edu.in</span></p>
                    </div>
                </div>

                <div class="col-lg-2 col-md-3 footer-links">
                    <h4>Useful Links</h4>
                    <ul>
                        <li><i class="bi bi-chevron-right"></i> <a href="#">Home</a></li>
                        <li><i class="bi bi-chevron-right"></i> <a href="#">About us</a></li>
                        <li><i class="bi bi-chevron-right"></i> <a href="#">Services</a></li>
                        <li><i class="bi bi-chevron-right"></i> <a href="#">Terms of service</a></li>
                    </ul>
                </div>

                <div class="col-lg-2 col-md-3 footer-links">
                    <h4>Our Services</h4>
                    <ul>
                        <li><i class="bi bi-chevron-right"></i> <a href="#">Research Collaboration</a></li>
                        <li><i class="bi bi-chevron-right"></i> <a href="#">Project Supervision</a></li>
                        <li><i class="bi bi-chevron-right"></i> <a href="#">Research Consultancy</a></li>
                        <li><i class="bi bi-chevron-right"></i> <a href="#">Project Development</a></li>
                    </ul>
                </div>

                <div class="col-lg-4 col-md-12">
                    <h4>Follow Us</h4>
                    <p>Cras fermentum odio eu feugiat lide par naso tierra videa magna derita valies</p>
                    <div class="social-links d-flex">
                        <a href=""><i class="bi bi-twitter-x"></i></a>
                        <a href=""><i class="bi bi-facebook"></i></a>
                        <a href=""><i class="bi bi-instagram"></i></a>
                        <a href=""><i class="bi bi-linkedin"></i></a>
                    </div>
                </div>

            </div>
        </div>

        <div class="container copyright text-center mt-4">
            <p>© <span>Copyright</span> <strong class="px-1 sitename">S N Tripathy</strong> <span>All Rights Reserved</span></p>
            <div class="credits">
                Designed by <a href="#">Himansu Sekhar Sahu</a> Guided by Dr. S N Tripathy
            </div>
        </div>
    </footer>
</section>

<!-- Scroll Top -->
<a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i
        class="bi bi-arrow-up-short"></i></a>

<!-- Preloader -->
<div id="preloader"></div>

<!-- Vendor JS Files -->
<script src="<?php echo get_template_directory_uri(); ?>/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/assets/vendor/php-email-form/validate.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/assets/vendor/aos/aos.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/assets/vendor/glightbox/js/glightbox.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/assets/vendor/purecounter/purecounter_vanilla.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/assets/vendor/imagesloaded/imagesloaded.pkgd.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/assets/vendor/swiper/swiper-bundle.min.js"></script>

<!-- Main JS File -->
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/main.js"></script>

<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
<?php wp_footer(); ?>

<script>
    const bookSwiper = new Swiper('.bookSwiper', {
        slidesPerView: 4,
        slidesPerGroup: 1, // Slide one by one
        spaceBetween: 30,
        loop: true,

        autoplay: {
            delay: 1000, // 3000ms = 3 seconds
            disableOnInteraction: false, // Continue autoplay after user interaction
        },

        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },
        breakpoints: {
            0: {
                slidesPerView: 1,
            },
            576: {
                slidesPerView: 2,
            },
            768: {
                slidesPerView: 3,
            },
            992: {
                slidesPerView: 4,
            }
        }
    });


    var researchSwiper = new Swiper(".researchSwiper", {
        slidesPerView: 2,
        spaceBetween: 30,
        loop: true,
        autoplay: {
            delay: 2000,
            disableOnInteraction: false,
        },
        pagination: {
            el: ".swiper-pagination",
            clickable: true,
        },
        breakpoints: {
            0: {
                slidesPerView: 1,
            },
            576: {
                slidesPerView: 2,
            }
        }
    });
</script>

<script>
    document.addEventListener("DOMContentLoaded", () => {
        const counters = document.querySelectorAll(".counter");

        const animateCounter = (el) => {
            const target = +el.innerText;
            let current = 0;
            el.innerText = "0";

            const duration = 2000;
            const stepTime = Math.max(10, duration / target);

            const update = () => {
                const increment = Math.ceil(target / (duration / stepTime));
                current += increment;
                if (current < target) {
                    el.innerText = current;
                    setTimeout(update, stepTime);
                } else {
                    el.innerText = target.toLocaleString();
                }
            };

            update();
        };

        const observer = new IntersectionObserver((entries, obs) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    const el = entry.target;
                    animateCounter(el);
                    obs.unobserve(el); // Run only once per element
                }
            });
        }, {
            threshold: 0.6 // 60% visible
        });

        counters.forEach(counter => observer.observe(counter));
    });
</script>


</body>

</html>