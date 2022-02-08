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
    use \Conner\Tagging\Taggable;

    protected $table = 'beritas';
    protected $fillable = [
        'title',
        'description',
        'image',
        'is_active',
        'slug',
        'kategori_id',
        'user_id'
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
    
    public function getRouteKeyName()
    {
    return 'slug';
    }

    public function kategori()
    {
        return $this->belongsTo(Kategori::class, 'kategori_id');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
    
    public function scopeActive($query, $is_active = 1)
    {
        return $query->where('is_active', $is_active);
    }

    public function scopeDetail($query, $slug )
    {
        return $query->where('slug', $slug)->first();
    }

    public function scopegetByKategori($query, $kategori_id )
    {
        return $query->where('kategori_id', $kategori_id)->paginate(12);
    }

    public function scopeAuthor($query, $user_id)
    {
        return  $query->where('user_id', $user_id);
    }

}
