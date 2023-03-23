<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProfileSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //       $table->id();
        DB::table('profiles')->insert([
            'nama' => 'Achmad Rachmandika Rizky Pratama',
            'nim' => '2041720125',
            'no_telepon' => '083111963962',
            'jurusan' => 'Teknologi Informasi',
            'prodi' => 'D4 Teknik Informatika',
            'kelas' => '2H'
        ]);
    }
}
