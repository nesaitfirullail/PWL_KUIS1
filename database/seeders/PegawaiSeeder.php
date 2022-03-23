<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;

use Illuminate\Database\Seeder;

class PegawaiSeeder extends Seeder
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
                'id_pegawai' => '1',
                'nama' => 'Budi Firmansyah',
                'nomor_telepon' => '081123456789',
                'alamat' => 'Mojokerto',
            ],
            [
                'id_pegawai' => '2',
                'nama' => 'Adji Purnomo',
                'nomor_telepon' => '081987654321',
                'alamat' => 'Gresik',
            ],
            [
                'id_pegawai' => '3',
                'nama' => 'Bima Firdaus',
                'nomor_telepon' => '051234567891',
                'alamat' => 'Surabaya',
            ],
            [
                'id_pegawai' => '4',
                'nama' => 'Almer Varuna',
                'nomor_telepon' => '0852789456123',
                'alamat' => 'Mojokerto',
            ],
            [
                'id_pegawai' => '5',
                'nama' => 'Zaki Ahmad',
                'nomor_telepon' => '0897354689521',
                'alamat' => 'Jombang',
            ]
        ];
        DB::table('pegawai')->insert($data);
    }
}
