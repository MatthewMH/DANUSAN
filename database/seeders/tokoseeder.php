<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\toko;

class tokoseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        toko::truncate();
        toko::create(['namatoko' => 'Toko Ahmad', 'kontaktoko' => '+62 812 5549 0076', 'idalamat' => 1]);
        toko::create(['namatoko' => 'Toko Abdul', 'kontaktoko' => '+62 812 4987 1644', 'idalamat' => 2]);
    }
}
