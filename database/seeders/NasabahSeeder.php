<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class NasabahSeeder extends Seeder
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
            'no_rekening'=> '348104567',
            'nama'=> 'Veronika Sina',
            'alamat'=> 'JL.1',
            'jenis_tabungan'=> 'silver',
            'saldo'=> '1000000',
        ]);

        DB::table('posts')->insert([
            'no_rekening'=> '348104568',
            'nama'=> 'Februlia Saun',
            'alamat'=> 'JL.2',
            'jenis_tabungan'=> 'Gold',
            'saldo'=> '5000000',
        ]);

        DB::table('posts')->insert([
            'no_rekening'=> '348104569',
            'nama'=> 'Monalisa Lisa',
            'alamat'=> 'JL.3',
            'jenis_tabungan'=> 'Platinum',
            'saldo'=> '4500000',
        ]);
    }
}
