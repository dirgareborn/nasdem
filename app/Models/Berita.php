<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;
use Database\Factories\BeritaFactory;
class Berita extends Model
{
    use HasFactory;
    use Sluggable;

    protected $table = 'beritas';
    protected $fillable = [
        'title',
        'description',
        'image',
        'is_active',
        'slug',
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
