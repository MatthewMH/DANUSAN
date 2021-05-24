<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\alamat;

class alamatseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        alamat::truncate();
        alamat::create(['jalan' => 'Jalan Raya Dramaga', 'kabupatenkota' => 'Kab. Bogor', 'provinsi'=> 'Jawa Barat']);
        alamat::create(['jalan' => 'Jalan Raya Semplak', 'kabupatenkota' => 'Kab. Bogor', 'provinsi'=> 'Jawa Barat']);
    }
}
