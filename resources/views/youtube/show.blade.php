<!DOCTYPE html>
<html>
<head>
    <title>YouTube Video Statistics</title>
</head>
<body>
    <h1>YouTube Video Statistics</h1>
    @if ($videoStats)
        <p>Views: {{ $videoStats['viewCount'] }}</p>
        <p>Likes: {{ $videoStats['likeCount'] }}</p>
        {{-- <p>Dislikes: {{ $videoStats['dislikeCount'] }}</p> --}}
        <p>Comments: {{ $videoStats['commentCount'] }}</p>
    @else
        <p>No data available for this video.</p>
    @endif
    <a href="{{ url('youtubeform') }}">Check another video</a>
</body>
</html>
