<?php
declare(strict_types=1);

namespace App\Tests\Client;

use App\Client\CachedGouteClient;
use PHPUnit\Framework\TestCase;

class CachedGouteClientTest extends TestCase
{
    public function testConstructor()
    {
        $client = new CachedGouteClient('/var/tmp/cache');

        $this->assertInstanceOf(CachedGouteClient::class, $client);
    }
}
