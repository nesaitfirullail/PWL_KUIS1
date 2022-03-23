<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SupplierSeeder extends Seeder
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
                'id_supplier' => '21',
                'nama' => 'Indomarco',
                'nomor_telepon' => '081789456123',
                'alamat' => 'Jakarta',
            ],
            [
                'id_supplier' => '22',
                'nama' => 'Alfaria',
                'nomor_telepon' => '081741852963',
                'alamat' => 'Tangerang',
            ],
            [
                'id_supplier' => '23',
                'nama' => 'Goto',
                'nomor_telepon' => '085274512598',
                'alamat' => 'Bandung',
            ],
            [
                'id_supplier' => '24',
                'nama' => 'Rotobox',
                'nomor_telepon' => '085279231455',
                'alamat' => 'Surabaya',
            ],
            [
                'id_supplier' => '25',
                'nama' => 'Alfaro',
                'nomor_telepon' => '089712344321',
                'alamat' => 'Bekasi',
            ]
        ];
        DB::table('supplier')->insert($data);
    }
}
