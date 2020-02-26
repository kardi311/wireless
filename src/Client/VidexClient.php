<?php
declare(strict_types=1);

namespace App\Client;

use Symfony\Component\DomCrawler\Crawler;

class VidexClient
{
    const VIDEX_URL = 'https://videx.comesconnected.com/';

    /**
     * @var CachedGouteClient
     */
    private $client;

    public function __construct(CachedGouteClient $client)
    {
        $this->client = $client;
    }

    public function crawl(): Crawler
    {
        return $this->client->request('GET', self::VIDEX_URL);
    }
}
