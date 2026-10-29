<?php

namespace Tests\Feature;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\Hash;
use Tests\TestCase;

class UserPasswordUpdateTest extends TestCase
{
    use RefreshDatabase;

    private function makeUser($email)
    {
        return User::forceCreate(['name' => 'u', 'email' => $email, 'password' => Hash::make('old-password-123')]);
    }

    private function patchMe($me, array $data)
    {
        return $this->actingAs($me)->from('/admin/users/'.$me->id.'/edit')
            ->patch('/admin/users/'.$me->id, $data + ['name' => 'u', 'email' => $me->email]);
    }

    private function passwordIs($user, $plain)
    {
        return Hash::check($plain, $user->fresh()->password);
    }

    public function test_edit_page_shows_new_fields()
    {
        $me = $this->makeUser('me@test.local');
        $this->actingAs($me)->get('/admin/users/'.$me->id.'/edit')->assertOk()
            ->assertSee('Current Password')->assertSee('Confirm New Password');
    }

    public function test_change_with_correct_current_password()
    {
        $me = $this->makeUser('me@test.local');
        $this->patchMe($me, ['current_password' => 'old-password-123', 'password' => 'new-password-456', 'password_confirmation' => 'new-password-456'])
            ->assertRedirect('/admin/users/'.$me->id.'/edit')->assertSessionHas('success');
        $this->assertTrue($this->passwordIs($me, 'new-password-456'));
    }

    public function test_wrong_current_password_rejected()
    {
        $me = $this->makeUser('me@test.local');
        $this->patchMe($me, ['current_password' => 'wrong', 'password' => 'new-password-456', 'password_confirmation' => 'new-password-456'])
            ->assertSessionHasErrors('current_password');
        $this->assertTrue($this->passwordIs($me, 'old-password-123'));
    }

    public function test_missing_current_password_rejected()
    {
        $me = $this->makeUser('me@test.local');
        $this->patchMe($me, ['password' => 'new-password-456', 'password_confirmation' => 'new-password-456'])
            ->assertSessionHasErrors('current_password');
        $this->assertTrue($this->passwordIs($me, 'old-password-123'));
    }

    public function test_confirmation_mismatch_rejected()
    {
        $me = $this->makeUser('me@test.local');
        $this->patchMe($me, ['current_password' => 'old-password-123', 'password' => 'new-password-456', 'password_confirmation' => 'typo'])
            ->assertSessionHasErrors('password');
        $this->assertTrue($this->passwordIs($me, 'old-password-123'));
    }

    public function test_short_password_rejected()
    {
        $me = $this->makeUser('me@test.local');
        $this->patchMe($me, ['current_password' => 'old-password-123', 'password' => 'short', 'password_confirmation' => 'short'])
            ->assertSessionHasErrors('password');
        $this->assertTrue($this->passwordIs($me, 'old-password-123'));
    }

    public function test_cannot_change_another_user()
    {
        $me = $this->makeUser('me@test.local');
        $other = $this->makeUser('other@test.local');
        $this->actingAs($me)->patch('/admin/users/'.$other->id, ['name' => 'x', 'email' => 'other@test.local', 'current_password' => 'old-password-123', 'password' => 'hijacked-7890', 'password_confirmation' => 'hijacked-7890'])
            ->assertForbidden();
        $this->assertTrue($this->passwordIs($other, 'old-password-123'));
    }

    public function test_empty_name_is_validation_error_not_500()
    {
        $me = $this->makeUser('me@test.local');
        $this->actingAs($me)->from('/admin/users/'.$me->id.'/edit')
            ->patch('/admin/users/'.$me->id, ['name' => '', 'email' => '', 'current_password' => 'old-password-123'])
            ->assertStatus(302)->assertSessionHasErrors(['name', 'email']);
    }

    public function test_duplicate_email_rejected()
    {
        $me = $this->makeUser('me@test.local');
        $this->makeUser('other@test.local');
        $this->actingAs($me)->from('/admin/users/'.$me->id.'/edit')
            ->patch('/admin/users/'.$me->id, ['name' => 'u', 'email' => 'other@test.local', 'current_password' => 'old-password-123'])
            ->assertSessionHasErrors('email');
    }

    public function test_name_change_without_new_password_keeps_password()
    {
        $me = $this->makeUser('me@test.local');
        $this->patchMe($me, ['name' => 'New Name', 'current_password' => 'old-password-123'])->assertSessionHas('success');
        $this->assertSame('New Name', $me->fresh()->name);
        $this->assertTrue($this->passwordIs($me, 'old-password-123'));
    }

    public function test_session_with_old_password_is_logged_out()
    {
        $me = $this->makeUser('me@test.local');
        $oldHash = $me->password;
        $this->patchMe($me, ['current_password' => 'old-password-123', 'password' => 'new-password-456', 'password_confirmation' => 'new-password-456']);

        // another browser that logged in before the change still carries the old hash
        $this->flushSession();
        $this->actingAs($me->fresh())->withSession(['password_hash_web' => $oldHash])
            ->get('/admin/users/'.$me->id.'/edit')->assertRedirect('/login');
    }

    public function test_current_session_stays_logged_in_after_change()
    {
        $me = $this->makeUser('me@test.local');
        $this->patchMe($me, ['current_password' => 'old-password-123', 'password' => 'new-password-456', 'password_confirmation' => 'new-password-456']);
        $this->get('/admin/users/'.$me->id.'/edit')->assertOk();
    }
}
