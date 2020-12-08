<?php

namespace Tests\Unit\Models;

use App\Models\User;
use Tests\TestCase;

class UserTest extends TestCase
{
    /** @test */
    public function can_create_from_factory(): void
    {
        $user = User::factory()->createOne();

        $this->assertEquals(User::class, $user::class);
        $this->assertTrue($user->wasRecentlyCreated);
        $this->assertNotNull($user->id);
    }
}
