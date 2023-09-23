<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
  /**
   * Seed the application's database.
   */
  public function run(): void
  {
    // \App\Models\User::factory(10)->create();

    \App\Models\User::factory()->create([
      'id_role' => 1,
      'name' => 'admin',
      'email' => 'admin@gmail.com',
      'password' => Hash::make('12345678'),
      'is_active' => true,
    ]);

    $this->call([
      UserSeeder::class,
      RoleSeeder::class,
      StatusSeeder::class,
      KategoriSeeder::class,
      SubkategoriSeeder::class,
    ]);
  }
}