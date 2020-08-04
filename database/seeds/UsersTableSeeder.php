<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use TCG\Voyager\Models\Role;
use TCG\Voyager\Models\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Auto generated seed file.
     *
     * @return void
     */
    public function run()
    {
        if (User::count() == 0) {
            $role = Role::where('name', 'admin')->firstOrFail();

            User::create([
                'firstname'         => 'Admin',
                'lastname'          => 'Adminov',
                'email'             => 'admin@admin.com',
                'password'          => bcrypt('password'),
                'remember_token'    => Str::random(60),
                'role_id'           => $role->id,
            ]);
        }
        
         DB::table('users')->insert([
            'firstname' => 'jeremy',
            'lastname' => 'loubi',
            'email' => 'jeremy@hotmail.fr',
            'password' => Hash::make('jeremy'),
            'remember_token' => Str::random(60),
        ]);

        DB::table('users')->insert([
            'firstname' => 'michael',
            'lastname' => 'francis',
            'email' => 'michael@hotmail.fr',
            'password' => Hash::make('michael'),
            'remember_token' => Str::random(60),
        ]);

        DB::table('users')->insert([
            'firstname' => 'silvie',
            'lastname' => 'vandervaart',
            'email' => 'silvie@hotmail.fr',
            'password' => Hash::make('silvie'),
            'remember_token' => Str::random(60),
        ]);
        
        DB::table('users')->insert([
            'firstname' => 'arnaud',
            'lastname' => 'raart',
            'email' => 'arnaud@hotmail.fr',
            'password' => Hash::make('arnaud'),
            'remember_token' => Str::random(60),
        ]);
        
        DB::table('users')->insert([
            'firstname' => 'pauline',
            'lastname' => 'ciney',
            'email' => 'pauline@hotmail.fr',
            'password' => Hash::make('pauline'),
            'remember_token' => Str::random(60),
        ]);
        
        DB::table('users')->insert([
            'firstname' => 'jean',
            'lastname' => 'jacques',
            'email' => 'jean@hotmail.fr',
            'password' => Hash::make('jean'),
            'remember_token' => Str::random(60),
        ]);
    }
}
