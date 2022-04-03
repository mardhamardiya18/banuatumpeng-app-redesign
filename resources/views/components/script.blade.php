<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="vendor/jquery/jquery-3.6.0.min.js"></script>

<!-- Swiper JS -->
<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

<!-- Initialize Swiper -->
<script>
    var swiper = new Swiper(".mySwiperTesti", {
        spaceBetween: 30,
        slidesPerView: 1,
        loop: true,
        pagination: {
            el: ".swiper-pagination",
            dynamicBullets: true,
        },
        autoplay: {
            delay: 1200
        },
        breakpoints: {
            576: {
                slidesPerView: 2,
            }
        }
    });
</script>
