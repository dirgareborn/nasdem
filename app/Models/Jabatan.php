<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jabatan extends Model
{
    use HasFactory;
    protected $table      = "jabatans";
    protected $guarded = 'id';
    protected $fillable = ['id','nama_jabatan', 'parent_id','sort'];

    public function childs()
    {
        return $this->hasMany(Jabatan::class, 'parent_id', 'id') ;
    }

    public function pengurus()
    {
        return $this->hasMany(Pengurus::class, 'id');
    }
}
