<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Seeder;
use App\Models\User;
class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin = User::create([
            'name' => 'Admin Gmiti',
            'email' => 'gmitiweb@gmail.com',
            // 'username' => 'gmitiweb',
            'password' => Hash::make('12345678'),
            
        ]);
        // $admin->assignRole('Admin');
        // $user = User::create([
        //     'name' => 'Nicolas Moncada',
        //     'email' => 'nico@gmail.com',
        //     'username' => 'nicolas',
        //     'password' => Hash::make('12345678'),
            
        // ]);
        // $user->assignRole('emisor');
        // $user = User::create([
        //     'name' => 'Tania paladines',
        //     'email' => 'ta.paladines@gmail.com',
        //     'username' => 'tania',
        //     'password' => Hash::make('12345678'),
            
        // ]);
        // $user->assignRole('AdminEmisor');
    }
}
