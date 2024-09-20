<!DOCTYPE html>
<html>
<head>
    <title>Check YouTube Video Stats</title>
</head>
<body>
    <form action="{{ url('youtube') }}" method="GET">
        <label for="videoId">Enter YouTube Video ID:</label>
        <input type="text" id="videoId" name="videoId" required>
        <button type="submit">Check Stats</button>
    </form>
</body>
</html>
