<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class JabatanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        // DB::table('jabatans')->truncate();
        $jabatan = [
            [
                'nama_jabatan' => 'Ketua',
                'parent_id' => 0,
                'sort' => 1,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'nama_jabatan' => 'Sekretaris',
                'parent_id' => 1,
                'sort' => 2,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'nama_jabatan' => 'Bendahara',
                'parent_id' => 1,
                'sort' => 3,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'nama_jabatan' => 'Wakil Ketua Bidang Pemilihan Umum',
                'parent_id' => 1,
                'sort' => 4,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'nama_jabatan' => 'Wakil Ketua Bidang Organisasi Keanggotaan dan Kaderisasi',
                'parent_id' => 1,
                'sort' => 5,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'nama_jabatan' => 'Wakil Ketua Bidang Kaderisasi dan Pedidikan Politik',
                'parent_id' => 1,
                'sort' => 6,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'nama_jabatan' => 'Wakil Ketua Bidang Hubungan Legislatif',
                'parent_id' => 1,
                'sort' => 7,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'nama_jabatan' => 'Wakil Ketua Bidang Hubungan Eksekutif',
                'parent_id' => 1,
                'sort' => 8,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'nama_jabatan' => 'Wakil Ketua Bidang Hubungan Sayap dan Badan',
                'parent_id' => 1,
                'sort' => 9,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'nama_jabatan' => 'Wakil Ketua Bidang Penggalangan dan Penggerak Komunitas',
                'parent_id' => 1,
                'sort' => 10,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'nama_jabatan' => 'Wakil Ketua Bidang Pemilih Pemula dan Milenial',
                'parent_id' => 1,
                'sort' => 11,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'nama_jabatan' => 'Wakil Ketua Bidang Digital dan Siber',
                'parent_id' => 1,
                'sort' => 12,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'nama_jabatan' => 'Wakil Ketua Bidang Media Komunikasi Publik',
                'parent_id' => 1,
                'sort' => 13,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'nama_jabatan' => 'Wakil Ketua Bidang Ekonomi',
                'parent_id' => 1,
                'sort' => 14,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'nama_jabatan' => 'Wakil Ketua Bidang Hukum dan Hak Asasi Manusia',
                'parent_id' => 1,
                'sort' => 15,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'nama_jabatan' => 'Wakil Ketua Bidang Agama dan Masyarakat Adat',
                'parent_id' => 1,
                'sort' => 16,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'nama_jabatan' => 'Wakil Ketua Bidang Tenaga Kerja',
                'parent_id' => 1,
                'sort' => 17,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'nama_jabatan' => 'Wakil Ketua Bidang Perempuan dan Anak',
                'parent_id' => 1,
                'sort' => 18,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'nama_jabatan' => 'Wakil Ketua Bidang Pariwisata dan Industri Kreatif',
                'parent_id' => 1,
                'sort' => 19,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'nama_jabatan' => 'Wakil Ketua Bidang Pemuda dan Olahraga',
                'parent_id' => 1,
                'sort' => 20,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'nama_jabatan' => 'Wakil Ketua Bidang Pendidikan dan Kebudayaan',
                'parent_id' => 1,
                'sort' => 21,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'nama_jabatan' => 'Wakil Ketua Bidang  Lingkungan Hidup',
                'parent_id' => 1,
                'sort' => 22,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'nama_jabatan' => 'Wakil Ketua Bidang Usaha Kecil dan Menengah',
                'parent_id' => 1,
                'sort' => 23,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'nama_jabatan' => 'Wakil Sekretaris Bidang Internal',
                'parent_id' => 2,
                'sort' => 1,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],            
            [
                'nama_jabatan' => 'Wakil Sekretaris Bidang Eksternal',
                'parent_id' => 2,
                'sort' => 2,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'nama_jabatan' => 'Wakil Bendahara Bidang Penggalangan Dana',
                'parent_id' => 3,
                'sort' => 1,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'nama_jabatan' => 'Wakil Bendahara Bidang Pengelolaan Aset',
                'parent_id' => 3,
                'sort' => 2,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ]
        ];

        DB::table('jabatans')->insert($jabatan);
    }
}
