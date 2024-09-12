<!--start footer -->
<footer class="footer-a">
    <div class="footer-fist-row pt40">
        <div class="container">

        </div>
        <div class="footer-abt pb40">
            <div class="container">
                <div class="row">
                    <div class="col-lg-5 vcenter">
                        <div class="footer-ree-lg">
                            <div class="footer-logo">
                                <a href="">
                                    <img src="images/logo.png" alt="jyotiart" class="footerImg" id="footerImg"> 
                                </a>
                            </div>
                            <h6 class="mt10">At Jyoti Art Process, we take pride in transforming your vision into reality with our
                            unparalleled expertise in packaging and graphic design.</h6>
                            <div class="social-links mt20">
                                <i class="fa-brands fa-facebook icon icon1"></i>
                                <i class="fa-brands fa-square-instagram icon icon2"></i>
                                <i class="fa-brands fa-youtube icon icon3"></i>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 vcenter">
                        <div class="footer-rowset">
                            <div class="col footer-head">
                                <h5>Office Location</h5>
                                <iframe class="mapSection" width="100%" height="180" id="gmap_canvas"
                                    src="https://maps.google.com/maps?q=29%2F40%2C+gali+no+12%2C+30+ft+road%2C+Vishwas+Nagar%2C+Shahdara%2C+Delhi-32&t=&z=14&ie=UTF8&iwloc=&output=embed"
                                    frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 vcenter">
                        <div class="footer-rowset">
                            <div class="col footer-head contactFooterHead">
                                <h5>JyotiArt Process </h5>

                                <ul class="contactFooter">
                                    <li>
                                        <i class="fa-solid fa-user icon"></i>&nbsp;<b>Proprieter:</b> Manish Pal
                                    </li>
                                    <li>
                                        <i class="fa-solid fa-location-dot icon"></i>&nbsp;<b>Address:</b> 29/40, gali no 12, 30 ft
                                        road,
                                        Vishwas Nagar,
                                        Shahdara, Delhi-32
                                    </li>
                                    <li>
                                        <i class="fa-solid fa-phone icon"></i>&nbsp;<b>Phone No:</b> 7982047985, 9990935076,
                                        9990810220
                                    </li>
                                    <li>
                                        <i class="fa-solid fa-envelope icon"></i>&nbsp;<b>Email Id:</b> jyotiartprocess@gmail.com
                                    </li>
                                    <li>
                                        <i class="fa-solid fa-globe icon"></i>&nbsp;<b>Website:</b> www.jyotiartprocess.com
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container ft-cpy">
            <div class="row">
                <div class="col-lg-12">
                    <div class="ft-copyright ft-r ">
                        <p class="text-center">Copyright © 2024 Jyoti Art. All rights reserved.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- end footer -->

<!--All js files-->
<script src="js/modernizr-3.5.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/js/all.min.js" integrity="sha512-u3fPA7V8qQmhBPNT5quvaXVa1mnnLSXUep5PS1qo5NRzHwG19aHmNJnj1Q8hpA/nBWZtZD4r4AX6YOt5ynLN2g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="js/jquery-3.6.0.min.js"></script>
<script src="js/bootstrap.bundle.min.js"></script>
<script src="js/app.bundle.js"></script>
<!--Common reevan script file-->
<script src="js/main.js"></script>
<script>
    $(document).ready(function() {
    const progressFill = document.querySelector(".progress-fill");
    var swiper = new Swiper(".parallax-slider", {
        speed: 1000,
        parallax: true,
        loop: true,
        autoplay: {
            delay: 10000, // Adjust autoplay delay as needed
            disableOnInteraction: false
        },
        grabCursor: true,
        effect: "creative",
        creativeEffect: {
            prev: {
                shadow: true,
                translate: [0, 0, -1000]
            },
            next: {
                translate: ["100%", 0, 0]
            }
        },
        pagination: {
            el: ".swiper-pagination",
            clickable: true
        },
        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev"
        },
        on: {
            slideChange: function () {
                // Reset progress bar when slide changes
                progressFill.style.width = '0%';
            },
            autoplayTimeLeft(s, time, progress) {
                // Update progress bar width based on autoplay time left
                progressFill.style.width = (1 - progress) * 100 + '%';
            }
        }
    });
});
</script>
<script>
        var swiper = new Swiper(".mySwiper", {
        slidesPerView: 4,
        spaceBetween: 55,
        loop: true,
        centeredSlides: true,
        autoplay: {
            delay: 2500,
            disableOnInteraction: false,
        },
        pagination: {
            el: ".swiper-pagination",
            dynamicBullets: true,
            clickable: true,
        },
        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
        },
        });
</script>
<script>
        var swiper = new Swiper(".myProduct", {
        slidesPerView: 5,
        spaceBetween: 55,
        loop: true,
        centeredSlides: true,
        autoplay: {
            delay: 2500,
            disableOnInteraction: false,
        },
        pagination: {
            el: ".swiper-pagination",
            dynamicBullets: true,
            clickable: true,
        },
        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
        },
        });
</script>
<script>
        var swiper = new Swiper(".myTeamSwiper", {
        slidesPerView: 3,
        spaceBetween: 12,
        loop: true,
        centeredSlides: true,
        autoplay: {
            delay: 2500,
            disableOnInteraction: false,
        },
        pagination: {
            el: ".swiper-pagination",
            dynamicBullets: true,
            clickable: true,
        },
        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
        },
        });
</script>
<script>    
    var swiper = new Swiper( '.swiper-container.two', {
            pagination: '.swiper-pagination',
            paginationClickable: true,
            autoplay: { 
                delay: 2000,
                pauseOnInteraction: true,
            },
            effect: 'coverflow',
            loop: true,
            centeredSlides: true,
            slidesPerView: 'auto',
            coverflow: {
                rotate: 0,
                stretch: 100,
                depth: 150,
                modifier: 1.5,
                slideShadows : false,
            }
    } );

</script>
</body>

</html>