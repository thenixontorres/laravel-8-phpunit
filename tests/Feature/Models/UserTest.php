<?php

namespace Tests\Feature\Models;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\User;
class UserTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    use RefreshDatabase;

    public function testUser()
    {
        User::factory()->create([
            'email' => 'i@admin.com'
        ]);

        $this->assertDataBaseHas('users',[
            'email' => 'i@admin.com'
        ]);

        $this->assertDataBaseMissing('users',[
            'email' => 'new@admin.com'
        ]);
    }
}
