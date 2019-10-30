<?php

use Illuminate\Database\Seeder;

class CorretoresSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
     $faker = Faker\factory::create('pt_BR');

        for ($i=0; $i <100; $i++) { 
            DB::table('corretor')->insert(
                    [
                        'nome' => $faker-> name,
                        'creci'=> $faker-> randomNumber(7),
                        'fone' => $faker-> cellphoneNumber,
                        'email'=> $faker-> safeEmail,

                    ]
                );
        }
    }
}
