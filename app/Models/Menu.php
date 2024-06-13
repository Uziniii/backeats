<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'price', 'image'];

    public function items()
    {
        return $this->belongsToMany(Item::class, 'menu_items');
    }
    public function categories()
    {
        return $this->belongsToMany(Category::class, 'category_menu');
    }
}
