<?php
declare(strict_types=1);

namespace App\Model;

trait OptionSerializeTrait
{
    public function jsonSerialize()
    {
        return [
            'title' => $this->getTitle(),
            'description' => $this->getDescription(),
            'price' => $this->getPrice(),
            'discount' => $this->getDiscount(),
        ];
    }
}
