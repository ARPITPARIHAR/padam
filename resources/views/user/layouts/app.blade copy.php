<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <link rel="stylesheet" href="{{asset('userassets/css/style.css')}}" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"
        integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <link href="https://cdn.jsdelivr.net/npm/remixicon@4.3.0/fonts/remixicon.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" />

    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <!-- Favicons -->
    <link rel="shortcut icon" href="img/logo.png">
    <link rel="apple-touch-icon" href="img/logo.png">

    <!--/ Favicons -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />
</head>

<body>

    @yield('content')

    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script src="https://unpkg.com/gsap@3/dist/gsap.min.js"></script>
    <script src="https://unpkg.com/gsap@3/dist/ScrollTrigger.min.js"></script>
    <script>
    const search = () => {
        const openSearch = document.querySelector(".search-open");
        const closeSearch = document.querySelector(".search-close");

        openSearch.addEventListener("click", () => {
            const tl = gsap.timeline();
            tl.to(".search", {
                top: "0",
            });
        });
        closeSearch.addEventListener("click", () => {
            const tl = gsap.timeline();
            tl.to(".search", {
                top: "-30%",
            });
        });
    };
    search();

    const closeGallery = document.querySelector(".gallery-close");
    closeGallery.addEventListener("click", () => {
        gsap.to(".img-gallery", {
            opacity: 0,
            zIndex: -1,
        });
    });

    const allProjects = document.querySelectorAll(".single-project-card");
    const allIMG = document.querySelectorAll(".swiper-slide>img");
    const imagesURL = [
        [
            "{{asset('userassets/images/abott/1.jpg')}}",
            "{{asset('userassets/images/abott/2.jpg')}}",
            "{{asset('userassets/images/abott/3.jpg')}}",
            "{{asset('userassets/images/abott/4.jpg')}}",
            "{{asset('userassets/images/abott/5.jpg')}}",
        ],
        [
            "{{asset('userassets/images/Airtel Pune/1.jpg')}}",
            "{{asset('userassets/images/Airtel Pune/2.jpg')}}",
            "{{asset('userassets/images/Airtel Pune/3.jpg')}}",
            "{{asset('userassets/images/Airtel Pune/4.jpg')}}",
            "{{asset('userassets/images/Airtel Pune/5.jpg')}}",
        ],
        [
            "{{asset('userassets/images/Amazon Pune/1.jpg')}}",
            "{{asset('userassets/images/Amazon Pune/2.jpg')}}",
            "{{asset('userassets/images/Amazon Pune/3.jpg')}}",
            "{{asset('userassets/images/Amazon Pune/4.jpg')}}",
            "{{asset('userassets/images/Amazon Pune/5.jpg')}}",
        ],
        [
            "{{asset('userassets/images/barclays/1.jpg')}}",
            "{{asset('userassets/images/barclays/2.jpg')}}",
            "{{asset('userassets/images/barclays/3.jpg')}}",
            "{{asset('userassets/images/barclays/4.jpg')}}",
            "{{asset('userassets/images/barclays/5.jpg')}}",
        ],
        [
            "{{asset('userassets/images/Google Mumbai/1.jpg')}}",
            "{{asset('userassets/images/Google Mumbai/2.jpg')}}",
            "{{asset('userassets/images/Google Mumbai/3.jpg')}}",
            "{{asset('userassets/images/Google Mumbai/4.jpg')}}",
            "{{asset('userassets/images/Google Mumbai/5.jpg')}}",
        ],
        [
            "{{asset('userassets/images/Linkedin/1.jpg')}}",
            "{{asset('userassets/images/Linkedin/2.jpg')}}",
            "{{asset('userassets/images/Linkedin/3.jpg')}}",
            "{{asset('userassets/images/Linkedin/4.jpg')}}",
            "{{asset('userassets/images/Linkedin/5.jpg')}}",
        ],
    ];
    allProjects.forEach((elem, indexx) => {
        elem.addEventListener("click", () => {
            imagesURL[indexx].forEach((url, index) => {
                console.log(allIMG[index]);

                allIMG[index].src = url;
            });
            gsap.to(".img-gallery", {
                opacity: 1,
                zIndex: 10,
            });
        });
    });

    var swiper = new Swiper(".mySwiper", {
        loop: true,
        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
        },
    });

    const menu = () => {
        const allMenuElem = document.querySelectorAll(".menu-elem");
        allMenuElem.forEach((elem, index) => {
            elem.addEventListener("mouseenter", () => {
                if (index === 0) {
                    gsap.to(".menu-elem1>h1", {
                        y: -40,
                    });
                } else if (index === 1) {
                    gsap.to(".menu-elem2>h1", {
                        y: -40,
                    });
                } else if (index === 2) {
                    gsap.to(".menu-elem6>h1", {
                        y: -40,
                    });
                } else if (index === 3) {
                    gsap.to(".menu-elem3>h1", {
                        y: -40,
                    });
                } else if (index === 4) {
                    gsap.to(".menu-elem4>h1", {
                        y: -40,
                    });
                } else if (index === 5) {
                    gsap.to(".menu-elem5>h1", {
                        y: -40,
                    });
                } else if (index === 6) {
                    gsap.to(".menu-elem7>h1", {
                        y: -40,
                    });
                } else if (index === 7) {
                    gsap.to(".menu-elem8>h1", {
                        y: -40,
                    });
                } else if (index === 8) {
                    gsap.to(".menu-elem9>h1", {
                        y: -40,
                    });
                }
            });

            elem.addEventListener("mouseleave", () => {
                gsap.to(".menu-elem>h1", {
                    y: 0,
                });
            });
        });

        const openMenu = document.querySelector(".menu-open");
        const closeMenu = document.querySelector(".menu-close");
        openMenu.addEventListener("click", () => {
            const tl = gsap.timeline();
            tl.to(".menu", {
                left: "60%",
            });
            tl.from(
                ".menu-elem>h1", {
                    opacity: 0,
                    stagger: 0.1,
                    y: 40,
                },
                "a"
            );
        });

        closeMenu.addEventListener("click", () => {
            gsap.to(".menu", {
                left: "100%",
            });
        });
    };
    menu();
    </script>
    <!--  BOOTSTRAP JAVASCRIPT CDN LINK  -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

    <!-- awards -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/gsap.min.js"
        integrity="sha512-7eHRwcbYkK4d9g/6tD/mhkf++eoTHwpNM9woBxtPUBWm67zeAfFC+HrdoE2GanKeocly/VxeLvIqwvCdk7qScg=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/ScrollTrigger.min.js"
        integrity="sha512-onMTRKJBKz8M1TnqqDuGBlowlH0ohFzMXYRNebz+yOcc5TQr/zAKsthzhuv0hiyUKEiQEQXEynnXCvNTOk50dg=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://unpkg.com/lenis@1.1.13/dist/lenis.min.js"></script>
    <script src="{{asset('userassets/js/awards.js')}}"></script>

    <!-- <script src="https://unpkg.com/lenis@1.1.13/dist/lenis.min.js"></script> -->
    <script src="{{asset('userassets/js/about/imagesloaded.pkgd.min.js')}}"></script>
    <script src="{{asset('userassets/js/about/splitting.min.js')}}"></script>
    <script src="{{asset('userassets/js/about/lenis.min.js')}}"></script>
    <script src="{{asset('userassets/js/about/about.js')}}"></script>

    <!-- Career -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.3/ScrollTrigger.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.3/gsap.min.js">

    </script>
    <script src="https://cdn.jsdelivr.net/gh/studio-freight/lenis@1.0.27/bundled/lenis.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

    <script src="{{asset('userassets/js/script.js')}}"></script>

    {{-- Clientele --}}
    <script src="{{asset('userassets/js/clientele.js')}}"></script>

    {{-- Contact --}}
    <script src="https://cdn.jsdelivr.net/npm/gsap@3.12.5/dist/gsap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/gsap@3.12.5/dist/ScrollTrigger.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/gsap@3.12.5/dist/MotionPathPlugin.min.js"></script>
    <script src="https://unpkg.co/gsap@3/dist/gsap.min.js"></script>
    <script>
        var swiper = new Swiper(".mySwiper", {
            slidesPerView: 1,
            spaceBetween: 30,
            loop: true,
            pagination: {
                el: ".swiper-pagination",
                clickable: true,
            },
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            },
        });
        const cityName = document.querySelector(".city-name");
        const cityAddress = document.querySelector(".city-address");
        const cityImg = document.querySelector(".city-img");
        const allCities = document.querySelectorAll(".content-wrapper a");

        const cityData = [
            {
                name: "Mumbai Head Office",
                address: `<b>Address : </b>1101, LOTUS TRADE CENTRE,NEW LINK ROAD,ANDHERI
            WEST, MUMBAI, Mumbai Suburban, Maharashtra, 400058`,
                img: "/images/map1.jpg",
            },
            {
                name: "New Delhi Head Office",
                address: ``,
                img: "/images/map3.png",
            },
            {
                name: "Jaipur Head Office",
                address: ``,
                img: "/images/map9.png",
            },
            {
                name: "Ahmedabad Head Office",
                address: ``,
                img: "/images/map4.png",
            },
            {
                name: "Hyderabad Head Office",
                address: ``,
                img: "/images/map10.png",
            },
            {
                name: "Vijaywada Head Office",
                address: ``,
                img: "/images/map7.png",
            },
            {
                name: "Bangalore Head Office",
                address: ``,
                img: "/images/map6.png",
            },
            {
                name: "Chennai Head Office",
                address: ``,
                img: "/images/map2.png",
            },
            {
                name: "Trivandrum Head Office",
                address: ``,
                img: "/images/map12.png",
            },
            {
                name: "Coimbatore Head Office",
                address: ``,
                img: "/images/map11.png",
            },
            {
                name: "Noida Head Office",
                address: ``,
                img: "/images/map5.png",
            },
            {
                name: "Kolkata Head Office",
                address: ``,
                img: "/images/map8.png",
            },
        ];

        allCities.forEach((city, index) => {
            city.addEventListener("mouseenter", () => {
                cityName.innerHTML = cityData[index].name;
                cityAddress.innerHTML = cityData[index].address;
                cityImg.src = cityData[index].img;
            });
        });

        const bigGear = document.querySelector(".big-gear");
        const smallGear = document.querySelector(".small-gear");
        const bigGearContent = document.querySelector(
            ".big-gear .content-wrapper"
        );
        const scrollWindowHeight =
          bigGearContent.offsetHeight -
          parseInt(
              window.getComputedStyle(bigGearContent.children[0])
                  .marginTop
          );
        const smallGearContent = document.querySelector(
            ".small-gear .content-wrapper"
        );

        bigGearContent.addEventListener("scroll", (e) => {
            const rotation = scale(
                bigGearContent.scrollTop,
                0,
                scrollWindowHeight,
                0,
                60
            );
            const imageScale = scale(
                bigGearContent.scrollTop,
                0,
                scrollWindowHeight,
                1,
                1.04
            );
            bigGear.style.transform = `rotate(${rotation}deg)`;
            bigGearContent.style.transform = `rotate(${rotation * -1}deg)`;
            smallGear.style.transform = `rotate(${rotation * -2}deg)`;
            smallGearContent.style.transform = `rotate(${
                rotation * 2
            }deg) scale(${imageScale})`;
        });

        function scale(number, inMin, inMax, outMin, outMax) {
          return (
              ((number - inMin) * (outMax - outMin)) / (inMax - inMin) +
              outMin
          );
        }
    </script>
    <script>
        gsap.registerPlugin(ScrollTrigger);
        {
            const process = document.querySelector(".process");
            if (typeof process != "undefined" && process != null) {
                let sections = gsap.utils.toArray(".process__item");
                gsap.to(sections, {
                    xPercent: -100 * (sections.length - 1),
                    ease: "none",
                    scrollTrigger: {
                        trigger: process,
                        markers: false,
                        scrub: 1,
                        pin: true,
                        snap: 1 / (sections.length - 1),
                        end: () =>
                            "+=" +
                            document.querySelector(".process").offsetWidth,
                    },
                });
            }
        }
    </script>
    <script>
        gsap.set("span", { width: 0 });
        gsap.timeline({
            scrollTrigger: {
                trigger: "span",
                scrub: 2,
                start: "top 60%",
                end: "top 20",
                //markers:true
            },
        }).to("span", {
            width: "100%",
            duration: 1,
            ease: "none",
            stagger: 1,
        });
    </script>
</body>

</html>