<?php

namespace Database\Seeders;

use App\Models\Icon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class IconSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Icon::create([
            'nama_icon' => 'twitter',
            'kategori' => 'sosial media',
            'kode_icon'=>'bx bxl-twitter',
        ]);

        Icon::create([
            'nama_icon' => 'facebook',
            'kategori' => 'sosial media',
            'kode_icon'=>'bx bxl-facebook',
        ]);

        Icon::create([
            'nama_icon' => 'instagram',
            'kategori' => 'sosial media',
            'kode_icon'=>'bx bxl-instagram',
        ]);

        Icon::create([
            'nama_icon' => 'skype',
            'kategori' => 'sosial media',
            'kode_icon'=>'bx bxl-skype',
        ]);

        Icon::create([
            'nama_icon' => 'linkedin',
            'kategori' => 'sosial media',
            'kode_icon'=>'bx bxl-linkedin',
        ]);

        Icon::create([
            'nama_icon' => 'github',
            'kategori' => 'sosial media',
            'kode_icon'=>'bx bxl-github',
        ]);

        Icon::create([
            'nama_icon' => 'youtube',
            'kategori' => 'sosial media',
            'kode_icon'=>'bx bxl-youtube',
        ]);

        Icon::create([
            'nama_icon' => 'google',
            'kategori' => 'sosial media',
            'kode_icon'=>'bx bxl-google',
        ]);

        Icon::create([
            'nama_icon' => 'yahoo',
            'kategori' => 'sosial media',
            'kode_icon'=>'bx bxl-yahoo',
        ]);

        Icon::create([
            'nama_icon' => 'whatsapp',
            'kategori' => 'sosial media',
            'kode_icon'=>'bx bxl-whatsapp',
        ]);

        Icon::create([
            'nama_icon' => 'telegram',
            'kategori' => 'sosial media',
            'kode_icon'=>'bx bxl-telegram',
        ]);

        Icon::create([
            'nama_icon' => 'apple',
            'kategori' => 'sosial media',
            'kode_icon'=>'bx bxl-apple',
        ]);
    }
}
