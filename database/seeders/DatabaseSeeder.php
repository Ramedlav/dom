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
    public function run(): void
    {
        if(env('APP_ENV', 'prod') === 'local'){
            $this->call(UserSeeder::class);
        }
        $this->call(B2bSeeder::class);
        $this->call(SaleSeeder::class);
    }
}
