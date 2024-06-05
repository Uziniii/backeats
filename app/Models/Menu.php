<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    use HasFactory;

    protected $table = 'menus';

    // Ajoutez ici les champs qui peuvent être remplis
    protected $fillable = [
        'id',
        'name',
        'description',
        'price',
        'image_path',
    ];
}