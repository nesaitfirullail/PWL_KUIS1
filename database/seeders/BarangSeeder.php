<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class BarangSeeder extends Seeder
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
                'id_barang' => '1',
                'nama_barang'=> '',
                'harga'=>'Jl. Ijen, Malang',
                'stok'=>'082345678901',
                'id_supplier' => '1',
            ],
            [
                'id_barang' => '2',
                'nama_barang'=> 'Abdul Rahman',
                'harga'=>'Jl. Ijen, Malang',
                'stok'=>'082345678901',
                'id_supplier' => '2',
            ],
            [
                'id_barang' => '3',
                'nama_barang'=> 'Abdul Rahman',
                'harga'=>'Jl. Ijen, Malang',
                'stok'=>'082345678901',
                'id_supplier' => '1',
            ],
            [
                'id_barang' => '4',
                'nama_barang'=> 'Abdul Rahman',
                'harga'=>'Jl. Ijen, Malang',
                'stok'=>'082345678901',
                'id_supplier' => '1',
            ],
            [
                'id_barang' => '5',
                'nama_barang'=> 'Abdul Rahman',
                'harga'=>'Jl. Ijen, Malang',
                'stok'=>'082345678901',
                'id_supplier' => '1',
            ]
        ];
        DB::table('barang')->insert($data);
    }
}
