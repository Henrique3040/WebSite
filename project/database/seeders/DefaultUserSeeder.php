<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class DefaultUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
            $user = User::create([
                'name' => 'admin',
                'email' => 'admin@ehb.be', 
                'password' => bcrypt('Password!321'),
                'admin' => true,
            ]);  
                    
    }
}
