<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'price', 'description', 'image', 'kiosk_id'];

    public function menus()
    {
        return $this->belongsToMany(Menu::class, 'menu_items');
    }
}
