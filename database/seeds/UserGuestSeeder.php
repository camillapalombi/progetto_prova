<?php
      use Illuminate\Database\Seeder;
      use Faker\Generator as Faker;
      use App\UserGuest;
      class UserGuestSeeder extends Seeder
      {
         public function run(Faker $faker)
         {
            $faker ->addProvider(new \Faker\Provider\it_IT\Person($faker));
            for ($i=0; $i <50 ; $i++) {
                $title = $faker->words(rand(2, 5), true);
                UserGuest::create([
                    'name'      =>  $faker->first_name(),
                    'surname'   =>  $faker->last_name(),
                    'mail'      =>  Hash::make('ciaociao'),
                    'username'  =>  $faker->userName(),
                    'password'  =>  $faker->password(),
                  ]);
                //   $user = new UserGuestSeeder();
                  $user->save();
            }
         }
      }

