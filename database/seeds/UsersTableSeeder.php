<?php

use App\User;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = User::create([
            'name' => 'Eirik Igland',
            'email' => 'eirabben@gmail.com',
            'password' => bcrypt('secret'),
        ]);
    }
}
