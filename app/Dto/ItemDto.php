<?php

namespace App\DTO;

use Illuminate\Support\Str;

class ItemDto
{
    public function __construct(
        public string $item_id,
        public ?string $category = null,
        public ?string $name = null,
        public ?string $sku = null,
        public ?string $desc = null,
        public ?int $price = null,
        public ?int $stock = null,
        public ?string $status = null,
    ) {
        $this->item_id = Str::uuid()->toString();
    }

    public function toCreate(): array
    {
        return [
            'item_id' => $this->item_id,
            'category' => $this->category,
            'name' => $this->name,
            'sku' => $this->sku,
            'desc' => $this->desc,
            'price' => $this->price,
            'stock' => $this->stock,
            'status' => $this->status,
        ];
    }

    public function toUpdate(): array
    {
        return array_filter(
            [
                'category' => $this->category,
                'name' => $this->name,
                'sku' => $this->sku,
                'desc' => $this->desc,
                'price' => $this->price,
                'stock' => $this->stock,
                'status' => $this->status
            ],
            fn($i) => !is_null($i)
        );
    }
}
