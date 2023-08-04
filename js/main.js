$(document).ready(function () {


    // Sticky header ////////////////////////////////////////////////////////////////////////////

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



    // Banner Slider ////////////////////////////////////////////////////////////////////////////

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



    // Cookie Pop-up ////////////////////////////////////////////////////////////////////////////


    const crumbOverlay = document.getElementById("crumbOverlay");
    const acceptCrumbs = document.getElementById("acceptCrumbs");
    const crumbPreferenceBtn = document.getElementById("crumbPreferenceBtn");


    if (document.cookie.indexOf("cookiesAccepted=true") > -1) {
        crumbOverlay.style.display = "none";
        console.log(document.cookie);
    } else {
        crumbOverlay.style.display = "flex";
        console.log(document.cookie);
    }

    acceptCrumbs.addEventListener("click", () => {
        document.cookie = "cookiesAccepted=true; expires=Fri, 31 Dec 9999 23:59:59 GMT; path=/";
        if (document.cookie.indexOf("cookiesAccepted=true") > -1) {
            crumbOverlay.style.display = "none";
        } else {
            crumbOverlay.style.display = "flex";
        }

    });

    crumbPreferenceBtn.addEventListener("click", () => {
        crumbOverlay.style.display = "flex";
    });



    // Accreditations Slider ////////////////////////////////////////////////////////////////////

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



    // Latest Clients Slider ////////////////////////////////////////////////////////////////////

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



    // Side Menu ////////////////////////////////////////////////////////////////////////////////

    const hamburger = document.querySelector("#hamburger");
    const cover = document.querySelector("#cover");
    const sideNav = document.querySelector("#sideNav");

    function showNav() {
        console.log("show");
        sideNav.style.width = "275px";
        container.style.right = "275px";
        container.style.left = "-275px";
        cover.style.display = "block";
        cover.style.opacity = "0.5";
    }

    function hideNav() {
        console.log("hide");
        sideNav.style.width = "0";
        container.style.right = "0";
        container.style.left = "0";
        cover.style.display = "none";
        cover.style.opacity = "0";
    }

    hamburger.addEventListener("click", showNav);
    cover.addEventListener("click", hideNav);
});

