<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DentistSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Dentist::factory(20)->create();
    }
}
