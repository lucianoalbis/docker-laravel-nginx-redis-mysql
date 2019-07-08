<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class ArticlesSeederTable extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('articles')->truncate();

        $faker = Faker::create('App\Article');

        DB::table('articles')->insert([
            'title' => $faker->sentence(),
            'description' => $faker->sentence(),
            'body' => $faker->paragraph(),
            'created_at' => \Carbon\Carbon::now(),
            'Updated_at' => \Carbon\Carbon::now(),
        ]);
    }
}
