<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    use HasFactory;

    protected $table = "item";
    protected $primaryKey = "item_id";
    protected $keyType = 'string';
    public $incrementing = false;
    public $timestamps = true;

    protected $fillable = ['item_id', 'category', 'name', 'sku', 'desc', 'price', 'stock', 'status', 'created_at', 'updated_at', 'deleted_at'];
}