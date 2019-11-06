<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class StudentsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $faker = Faker::create('id_ID');
        foreach (range(1, 10) as $index){
            DB::table('students')->insert([
                'nama'=> $faker->name,
                'contact' => $faker->address
            ]);
        }

    }
}
