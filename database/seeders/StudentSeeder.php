<?php

namespace Database\Seeders;

use App\Models\Student;
use Faker\Generator as faker;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {
        for ($i = 0; $i < 10; $i++) {
            $student = new Student();
            $student->first_name = $faker->firstName();
            $student->last_name = $faker->lastName();
            $student->age = $faker->numberBetween(18, 70);
            $student->address = $faker->address();
            $student->city = $faker->city();
            $student->country = $faker->country();
            $student->post_code = $faker->postcode();
            $student->save();
        }
    }
}
