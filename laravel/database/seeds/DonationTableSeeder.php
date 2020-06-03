<?php

use Illuminate\Database\Seeder;

class DonationTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Donation::class, 20)->create();
    }
}
