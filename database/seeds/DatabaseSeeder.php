<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        DB::table('console_users')->insert([
            'name' => 'Subtain Farooq',
            'email' => 'subtainfrq@gmail.com',
            'status' => 1,
            'password' => Hash::make('aaaaaaaaaa'),
        ]);

        DB::table('console_users')->insert([
            'name' => 'Muhammad Kamran',
            'email' => 'aceschoolsystem@gmail.com',
            'status' => 1,
            'password' => Hash::make('unknow@pa$$word'),
        ]);
    }
}
