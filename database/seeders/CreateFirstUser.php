<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CreateFirstUser extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => 'Baihaqi',
            'email' => 'baihaqi24si@mahasiswa.pcr.ac.id',
            'password' => Hash::make('lalosalamanca')
        ]);
    }
}
