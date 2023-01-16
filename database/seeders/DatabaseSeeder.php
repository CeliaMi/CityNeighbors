<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Specie;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        Specie::factory()-> create([
            'name'=>' Carbonero',
            'individuals'=>'2',
            'description'=>'Ave insectívora pequeña, muy llamativa y conspicua por sus colores azulados y amarillentos y sus frecuentes reclamos.',
            'areas'=>' resulta común en ambientes arbolados, tanto bien conservados como degradados',
            'img'=>'https://seo.org/wp-content/uploads/2013/11/F489_Foto_02.jpg' ,
        ]);

        Specie::factory(9)-> create();

        User::factory()-> create(['name' => 'Admin', 'email' => 'admin@admin.com', 'isAdmin' =>true]);
        User::factory()-> create(['name' => 'User', 'email' => 'user@user.com', 'isAdmin' =>false]);
        User::factory(5)->create();
    }
}
