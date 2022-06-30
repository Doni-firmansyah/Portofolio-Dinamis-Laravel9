<?php

namespace Database\Seeders;

use App\Models\Portofolio;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PortofolioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Portofolio::create([
            'judul_portofolio' => 'portofolio',
            'deskripsi' => 'sosial media ahhahahahahahhahah',

        ]);
    }
}
