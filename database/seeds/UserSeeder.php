<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Faker\Generator as Faker;
class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i=0;$i<4;$i++){
            
            DB::table('user')->insert(

        [
            'name' => $faker->firstName(4),
            'avatar' => 'public/ukulele.jpeg',
            'password' => Str::random(4),
            'type' => Str::random(4),
            // 'phone'  =>$faker-> randomNumber(4),
            'address' =>$faker->address(4),
           
            
            // 'description' => Str::random(20),
            // 'oldPrice'=>$faker->numberBetween(400,600),
            // 'newPrice' =>$faker->numberBetween(100,400)
                            
        
        ]);
    }
    }
}
