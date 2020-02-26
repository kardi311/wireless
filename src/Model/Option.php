<?php
declare(strict_types=1);

namespace App\Model;

class Option implements \JsonSerializable
{
    use OptionSerializeTrait;

    /** @var string */
    private $title;

    /** @var string */
    private $description;

    /** @var string */
    private $price;

    /** @var string */
    private $discount;

    public function __construct(string $title, string $description, string $price, string $discount)
    {
        $this->title = $title;
        $this->description = $description;
        $this->price = $price;
        $this->discount = $discount;
    }

    public function getTitle(): string
    {
        return $this->title;
    }

    public function getDescription(): string
    {
        return $this->description;
    }

    public function getPrice(): string
    {
        return $this->price;
    }

    public function getDiscount(): string
    {
        return $this->discount;
    }
}
