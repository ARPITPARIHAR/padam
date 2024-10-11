if ($("#awardsFile").length > 0) {
    window.onbeforeunload = function () {
        window.scrollTo(0, 0);
    };
    // Clutter Animation
    const clutterAnimation = (element) => {
        const htmlTag = document.querySelector(element);
        let clutter = "";

        // Splitting the text content into individual letters and wrapping each in a span with a class
        htmlTag.textContent.split(" ").forEach((word) => {
            clutter += `<span class="inline-block">${word}</span>`;
        });

        // Updating the HTML content of the element with the animated spans
        htmlTag.innerHTML = clutter;
    };

    // Lenis js
    const lenis = new Lenis();
    const lenisJs = () => {
        lenis.on("scroll", (e) => {});

        lenis.on("scroll", ScrollTrigger.update);

        gsap.ticker.add((time) => {
            lenis.raf(time * 500);
        });

        gsap.ticker.lagSmoothing(0);
    };
    lenisJs();

    const menu = () => {
    const allMenuElem = document.querySelectorAll(".menu-elem");
    allMenuElem.forEach((elem, index) => {
        elem.addEventListener("mouseenter", () => {
        if (index === 0) {
            gsap.to(".menu-elem1>h1", {
            y: '-2vw',
            });
        } else if (index === 1) {
            gsap.to(".menu-elem2>h1", {
            y: '-2vw',
            });
        } else if (index === 2) {
            gsap.to(".menu-elem6>h1", {
            y: '-2vw',
            });
        } else if (index === 3) {
            gsap.to(".menu-elem3>h1", {
            y: '-2vw',
            });
        } else if (index === 4) {
            gsap.to(".menu-elem4>h1", {
            y: '-2vw',
            });
        } else if (index === 5) {
            gsap.to(".menu-elem5>h1", {
            y: '-2vw',
            });
        } else if (index === 6) {
            gsap.to(".menu-elem7>h1", {
            y: '-2vw',
            });
        } else if (index === 7) {
            gsap.to(".menu-elem8>h1", {
            y: '-2vw',
            });
        } else if (index === 8) {
            gsap.to(".menu-elem9>h1", {
            y: '-2vw',
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
        ".menu-elem>h1",
        {
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

    const mediaQuery = window.matchMedia("(max-width: 768px)");

    const brandsAnimation = () => {
        gsap.from(".brands-awards-img", {
            scale: 1.5,
            rotateX: "120deg",
            stagger: 0.1,
            scrollTrigger: {
                trigger: ".brands-awards",
                start: "top 90%",
                end: "top -20%",
                scrub: true,
                // markers: true,
            },
        });
        const tl = gsap.timeline({
            scrollTrigger: {
                trigger: ".brands-awards",
                start: "top 90%",
                end: "top -20%",
                scrub: true,
                // markers: true,
            },
        });
        tl.from(".brands1-awards > .brands-awards-img", {
            width: "14vw",
        })
            .from(".brands2-awards > .brands-awards-img", {
                width: "16vw",
            })
            .from(".brands3-awards > .brands-awards-img", {
                width: "16vw",
            })
            .from(".brands4-awards > .brands-awards-img", {
                width: "18vw",
            });
    };

    if (!mediaQuery.matches) {
        brandsAnimation();
    }

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

}