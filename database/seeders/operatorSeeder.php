<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class operatorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('operator')->insert(
        [
            [
                'user_ids' => '[1]',
                'name' => 'Cari/Ambil Stock'
            ],
            [
                'user_ids' => '[1]',
                'name' => 'Hitung Bahan'
            ],
            [
                'user_ids' => '[1]',
                'name' => 'Setting & Plate'
            ],
            [
                'user_ids' => '[1]',
                'name' => 'Potong Bahan'
            ],
            [
                'user_ids' => '[1]',
                'name' => 'Potong Jadi'
            ],
            [
                'user_ids' => '[1]',
                'name' => 'Cetak'
            ],
            [
                'user_ids' => '[1]',
                'name' => 'Bor'
            ],
            [
                'user_ids' => '[1]',
                'name' => 'Tali'
            ],
            [
                'user_ids' => '[1]',
                'name' => 'Vernish Doff'
            ],
            [
                'user_ids' => '[1]',
                'name' => 'Vernish Gloss'
            ],
            [
                'user_ids' => '[1]',
                'name' => 'Sablon'
            ],
            [
                'user_ids' => '[1]',
                'name' => 'Pond'
            ],
            [
                'user_ids' => '[1]',
                'name' => 'Emboss'
            ],
            [
                'user_ids' => '[1]',
                'name' => 'Deboss'
            ],
            [
                'user_ids' => '[1]',
                'name' => 'Foil'
            ],
            [
                'user_ids' => '[1]',
                'name' => 'Perforasi'
            ],
            [
                'user_ids' => '[1]',
                'name' => 'UV/WB/Laminating'
            ],
            [
                'user_ids' => '[1]',
                'name' => 'Spot UV'
            ],
            [
                'user_ids' => '[1]',
                'name' => 'Lem Lainnya'
            ],
            [
                'user_ids' => '[1]',
                'name' => 'Mata Itik Pasang'
            ]
        ]);
    }
}
