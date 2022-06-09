<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\User;
use Illuminate\Support\Facades\Hash;

class UserDevSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        User::create([
            'name' => $faker->name(),
            'surname'=> $faker->surname(),
            'email'=>$faker->email(),
            'password'=> Hash::make('ciaociao'),
            'cv'=> $faker->imageUrl(360, 360, 'animals', true, 'cats'),
            'località'=> $faker->city(),
            'github'=> $faker->name(),
            'presentazione'=> $faker->paragraph(),
            'photo'=> $faker->imageUrl(360, 360, 'animals', true, 'cats'),

        ]);
    }
}
