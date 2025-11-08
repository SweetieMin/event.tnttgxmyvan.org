<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Award extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */
    protected $fillable = [
        'year_id',
        'position',
        'name',
        'title',
        'image',
        'number_award',
        'is_award',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'is_award' => 'boolean',
        ];
    }

    public function year()
    {
        return $this->belongsTo(Year::class);
    }
}
