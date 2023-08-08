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
        adaptiveHeight: true,
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
    const sidenav = document.querySelector(".sidenav");

    function showNav() {
        let containerValue = window.innerWidth >= 992 ? "350px" : "275px";
        // let coverValue= window.innerWidth >= 992 ? "333px" : "258px";
        container.style.right = containerValue;
        container.style.left = "-" + containerValue;
        cover.style.visibility = "visible";
        cover.style.opacity = "0.6";
        cover.style.right = containerValue;
        cover.style.left = "-" + containerValue;
        sidenav.style.visibility = "visible";

        // Burger Icon Switch
        $('.bar1').attr('y', '12').attr('transform', 'rotate(-45 12 12)');
        $('.bar2').attr('width', '0');
        $('.bar3').attr('y', '12').attr('transform', 'rotate(45 12 12)');

    }

    function hideNav() {

        container.style.right = "0";
        container.style.left = "0";
        cover.style.right = "0";
        cover.style.left = "0";
        cover.style.opacity = "0";
        sidenav.style.visibility = "hidden";

        setTimeout(function () {
            cover.style.visibility = "hidden";
        }, 500);

        // Burger Icon Switch
        $('.bar1').attr('y', '12').attr('transform', 'rotate(0 12 12)');
        $('.bar2').attr('width', '18');
        $('.bar3').attr('y', '6').attr('transform', 'rotate(0 12 12)');

    }

    hamburger.addEventListener("click", showNav);
    cover.addEventListener("click", hideNav);

    // add event listener to listen to the width of the screen when it is resized and adjust the right and left values accordingly
    window.addEventListener("resize", function () {
        if (window.innerWidth >= 992) {
            container.style.right = "350px";
            container.style.left = "-350px";
            cover.style.right = "350px";
            cover.style.left = "-350px";
        } else {
            container.style.right = "275px";
            container.style.left = "-275px";
            cover.style.right = "275px";
            cover.style.left = "-275px";
        }
    });



});

