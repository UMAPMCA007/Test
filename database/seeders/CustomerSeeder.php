<?php

namespace Database\Seeders;

use Faker\Factory;
use Faker\Provider\nl_BE\Person;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CustomerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Person $faker)
    {
        for($i=0;$i<20;$i++){
            DB::table('customers')->insert([
                'customer_name' => $faker->firstName()
            ]);

        }

    }
}
