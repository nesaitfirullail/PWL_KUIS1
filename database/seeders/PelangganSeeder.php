<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class PelangganSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
                'id_pelanggan' => '1',
                'nama'=> 'Abdul Rahman',
                'alamat'=>'Jl. Ijen, Malang',
                'nomor_telepon'=>'082345678901',
            ],
            [
                'id_pelanggan' => '2',
                'nama'=> 'Syahrini',
                'alamat'=>'Jl. Semeru, Malang',
                'nomor_telepon'=>'082345234901',
            ],
            [
                'id_pelanggan' => '3',
                'nama'=> 'Anang Hermansyah',
                'alamat'=>'Jl. Bromo, Malang',
                'nomor_telepon'=>'087545678901',
            ],
            [
                'id_pelanggan' => '4',
                'nama'=> 'Wawan Hendrawan',
                'alamat'=>'Jl. Sumbersari, Malang',
                'nomor_telepon'=>'082345877901',
            ],
            [
                'id_pelanggan' => '5',
                'nama'=> 'Adi Sucipto',
                'alamat'=>'Jl. Tlogomas, Malang',
                'nomor_telepon'=>'085445678901',
            ]
        ];
        DB::table('pelanggan')->insert($data);
    }
}
