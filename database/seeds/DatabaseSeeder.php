<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->truncate();
        $this -> createAdmin();
    }

    private function createAdmin(){
        App\User::create([
            'name' => 'admin',
            'email' => 'admin@example.com',
            'password' => bcrypt('secret')
        ]);
    }
}
