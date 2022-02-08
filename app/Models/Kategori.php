<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kategori extends Model
{
    use HasFactory;

    protected $table = 'kategoris';
    protected $fillable = [
        'id',
        'slug',
        'nama',
        'sort',
    ];

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
}
