<?php

use Illuminate\Database\Seeder;
use App\Contato;
use Faker\Factory as Faker;

class ContatosTableSeeder extends Seeder
{
  /**
  * Run the database seeds.
  *
  * @return void
  */
  public function run()
  {
    $faker = Faker::create();

    for ($i=0; $i <50 ; $i++) {
      Contato::create([
        'nome'=>$faker->name,
        'telefone'=>$faker->numerify($string = '##########')
      ]);
    }
  }
}
