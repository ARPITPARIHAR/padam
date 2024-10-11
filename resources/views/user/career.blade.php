@extends('user.layouts.app')
@section('content')
<input type="hidden" id="careerFile" />
<section class="career">
    @include('user.layouts.menu')
    <div class="career-overlay">
        <h1>Careers</h1>
    </div>
</section>
<div class="why-us-section container" data-aos="fade-up" data-aos-duration="1000">
    <div class="why-us">
        <h2 class="h2-heading">Why Work for Us</h2>
        <p class="why-us-para">
            At Padams Group, we understand that our workforce is our greatest asset. Hence we prioritize creating a
            positive and supportive work environment where everyone can thrive. We offer a range of benefits and
            opportunities that make us stand out as an employer of choice.
        </p>
    </div>
    <div class="page7-career-container">
        <div class="page7-career-container-elems">
            <div class="page7-career-elem1 page7-career-elem">
                <h1>Career Growth</h1>
                <p>
                    We believe in investing in our employees' professional development and providing opportunities to
                    learn and grow within the company.
                </p>
            </div>
            <div class="page7-career-elem2 page7-career-elem">
                <h1>Work-Life Balance</h1>
                <p>
                    We understand the importance of maintaining a healthy work-life balance and strive to provide
                    flexibility and support to our employees.
                </p>
            </div>
            <div class="page7-career-elem3 page7-career-elem">
                <h1>Diversity and Inclusion</h1>
                <p>
                    We believe diversity makes us stronger, and we are committed to fostering an inclusive workplace
                    where everyone feels valued and supported.
                </p>
            </div>
            <div class="page7-career-elem4 page7-career-elem">
                <h1>Impactful Work</h1>
                <p>
                    At Padams Group, you will have the opportunity to work on challenging and meaningful projects that
                    make a real difference for our clients.
                </p>
            </div>
        </div>
    </div>
</div>
<div class="current-opening-section container">
    <div class="current-opening-section1" data-aos="fade-right" data-aos-duration="1000">
        <p class="current-opening-heading">Join Our Team</p>
        <p class="current-opening-desc">We are always on the lookout for talented individuals to join our team and
            contribute to our success. Check out our current openings to see if there is a role that aligns with your
            skills and interests.</br></br>
            Join us at Padams Group and be a part of a dynamic, diverse, and values-driven team. Apply today and take
            your career to the next level!</p>
        <div class="multi-content-card__item-label">
            <a href="{{route('user.about')}}" class="read-more" style="font-weight: 600;">
                Learn More About Padams Group <i class="fas fa-arrow-right arrow" style="color: #b91010;"></i>
            </a>
        </div>
    </div>
    <div class="current-opening-section2" data-aos="fade-left" data-aos-duration="1000">
        <img src="{{asset('userassets/images/_VSH1323 (1).jpg')}}" alt="">
    </div>
</div>
<div class="career-option-section">
    <div class="container">
        <h2 class="career-option-main-heading">Explore all Our job opportunities</h2>
    </div>
    <div class="career-option-desc-section container">
        <div class="multi-content-card__item-content" style="border-bottom: 1px solid #b1b2b4;" data-aos="fade-right">
            <h4 class="type-v2 h4 multi-content-card__item-title">
                <span class="multi-content-card__item-title-text">
                    Customer Support Representative</span>
            </h4>
            <div class="multi-content-card__item-label">
                <a href="#" class="read-more">
                    Read More <i class="fas fa-arrow-right arrow" style="color: #b91010;"></i>
                </a>
            </div>
        </div>
        <div class="multi-content-card__item-content" style="border-bottom: 1px solid #b1b2b4;margin-left: 20px;"
            data-aos="fade-down">
            <h4 class="type-v2 h4 multi-content-card__item-title">
                <span class="multi-content-card__item-title-text">
                    Marketing Manager</span>
            </h4>
            <div class="multi-content-card__item-label" style="margin-bottom: 30px;">
                <a target="_blank" href="https://www.linkedin.com/company/padam-interiors" class="read-more">
                    Read More <i class="fas fa-arrow-right arrow" style="color: #b91010;"></i>
                </a>
            </div>
        </div>
        <div class="multi-content-card__item-content" data-aos="fade-left">
            <h4 class="type-v2 h4 multi-content-card__item-title">
                <span class="multi-content-card__item-title-text">
                    Graphic Designer</span>
            </h4>
            <div class="multi-content-card__item-label">
                <a target="_blank" href="https://www.linkedin.com/company/padam-interiors" class="read-more">
                    Read More <i class="fas fa-arrow-right arrow" style="color: #b91010;"></i>
                </a>
            </div>
        </div>
        <div class="multi-content-card__item-content" data-aos="fade-right">
            <h4 class="type-v2 h4 multi-content-card__item-title">
                <span class="multi-content-card__item-title-text">
                    Sales Associate</span>
            </h4>
            <div class="multi-content-card__item-label">
                <a target="_blank" href="https://www.linkedin.com/company/padam-interiors" class="read-more">
                    Read More <i class="fas fa-arrow-right arrow" style="color: #b91010;"></i>
                </a>
            </div>
        </div>
        <div class="multi-content-card__item-content" data-aos="fade-up">
            <h4 class="type-v2 h4 multi-content-card__item-title">
                <span class="multi-content-card__item-title-text">
                    Human Resources Specialist</span>
            </h4>
            <div class="multi-content-card__item-label">
                <a target="_blank" href="https://www.linkedin.com/company/padam-interiors" class="read-more">
                    Read More <i class="fas fa-arrow-right arrow" style="color: #b91010;"></i>
                </a>
            </div>
        </div>
    </div>
</div>

<div class="join-us-section">
    <section class="small-cards">
        <div class="emo shad" data-x='10vw' data-y='50vh' data-rotate='-40' data-bound='40' data-z='50'>
            <img src="{{asset('userassets/images/settings_150dp_B91010_FILL0_wght400_GRAD0_opsz48.svg')}}" alt="">
            <p>DE&I</p>
        </div>
        <div class="emo shad" data-x='20vw' data-y='70vh' data-rotate='-30' data-bound='50' data-z='40'>
            <img src="{{asset('userassets/images/award_star_150dp_B91010_FILL0_wght400_GRAD0_opsz48.svg')}}" alt="">
            <p>Recognizing Excellence
            </p>
        </div>
        <div class="emo shad" data-x='60vw' data-y='20vh' data-rotate='10' data-bound='30' data-z='20'>
            <img src="{{asset('userassets/images/patient_list_150dp_B91010_FILL0_wght400_GRAD0_opsz48.svg')}}" alt="">
            <p>Ethics and Integrity</p>
        </div>
        <div class="emo shad" data-x='70vw' data-y='70vh' data-rotate='10' data-bound='20'>
            <img src="{{asset('userassets/images/filter_tilt_shift_150dp_B91010_FILL0_wght400_GRAD0_opsz48.svg')}}"
                alt="">
            <p>Sustainability Focus</p>
        </div>
        <div class="emo shad" data-x='30vw' data-y='20vh' data-rotate='-12' data-bound='30' data-z='30'>
            <img src="{{asset('userassets/images/public_150dp_B91010_FILL0_wght400_GRAD0_opsz48.svg')}}" alt="">
            <p>Pan India Presence
            </p>
        </div>
        <div class="emo shad" data-x='75vw' data-y='50vh' data-rotate='20' data-bound='50'>
            <img src="{{asset('userassets/images/amp_stories_150dp_B91010_FILL0_wght400_GRAD0_opsz48.svg')}}" alt="">
            <p>Client Success Stories</p>
        </div>
    </section>
</div>
<div class="info-wrap">
    <div class="info-cont">
        <h1>Join the Padams Experience</h1>
        <br>
        <p>Discover Opportunities that Drive Your Career Forward.</p>
        <br>
        <br>
    </div>
</div>
@include('user.layouts.footer')
@endsection