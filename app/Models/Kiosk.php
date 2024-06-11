<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kiosk extends Model
{
    use HasFactory;

    protected $fillable = [
        "user_id"
    ];

    public function categories()
    {
        return $this->hasMany(Category::class);
    }
}
