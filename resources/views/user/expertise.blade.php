@extends('user.layouts.app')
@section('content')
<input type="hidden" id="expertiseFile" />
<div class="main-expertise">
    <section class="page1-expertise">
    @include('user.layouts.menu')
      <div class="page1-expertise-videos">
        <div class="page1-expertise-videos-overlay"></div>
        <img src="{{asset('userassets/images/ex.jpg')}}" alt="" />
      </div>
      <div class="page1-expertise-text">
        <div class="page1-expertise-text-left">
          <div class="page1-expertise-t1">
            <h1>Expertise</h1>
          </div>
          <div class="page1-expertise-t2">
            <p>
              Expertise : Today, our team of over 5,000+ skilled and
              multifaceted professionals brings unparalleled expertise and a
              commitment to excellence to every project we undertake. Explore
              our detailed services to see how we can bring your vision to
              life!
            </p>
          </div>
        </div>
      </div>
    </section>

    <section class="page2-expertise">
      <div class="page2-expertise-line">
        <div class="page2-expertise-line-inner"></div>
        <div class="page2-expertise-circle"></div>
      </div>
      <div id="c1" class="card card1">
        <div class="card-heading">
          <h1>Build Solutions</h1>
        </div>
        <div class="card-img">
          <img src="{{asset('userassets/expertise/images/build.jpg')}}" alt="" />
        </div>
        <p>
          Our build capabilities are integral to transforming design concepts
          into reality. Our expertise in space planning, custom furniture,
          construction, project management, and sustainable practices ensures
          that each project is completed to the highest standards, reflecting
          the unique vision and requirements of their clients.
        </p>
        <div class="page7-expertise-container-elems">
          <div
            class="page7-expertise-elem1 page7-expertise-elem"
            style="
              color: rgb(7, 0, 63);
              background-color: rgb(226, 222, 196);
              width: 24%;
              border-radius: 0.3vw;
            "
          >
            <h1>Career Growth</h1>
            <p>
              We believe in investing in our employees' professional
              development and providing opportunities to learn and grow within
              the company.
            </p>
          </div>
          <div
            class="page7-expertise-elem2 page7-expertise-elem"
            style="
              color: rgb(7, 0, 63);
              background-color: rgb(226, 222, 196);
              width: 24%;
              border-radius: 0.3vw;
            "
          >
            <h1>Work-Life Balance</h1>
            <p>
              We understand the importance of maintaining a healthy work-life
              balance and strive to provide flexibility and support to our
              employees.
            </p>
          </div>
          <div
            class="page7-expertise-elem3 page7-expertise-elem"
            style="
              color: rgb(7, 0, 63);
              background-color: rgb(226, 222, 196);
              width: 24%;
              border-radius: 0.3vw;
            "
          >
            <h1>Diversity and Inclusion</h1>
            <p>
              We believe diversity makes us stronger, and we are committed to
              fostering an inclusive workplace where everyone feels valued and
              supported.
            </p>
          </div>
          <div
            class="page7-expertise-elem4 page7-expertise-elem"
            style="
              color: rgb(7, 0, 63);
              background-color: rgb(226, 222, 196);
              width: 24%;
              border-radius: 0.3vw;
            "
          >
            <h1>Impactful Work</h1>
            <p>
              At Padams Group, you will have the opportunity to work on
              challenging and meaningful projects that make a real difference
              for our clients.
            </p>
          </div>
        </div>
      </div>
      <div id="c2" class="card card2">
        <div class="card-heading">
          <h1>Design Solutions</h1>
        </div>
        <div class="card-img">
          <img src="{{asset('userassets/images/design solutions.jpg')}}" alt="" />
        </div>
        <p>
          At Padams, we create personalised spaces that reflect your unique
          style and needs. From custom furniture and beautiful lighting to
          smart material choices, we transform your vision into reality. Our
          friendly team handles everything from renovations to new builds,
          focusing on every detail. We prioritise sustainability and modern
          technology to ensure your space is both beautiful and efficient.
          From start to finish, we're dedicated to making your home or
          workspace truly special and functional, tailored just for you.
        </p>
        <div class="page7-expertise-container-elems">
          <div
            class="page7-expertise-elem1 page7-expertise-elem"
            style="
              color: rgb(7, 0, 63);
              background-color: rgb(226, 222, 196);
              width: 24%;
              border-radius: 0.3vw;
            "
          >
            <h1>Career Growth</h1>
            <p>
              We believe in investing in our employees' professional
              development and providing opportunities to learn and grow within
              the company.
            </p>
          </div>
          <div
            class="page7-expertise-elem2 page7-expertise-elem"
            style="
              color: rgb(7, 0, 63);
              background-color: rgb(226, 222, 196);
              width: 24%;
              border-radius: 0.3vw;
            "
          >
            <h1>Work-Life Balance</h1>
            <p>
              We understand the importance of maintaining a healthy work-life
              balance and strive to provide flexibility and support to our
              employees.
            </p>
          </div>
          <div
            class="page7-expertise-elem3 page7-expertise-elem"
            style="
              color: rgb(7, 0, 63);
              background-color: rgb(226, 222, 196);
              width: 24%;
              border-radius: 0.3vw;
            "
          >
            <h1>Diversity and Inclusion</h1>
            <p>
              We believe diversity makes us stronger, and we are committed to
              fostering an inclusive workplace where everyone feels valued and
              supported.
            </p>
          </div>
          <div
            class="page7-expertise-elem4 page7-expertise-elem"
            style="
              color: rgb(7, 0, 63);
              background-color: rgb(226, 222, 196);
              width: 24%;
              border-radius: 0.3vw;
            "
          >
            <h1>Impactful Work</h1>
            <p>
              At Padams Group, you will have the opportunity to work on
              challenging and meaningful projects that make a real difference
              for our clients.
            </p>
          </div>
        </div>
      </div>
      <div id="c3" class="card card3">
        <div class="card-heading">
          <h1>Workplace Strategy</h1>
        </div>
        <div class="card-img">
          <img src="{{asset('userassets/expertise/images/workplace.jpeg')}}" alt="" />
        </div>
        <p>
          We make engineering and operations effortless for you. We handle
          everything from detailed planning and technical drawings to managing
          construction and installations. Our team ensures everything is safe,
          compliant, and high-quality, working closely with contractors to
          keep your project on track. We focus on blending innovation with
          sustainability, making sure every detail is perfect. Our goal is to
          turn your vision into a beautiful, functional space while providing
          a smooth, stress-free experience from start to finish.
        </p>
        <div class="page7-expertise-container-elems">
          <div
            class="page7-expertise-elem1 page7-expertise-elem"
            style="
              color: rgb(7, 0, 63);
              background-color: rgb(226, 222, 196);
              width: 24%;
              border-radius: 0.3vw;
            "
          >
            <h1>Career Growth</h1>
            <p>
              We believe in investing in our employees' professional
              development and providing opportunities to learn and grow within
              the company.
            </p>
          </div>
          <div
            class="page7-expertise-elem2 page7-expertise-elem"
            style="
              color: rgb(7, 0, 63);
              background-color: rgb(226, 222, 196);
              width: 24%;
              border-radius: 0.3vw;
            "
          >
            <h1>Work-Life Balance</h1>
            <p>
              We understand the importance of maintaining a healthy work-life
              balance and strive to provide flexibility and support to our
              employees.
            </p>
          </div>
          <div
            class="page7-expertise-elem3 page7-expertise-elem"
            style="
              color: rgb(7, 0, 63);
              background-color: rgb(226, 222, 196);
              width: 24%;
              border-radius: 0.3vw;
            "
          >
            <h1>Diversity and Inclusion</h1>
            <p>
              We believe diversity makes us stronger, and we are committed to
              fostering an inclusive workplace where everyone feels valued and
              supported.
            </p>
          </div>
          <div
            class="page7-expertise-elem4 page7-expertise-elem"
            style="
              color: rgb(7, 0, 63);
              background-color: rgb(226, 222, 196);
              width: 24%;
              border-radius: 0.3vw;
            "
          >
            <h1>Impactful Work</h1>
            <p>
              At Padams Group, you will have the opportunity to work on
              challenging and meaningful projects that make a real difference
              for our clients.
            </p>
          </div>
        </div>
      </div>
      <div id="c4" class="card card4">
        <div class="card-heading">
          <h1>Integrated Facility Management</h1>
        </div>
        <div class="card-img">
          <img src="{{asset('userassets/expertise/images/facility-management.jpg')}}" alt="" />
        </div>
        <p>
          We make engineering and operations effortless for you. We handle
          everything from detailed planning and technical drawings to managing
          construction and installations. Our team ensures everything is safe,
          compliant, and high-quality, working closely with contractors to
          keep your project on track. We focus on blending innovation with
          sustainability, making sure every detail is perfect. Our goal is to
          turn your vision into a beautiful, functional space while providing
          a smooth, stress-free experience from start to finish.
        </p>
        <div class="page7-expertise-container-elems">
          <div
            class="page7-expertise-elem1 page7-expertise-elem"
            style="
              color: rgb(7, 0, 63);
              background-color: rgb(226, 222, 196);
              width: 24%;
              border-radius: 0.3vw;
            "
          >
            <h1>Career Growth</h1>
            <p>
              We believe in investing in our employees' professional
              development and providing opportunities to learn and grow within
              the company.
            </p>
          </div>
          <div
            class="page7-expertise-elem2 page7-expertise-elem"
            style="
              color: rgb(7, 0, 63);
              background-color: rgb(226, 222, 196);
              width: 24%;
              border-radius: 0.3vw;
            "
          >
            <h1>Work-Life Balance</h1>
            <p>
              We understand the importance of maintaining a healthy work-life
              balance and strive to provide flexibility and support to our
              employees.
            </p>
          </div>
          <div
            class="page7-expertise-elem3 page7-expertise-elem"
            style="
              color: rgb(7, 0, 63);
              background-color: rgb(226, 222, 196);
              width: 24%;
              border-radius: 0.3vw;
            "
          >
            <h1>Diversity and Inclusion</h1>
            <p>
              We believe diversity makes us stronger, and we are committed to
              fostering an inclusive workplace where everyone feels valued and
              supported.
            </p>
          </div>
          <div
            class="page7-expertise-elem4 page7-expertise-elem"
            style="
              color: rgb(7, 0, 63);
              background-color: rgb(226, 222, 196);
              width: 24%;
              border-radius: 0.3vw;
            "
          >
            <h1>Impactful Work</h1>
            <p>
              At Padams Group, you will have the opportunity to work on
              challenging and meaningful projects that make a real difference
              for our clients.
            </p>
          </div>
        </div>
      </div>
      <div id="c5" class="card card5">
        <div class="card-heading">
          <h1>Engineering And Operations</h1>
        </div>
        <div class="card-img">
          <img
            src="{{asset('userassets/expertise/images/Engineering And Operations.png')}}"
            alt=""
          />
        </div>
        <p>
          We make engineering and operations effortless for you. We handle
          everything from detailed planning and technical drawings to managing
          construction and installations. Our team ensures everything is safe,
          compliant, and high-quality, working closely with contractors to
          keep your project on track. We focus on blending innovation with
          sustainability, making sure every detail is perfect. Our goal is to
          turn your vision into a beautiful, functional space while providing
          a smooth, stress-free experience from start to finish.
        </p>
        <div class="page7-expertise-container-elems">
          <div
            class="page7-expertise-elem1 page7-expertise-elem"
            style="
              color: rgb(7, 0, 63);
              background-color: rgb(226, 222, 196);
              width: 24%;
              border-radius: 0.3vw;
            "
          >
            <h1>Career Growth</h1>
            <p>
              We believe in investing in our employees' professional
              development and providing opportunities to learn and grow within
              the company.
            </p>
          </div>
          <div
            class="page7-expertise-elem2 page7-expertise-elem"
            style="
              color: rgb(7, 0, 63);
              background-color: rgb(226, 222, 196);
              width: 24%;
              border-radius: 0.3vw;
            "
          >
            <h1>Work-Life Balance</h1>
            <p>
              We understand the importance of maintaining a healthy work-life
              balance and strive to provide flexibility and support to our
              employees.
            </p>
          </div>
          <div
            class="page7-expertise-elem3 page7-expertise-elem"
            style="
              color: rgb(7, 0, 63);
              background-color: rgb(226, 222, 196);
              width: 24%;
              border-radius: 0.3vw;
            "
          >
            <h1>Diversity and Inclusion</h1>
            <p>
              We believe diversity makes us stronger, and we are committed to
              fostering an inclusive workplace where everyone feels valued and
              supported.
            </p>
          </div>
          <div
            class="page7-expertise-elem4 page7-expertise-elem"
            style="
              color: rgb(7, 0, 63);
              background-color: rgb(226, 222, 196);
              width: 24%;
              border-radius: 0.3vw;
            "
          >
            <h1>Impactful Work</h1>
            <p>
              At Padams Group, you will have the opportunity to work on
              challenging and meaningful projects that make a real difference
              for our clients.
            </p>
          </div>
        </div>
      </div>
      <div id="c6" class="card card6">
        <div class="card-heading">
          <h1>Manufacturing</h1>
        </div>
        <div class="card-img">
          <img src="{{asset('userassets/expertise/images/Manufacturing.png')}}" alt="" />
        </div>
        <p>
          Padams Group takes pride in our in-house manufacturing capabilities,
          allowing us to craft bespoke furniture and fixtures tailored to your
          vision. From initial design concepts to final production, we handle
          every step with precision and care. Our skilled team uses
          high-quality materials and advanced techniques to create custom
          pieces that fit perfectly within your space. By managing
          manufacturing ourselves, we ensure exceptional quality control and a
          seamless integration of design and functionality, delivering unique,
          handcrafted solutions that truly enhance your environment.
        </p>
        <div class="page7-expertise-container-elems">
          <div
            class="page7-expertise-elem1 page7-expertise-elem"
            style="
              color: rgb(7, 0, 63);
              background-color: rgb(226, 222, 196);
              width: 24%;
              border-radius: 0.3vw;
            "
          >
            <h1>Career Growth</h1>
            <p>
              We believe in investing in our employees' professional
              development and providing opportunities to learn and grow within
              the company.
            </p>
          </div>
          <div
            class="page7-expertise-elem2 page7-expertise-elem"
            style="
              color: rgb(7, 0, 63);
              background-color: rgb(226, 222, 196);
              width: 24%;
              border-radius: 0.3vw;
            "
          >
            <h1>Work-Life Balance</h1>
            <p>
              We understand the importance of maintaining a healthy work-life
              balance and strive to provide flexibility and support to our
              employees.
            </p>
          </div>
          <div
            class="page7-expertise-elem3 page7-expertise-elem"
            style="
              color: rgb(7, 0, 63);
              background-color: rgb(226, 222, 196);
              width: 24%;
              border-radius: 0.3vw;
            "
          >
            <h1>Diversity and Inclusion</h1>
            <p>
              We believe diversity makes us stronger, and we are committed to
              fostering an inclusive workplace where everyone feels valued and
              supported.
            </p>
          </div>
          <div
            class="page7-expertise-elem4 page7-expertise-elem"
            style="
              color: rgb(7, 0, 63);
              background-color: rgb(226, 222, 196);
              width: 24%;
              border-radius: 0.3vw;
            "
          >
            <h1>Impactful Work</h1>
            <p>
              At Padams Group, you will have the opportunity to work on
              challenging and meaningful projects that make a real difference
              for our clients.
            </p>
          </div>
        </div>
      </div>
    </section>
    @include('user.layouts.footer')
</div>
@endsection