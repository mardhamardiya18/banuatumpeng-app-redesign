$(document).ready(()=>{
    $(document).scroll(()=>{
        $('.navbar').toggleClass('active', $(this).scrollTop() > $('.navbar').height())
    })
})

$(document).ready(function () {
    $('.nav-link').click(function () {
        $('.nav-link').removeClass('active')
        $(this).addClass('active')
    })

})


AOS.init();

var popoverTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="popover"]'))
var popoverList = popoverTriggerList.map(function (popoverTriggerEl) {
  return new bootstrap.Popover(popoverTriggerEl)
})

$('.navbar-collapse a').click(function(){
    $(".navbar-collapse").collapse('hide');
});

// <!-- Initialize Swiper -->

    var swiper = new Swiper(".mySwiperTesti", {
        spaceBetween: 30,
        slidesPerView: 1,
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

    var swiper = new Swiper(".mySwiperBanner", {
        spaceBetween: 30,
        pagination: {
          el: ".swiper-pagination",
          dynamicBullets: true,
        },
        autoplay: {
            delay: 1200
        },
      });
     
     
      
    