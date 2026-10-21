<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // 1. Akun Wali Santri
        User::create([
            'name'     => 'Bapak Hendra (Wali Santri)',
            'email'    => 'wali@alumanaa.sch.id',
            'password' => Hash::make('wali123'),
            'role'     => 'wali',
        ]);

        // 2. Akun Petugas Pos Gerbang / Guide
        User::create([
            'name'     => 'Pak Joko (Petugas Pos Gerbang)',
            'email'    => 'petugas@alumanaa.sch.id',
            'password' => Hash::make('petugas123'),
            'role'     => 'petugas',
        ]);

        // 3. Akun Admin Pondok (Pengasuhan)
        User::create([
            'name'     => 'Ustadz Abdullah (Admin Kesantrian)',
            'email'    => 'admin@alumanaa.sch.id',
            'password' => Hash::make('admin123'),
            'role'     => 'admin',
        ]);
    }
}