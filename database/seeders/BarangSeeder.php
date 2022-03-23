<?php


namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

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
                'id_barang' => '11',
                'nama_barang'=> 'LCD',
                'harga'=>'300000',
                'stok'=>'10',
                
            ],
            [
                'id_barang' => '12',
                'nama_barang'=> 'Proyektor',
                'harga'=>'500000',
                'stok'=>'5',
                
            ],
            [
                'id_barang' => '13',
                'nama_barang'=> 'Keyboard',
                'harga'=>'100000',
                'stok'=>'20',
                
            ],
            [
                'id_barang' => '14',
                'nama_barang'=> 'CPU',
                'harga'=>'700000',
                'stok'=>'15',
                
            ],
            [
                'id_barang' => '15',
                'nama_barang'=> 'Mouse',
                'harga'=>'50000',
                'stok'=>'30',
            ]
        ];
        DB::table('barang')->insert($data);
    }
}
