<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\DTO\ItemDto;
use App\Services\ItemService;

class ItemController extends Controller
{
    public function index(ItemService $itemService)
    {
        $items = $itemService->getAll();
        return view('dashboard', compact('items'));
    }

    public function show(ItemService $itemService, string $item_id)
    {
        $item = $itemService->getById($item_id);
        return view('detail', compact('item'));
    }

    public function create()
    {
        return view('create');
    }

    public function store(ItemService $itemService, Request $req)
    {
        $dto = new ItemDto(
            item_id: '',
            category: $req->input('category'),
            name: $req->input('name'),
            sku: $req->input('SKU'),
            desc: $req->input('desc'),
            price: (int) $req->input('price'),
            stock: (int) $req->input('stock'),
            status: $req->input('status'),
        );

        $itemService->create($dto);

        return redirect()->back();
    }

    public function edit(ItemService $itemService, string $item_id)
    {
        $item = $itemService->getById($item_id);
        return view('edit', compact('item'));
    }

    public function update(ItemService $itemService, string $item_id, Request $req)
    {
        $dto = new ItemDto(
            item_id: $item_id,
            category: $req->input('category'),
            name: $req->input('name'),
            sku: $req->input('sku'),
            desc: $req->input('desc'),
            price: $req->filled('price') ? (int) $req->input('price') : null,
            stock: $req->filled('stock') ? (int) $req->input('stock') : null,
            status: $req->input('status'),
        );

        $itemService->update($item_id, $dto);
        return redirect()->route('edit', $item_id);
    }

    public function destroy(ItemService $itemService, string $item_id)
    {
        $itemService->destroy($item_id);
        return redirect()->back();
    }
}