<?php

use Illuminate\Database\Seeder;
use Illuminate\Foundation\Auth\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->truncate();

        $this->createAdmins();

        $this->createUsers();
    }

    /**
     * Create Admins users
     *
     * @return void
     */
    private function createAdmins()
    {
        User::create([
            'email' => 'luciano.albis@sympla.com.br',
            'name'  => 'Luciano Albis',
            'password' => bcrypt('s&nh@')
        ]);

        $this->command->info('User luciano.albis@sympla.com.br created');

        User::create([
            'email' => 'sonhoaly@yahoo.com.br',
            'name'  => 'Sonaly Fernanda',
            'password' => bcrypt('s&nh@')
        ]);

        $this->command->info('User sonhoaly@yahoo.com.br created');
    }

    /**
     * Loop to create users
     *
     * @return void
     */
    private function createUsers()
    {
        $max = rand(10, 30);

        for($i=0; $i < $max; $i++){
            $this->createUser($i);
        }

        $this->command->info($max . ' users created');
    }

    /**
     * Create users random
     *
     * @return void
     */
    private function createUser($index)
    {
        return User::create([
            'email' => 'email' . $index . '@mail.com',
            'name'  =>'User '. $index,
            'password' => bcrypt('123456')
        ]);
    }
}
