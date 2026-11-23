<?php

namespace Database\Seeders;

<<<<<<< HEAD
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
=======
>>>>>>> 2d26f3e51a9e2dfaf5dcfd90529fde1f0f3febf1
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
<<<<<<< HEAD
    use WithoutModelEvents;

=======
>>>>>>> 2d26f3e51a9e2dfaf5dcfd90529fde1f0f3febf1
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
<<<<<<< HEAD
        // User::factory(10)->create();

        // User::factory()->create([
        //   'name' => 'Test User',
        // 'email' => 'test@example.com',
        // ]);

        $this->call([
            ProjectSeeder::class,
            AdminUserSeeder::class,
        ]);

        // $this->call([
        //     ProjectSeeder::class,
        // ]);
    }
}
=======
        $this->call([
            EcommerceSeeder::class,
        ]);
    }
}
>>>>>>> 2d26f3e51a9e2dfaf5dcfd90529fde1f0f3febf1
