<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\makanan;

class makananseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        makanan::truncate();
        makanan::create(['idtoko' => 1, 'namamakanan' => 'Risol', 'harga' => 1000]);
        makanan::create(['idtoko' => 2, 'namamakanan' => 'Risol', 'harga' => 1000]);
        makanan::create(['idtoko' => 1, 'namamakanan' => 'Tahu Baso', 'harga' => 1500]);
        makanan::create(['idtoko' => 1, 'namamakanan' => 'Sosis Bakar', 'harga' => 1200]);
        makanan::create(['idtoko' => 1, 'namamakanan' => 'Tahu', 'harga' => 1100]);
    }
}
