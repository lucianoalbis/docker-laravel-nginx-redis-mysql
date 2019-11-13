<?php

use Illuminate\Database\Seeder;

class PersonaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $max = 10000;

        DB::table('persona')->truncate();

        $faker = Faker\Factory::create("pt_BR");

        for($i=0; $i < $max; $i++) {
            DB::table ( 'persona' )->insert ( [
                'name' => $faker->name ,
                'cpf' => $faker->cpf ,
                'rg' => $faker->rg ,
                'state' => $faker->state ,
                'city' => $faker->city ,
                'streetAddress' => $faker->streetAddress ,
                'postcode' => $faker->postcode ,
                'phoneNumber' => $faker->phoneNumber ,
                'email' => $faker->email ,
                'creditCardType' => $faker->creditCardType ,
                'creditCardNumber' => $faker->creditCardNumber ,
                'creditCardExpirationDate' => $faker->creditCardExpirationDate ,
                'creditCardExpirationDateString' => $faker->creditCardExpirationDateString ,
            ] );
        }

        $this->command->info("$max persona created");
    }
}
