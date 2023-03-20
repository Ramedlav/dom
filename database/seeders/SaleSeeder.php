<?php

namespace Database\Seeders;

use App\Models\Sale;
use Illuminate\Database\Seeder;

class SaleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         $buy = new Sale();
         $buy->title = 'Buy';
         $buy->save();

         $rent = new Sale();
         $rent->title = 'Rent';
         $rent->save();
    }
}
