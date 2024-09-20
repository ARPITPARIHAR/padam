<?php

namespace App\Http\Controllers;

use App\Services\YouTubeService;
use Illuminate\Http\Request;

class YouTubeController extends Controller
{
    protected $youtubeService;

    public function __construct(YouTubeService $youtubeService)
    {
        $this->youtubeService = $youtubeService;
    }

    public function showForm(Request $request)
    {
        $videoStats = null;
        if ($request->has('videoId')) {
            $videoId = $request->input('videoId');
            $videoStats = $this->youtubeService->getVideoStats($videoId);
        }

        return view('youtube.form', compact('videoStats'));
    }

    public function show(Request $request)
{
    $videoId = $request->query('videoId');

    if (!$videoId) {
        return view('youtube.show', ['videoStats' => null]);
    }

    $videoStats = $this->youtubeService->getVideoStats($videoId);

    return view('youtube.show', compact('videoStats'));
}

}
