<div class="container-fluid service py-5" style="background-color: rgb(255 241 211); margin: 0 !important;">
    <div class="row g-0 align-items-start" style="height: 70vh;">
        <div class="col-lg-6 wow fadeIn" data-wow-delay="0.1s" style="padding: 0;">
            <div class="image border" style=" padding: 0;">
                <img src="{{ asset('img/slide.jpeg') }}" class="img-fluid" alt="Creators India" style="width: 100%; height: 100%; object-fit: cover; margin: 0;">
            </div>
        </div>
        <div class="col-lg-6 wow fadeIn" data-wow-delay="0.3s" style="display: flex; flex-direction: column; justify-content: center; padding: 0;">
            <h1 class="text-dark mb-4 display-5 no-margin-top">Creators India YouTube Video Diwali Competition 2024</h1>
            <div class="button-container" style="margin-top: auto; display: flex; flex-direction: column; text-align:center!important;">
                <a href="participate" class="btn btn-prima">Participate</a>
                <a href="/" class="btn btn-prima">Login</a>
            </div>
        </div>
    </div></div>

<style>
    /* Full viewport height and center content */

    /* Styling for buttons */
    .btn-prima {
        background-color: red; /* Solid red background */
        border-color: #003366; /* Dark blue border */
        color: #ffffff !important; /* White text color */
        text-decoration: none !important; /* Remove underline */
        padding: 15px 0; /* Adjust padding for button size */
        width: 250px; /* Set width to 50px */
        border-radius: 20px; /* Rounded corners */
        margin: 10px 0 !important; /* Set vertical margins for spacing between buttons */
        font-size: 18px; /* Adjust font size as needed */
        font-weight: bold; /* Bold text for emphasis */
        transition: background-color 0.3s ease, transform 0.3s ease;
        box-shadow: 0 4px 10px rgba(0, 0, 0, 0.5);
        border: 2px solid white !important;
        margin-left: 100px !important; /* Adds depth to the button */
    }

    .btn-prima:hover {
        background-color: black !important; /* Red background on hover */
        border-color: #000000; /* Black border on hover */
        color: #ffffff; /* Ensure text remains white on hover */
    }

    .no-margin-top {
        margin-top: 0 !important; /* Ensure there's no top margin */
    }

    @media (max-width: 768px) {
        .service .row {
            flex-direction: column; /* Stack columns on smaller screens */
            height: auto; /* Let content flow naturally */
        }

        .service .image {
            height: 50vh; /* Reduce image height on smaller screens */
        }

        .col-lg-6 {
            padding: 10px; /* Add padding to content */
        }

        h1 {
            font-size: 24px; /* Adjust heading size */
        }

        .btn-prima {
            width: 100%; /* Make buttons full width on mobile */
            max-width: 300px; /* Set a maximum width */
        }
    }

    @media (max-width: 480px) {
        .service .image {
            height: 50vh; /* Further reduce image height on mobile */
        }

        h1 {
            font-size: 20px; /* Adjust heading size for mobile */
        }

        .btn-prima {
            padding: 10px 0; /* Adjust button padding */
            width: 100%; /* Ensure full-width buttons on very small screens */
        }
    }
</style>
