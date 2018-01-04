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
            'name'=>'Redlinks',
            'email'=>'gdecker@redlinks.com.ec',
            'password'=>bcrypt('redlinks')
        ]);
    }
}
