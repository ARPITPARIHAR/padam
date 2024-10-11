if ($("#expertiseFile").length > 0) {
  window.onbeforeunload = function () {
    window.scrollTo(0, 0);
  };


  // Clutter Animation
  const clutterAnimation = (element) => {
    const htmlTag = document.querySelector(element);
    let clutter = "";

    // Splitting the text content into individual letters and wrapping each in a span with a class
    htmlTag.textContent.split("").forEach((word) => {
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

  window.addEventListener("scroll", () => {
    const scrollTop = window.scrollY; // Amount the user has scrolled from the top
    const windowHeight = window.innerHeight; // Viewport height (100vh)
    const fullHeight = document.documentElement.scrollHeight; // Total page height

    // Ensure scrolling starts from the second page (after 100vh)
    const secondPageStart = windowHeight; // Height of the first page (100vh)
    const adjustedScrollTop = scrollTop - secondPageStart;

    // If the user hasn't reached the second page, the percentage scrolled is 0
    const percentageScrolled =
      adjustedScrollTop > 0
        ? ((adjustedScrollTop + windowHeight) / (fullHeight - secondPageStart)) * 100
        : 0;


    gsap.to(".page2-expertise-line-inner", {
      height: `${percentageScrolled.toFixed(2)}%`,
    });
  });


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




  const cards = () => {
    gsap.from(".card1>.card-heading>h1", {
      opacity: 0,
      y: 40,
      stagger: 0.1,
      scrollTrigger: {
        scroller: "body",
        trigger: ".card1",
        start: "top 80%",
        end: "top 50%",
        // markers: true,
      
      },
    });
    gsap.from(".card1>.card-img>img", {
      y: 100,
      scrollTrigger: {
        scroller: "body",
        trigger: ".card1",
        start: "top 100%",
        end: "top 0%",
      
      },
    });
    gsap.from(".card1>p", {
      opacity: 0,
      y: 40,
      scrollTrigger: {
        scroller: "body",
        trigger: ".card1",
        start: "top 20%",
        end: "top -10%",
        // markers: true,
      
      },
    });

    gsap.from(".card2>.card-heading>h1", {
      opacity: 0,
      y: 40,
      stagger: 0.1,
      scrollTrigger: {
        scroller: "body",
        trigger: ".card2",
        start: "top 80%",
        end: "top 50%",
        // markers: true,
      
      },
    });
    gsap.from(".card2>.card-img>img", {
      y: 100,
      scrollTrigger: {
        scroller: "body",
        trigger: ".card2",
        start: "top 100%",
        end: "top 0%",
        
      },
    });
    gsap.from(".card2>p", {
      opacity: 0,
      y: 40,
      scrollTrigger: {
        scroller: "body",
        trigger: ".card2",
        start: "top 20%",
        end: "top -10%",
        // markers: true,
        
      },
    });

    gsap.from(".card3>.card-heading>h1", {
      opacity: 0,
      y: 40,
      stagger: 0.1,
      scrollTrigger: {
        scroller: "body",
        trigger: ".card3",
        start: "top 80%",
        end: "top 50%",
        // markers: true,
      
      },
    });
    gsap.from(".card3>.card-img>img", {
      y: 100,
      scrollTrigger: {
        scroller: "body",
        trigger: ".card3",
        start: "top 100%",
        end: "top 0%",
        
      },
    });
    gsap.from(".card3>p", {
      opacity: 0,
      y: 40,
      scrollTrigger: {
        scroller: "body",
        trigger: ".card3",
        start: "top 20%",
        end: "top -10%",
        // markers: true,
        
      },
    });

    gsap.from(".card4>.card-heading>h1", {
      opacity: 0,
      y: 40,
      stagger: 0.1,
      scrollTrigger: {
        scroller: "body",
        trigger: ".card4",
        start: "top 80%",
        end: "top 50%",
        // markers: true,
        
      },
    });
    gsap.from(".card4>.card-img>img", {
      y: 100,
      scrollTrigger: {
        scroller: "body",
        trigger: ".card4",
        start: "top 100%",
        end: "top 0%",
        
      },
    });
    gsap.from(".card4>p", {
      opacity: 0,
      y: 40,
      scrollTrigger: {
        scroller: "body",
        trigger: ".card4",
        start: "top 20%",
        end: "top -10%",
        // markers: true,
        
      },
    });

    gsap.from(".card5>.card-heading>h1", {
      opacity: 0,
      y: 40,
      stagger: 0.1,
      scrollTrigger: {
        scroller: "body",
        trigger: ".card5",
        start: "top 80%",
        end: "top 50%",
        // markers: true,
        
      },
    });
    gsap.from(".card5>.card-img>img", {
      y: 100,
      scrollTrigger: {
        scroller: "body",
        trigger: ".card5",
        start: "top 100%",
        end: "top 0%",
        
      },
    });
    gsap.from(".card5>p", {
      opacity: 0,
      y: 40,
      scrollTrigger: {
        scroller: "body",
        trigger: ".card5",
        start: "top 20%",
        end: "top -10%",
        // markers: true,
        
      },
    });

    gsap.from(".card6>.card-heading>h1", {
      opacity: 0,
      y: 40,
      stagger: 0.1,
      scrollTrigger: {
        scroller: "body",
        trigger: ".card6",
        start: "top 80%",
        end: "top 50%",
        // markers: true,
        
      },
    });
    gsap.from(".card6>.card-img>img", {
      y: 100,
      scrollTrigger: {
        scroller: "body",
        trigger: ".card6",
        start: "top 100%",
        end: "top 0%",
        
      },
    });
    gsap.from(".card6>p", {
      opacity: 0,
      y: 40,
      scrollTrigger: {
        scroller: "body",
        trigger: ".card6",
        start: "top 20%",
        end: "top -10%",
        // markers: true,
        
      },
    });
  };
  if (!mediaQuery.matches) {
    cards();
  }

}