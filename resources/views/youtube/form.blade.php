<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Check YouTube Video Stats</title>
    <style>
        /* General Reset */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Arial', sans-serif;
        }

        body {
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            background: linear-gradient(to right, #ff5f6d, #ffc371);
        }

        /* Container for the form */
        .form-container {
            background-color: #fff;
            padding: 30px;
            border-radius: 15px;
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
            max-width: 400px;
            width: 100%;
            text-align: center;
        }

        h1 {
            margin-bottom: 20px;
            font-size: 24px;
            color: #333;
        }

        label {
            font-size: 16px;
            color: #555;
            margin-bottom: 8px;
            display: block;
            text-align: left;
        }

        /* Styling the input */
        input[type="text"] {
            width: 100%;
            padding: 12px 15px;
            margin-bottom: 20px;
            border-radius: 8px;
            border: 1px solid #ddd;
            font-size: 16px;
            background-color: #f9f9f9;
            transition: all 0.3s ease;
        }

        input[type="text"]:focus {
            border-color: #ff5f6d;
            outline: none;
            background-color: #fff;
            box-shadow: 0 0 8px rgba(255, 95, 109, 0.3);
        }

        /* Styling the submit button */
        button[type="submit"] {
            width: 100%;
            padding: 12px;
            background-color: #ff5f6d;
            color: white;
            font-size: 16px;
            font-weight: bold;
            border: none;
            border-radius: 8px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        button[type="submit"]:hover {
            background-color: #e34956;
        }

        /* Media query for mobile responsiveness */
        @media (max-width: 480px) {
            .form-container {
                padding: 20px;
            }

            h1 {
                font-size: 20px;
            }
        }
    </style>
</head>
<body>

    <div class="form-container">
        <h1>Check YouTube Video Stats</h1>
        <form action="{{ url('youtube') }}" method="GET">
            <label for="videoId">Enter YouTube Video ID:</label>
            <input type="text" id="videoId" name="videoId" required placeholder="Video ID">
            <button type="submit">Check Stats</button>
        </form>
    </div>

</body>
</html>
