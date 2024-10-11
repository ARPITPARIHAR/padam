@extends('user.layouts.app')
@section('content')
<input type="hidden" id="awardsFile" />
<div class="main-awards">
    <section class="awards">
        @include('user.layouts.menu')
        <div class="awards-overlay">
            <h1>Awards</h1>
        </div>
    </section>
    <section class="brands-awards">
        <div class="brands1-awards brand-awards">
            <div class="brands-awards-img">
                <img src="{{asset('userassets/awards/images/1.png')}}" alt="" />
                <p>Rajasthan Gourav Award</p>
            </div>
            <div class="brands-awards-img">
                <img src="{{asset('userassets/awards/images/2.png')}}" alt="" />
                <p>Rajasthan Gourav Award - Shankar Kularia</p>
            </div>
            <div class="brands-awards-img">
                <img src="{{asset('userassets/awards/images/3.png')}}" alt="" />
                <p>Bharat Gourav Award</p>
            </div>
            <div class="brands-awards-img">
                <img src="{{asset('userassets/awards/images/4.png')}}" alt="" />
                <p>Project Excellence Award</p>
            </div>
        </div>
        <div class="brands2-awards brand-awards">
            <div class="brands-awards-img">
                <img src="{{asset('userassets/awards/images/5.png')}}" alt="" />
                <p>Ganga Award</p>
            </div>
            <div class="brands-awards-img">
                <img src="{{asset('userassets/awards/images/6.png')}}" alt="" />
                <p>Rajasthan Gourav Award</p>
            </div>
            <div class="brands-awards-img">
                <img src="{{asset('userassets/awards/images/7.png')}}" alt="" />
                <p>Business Of Tommorrow Award 2021</p>
            </div>
            <div class="brands-awards-img">
                <img src="{{asset('userassets/awards/images/8.png')}}" alt="" />
                <p>Safety Excellence Award</p>
            </div>
        </div>
        <div class="brands3-awards brand-awards">
            <div class="brands-awards-img">
                <img src="{{asset('userassets/awards/images/9.png')}}" alt="" />
                <p>50 Million Safe Man Hours Award</p>
            </div>
            <div class="brands-awards-img">
                <img src="{{asset('userassets/awards/images/10.png')}}" alt="" />
                <p>Bharat Youth Award</p>
            </div>
            <div class="brands-awards-img">
                <img src="{{asset('userassets/awards/images/11.png')}}" alt="" />
                <p>Best Employer Youth Award 2023</p>
            </div>
            <div class="brands-awards-img">
                <img src="{{asset('userassets/awards/images/12.png')}}" alt="" />
                <p>
                    Best General Contracting Firm 2022 - Stellar Record
                    Award
                </p>
            </div>
        </div>
        <div class="brands4-awards brand-awards">
            <div class="brands-awards-img">
                <img src="{{asset('userassets/awards/images/13.png')}}" alt="" />
                <p>1 Million Man Hours - Samsung C&T</p>
            </div>
            <div class="brands-awards-img">
                <img src="{{asset('userassets/awards/images/14.png')}}" alt="" />
                <p>
                    Honorary Award - Shree Vishwakarma Charitable Trust
                </p>
            </div>
            <div class="brands-awards-img">
                <img src="{{asset('userassets/awards/images/15.png')}}" alt="" />
                <p>India's Greatest Brands - Asia One</p>
            </div>
            <div class="brands-awards-img">
                <img src="{{asset('userassets/awards/images/16.png')}}" alt="" />
                <p>Special Appreciatrion Trophy</p>
            </div>
        </div>
        <div class="brands4-awards brand-awards">
            <div class="brands-awards-img">
                <img src="{{asset('userassets/awards/images/17.png')}}" alt="" />
                <p>
                    Stellar Record Awards - Best General Consulting Firm
                    2022
                </p>
            </div>
            <div class="brands-awards-img">
                <img src="{{asset('userassets/awards/images/18.png')}}" alt="" />
                <p>Business Excellence Award</p>
            </div>
            <div class="brands-awards-img">
                <img src="{{asset('userassets/awards/images/19.png')}}" alt="" />
                <p>South-East Aisa Business Icon - Dainik Bhaskar</p>
            </div>
            <div class="brands-awards-img">
                <img src="{{asset('userassets/awards/images/20.png')}}" alt="" />

                <p>India's Greatest Brands - Asia One</p>
            </div>
        </div>
    </section>
    @include('user.layouts.footer')
</div>
@endsection