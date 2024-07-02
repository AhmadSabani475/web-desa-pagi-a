<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class PagiA extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('pagi_a_s')->insert([
            'nim' => '231351011',
            'nama' => 'Ahmad Rizki Sabani',
            'jurusan' => 'Teknik Informatika'
        ]);
    }
}
