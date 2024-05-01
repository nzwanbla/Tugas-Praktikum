<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Dosen;
<<<<<<< HEAD
  
=======

>>>>>>> 29c67a2e41ec4954f893f8062f41310f21fbf54d
class DosenSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Dosen::create([
            'nama' => 'John Doe',
            'gelar' => 'PhD'
        ]);

        Dosen::create([
            'nama' => 'Jane Smith',
            'gelar' => 'MSc'
        ]);
    }
}
