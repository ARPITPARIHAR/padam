@extends('user.layouts.app')
@section('content')
<input type="hidden" id="newsFile" />
<section class="news">
    @include('user.layouts.menu')
    <div class="news-overlay">
        <h1>News</h1>
    </div>
</section>
<div class="container default-top-margin">
    <div class="news-wrapper">
        <div class="c-col-12">
            <!-- Single Blog Post (Horizontal) -->
            <div
                class="single-blog-post has-anim fadeUp horizontal sticky-news"
                data-aos="fade-right"
                data-aos-duration="1000">
                <a
                    class="cursor-text"
                    data-cursor-text="READ"
                    href="https://www.forbesindia.com/article/brand-connect/shankar-kularia-has-revolutionized-workplace-interior-fitout-industry-over-decades/89929/1"
                    target="_blank">
                    <!-- Single Post Image -->
                    <div class="single-post-image">
                        <img
                            alt="Single Post Image"
                            src="{{asset('userassets/images/Forbes image.png')}}"
                        />
                    </div>
                    <!--/ Single Post Image -->
                </a>

                <!-- Post Details -->
                <div class="post-details">
                    <h6 style="margin-bottom: 10px">
                        <b
                            >Shankar Kularia has revolutionized
                            workplace interior fit-out industry over
                            decades</b
                        >
                    </h6>
                    <span style="color: gray">December 15, 2023</span>
                    <span style="color: gray"> - 5 minute read</span>
                    <p style="margin-top: 10px">
                        Mr. Shankar Kularia, the managing director of
                        Padam Group, has been in the Workplace interior
                        fit-out industry for three decades. The man with
                        the most creative and innovative vision, he
                        started his journey from
                    </p>
                    <button class="news-btn">
                        <a
                            target="_blank"
                            href="https://www.forbesindia.com/article/brand-connect/shankar-kularia-has-revolutionized-workplace-interior-fitout-industry-over-decades/89929/1"
                            >Read Article</a
                        >
                    </button>
                </div>

                <!--/ Post Details -->
            </div>
            <div class="c-col-12">
                <!-- Single Blog Post (Horizontal) -->
                <div
                    class="single-blog-post has-anim fadeUp horizontal sticky-new top-margin-20"
                    data-aos="fade-left"
                    data-aos-duration="1000"
                >
                    <a
                        class="cursor-text"
                        data-cursor-text="READ"
                        href=" https://www.financialexpress.com/life/lifestyle-from-a-small-interior-business-company-to-working-for-a-fortune-500-firm-the-success-story-of-padam-groups-kularia-brothers-3371009/"
                        target="_blank"
                    >
                        <!-- Single Post Image -->
                        <div class="single-post-image">
                            <img
                                alt="Single Post Image"
                                src="{{asset('userassets/images/Financial Express Image.png')}}"
                            />
                        </div>
                        <!--/ Single Post Image -->
                    </a>

                    <!-- Post Details -->

                    <div class="post-details">
                        <h6 style="margin-bottom: 10px">
                            <b
                                >From a small interior business company
                                to working for a Fortune 500 firm, the
                                success story of Padam Groups Kularia
                                Brothers</b
                            >
                        </h6>
                        <span style="color: gray"
                            >January 22, 2024</span
                        >
                        <span style="color: gray">
                            - 2 minute read</span
                        >
                        <p style="margin-top: 10px">
                            From a small interior business company to
                            working for a Fortune 500 firm, the success
                            story of Padam Groups Kularia Brothers
                        </p>
                        <button class="news-btn">
                            <a
                                href="https://www.financialexpress.com/life/lifestyle-from-a-small-interior-business-company-to-working-for-a-fortune-500-firm-the-success-story-of-padam-groups-kularia-brothers-3371009/"
                                >Read Article</a
                            >
                        </button>
                    </div>

                    <!--/ Post Details -->
                </div>
                <!--/ Single Blog Post (Horizontal) -->
            </div>
            <div class="c-col-12">
                <!-- Single Blog Post (Horizontal) -->
                <div
                    class="single-blog-post has-anim fadeUp horizontal sticky-new top-margin-20"
                    data-aos="fade-right"
                    data-aos-duration="1000"
                >
                    <a
                        class="cursor-text"
                        data-cursor-text="READ"
                        href="https://timesofindia.indiatimes.com/india/interior-design-architecture-in-overdrive-tech-sustainability-and-user-centric-designs-take-center-stage/articleshow/106560086.cms"
                        target="_blank"
                    >
                        <!-- Single Post Image -->
                        <div class="single-post-image">
                            <img
                                alt="Single Post Image"
                                src="https://i0.wp.com/www.coursejoiner.com/wp-content/uploads/2024/07/Times-Of-India-Internship-2024.png?resize=602%2C334&ssl=1"
                            />
                        </div>
                        <!--/ Single Post Image -->
                    </a>

                    <!-- Post Details -->
                    <div class="post-details">
                        <h6 style="margin-bottom: 10px">
                            <b
                                >Interior design &amp; architecture in
                                overdrive: Tech, sustainability, and
                                user-centric designs take center
                                stage</b
                            >
                        </h6>
                        <span style="color: gray">6 January 2024</span>
                        <span style="color: gray">
                            - 5 minute read</span
                        >
                        <p style="margin-top: 10px">
                            The landscape of interior design and
                            architecture is experiencing a seismic
                            shift, as the industry embraces
                            revolutionary trends that are set to
                            redefine the way we live and work.
                        </p>
                        <button class="news-btn">
                            <a
                                href="https://timesofindia.indiatimes.com/india/interior-design-architecture-in-overdrive-tech-sustainability-and-user-centric-designs-take-center-stage/articleshow/106560086.cms"
                                >Read Article</a
                            >
                        </button>
                    </div>

                    <!--/ Post Details -->
                </div>
                <!--/ Single Blog Post (Horizontal) -->
            </div>
            <div class="c-col-12">
                <!-- Single Blog Post (Horizontal) -->
                <div
                    class="single-blog-post has-anim fadeUp horizontal sticky-new top-margin-20"
                    data-aos="fade-left"
                    data-aos-duration="1000"
                >
                    <a
                        class="cursor-text"
                        data-cursor-text="READ"
                        href="https://zeenews.india.com/internet-social-media/business-success-story-how-kularia-brothers-made-this-small-business-to-fortune-500-list-2706638.html"
                        target="_blank"
                    >
                        <!-- Single Post Image -->
                        <div class="single-post-image">
                            <img
                                alt="Single Post Image"
                                src="https://play-lh.googleusercontent.com/3ifpSvHElszjWG4tHGzFfox1Sj4QcLWM7ht0xUgtGEcMyDWVBMieGzldED2z81ocOD4u=w600-h300-pc0xffffff-pd"
                            />
                        </div>
                        <!--/ Single Post Image -->
                    </a>

                    <!-- Post Details -->
                    <div class="post-details">
                        <h6 style="margin-bottom: 10px">
                            <b
                                >Business Success Story: How Kularia
                                Brothers Made This Small Business To
                                Fortune 500 List</b
                            >
                        </h6>
                        <span style="color: gray"
                            >January 6th , 2024</span
                        >
                        <span style="color: gray">
                            - 5 minute read</span
                        >
                        <p style="margin-top: 10px">
                            In 1970, guided by the vision of Shri
                            Padamaramji Kularia, the Kularia brothers
                            embarked on a journey that would redefine
                            the workplace interior fit-out industry.
                            From humble beginnings, Mr. Kanaram Kularia,
                        </p>
                        <button class="news-btn">
                            <a
                                href="https://zeenews.india.com/internet-social-media/business-success-story-how-kularia-brothers-made-this-small-business-to-fortune-500-list-2706638.html"
                                target="_blank"
                            >
                                Read Article</a
                            >
                        </button>
                    </div>

                    <!--/ Post Details -->
                </div>
                <!--/ Single Blog Post (Horizontal) -->
            </div>
            <div class="c-col-12">
                <!-- Single Blog Post (Horizontal) -->
                <div
                    class="single-blog-post has-anim fadeUp horizontal sticky-new top-margin-20"
                    data-aos="fade-right"
                    data-aos-duration="1000"
                >
                    <a
                        class="cursor-text"
                        data-cursor-text="READ"
                        href="https://www.bignewsnetwork.com/news/274082643/padam-group-the-face-of-workplace-interior-fit-out-industry
            "
                        target="_blank"
                    >
                        <!-- Single Post Image -->
                        <div class="single-post-image">
                            <img
                                alt="Single Post Image"
                                src="https://gaee.org/wp-content/uploads/2020/01/big.png"
                            />
                        </div>
                        <!--/ Single Post Image -->
                    </a>

                    <!-- Post Details -->
                    <div class="post-details">
                        <h6 style="margin-bottom: 10px">
                            <b
                                >Padam Group: The Face of Workplace
                                Interior fit-out Industry</b
                            >
                        </h6>
                        <span style="color: gray"
                            >January 2nd , 2024</span
                        >
                        <span style="color: gray">
                            - 5 minute read</span
                        >
                        <p style="margin-top: 10px">
                            Padam Group, a massive name in the workplace
                            interior fit-out industry, was started under
                            the guidance of Shri Padamaramji Kularia in
                            1970. The group started it with minimal
                            resources and made it to the
                        </p>
                        <button class="news-btn">
                            <a
                                href="https://www.bignewsnetwork.com/news/274082643/padam-group-the-face-of-workplace-interior-fit-out-industry
                    "
                                target="_blank"
                                >Read Article</a
                            >
                        </button>
                    </div>

                    <!--/ Post Details -->
                </div>
                <!--/ Single Blog Post (Horizontal) -->
            </div>
            <div class="c-col-12">
                <!-- Single Blog Post (Horizontal) -->
                <div
                    class="single-blog-post has-anim fadeUp horizontal sticky-new top-margin-20"
                    data-aos="fade-left"
                    data-aos-duration="1000"
                >
                    <a
                        class="cursor-text"
                        data-cursor-text="READ"
                        href="https://ipsnews.net/business/2024/01/05/padam-group-a-company-with-a-vision/"
                        target="_blank"
                    >
                        <!-- Single Post Image -->
                        <div class="single-post-image">
                            <img
                                alt="Single Post Image"
                                src="https://www.ipsnews.net/Library/2017/06/logo400x400.jpg"
                            />
                        </div>
                        <!--/ Single Post Image -->
                    </a>

                    <!-- Post Details -->

                    <div class="post-details">
                        <h6 style="margin-bottom: 10px">
                            <b>PADAM GROUP: A COMPANY WITH A VISION</b>
                        </h6>
                        <span style="color: gray"
                            >December 15, 2023</span
                        >
                        <span style="color: gray">
                            - 5 minute read</span
                        >
                        <p style="margin-top: 10px">
                            Mr. Shankar Kularia, the managing director
                            of Padam Group, has been in the Workplace
                            interior fit-out industry for three decades.
                            The man with the most creative and
                            innovative vision, he started his journey
                            from
                        </p>
                        <button class="news-btn">
                            <a
                                href="https://ipsnews.net/business/2024/01/05/padam-group-a-company-with-a-vision/"
                                target="_blank"
                                >Read Article</a
                            >
                        </button>
                    </div>

                    <!--/ Post Details -->
                </div>
                <!--/ Single Blog Post (Horizontal) -->
            </div>
            <div class="c-col-12">
                <!-- Single Blog Post (Horizontal) -->
                <div
                    class="single-blog-post has-anim fadeUp horizontal sticky-new top-margin-20"
                    data-aos="fade-right"
                    data-aos-duration="1000"
                >
                    <a
                        class="cursor-text"
                        data-cursor-text="READ"
                        href="https://www.republicbharat.com/india/padam-group-touches-sky-in-the-field-of-workspace-interior-fit-out"
                        target="_blank"
                    >
                        <!-- Single Post Image -->
                        <div class="single-post-image">
                            <img
                                alt="Single Post Image"
                                src="https://upload.wikimedia.org/wikipedia/commons/6/6a/Republic_Bharat_Logo.jpg"
                            />
                        </div>
                        <!--/ Single Post Image -->
                    </a>

                    <!-- Post Details -->

                    <div class="post-details">
                        <h6 style="margin-bottom: 10px">
                            <b>् पे रिर फ़- ंचां क म र</b>
                        </h6>
                        <span style="color: gray">March 3rd 2024</span>
                        <span style="color: gray"> -6 minute read</span>
                        <p style="margin-top: 10px">
                            M मं व स इर - े ृटत वचा ्र, (Padam Group) न
                            ि र् प ् सल
                        </p>
                        <button class="news-btn">
                            <a
                                href="https://www.republicbharat.com/india/padam-group-touches-sky-in-the-field-of-workspace-interior-fit-out"
                                target="_blank"
                                >Read Article</a
                            >
                        </button>
                    </div>

                    <!--/ Post Details -->
                </div>
                <!--/ Single Blog Post (Horizontal) -->
            </div>
            <div class="c-col-12">
                <!-- Single Blog Post (Horizontal) -->
                <div
                    class="single-blog-post has-anim fadeUp horizontal sticky-new top-margin-20"
                    style="border-bottom: none !important"
                    data-aos="fade-left"
                    data-aos-duration="1000"
                >
                    <a
                        class="cursor-text"
                        data-cursor-text="READ"
                        href="https://www.lokmatnews.in/technology/fortune-500-company-padam-group-of-companies-indian-workspace-interiors-boom-focus-on-raising-b507/"
                        target="_blank"
                    >
                        <!-- Single Post Image -->
                        <div class="single-post-image">
                            <img
                                alt="Single Post Image"
                                src="https://india.mom-gmr.org/uploads/tx_lfrogmom/media/16502-1592_import.png"
                            />
                        </div>
                        <!--/ Single Post Image -->
                    </a>

                    <!-- Post Details -->

                    <div class="post-details">
                        <h6 style="margin-bottom: 10px">
                            <b> र क , ा प ज</b>
                        </h6>
                        <span style="color: gray"
                            >February 26, 2024</span
                        >
                        <span style="color: gray">
                            - 7 minute read</span
                        >
                        <p style="margin-top: 10px">
                            ु क े े िट- र ष कय पर ए न ग े ल ी
                        </p>
                        <button class="news-btn">
                            <a
                                href="https://www.lokmatnews.in/technology/fortune-500-company-padam-group-of-companies-indian-workspace-interiors-boom-focus-on-raising-b507/"
                                target="_blank"
                                >Read Article</a
                            >
                        </button>
                    </div>
                    <!--/ Post Details -->
                </div>
                <!--/ Single Blog Post (Horizontal) -->
            </div>
            <!--/ Single Blog Post (Horizontal) -->
        </div>
    </div>
</div>
@include('user.layouts.footer')
@endsection