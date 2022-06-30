<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        User::create([
            'name' => 'doni firmansyah',
            'email' => 'didonifirmansyah@gmail.com',
            'password'=>bcrypt('admin123'),
        ]);
    }
}
