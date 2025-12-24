<?php

namespace App\Services;

use App\Models\Item;
use App\DTO\ItemDto;
use Illuminate\Database\Eloquent\Collection;

class ItemService
{

    public function getAll(): Collection
    {
        return Item::all();
    }

    public function getById(string $item_id): Item
    {
        return Item::where('item_id', $item_id)->firstOrFail();
    }

    public function create(ItemDto $dto): Item
    {
        return Item::create($dto->toCreate());
    }

    public function update(string $item_id, ItemDto $dto): Item
    {
        $item = Item::where('item_id', $item_id)->firstOrFail();
        $item->update($dto->toUpdate());

        return $item;
    }

    public function delete(string $item_id): Item
    {
        $item = Item::where('item_id', $item_id)->firstOrFail();

        $item->delete();
        return $item;
    }

    public function destroy(string $item_id): int
    {
        return Item::destroy($item_id);
    }
}
