<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class SoftcommAdminSeeder extends Seeder
{
    const EMAIL = 'softcommadmin@gmail.com';

    /**
     * Create (or reset) the Softcomm admin account.
     * The password is never stored in the repo: it comes from
     * SOFTCOMM_ADMIN_PASSWORD in .env, or is asked for (hidden) when run.
     *
     * @return void
     */
    public function run()
    {
        $password = env('SOFTCOMM_ADMIN_PASSWORD') ?: $this->command->secret('Password for '.self::EMAIL);

        if (strlen((string) $password) < 12) {
            $this->command->error('Password must be at least 12 characters. Nothing was changed.');
            return;
        }

        User::updateOrCreate(
            ['email' => self::EMAIL],
            ['name' => 'softcomm admin', 'password' => Hash::make($password)]
        );

        $this->command->info(self::EMAIL.' is ready.');
    }
}
