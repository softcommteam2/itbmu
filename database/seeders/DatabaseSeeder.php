<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\{User};
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // Test account with the factory password "password": local only, never on production
        if (app()->environment('local')) {
            User::factory()->create([
                'name' =>'admin',
                'email'=>'admin@mail.com',
            ]);
        }

        $this->call(SoftcommAdminSeeder::class);
    }
}
