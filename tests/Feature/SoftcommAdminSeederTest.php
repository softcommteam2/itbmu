<?php

namespace Tests\Feature;

use App\Models\User;
use Database\Seeders\SoftcommAdminSeeder;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\Hash;
use Tests\TestCase;

class SoftcommAdminSeederTest extends TestCase
{
    use RefreshDatabase;

    const PROMPT = 'Password for softcommadmin@gmail.com';

    public function test_creates_admin_with_prompted_password()
    {
        $this->artisan('db:seed', ['--class' => SoftcommAdminSeeder::class])
            ->expectsQuestion(self::PROMPT, 'test-password-123')
            ->assertSuccessful();

        $user = User::where('email', 'softcommadmin@gmail.com')->first();
        $this->assertSame('softcomm admin', $user->name);
        $this->assertTrue(Hash::check('test-password-123', $user->password));
    }

    public function test_running_again_resets_password_without_duplicating()
    {
        User::forceCreate(['name' => 'old', 'email' => 'softcommadmin@gmail.com', 'password' => Hash::make('old-password-123')]);

        $this->artisan('db:seed', ['--class' => SoftcommAdminSeeder::class])
            ->expectsQuestion(self::PROMPT, 'another-password-456')
            ->assertSuccessful();

        $this->assertSame(1, User::where('email', 'softcommadmin@gmail.com')->count());
        $this->assertTrue(Hash::check('another-password-456', User::where('email', 'softcommadmin@gmail.com')->value('password')));
    }

    public function test_short_password_changes_nothing()
    {
        $this->artisan('db:seed', ['--class' => SoftcommAdminSeeder::class])
            ->expectsQuestion(self::PROMPT, 'short')
            ->assertSuccessful();

        $this->assertSame(0, User::where('email', 'softcommadmin@gmail.com')->count());
    }

    public function test_full_seed_outside_local_skips_factory_admin()
    {
        $this->artisan('db:seed')
            ->expectsQuestion(self::PROMPT, 'test-password-123')
            ->assertSuccessful();

        $this->assertSame(0, User::where('email', 'admin@mail.com')->count());
        $this->assertSame(1, User::where('email', 'softcommadmin@gmail.com')->count());
    }
}
