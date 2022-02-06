<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KonfigurasiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('konfigurasis')->truncate();

        DB::table('konfigurasis')->insert([
            'id'                              => 1,
            'website_title'                   => null,
            'website_description'             => null,
            'fb'                              => null,
            'twitter'                         => null,
            'youtube'                         => null,
            'instagram'                       => null,
            'address'                         => null,
            'pos_code'                        => null,
            'telepon'                         => null,
            'email'                           => null,
            'logo'                            => null,
            'visi'                            => null,
            'misi'                            => null,
            'created_at'                      => now(),
            'updated_at'                      => now(),
        ]);
    }
}
