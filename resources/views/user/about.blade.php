@extends('user.layouts.app')
@section('content')
<input type="hidden" id="aboutFile" />
<div class="main-about">
    <section class="page1-about">
        @include('user.layouts.menu')
        <div class="page1-about-videos">
            <div class="page1-about-videos-overlay"></div>
            <video class="about-video" src="{{asset('userassets/videos/padam samarak cut.mp4')}}" muted autoplay
                loop></video>
        </div>
        <div class="page1-about-text">
            <div class="page1-about-t2">
                <h1>
                    Foundeds &nbsp; in &nbsp; 1992, &nbsp; Padams &nbsp;
                    Group &nbsp; was &nbsp; started&nbsp; under &nbsp;
                    the &nbsp; guidance &nbsp; of &nbsp; Late &nbsp;
                    Shri &nbsp; Padmaramji &nbsp; Kularia.
                </h1>
            </div>
        </div>
    </section>
    <section class="text-about-fill">
        <h1>
            At &nbsp; Padams &nbsp; Group, &nbsp; we &nbsp; have &nbsp;
            been &nbsp; leaders &nbsp; in &nbsp; the &nbsp; interior
            &nbsp; workflow &nbsp; and &nbsp; general &nbsp; contracting
            &nbsp; industry &nbsp; for &nbsp; over &nbsp; three &nbsp;
            decades. &nbsp; Our &nbsp; mission &nbsp; is &nbsp; to
            &nbsp; transform &nbsp; innovative &nbsp; designs &nbsp;
            into &nbsp; concrete &nbsp; realities &nbsp; for &nbsp; our
            &nbsp; clients, &nbsp; delivering &nbsp; exceptional, &nbsp;
            out-of-the-box &nbsp; solutions &nbsp; tailored &nbsp; to
            &nbsp; their &nbsp; needs. Our &nbsp; core &nbsp;
            competencies &nbsp; encompass &nbsp; interior &nbsp; design,
            &nbsp; execution, &nbsp; implementation, &nbsp; and &nbsp;
            architectural &nbsp; integration. &nbsp; We &nbsp; pride
            &nbsp; ourselves &nbsp; on &nbsp; adhering &nbsp; to &nbsp;
            the &nbsp; highest &nbsp; standards &nbsp; of &nbsp; ethics
            &nbsp; and &nbsp; professionalism, &nbsp; principles &nbsp;
            instilled &nbsp; by &nbsp; our &nbsp; founder, &nbsp; the
            &nbsp; late &nbsp; Shri &nbsp; Padmaramji &nbsp; Kularia.
            &nbsp; His &nbsp; enduring &nbsp; guidance &nbsp; continues
            &nbsp; to &nbsp; shape &nbsp; our &nbsp; values &nbsp; and
            &nbsp; practices, &nbsp; ensuring &nbsp; that &nbsp; we
            &nbsp; consistently &nbsp; meet &nbsp; and &nbsp; exceed
            &nbsp; the &nbsp; expectations &nbsp; of &nbsp; our &nbsp;
            esteemed &nbsp; clients. At &nbsp; Padams &nbsp; Group,
            &nbsp; we &nbsp; are &nbsp; committed &nbsp; to &nbsp;
            excellence, &nbsp; integrity, &nbsp; and &nbsp; innovation,
            &nbsp; making &nbsp; us &nbsp; a &nbsp; trusted &nbsp;
            partner &nbsp; for &nbsp; organizations &nbsp; seeking
            &nbsp; transformative &nbsp; solutions &nbsp; in &nbsp;
            their &nbsp; spaces.
        </h1>
    </section>
    <div class="content-wrap-about">
        <div id="item-3-about" class="content-about">
            <div class="content__img-wrap-about">
                <div class="content__img-about content__img--2-about">
                    <div class="content__img-inner-about"
                        style="background-image: url({{asset('userassets/images/build.jpg')}})"></div>
                    <div class="content__img-inner-about content__img-inner--hidden-about" style="
                                    background-image: url({{asset('userassets/images/about-img2.jpg')}});
                                "></div>
                </div>
            </div>
            <p class="content__text-about content__text--left-about">
                <span class="who-about">WHO WE ARE </span>
                <span class="content__text-tiny-about">
                    Our story began with three brothers united by a
                    profound passion for carpentry, skillfully crafting
                    each piece by hand. This modest beginning has since
                    evolved into a robust organization of over 5,000
                    dedicated professionals, all committed to the art of
                    creating remarkable spaces. Whether we are designing
                    a warm, inviting home, a vibrant office environment,
                    or a large-scale infrastructure project, we take the
                    time to deeply understand your vision. Our team is
                    dedicated to translating that vision into reality
                    with meticulous attention to detail and quality
                    craftsmanship. We prioritize collaboration
                    throughout every phase of the project, ensuring that
                    the final outcome not only meets but exceeds your
                    expectations, reflecting your distinct style and
                    needs.
                </span>
            </p>
        </div>
    </div>
    <div class="teams-about">
        <div class="teams-about-left">
            <h1>Our Team</h1>
            <p>
                Mr. Shankar Kularia, Mr. Kanaram Kularia, and Mr. Dharam
                Kularia manage the business currently. The huge
                workforce of Padams Group consists of more than 1400
                skilled workers. The group treats its workforce like a
                family who works round the clock to maintain the
                standards and commitments of the group in the interior
                industry.
            </p>
        </div>
        <div class="teams-about-right">
            <div class="team-about-img">
                <img src="{{asset('userassets/images/team/Shankar Kularia - Managing Partner.jpg')}}" alt="" />
                <p>Shankar Kularia</p>
                <small>Managing Partner</small>
            </div>
            <div class="team-about-img">
                <img src="{{asset('userassets/images/team/Dharam Kularia - Managing Partner.jpg')}}" alt="" />
                <p>Dharam Kularia</p>
                <small>Managing Partner</small>
            </div>
            <div class="team-about-img">
                <img src="{{asset('userassets/images/team/Gunesh Joshi.jpg')}}" alt="" />
                <p>Gunesh Joshi</p>
                <small>Chief Operating Officer</small>
            </div>
            <div class="team-about-img">
                <img src="{{asset('userassets/images/team/Pukhraj Kularia.jpg')}}" alt="" />
                <p>Pukhraj Kularia</p>
                <small>General Manager - Operations, PAN India</small>
            </div>
            <div class="team-about-img">
                <img src="{{asset('userassets/images/team/Pankaj Kularia.jpg')}}" alt="" />
                <p>Pankaj Kularia</p>
                <small>Manager - Operations, PAN India</small>
            </div>
            <div class="team-about-img">
                <img src="{{asset('userassets/images/team/Lalit Suthar.jpg')}}" alt="" />
                <p>Lalit Sharma</p>
                <small>Vice President - Business Development &
                    Tendering</small>
            </div>
            <div class="team-about-img">
                <img src="{{asset('userassets/images/team/Debu Suthar.jpg')}}" alt="" />
                <p>Deburam Suthar</p>
                <small> Vice President: Procurement & Sourcing</small>
            </div>
            <div class="team-about-img">
                <img src="{{asset('userassets/images/team/Dr. Saurabh Chaturvedi.jpg')}}" alt="" />
                <p>Saurabh Chaturvedi</p>
                <small>Vice President - Design & Build</small>
            </div>
            <div class="team-about-img">
                <img src="{{asset('userassets/images/team/Shiv Ghepal.jpg')}}" alt="" />
                <p>Shiv Gepal</p>
                <small>Vice President - Banking & Finance</small>
            </div>
            <div class="team-about-img">
                <img src="{{asset('userassets/images/team/Laxman Suthar.jpg')}}" alt="" />
                <p>Laxman Kularia</p>
                <small>Vice President - Human Resource &
                    Administration</small>
            </div>
            <div class="team-about-img">
                <img src="{{asset('userassets/images/team/Anit Kalra.jpg')}}" alt="" />
                <p>Anit Karal</p>
                <small>Vice President - Accounts</small>
            </div>
        </div>
    </div>
    @include('user.layouts.footer')
</div>
@endsection