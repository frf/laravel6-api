<?php

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('users')->insert([
            [
                'uuid'           => \Webpatser\Uuid\Uuid::generate(),
                'name'           => 'Superuser',
                'email'          => 'superuser@fabiofarias.com.br',
                'password'       => Hash::make('123456'),
                'remember_token' => Str::random(60),
                'created_at'     => \Carbon\Carbon::now()
            ]
        ]);

        // DB::table('role_user')->insert(['user_id'=>1,'role_id'=>1]);

        DB::table('users')->insert([
            [
                'uuid'           => \Webpatser\Uuid\Uuid::generate(),
                'name'           => 'Admin',
                'email'          => 'admin@fabiofarias.com.br',
                'password'       => Hash::make('123456'),
                'remember_token' => Str::random(60),
                'created_at'     => \Carbon\Carbon::now()
            ]
        ]);

        // DB::table('role_user')->insert(['user_id'=>2,'role_id'=>2]);
    }
}
