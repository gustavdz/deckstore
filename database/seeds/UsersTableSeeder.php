<?php

use Illuminate\Database\Seeder;
use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        User::create([
            'name'=>'Gustavo',
            'email'=>'gustavdz@gmail.com',
            'password'=>bcrypt('Gustavo123'),
            'admin'=> true
        ]);
    }
}
