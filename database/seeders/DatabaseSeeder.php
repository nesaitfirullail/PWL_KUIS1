<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        $this->call(PelangganSeeder::class);
// =======
        $this->call(PegawaiSeeder::class);
        $this->call(SupplierSeeder::class);
// >>>>>>> 8853ab262275e15391f918132182aae3b7562e7a
    }
}
