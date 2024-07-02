<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;


class Tugas_2 extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('tugas_2s')->insert([
            'nama' => 'Ahmad Rizki Sabani',
            'nim' => '231351011',
            'matakuliah' => 'pancasila, basis data, bahasa indonesia, pemrograman web lanjut, teori algoritma, matematika diskrit, praktek algoritma, statistika'
        ]);
    }
}
