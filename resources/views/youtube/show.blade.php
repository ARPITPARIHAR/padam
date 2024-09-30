<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>YouTube Video Statistics</title>
    <style>
        /* General Reset */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Arial', sans-serif;
        }

        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background: linear-gradient(to right, #00c6ff, #0072ff); /* Attractive gradient background */
        }

        /* Container for the stats */
        .stats-container {
            background-color: white;
            padding: 30px;
            border-radius: 15px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.2); /* Elevate the container with shadow */
            text-align: center;
            width: 100%;
            max-width: 500px;
            animation: fadeIn 1s ease-in-out;
        }

        h1 {
            font-size: 26px;
            color: #333;
            margin-bottom: 20px;
            background: linear-gradient(to right, #00c6ff, #0072ff);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }

        p {
            font-size: 18px;
            color: #666;
            margin-bottom: 15px;
        }

        a {
            display: inline-block;
            margin-top: 20px;
            padding: 12px 25px;
            background-color: #0072ff;
            color: white;
            border-radius: 5px;
            text-decoration: none;
            font-weight: bold;
            box-shadow: 0 6px 15px rgba(0, 114, 255, 0.3);
            transition: background-color 0.3s, transform 0.3s;
        }

        a:hover {
            background-color: #005ecb;
            transform: translateY(-3px); /* Lift the button on hover */
        }

        /* Subtle fade-in animation */
        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: scale(0.95);
            }
            to {
                opacity: 1;
                transform: scale(1);
            }
        }

        /* Responsive adjustments for mobile screens */
        @media (max-width: 480px) {
            .stats-container {
                padding: 20px;
            }

            h1 {
                font-size: 22px;
            }

            p {
                font-size: 16px;
            }
        }
    </style>
</head>
<body>

    <div class="stats-container">
        <h1>YouTube Video Statistics</h1>

        @if ($videoStats)
      
            <p><strong>Views:</strong> {{ number_format($videoStats['viewCount']) }}</p>
            <p><strong>Likes:</strong> {{ number_format($videoStats['likeCount']) }}</p>
            {{-- <p>Dislikes: {{ number_format($videoStats['dislikeCount']) }}</p> --}}
            <p><strong>Comments:</strong> {{ number_format($videoStats['commentCount']) }}</p>
        @else
            <p>No data available for this video.</p>
        @endif

        <a href="{{ url('youtubeform') }}">Check another video</a>
    </div>

</body>
</html>
