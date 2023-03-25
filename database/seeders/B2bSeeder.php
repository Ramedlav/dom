<?php

namespace Database\Seeders;

use App\Models\Status;
use Illuminate\Database\Seeder;

class B2bSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         $b2b = new Status();
         $b2b->title = 'Business to business';
         $b2b->slug = 'business-to-business';
         $b2b->save();

         $private = new Status();
         $private->title = 'Private';
         $private->slug = 'private';
         $private->save();
    }
}
