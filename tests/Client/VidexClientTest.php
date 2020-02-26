<?php
declare(strict_types=1);

namespace App\Tests\Client;

use App\Client\CachedGouteClient;
use App\Client\VidexClient;
use PHPUnit\Framework\TestCase;
use Symfony\Component\DomCrawler\Crawler;

class VidexClientTest extends TestCase
{
    public function testCrawlCallsCorrectUrlOnClient()
    {
        $crawler = $this->createMock(Crawler::class);
        $cachedGouteClient = $this->createMock(CachedGouteClient::class);
        $cachedGouteClient->expects($this->once())
            ->method('request')
            ->with('GET', VidexClient::VIDEX_URL)
            ->willReturn($crawler);

        $videxClient = new VidexClient($cachedGouteClient);
        $videxClient->crawl();
    }
}
