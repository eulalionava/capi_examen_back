<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class user_domicilio extends Seeder
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
            \DB::table('user_domicilio')->insert(array(
                'domicilio' => Str::random(100),
                'numero_exterior'  => Str::random(50),
                'colonia' => Str::random(50),
                'cp' => Str::random(10),
                'cuidad' => Str::random(50),
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s')
            ));
        }
    }
}
