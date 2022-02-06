<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Konfigurasi extends Model
{
    use HasFactory;

    protected $table = 'konfigurasis';
    protected $fillable = [
                'website_title', 
                'website_description', 
                'visi',
                'misi',
                'email',
                'facebook',
                'twitter',
                'youtube',
                'instagram',
                'pos_code',
                'address',
                'telepon',
                'logo'
    ];

}
