<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;



class santri_1 extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('tes')->insert([
            'nama' => 'Ahmad rizki sabani',
            'tempat_lahir' => 'Bekasi',
            'alamat' => 'Bekasi'
        ]);
    }
}
