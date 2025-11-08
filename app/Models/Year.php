<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Year extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */
    protected $fillable = [
        'name',
        'title',
        'sub_title',
        'expired_date',
        'image_desktop',
        'image_mobile',
        'logo',
        'start_date',
        'end_date',
        'first_contact',
        'first_phone',
        'second_contact',
        'second_phone',
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
            'expired_date' => 'date',
            'start_date' => 'date',
            'end_date' => 'date',
        ];
    }

    public function awards ()
    {
        return $this->hasMany(Award::class);
    }

}
