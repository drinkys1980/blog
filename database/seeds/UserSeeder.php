<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	/*
        DB::table('users')->insert([
            'name' => str_random(10),
            'email' => str_random(10).'@gmail.com',
            'password' => bcrypt('secret'),
            'type' => 'member'
        ]);
        */
        factory(User::class, 50)->create()->each(function ($u) {
	        $u->posts()->save(factory(App\Post::class)->make());
	    });
    }
}
