<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Database\Factories\KegiatanFactory;
use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;

class Kegiatan extends Model
{
    use HasFactory;
    use Sluggable;

    protected $table = 'kegiatans';
    protected $fillable = [
        'title',
        'description',
        'attendants',
        'image',
        'is_active',
        'slug',
        'location',
        'date',
    ];

    /**
     * Return the sluggable configuration array for this model.
     *
     * @return array
     */
    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'title'
            ]
        ];
    }
}
