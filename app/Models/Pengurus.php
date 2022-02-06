<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pengurus extends Model
{
    use HasFactory;
    
    protected $table = 'pengurus';
    protected $fillable = [
        'nama', 
        'jabatan_id', 
        'foto', 
        'nik',
        'status',
        'tanggal_lahir',
        'tempat_lahir',
        'alamat',
        'telepon',
        'jenis_kelamin',
        'agama_id',
        'pendidikan',
        'nomor_registrasi'];

    public function jabatan()
    {
        return $this->belongsTo(Jabatan::class, 'jabatan_id');
    }
}
