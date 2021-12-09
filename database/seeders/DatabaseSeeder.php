<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        Model::unguard();

        $this->call(UsersTableSeeder::class);//填充演示用户

        $this->call(StatusesTableSeeder::class);//填充演示微博内容

        $this->call(FollowersTableSeeder::class);//填充演示关注粉丝

        Model::reguard();
    }
}
