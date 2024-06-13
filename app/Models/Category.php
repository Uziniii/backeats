<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'photo', 'kiosk_id'];

    public function kiosk()
    {
        return $this->belongsTo(Kiosk::class);
    }

    public function menus()
    {
        return $this->belongsToMany(Menu::class, 'category_menu');
    }
}
