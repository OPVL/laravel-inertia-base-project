<?php

namespace Tests\Unit\Actions;

use App\Actions\User\CreateUser;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class CreateUserTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function it_creates_user_from_payload(): void
    {
        $user = $this->__action()->execute([
            'firstname' => 'Test',
            'surname' => 'Mann',
            'email' => 'test.mann@example.com',
            'password' => 'secure-password',
        ]);

        $this->assertEquals(User::class, $user::class);

        $this->assertEquals('Test', $user->firstname);
        $this->assertEquals('Mann', $user->surname);
        $this->assertEquals('test.mann@example.com', $user->email);
        $this->assertNotEquals('secure-password', $user->password);
        $this->assertTrue(password_verify('secure-password', $user->password));

        $this->assertNotNull($user->id);
        $this->assertTrue($user->wasRecentlyCreated);
    }

    private function __action(): CreateUser
    {
        return app(CreateUser::class);
    }
}
