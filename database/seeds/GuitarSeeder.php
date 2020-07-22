<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Faker\Generator as Faker;

class GuitarSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i=0;$i<4;$i++){
            
            DB::table('guitars')->insert(

        [
            'name' => Str::random(4),
            'image' => 'public/guitar.jpeg',
            'typer' => Str::random(4),
            'specifications' => Str::random(4),
            'quantity'  =>$faker-> randomNumber(4).'bins',
            'old_price' =>$faker-> randomNumber(4),
            'new_price' =>$faker-> randomNumber(4),
            'made_in' => Str::random(4),
                       
        
        ]);
    }
    }
}