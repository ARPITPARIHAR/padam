<?php

namespace App\Services;

use GuzzleHttp\Client;

class YouTubeService
{
    protected $apiKey;
    protected $client;

    public function __construct()
    {
        $this->apiKey = config('services.youtube.api_key'); // API key from config
        $this->client = new Client([
            'base_uri' => 'https://www.googleapis.com/',
            'verify' => false, // Disable SSL certificate verification
        ]);
    }

    public function getVideoStats($videoId)
    {
        $url = "youtube/v3/videos?part=statistics&id={$videoId}&key={$this->apiKey}";

        $response = $this->client->get($url);
        $data = json_decode($response->getBody(), true);

        if (!empty($data['items'])) {
            return $data['items'][0]['statistics'];
        }

        return null;
    }
}
