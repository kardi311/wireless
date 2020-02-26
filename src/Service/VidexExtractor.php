<?php
declare(strict_types=1);

namespace App\Service;

use App\Client\VidexClient;
use App\Model\Option;
use Symfony\Component\DomCrawler\Crawler;

class VidexExtractor
{
    /**
     * @var VidexClient
     */
    private $client;

    public function __construct(VidexClient $client)
    {
        $this->client = $client;
    }

    /**
     * @return Option[]
     */
    public function extract(): array
    {
        $crawler = $this->client->crawl();

        $options = $crawler->filter('.package')->each(function (Crawler $node) {
            $title = $node->filter('.header')->first()->text('');
            $description = $node->filter('.package-name')->first()->text('', false);
            $price = $node->filter('.package-price .price-big')->first()->text('');
            $discount = $node->filter('.package-price p')->first()->text('');
            return new Option(
                $title,
                $description,
                $price,
                $discount
            );
        });

        $options = $this->sortOptions($options);

        return $options;
    }

    /**
     * @param Option[] $options
     *
     * @return Option[]
     */
    private function sortOptions(array $options) : array
    {
        usort($options, function (Option $option1, Option $option2) {
            return $option1->getPrice() < $option2->getPrice();
        });

        return $options;
    }
}
