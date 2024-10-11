@extends('user.layouts.app')
@section('content')
<input type="hidden" id="csrFile" />
<section class="csr">
    @include('user.layouts.menu')
    <div class="csr-overlay">
        <h1>Corporate Social Responsibility</h1>
        <p>
            Our Commitment to Social Impact: Empowering Communities
            Through CSR
        </p>
    </div>
</section>
<section class="csr-video">
    <video
        src="{{asset('userassets/videos/Nokha_art filmV1.mp4')}}"
        loop
        autoplay
        muted
    ></video>
</section>

<div class="csr-dets">
    <div class="csr-elem">
        <h1>CSR ACTIVITY</h1>
        <h1>YEAR</h1>
    </div>
    <div class="csr-elem">
        <p>
            ENGLISH MEDIUM GIRLS SCHOOL IN RURAL/BACKWARD AREA OF
            RAJASTHAN TILL 12TH, 500 STUDENTS CAPACITY IS UNDER PROGRESS
        </p>
        <span>1.5 CR</span>
    </div>
    <div class="csr-elem">
        <p>
            TREE PLANTATION DRIVE OF MORE THAN 85000+ TREES IN RAJASTHAN
            DESERT AREA
        </p>
        <span>2.0 CR</span>
    </div>
    <div class="csr-elem">
        <p>
            SCHOLARSHIP FOR FAMILIES OF POLICE FORCE DEPT OF NEARLY 17
            LAKH PER YEAR FOR SUBSEQUENT 5 YEARS
        </p>
        <span>3.5 CR</span>
    </div>
    <div class="csr-elem">
        <p>
            HOSPITAL ICU DEVELOPMENT DURING COVID AND ADOPTED FOR COMING
            YEARS
        </p>
        <span>2.2 CR</span>
    </div>
    <div class="csr-elem">
        <p>DIGITAL LIBRARY FOR STUDENTS IN A RURAL / REMOTE AREA</p>
        <span>1.1 CR</span>
    </div>
    <div class="csr-elem">
        <p>
            E KAKSHA APP FOR CHILDREN WHO DON'T HAVE ACCESS TO EDUCATION
            AND THIS STARTED DURING COVID - 19
        </p>
        <span>3.8 CR</span>
    </div>
    <div class="csr-elem">
        <p>5 GAUSHALA DEVELOPMENT FOR NEARLY 2250 + COWS</p>
        <span>1.0 CR</span>
    </div>
    <div class="csr-elem">
        <p>
            100 SMART TVS PROVISION FOR GOVT RURAL AREA SCHOOLS FOR
            DIGITAL EDUCATION
        </p>
        <span>2.5 CR</span>
    </div>
    <div class="csr-elem">
        <p>5 HUMAN AMBULANCES AT RAJASTHAN RURAL AREA</p>
        <span>1.8 CR</span>
    </div>
</div>

<div class="csr-gallery">
    <div class="swiper mySwiper">
        <div class="swiper-wrapper">
            <div class="swiper-slide">
                <img
                    src="https://swiperjs.com/demos/images/nature-1.jpg"
                />
            </div>
            <div class="swiper-slide">
                <img
                    src="https://swiperjs.com/demos/images/nature-2.jpg"
                />
            </div>
            <div class="swiper-slide">
                <img
                    src="https://swiperjs.com/demos/images/nature-3.jpg"
                />
            </div>
            <div class="swiper-slide">
                <img
                    src="https://swiperjs.com/demos/images/nature-4.jpg"
                />
            </div>
            <div class="swiper-slide">
                <img
                    src="https://swiperjs.com/demos/images/nature-5.jpg"
                />
            </div>
            <div class="swiper-slide">
                <img
                    src="https://swiperjs.com/demos/images/nature-6.jpg"
                />
            </div>
            <div class="swiper-slide">
                <img
                    src="https://swiperjs.com/demos/images/nature-7.jpg"
                />
            </div>
            <div class="swiper-slide">
                <img
                    src="https://swiperjs.com/demos/images/nature-8.jpg"
                />
            </div>
            <div class="swiper-slide">
                <img
                    src="https://swiperjs.com/demos/images/nature-9.jpg"
                />
            </div>
        </div>
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
        <div class="swiper-pagination"></div>
    </div>
</div>
@include('user.layouts.footer')
@endsection