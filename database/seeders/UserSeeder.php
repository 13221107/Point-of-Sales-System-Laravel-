<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;


class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            [
                'username' => 'Kunrad01',
                'password' => Hash::make('pogiako'),    
                'email' => 'kunrad@gmail.com',
                'created_at' => Carbon::now()->toDateString(), 
                'last_login' => Carbon::now(),                 
                'role_id' => 1,
            ],
            [   
                'username'=> 'Frenchi02',
                'password'=> Hash::make('Chichay'),
                'email'=> 'frenchie@gmail.com',
                'created_at'=> Carbon::now()->toDateString(),
                'last_login'=> Carbon::now(),
                'role_id'=> 2,
            ],
            [
                'username'=> 'Hodge03',
                'password'=> Hash::make('hodge25'),
                'email'=> 'hodge@gmail.com',
                'created_at'=> Carbon::now()->toDateString(),
                'last_login' => Carbon::now(),
                'role_id' => 3,    
            ],
                        [
                'username' => 'Admin04',
                'password' => Hash::make('admin123'),
                'email' => 'admin@gmail.com',
                'created_at' => Carbon::now()->toDateString(),
                'last_login' => Carbon::now(),
                'role_id' => 4, 
            ],
            [
                'username' => 'Ella05',
                'password' => Hash::make('ella05pass'),
                'email' => 'ella05@gmail.com',
                'created_at' => Carbon::now()->toDateString(),
                'last_login' => Carbon::now(),
                'role_id' => 1,
            ],
            [
                'username' => 'Marco06',
                'password' => Hash::make('marco123'),
                'email' => 'marco06@gmail.com',
                'created_at' => Carbon::now()->toDateString(),
                'last_login' => Carbon::now(),
                'role_id' => 3,
            ],
            [
                'username' => 'Clara07',
                'password' => Hash::make('clara789'),
                'email' => 'clara07@gmail.com',
                'created_at' => Carbon::now()->toDateString(),
                'last_login' => Carbon::now(),
                'role_id' => 2,
            ],
            [
                'username' => 'Rico08',
                'password' => Hash::make('rico456'),
                'email' => 'rico08@gmail.com',
                'created_at' => Carbon::now()->toDateString(),
                'last_login' => Carbon::now(),
                'role_id' => 3,
            ],
            [
                'username' => 'Diana09',
                'password' => Hash::make('diana2025'),
                'email' => 'diana09@gmail.com',
                'created_at' => Carbon::now()->toDateString(),
                'last_login' => Carbon::now(),
                'role_id' => 1,
            ],
            [
                'username' => 'Leo10',
                'password' => Hash::make('leo321'),
                'email' => 'leo10@gmail.com',
                'created_at' => Carbon::now()->toDateString(),
                'last_login' => Carbon::now(),
                'role_id' => 4,
            ],
        ]);
    }
}
