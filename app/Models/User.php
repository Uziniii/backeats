<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Str;

class User extends Authenticatable
{
    use HasFactory;
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'first_name',
        'last_name',
        'siret',
        'company_name',
        'email',
        'password',
    ];

    public function categories()
    {
        return $this->hasMany(Category::class);
    }


    public function kioks()
    {
        return $this->hasOne(Kiosk::class);
    }

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }

    /**
     * Boot the model.
     */
    protected static function boot()
    {
        parent::boot();

        static::created(function ($user) {
            $user->generateAndSaveKioskToken();

            Kiosk::create(["user_id" => $user->id]);
        });
    }

    /**
     * Generate and save a kiosk token for the user.
     */
    public function generateAndSaveKioskToken()
    {
        $this->kiosk_token = Str::random(60);
        $this->save();
    }
}
