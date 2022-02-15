<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;

class Kategori extends Model
{
    use HasFactory;
    use Sluggable;

    protected $table = 'kategoris';
    protected $fillable = [
        'id',
        'slug',
        'nama',
        'sort',
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
                'source' => 'nama'
            ]
        ];
    }

    public function getRouteKeyName()
    {
    return 'slug';
    }

    public function scopeSort($query, $sort)
    {
        return $query->where('sort', $sort);
    }

    public function scopeCatId($query, $slug)
    {
        return $query->where('slug', $slug)->first();
    }

    public function beritas()
    {
        return $this->hasMany(Berita::class);
    }
    public function kegiatan()
    {
        return $this->hasMany(Kegiatan::class);
    }

    public function kegiatanCount()
    {
        return $this->kegiatan()
            ->selectRaw('kategori_id, count(*) as aggregate')
            ->groupBy('kategori_id');
    }
}
