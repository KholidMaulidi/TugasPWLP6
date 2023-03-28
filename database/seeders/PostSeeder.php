<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('posts')->insert([
            'name'=> 'Aldin Ariel Pramudya',
            'role'=> 'Mahasiswa',
            'about'=> 'Weebs/Javanese',
            'address'=> 'Batu',
            'phone'=> '085954352919'
        ]);
    }
}
