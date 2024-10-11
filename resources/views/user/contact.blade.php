@extends('user.layouts.app')
@section('content')
<input type="hidden" id="contactFile" />
<section class="contact">
    @include('user.layouts.menu')
    <div class="contact-overlay">
        <h1>Contact Us</h1>
    </div>
</section>
<div class="page2-contact-mobile">
    <h1>Connect with our offices</h1>
    <div class="swiper mySwiper">
        <div class="swiper-wrapper">
            <div class="swiper-slide">
                <img src="{{asset('userassets/images/map1.png')}}" alt="" />
                <div class="swiper-contact-overlay">
                    <div class="swiper-contact-dets">
                        <h1>Mumbai Location</h1>
                        <p>
                            <b>Address : </b>1101, LOTUS TRADE
                            CENTRE,NEW LINK ROAD,ANDHERI WEST, MUMBAI,
                            Mumbai Suburban, Maharashtra, 400058
                        </p>
                    </div>
                </div>
            </div>
            <div class="swiper-slide">
                <img src="{{asset('userassets/images/map3.png')}}" alt="" />
                <div class="swiper-contact-overlay">
                    <div class="swiper-contact-dets">
                        <h1>New Delhi Head Office</h1>
                        <p>
                            <b>Address : </b>9TH, 902 AND 903, DEVIKA
                            TOWER,PLOT NO 6,NEHRU PALACE,New Delhi,
                            Delhi, 110019
                        </p>
                    </div>
                </div>
            </div>
            <div class="swiper-slide">
                <img src="{{asset('userassets/images/map9.png')}}" alt="" />
                <div class="swiper-contact-overlay">
                    <div class="swiper-contact-dets">
                        <h1>Jaipur Head Office</h1>
                        <p>
                            <b>Address : </b>SP-810-811, A-1, RIICO
                            Industrial Area Phase-2, RIICO Industrial
                            Area, Tijara, Bhiwadi, Alwar, Rajasthan,
                            301019
                        </p>
                    </div>
                </div>
            </div>
            <div class="swiper-slide">
                <img src="{{asset('userassets/images/map4.png')}}" alt="" />
                <div class="swiper-contact-overlay">
                    <div class="swiper-contact-dets">
                        <h1>Ahmedabad Head Office</h1>
                        <p>
                            <b>Address : </b>G/30, MAHALAXMI COMPLEX,
                            Bhatar Char Rasta, SURAT, Surat, Gujarat,
                            395017
                        </p>
                    </div>
                </div>
            </div>
            <div class="swiper-slide">
                <img src="{{asset('userassets/images/map10.png')}}" alt="" />
                <div class="swiper-contact-overlay">
                    <div class="swiper-contact-dets">
                        <h1>Hyderabad Head Office</h1>
                        <p><b>Address : </b>Hyderabad office address</p>
                    </div>
                </div>
            </div>
            <div class="swiper-slide">
                <img src="{{asset('userassets/images/map7.png')}}" alt="" />
                <div class="swiper-contact-overlay">
                    <div class="swiper-contact-dets">
                        <h1>Vijaywada Head Office</h1>
                        <p><b>Address : </b>Vijaywada office address</p>
                    </div>
                </div>
            </div>
            <div class="swiper-slide">
                <img src="{{asset('userassets/images/map6.png')}}" alt="" />
                <div class="swiper-contact-overlay">
                    <div class="swiper-contact-dets">
                        <h1>Bangalore Head Office</h1>
                        <p>
                            <b>Address : </b>2ND FLOOR, NO 1 324/62,
                            SARVASHEELA, BELLARY MAIN ROAD, GANGANAGAR
                            BANGALORE, Bengaluru (Bangalore)
                        </p>
                    </div>
                </div>
            </div>
            <div class="swiper-slide">
                <img src="{{asset('userassets/images/map2.png')}}" alt="" />
                <div class="swiper-contact-overlay">
                    <div class="swiper-contact-dets">
                        <h1>Chennai Head Office</h1>
                        <p>
                            <b>Address : </b>NO. 8 AND 9, SHOP NO 9, 1ST
                            FLOOR, SAMYPILLAI STREET, CHOOLAI HIGH ROAD,
                            CHOOLAI, Chennai, Tamil Nadu, 600112
                        </p>
                    </div>
                </div>
            </div>
            <div class="swiper-slide">
                <img src="{{asset('userassets/images/map12.png')}}" alt="" />
                <div class="swiper-contact-overlay">
                    <div class="swiper-contact-dets">
                        <h1>Trivandrum Head Office</h1>
                        <p>
                            <b>Address : </b>2nd Floor, No. 1 and 2,
                            1-26-2 and 1-26-2/1 Gramakantam,
                            Gachibowli,, Sherlimgampalli, Ranga Reddy
                        </p>
                    </div>
                </div>
            </div>
            <div class="swiper-slide">
                <img src="{{asset('userassets/images/map11.png')}}" alt="" />
                <div class="swiper-contact-overlay">
                    <div class="swiper-contact-dets">
                        <h1>Coimbatore Head Office</h1>
                        <p>
                            <b>Address : </b>Coimbatore office address
                        </p>
                    </div>
                </div>
            </div>
            <div class="swiper-slide">
                <img src="{{asset('userassets/images/map5.png')}}" alt="" />
                <div class="swiper-contact-overlay">
                    <div class="swiper-contact-dets">
                        <h1>Noida Head Office</h1>
                        <p>
                            <b>Address : </b>D 194, SECTOR 10, NOIDA,
                            Gautam Buddha Nagar, Uttar Pradesh, 201301
                        </p>
                    </div>
                </div>
            </div>
            <div class="swiper-slide">
                <img src="{{asset('userassets/images/map8.png')}}" alt="" />
                <div class="swiper-contact-overlay">
                    <div class="swiper-contact-dets">
                        <h1>Kolkata Head Office</h1>
                        <p>
                            <b>Address : </b> 52F, Babu Bagan Lane,
                            Dhakuria, Kolkata, Kolkata, West
                            Bengal,700031
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
    </div>
</div>
<div class="page2-contact">
    <div class="wrap-contact">
        <h1>Connect with one of our office</h1>
        <div class="page2-contact-cards">
            <div class="page2-contact-cards-elems">
                <div class="process__item">
                    <div class="article__wrapper">
                        <div class="address-card">
                            <a href="">
                                <img
                                    class="city-img"
                                    src="{{asset('userassets/images/map1.jpg')}}"
                                    alt=""
                                />
                            </a>
                        </div>
                        <div class="address-desc">
                            <h1 class="city-name">
                                Mumbai Head Office
                            </h1>
                            <p class="city-address">
                                <b>Address : </b>1101, LOTUS TRADE
                                CENTRE,NEW LINK ROAD,ANDHERI WEST,
                                MUMBAI, Mumbai Suburban, Maharashtra,
                                400058
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="page">
        <div class="big-gear">
            <div class="tooth"></div>
            <div class="tooth"></div>
            <div class="tooth"></div>
            <div class="tooth"></div>
            <div class="tooth"></div>
            <div class="tooth"></div>
            <div class="tooth"></div>
            <div class="tooth"></div>
            <div class="tooth"></div>
            <div class="tooth"></div>
            <div class="content-wrapper">
                <a>Mumbai</a>
                <a>New Delhi/Ncr</a>
                <a>Jaipur</a>
                <a>Ahmedabad</a>
                <a>Hyderabad</a>
                <a>Vijaywada</a>
                <a>Banglore</a>
                <a>Chennai</a>
                <a>Trivandrum</a>
                <a>Coimbatore</a>
                <a>Noida</a>
                <a>Kolkata</a>
            </div>
        </div>
        <div class="small-gear">
            <div class="tooth"></div>
            <div class="tooth"></div>
            <div class="tooth"></div>
            <div class="tooth"></div>
            <div class="tooth"></div>
            <div class="content-wrapper">
                <img
                    src="https://i.pinimg.com/736x/da/d3/4b/dad34b3747d42f9d9a96f15671303a63.jpg"
                />
            </div>
        </div>
    </div>
</div>
<div class="contact-container">
    <h1>We are always here to support you</h1>
    <form class="contact-form">
        <div class="form-group">
            <label for="topic">Select Topic</label>
            <select id="topic" name="topic" required>
                <option value="" disabled selected>Select Topic</option>
                <option value="" selected>Business Queries</option>
                <option value="" selected>⁠Procurement Queries</option>
                <option value="" selected>⁠General Queries</option>
                <!-- Add options here -->
            </select>
        </div>
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" id="name" name="name" required />
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" id="email" name="email" required />
        </div>
        <div class="form-group">
            <label for="phone">Phone Number</label>
            <input type="tel" id="phone" name="phone" required />
        </div>
        <div class="form-group">
            <label for="message">Message</label>
            <textarea
                id="message"
                name="message"
                rows="4"
                required
            ></textarea>
        </div>
        <button type="submit">Send Message</button>
    </form>
</div>
@include('user.layouts.footer')
@endsection