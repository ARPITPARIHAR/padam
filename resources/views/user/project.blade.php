@extends('user.layouts.app')
@section('content')
<input type="hidden" id="projectFile" />
<div class="img-gallery">
    <div class="swiper mySwiper">
        <i class="gallery-close ri-close-large-fill"></i>
        <div class="swiper-wrapper">
            <div class="swiper-slide">
                <img src="{{asset('userassets/images/Forbes image.png')}}" alt="" />
            </div>
            <div class="swiper-slide">
                <img src="{{asset('userassets/images/Forbes image.png')}}" alt="" />
            </div>
            <div class="swiper-slide">
                <img src="{{asset('userassets/images/Forbes image.png')}}" alt="" />
            </div>
            <div class="swiper-slide">
                <img src="{{asset('userassets/images/Forbes image.png')}}" alt="" />
            </div>
            <div class="swiper-slide">
                <img src="{{asset('userassets/images/Forbes image.png')}}" alt="" />
            </div>
        </div>
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
    </div>
</div>
<section class="project">
    @include('user.layouts.menu')
    <div class="project-overlay">
        <h1>Our Projects</h1>
        <video muted autoplay loop src="{{asset('userassets/videos/projects.mp4')}}"></video>
        <div class="overlay"></div>
    </div>
</section>
<div class="main-project-section default-top-margin">
    <div class="project-left-section">
        <div class="size-filter">
            <h1>Sort By Size</h1>
            <ul>
                <li><a style="color: inherit; text-decoration: none;"
                    onmouseover="this.style.color='blue';"
                    onmouseout="this.style.color='inherit';" href="{{route('user.project', ['areaMax' => 10000.00]);}}">Under 10,000 sqft</a></li>
                <li><a style="color: inherit; text-decoration: none;"
                    onmouseover="this.style.color='blue';"
                    onmouseout="this.style.color='inherit';" href="{{route('user.project', ['areaMin' => 10000.00, 'areaMax' => 100000.00]);}}">10,000 to
                        100,000
                        sqft</a></li>
                <li><a style="color: inherit; text-decoration: none;"
                    onmouseover="this.style.color='blue';"
                    onmouseout="this.style.color='inherit';" href="{{route('user.project', ['areaMin' => 100000.00, 'areaMax' => 500000.00]);}}">100,000 to
                        500,000
                        sqft</a></li>
                <li><a style="color: inherit; text-decoration: none;"
                    onmouseover="this.style.color='blue';"
                    onmouseout="this.style.color='inherit';" href="{{route('user.project', ['areaMin' => 500000.00]);}}">Above 500,000 sqft</a>
                </li>
            </ul>
        </div>
        <div class="size-filter sector-top-margin">
            <h1>Sort By Sector</h1>
            <ul>
                @foreach($sectors as $sector)
                <li><a style="color: inherit; text-decoration: none;"
                    onmouseover="this.style.color='blue';"
                    onmouseout="this.style.color='inherit';" href="{{route('user.project', ['sector' => $sector['slug']]);}}">{{$sector['title']}}</a></li>
                @endforeach
            </ul>
        </div>

        <div class="size-filter sector-top-margin">
            <h1>Sort By Location</h1>
            <ul>
                @foreach($locations as $location)
                <li><a style="color: inherit; text-decoration: none;"
                    onmouseover="this.style.color='blue';"
                    onmouseout="this.style.color='inherit';" href="{{route('user.project', ['location' => $location['slug']]);}}">{{$location['title']}}</a>
                </li>
                @endforeach
            </ul>
        </div>
    </div>
    <div class="project-right-section">
        <div class="project-card-main-section">
            @foreach($projects as $project)
            <div class="single-project-card">
                <div class="img-container">
                    <div class="circle1"></div>
                    <img src="{{asset($project['featuredImage'])}}" alt="google-project-image" width="100%" />
                    <div class="view-button">View</div>
                </div>
                <div class="project-info">
                    <div class="info-section">
                        <h1>{{$project['title']}}</h1>
                        <p><b>Location</b> : {{$project['locationTitle']}}</p>
                        <p><b>Sector</b> : {{$project['sectorTitle']}}</p>
                        <p class="area-info sqft">
                            <b>Sq.ft</b>: {{ number_format($project['area']) }}
                        </p>
                        <p class="area-info sqm" style="display: none;">
                            <b>Sq.m</b>: {{ number_format($project['area'] / 10.764) }} <!-- Convert Sq.ft to Sq.m -->
                        </p>
                    </div>
                    <div>
                        <img src="{{asset('userassets/images/Frame 214.png')}}" alt="arrow-image" />
                    </div>
                </div>
            </div>
            @endforeach
        </div>
      
    
        <div class="load-more-container">
            @if ($projects->hasMorePages())
                <button id="loadMore" class="load-more-btn">Load More</button>
            @endif
        </div>
        
    </div>
    
</div>


</div>

{{-- <div class="show-all-projects default-top-margin">
    <h1>
        See More Projects
        <a href="" style="text-decoration: none; color: inherit;">
            <i class="fa-solid fa-arrow-right fa-bounce" style="color: #d64343; margin-left: 10px;"></i>
        </a>
    </h1>
</div> --}}

@include('user.layouts.footer')
@endsection
<script>
    document.getElementById('loadMore').addEventListener('click', function() {
        const nextPage = {{ $projects->currentPage() + 1 }};
        const totalPages = {{ $projects->lastPage() }};

        if (nextPage <= totalPages) {
            fetch(`{{ route('user.project') }}?page=${nextPage}`)
                .then(response => response.text())
                .then(data => {
                    const parser = new DOMParser();
                    const doc = parser.parseFromString(data, 'text/html');
                    const newProjects = doc.querySelector('.project-card-main-section').innerHTML;

                    document.querySelector('.project-card-main-section').insertAdjacentHTML('beforeend', newProjects);

                    if (nextPage >= totalPages) {
                        document.querySelector('.load-more').style.display = 'none'; // Hide button if no more pages
                    }
                })
                .catch(error => console.error('Error loading more projects:', error));
        }
    });
</script>




<script>
    document.addEventListener("DOMContentLoaded", () => {
        const search = () => {
            const openSearch = document.querySelector(".search-open");
            const closeSearch = document.querySelector(".search-close");

            openSearch?.addEventListener("click", () => {
                const tl = gsap.timeline();
                tl.to(".search", {
                    top: "0",
                });
            });

            closeSearch?.addEventListener("click", () => {
                const tl = gsap.timeline();
                tl.to(".search", {
                    top: "-30%",
                });
            });
        };
        search();

        const closeGallery = document.querySelector(".gallery-close");
        closeGallery?.addEventListener("click", () => {
            gsap.to(".img-gallery", {
                opacity: 0,
                zIndex: -1,
            });
        });

        const allProjects = document.querySelectorAll(".single-project-card");
        const allIMG = document.querySelectorAll(".swiper-slide > img");
        const imagesURL = [
            @foreach($projectImages as $imageArray)
            [
                @foreach($imageArray as $image)
                "{{ asset($image) }}",
                @endforeach
            ],
            @endforeach
        ];

        allProjects.forEach((elem, index) => {
            elem.addEventListener("click", () => {
                imagesURL[index]?.forEach((url, imgIndex) => {
                    if (allIMG[imgIndex]) {
                        allIMG[imgIndex].src = url;
                    }
                });
                gsap.to(".img-gallery", {
                    opacity: 1,
                    zIndex: 10,
                });
            });
        });

        const swiper = new Swiper(".mySwiper", {
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
                    gsap.to(`.menu-elem${index + 1} > h1`, {
                        y: -40,
                    });
                });

                elem.addEventListener("mouseleave", () => {
                    gsap.to(`.menu-elem${index + 1} > h1`, {
                        y: 0,
                    });
                });
            });

            const openMenu = document.querySelector(".menu-open");
            const closeMenu = document.querySelector(".menu-close");

            openMenu?.addEventListener("click", () => {
                const tl = gsap.timeline();
                tl.to(".menu", {
                    left: "60%",
                });
                tl.from(".menu-elem > h1", {
                    opacity: 0,
                    stagger: 0.1,
                    y: 40,
                }, "a");
            });

            closeMenu?.addEventListener("click", () => {
                gsap.to(".menu", {
                    left: "100%",
                });
            });
        };
        menu();
    });
</script>

<script>
    document.addEventListener("DOMContentLoaded", () => {
        const topicSelect = document.getElementById("topic");
        const areaInfos = document.querySelectorAll(".area-info");

        // Show Sq.ft by default (if it is selected initially)
        areaInfos.forEach((info) => {
            if (info.classList.contains("sqft")) {
                info.style.display = "block";
            } else {
                info.style.display = "none";
            }
        });

        topicSelect.addEventListener("change", () => {
            const selectedValue = topicSelect.value;

            areaInfos.forEach((info) => {
                // Hide all area info paragraphs
                info.style.display = "none";
            });

            // Show the relevant area info based on the selection
            if (selectedValue === "sqft") {
                areaInfos.forEach((info) => {
                    if (info.classList.contains("sqft")) {
                        info.style.display = "block";
                    }
                });
            } else if (selectedValue === "sqm") {
                areaInfos.forEach((info) => {
                    if (info.classList.contains("sqm")) {
                        info.style.display = "block";
                    }
                });
            }
        });
    });
</script>


<script>
    document.addEventListener("DOMContentLoaded", () => {
        // Restore scroll position if available
        const scrollPosition = localStorage.getItem('scrollPosition');
        if (scrollPosition) {
            window.scrollTo(0, scrollPosition);
            localStorage.removeItem('scrollPosition');
        }

        // Save scroll position before navigating
        const filterLinks = document.querySelectorAll('.size-filter a, .size-filter ul a');
        filterLinks.forEach(link => {
            link.addEventListener('click', () => {
                localStorage.setItem('scrollPosition', window.scrollY);
            });
        });
    });
</script>


<style>
.load-more-container {
    text-align: center; /* Center the button */
    margin: 40px 0;    /* Add margin for spacing */
}

.load-more-btn {
    background: linear-gradient(135deg, #6a11cb, #2575fc); /* Gradient background */
    color: white;               /* Text color */
    border: none;               /* No border */
    padding: 10px 20px;        /* Padding for button size */
    font-size: 16px;           /* Font size */
    font-weight: bold;         /* Bold text */
    border-radius: 30px;      /* Rounded corners */
    cursor: pointer;           /* Pointer cursor on hover */
    transition: all 0.3s ease; /* Smooth transition for effects */
    box-shadow: 0 4px 15px rgba(0, 0, 0, 0.3); /* Shadow for depth */
    max-width: 200px;          /* Limit max width of the button */
    margin: 0 auto;            /* Center the button */
    display: inline-block;     /* Inline-block to respect width */
}

.load-more-btn:hover {
    transform: translateY(-2px); /* Lift effect on hover */
    box-shadow: 0 6px 20px rgba(0, 0, 0, 0.4); /* Enhanced shadow on hover */
}

.load-more-btn:focus {
    outline: none; /* Remove default focus outline */
}

.load-more-btn:active {
    transform: translateY(1px); /* Press effect on click */
}


</style>