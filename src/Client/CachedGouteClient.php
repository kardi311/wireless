<?php
declare(strict_types=1);

namespace App\Client;

use Goutte\Client;
use Symfony\Component\HttpClient\CachingHttpClient;
use Symfony\Component\HttpClient\HttpClient;
use Symfony\Component\HttpKernel\HttpCache\Store;

class CachedGouteClient extends Client
{
    public function __construct(string $kernelCacheDir) {
        $cacheDir = sprintf('%s/http_client', $kernelCacheDir);
        $store = new Store($cacheDir);
        $cachingHttpClient = new CachingHttpClient(HttpClient::create(), $store);

        parent::__construct($cachingHttpClient);
    }
}
