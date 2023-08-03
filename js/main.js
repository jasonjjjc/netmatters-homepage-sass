$(document).ready(function () {


    ////////////////////////////////////////////////////////////////////////////


    // Sticky header

    const header = document.querySelector("#header");
    let lastScroll = 0;

    const throttle = (func, time = 100) => {
        let lastTime = 0;
        return () => {
            const now = new Date();
            if (now - lastTime >= time) {
                func();
                time = now;
            }
        };
    };

    const validateHeader = () => {
        const windowY = window.scrollY;
        const windowH = window.innerHeight;
        if (windowY > windowH / 3.5) {
            // We passed the first section, set a toggable class
            header.classList.add("is-fixed");
            // Determine is we ready to animate
            if (windowY > windowH - windowH / 1.5) {
                header.classList.add("can-animate");
                if (windowY < lastScroll) {
                    // Determine if we scrolling up
                    header.classList.add("scroll-up");
                } else {
                    header.classList.remove("scroll-up");
                }
            } else {
                header.classList.remove("scroll-up");
            }
        } else {
            header.classList.remove("is-fixed", "can-animate");
        }
        lastScroll = windowY;
    };

    window.addEventListener("scroll", throttle(validateHeader, 100));

    ////////////////////////////////////////////////////////////////////////////

    ////////////////////////////////////////////////////////////////////////////

    // Banner Slider 

    $('.hero-wrapper').slick({
        autoplay: true,
        pauseOnHover: false,
        pauseOnFocus: false,
        dots: true,
        arrows: false,
        infinite: true,
        autoplaySpeed: 4000,
        cssEase: 'ease-in-out',
        speed: 300,

    });


    ////////////////////////////////////////////////////////////////////////////

    ////////////////////////////////////////////////////////////////////////////

    // Cookie Pop-up

    const cookieOverlay = document.getElementById("cookieOverlay");
    const acceptCookies = document.getElementById("acceptCookies");

    // Check if user has already accepted cookies
    if (!getCookie("cookieConsent")) {
        cookieOverlay.style.display = "flex";
    }

    acceptCookies.addEventListener("click", function () {
        setCookie("cookieConsent", "accepted", 30);
        cookieOverlay.style.display = "none";
    });

    // Other event listeners for other buttons can be added similarly

    function setCookie(name, value, days) {
        let date = new Date();
        date.setTime(date.getTime() + (days * 24 * 60 * 60 * 1000));
        const expires = "expires=" + date.toUTCString();
        document.cookie = name + "=" + value + ";" + expires + ";path=/";
    }

    function getCookie(name) {
        let nameEQ = name + "=";
        let ca = document.cookie.split(';');
        for (let i = 0; i < ca.length; i++) {
            let c = ca[i];
            while (c.charAt(0) === ' ') c = c.substring(1, c.length);
            if (c.indexOf(nameEQ) === 0) return c.substring(nameEQ.length, c.length);
        }
        return null;
    }



    const cookiePreferenceBtn = document.getElementById("cookiePreferenceBtn");

    cookiePreferenceBtn.addEventListener("click", function () {
        cookieOverlay.style.display = "flex";
    });







    ////////////////////////////////////////////////////////////////////////////

    ////////////////////////////////////////////////////////////////////////////


    // Accreditations Slider



    $('.accreditations-slider').slick({
        // control the width of the images in the slider
        variableWidth: true,
        autoplay: true,
        pauseOnHover: false,
        dots: false,
        arrows: false,
        infinite: true,
        autoplaySpeed: 4000,
        cssEase: 'ease-in-out',
        speed: 300,
        slidesToShow: 1,
        slidesToScroll: 1,
        responsive: [
            {
                breakpoint: 992,
                settings: {
                    slidesToShow: 5,
                    slidesToScroll: 1,
                    infinite: true,
                    dots: false,
                    arrows: false,
                }
            },
            {
                breakpoint: 768,
                settings: {
                    slidesToShow: 4,
                    slidesToScroll: 1,
                    infinite: true,
                    dots: false,
                    arrows: false,
                }
            },
            {
                breakpoint: 576,
                settings: {
                    slidesToShow: 3,
                    slidesToScroll: 1,
                    infinite: true,
                    dots: false,
                    arrows: false,
                }
            },
            {
                breakpoint: 400,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 1,
                    infinite: true,
                    dots: false,
                    arrows: false,
                }
            },
        ]
    });


    // Latest Clients Slider

    $('.latest-clients-list').slick({
        // control the width of the images in the slider
        variableWidth: true,
        autoplay: true,
        pauseOnHover: false,
        dots: false,
        arrows: false,
        infinite: true,
        autoplaySpeed: 4000,
        cssEase: 'ease-in-out',
        speed: 300,
        slidesToShow: 1,
        slidesToScroll: 1,
        responsive: [
            {
                breakpoint: 992,
                settings: {
                    slidesToShow: 5,
                    slidesToScroll: 1,
                    infinite: true,
                    dots: false,
                    arrows: false,
                }
            },
            {
                breakpoint: 768,
                settings: {
                    slidesToShow: 4,
                    slidesToScroll: 1,
                    infinite: true,
                    dots: false,
                    arrows: false,
                }
            },
            {
                breakpoint: 576,
                settings: {
                    slidesToShow: 3,
                    slidesToScroll: 1,
                    infinite: true,
                    dots: false,
                    arrows: false,
                }
            },
            {
                breakpoint: 400,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 1,
                    infinite: true,
                    dots: false,
                    arrows: false,
                }
            },
        ]
    });




});

