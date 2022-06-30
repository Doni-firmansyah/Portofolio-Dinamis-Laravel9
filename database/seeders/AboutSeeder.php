<?php

namespace Database\Seeders;

use App\Models\About;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AboutSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        About::create([
            'judul' => 'About',
            'deskrispsi_judul' => 'Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.',
            'sub_judul' => 'UI/UX Designer & Web Developer.',
            'deskripsi_sub_judul' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
            'pertanyaan1' => 'Birthday',
            'jawaban1' => '1 May 1995',
            'pertanyaan2' => 'Website',
            'jawaban2' => 'www.example.com',
            'pertanyaan3' => 'Phone',
            'jawaban3' => '+123 456 7890',
            'pertanyaan4' => 'City',
            'jawaban4' => 'New York, USA',
            'pertanyaan5' => 'Age',
            'jawaban5' => '30',
            'pertanyaan6' => 'Degree',
            'jawaban6' => 'Master',
            'datapenunjang' => 'Officiis eligendi itaque labore et dolorum mollitia officiis optio vero. Quisquam sunt adipisci omnis et ut. Nulla accusantium dolor incidunt officia tempore. Et eius omnis. Cupiditate ut dicta maxime officiis quidem quia. Sed et consectetur qui quia repellendus itaque neque. Aliquid amet quidem ut quaerat cupiditate. Ab et eum qui repellendus omnis culpa magni laudantium dolores.',
            'gambar' => 'whatsapp.png',

            'judul_skill' => 'Skill',
            'deskripsi_judul_skill' => 'Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.',
            'skill1' => 'whatsapp.png',
            'proses_skill1' => 100,
            'skill2' => 'whatsapp.png',
            'proses_skill2' => 100,
            'skill3' => 'whatsapp.png',
            'proses_skill3' => 100,
            'skill4' => 'whatsapp.png',
            'proses_skill4' => 100,
            'skill5' => 'whatsapp.png',
            'proses_skill5' => 100,
            'skill6' => 'whatsapp.png',
            'proses_skill6' => 100,
        ]);
    }
}
