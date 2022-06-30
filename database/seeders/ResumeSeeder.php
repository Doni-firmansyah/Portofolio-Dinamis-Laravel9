<?php

namespace Database\Seeders;

use App\Models\Resume;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ResumeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Resume::create([
            'judul_resume' => 'resume',
            'deskripsi' => 'sosial media ahhahahahahahhahah',
            'judul_education' => 'Education',
            'judul_experience' => 'Experience',
        ]);
    }
}
