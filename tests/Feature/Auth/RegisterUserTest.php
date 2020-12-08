<?php

namespace Tests\Feature\Auth;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Support\Facades\Auth;
use Tests\TestCase;

class RegisterUserTest extends TestCase
{
    use RefreshDatabase;

    public function testExample(): void
    {
        $response = $this->postJson(route('auth.register.store'), [
            'firstname' => 'Tester',
            'surname' => 'Dude',
            'email' => 'urmom@example.org',
            'password' => 'badass-l00t',
        ])->assertRedirect('home');


        $user = Auth::user();

        $this->assertNotNull($user);

        $this->assertEquals('Tester', $user->firstname);
        $this->assertEquals('Dude', $user->surname);
        $this->assertEquals('urmom@example.org', $user->email);
        $this->assertNotEquals('badass-l00t', $user->password);
        $this->assertTrue(password_verify('badass-l00t', $user->password));

        $this->assertNotNull($user->id);
        $this->assertTrue($user->wasRecentlyCreated);
    }
}
