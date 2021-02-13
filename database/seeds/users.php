<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class users extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        for ($i=0; $i < 100; $i++) {
            \DB::table('users')->insert(array(
                'name' => $faker->firstNameFemale,
                'email'  => Str::random(10),
                'fecha_nacimiento' => date('Y-m-d'),
                'password' => Str::random(10),
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s')
            ));
        }
    }
}
