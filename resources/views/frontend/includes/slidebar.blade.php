



    <div class="hero-header">
        <a href="participate" class="btn btn-primary">Participate</a>
        <a href="/" class="btn btn-primary">Login</a>
    </div>


    <style>
        /* Full viewport height and center content */
        .hero-header {
            /* Full viewport height */
            display: flex;
            flex-direction: column; /* Stack children vertically */
            align-items: center; /* Center content horizontally */
            justify-content: center; /* Center content vertically */
            background-color: #f8f9fa; /* Light background color for contrast */
        }

        /* Styling for buttons */
        .btn-primary {
            background-color: navy; /* Dark blue background */
            border-color: #003366; /* Dark blue border */
            color: #ffffff !important; /* White text color */
            text-decoration: none !important; /* Remove underline */
            padding: 15px 30px; /* Adjust padding for button size */
            border-radius: 20px; /* Rounded corners */
            display: inline-block; /* Inline-block for proper spacing */
            margin: 25px; /* Space between buttons */
            font-size: 18px; /* Adjust font size as needed */
            font-weight: bold; /* Bold text for emphasis */
            transition: background-color 0.3s ease, transform 0.3s ease;
            gap:45px; /* Smooth transitions */
        }

        .btn-primary:hover {
            background-color: rgb(210, 68, 92) !important;  /* Black background on hover */
            border-color: #000000; /* Black border on hover */
            color: #ffffff; /* Ensure text remains white on hover */
            transform: scale(1.05); /* Slightly scale up the button on hover */
        }
    </style>
