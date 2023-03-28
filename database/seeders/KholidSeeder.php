<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KholidSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('posts')->insert([
            'name'=> 'Kholid maulidi',
            'role'=> 'Mahasiswa',
            'about'=> 'Maduranese',
            'address'=> 'Sumenep',
            'phone'=> '081249573646'
        ]);
    }
}
