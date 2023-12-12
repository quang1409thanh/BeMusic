<?php

namespace App\Services;

use GuzzleHttp\Client;
use Illuminate\Contracts\Cache\Repository as Cache;

class ApplicationInformationService
{
    public function __construct(private Client $client, private Cache $cache)
    {
    }

    /**
     * Get the latest version number of SOUND from GitHub.
     */
    public function getLatestVersionNumber(): string
    {
        return attempt(function () {
            return $this->cache->remember('latestSOUNDVersion', now()->addDay(), function (): string {
                return json_decode($this->client->get('https://api.github.com/repos/SOUND/SOUND/tags')->getBody())[0]
                    ->name;
            });
        }) ?? SOUND_version();
    }
}
