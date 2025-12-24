<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Category extends Model
{
    use HasFactory;

    protected $table = "category";
    protected $primaryKey = "category_id";
    public $incrementing = false;
    public $timestamps = true;

    protected $fillable = ['category_id', 'name', 'created_at', 'updated_at', 'deleted_at'];

    public function item()
    {
        return $this->hasMany(Item::class);
    }
}
