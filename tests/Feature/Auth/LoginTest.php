<?php

namespace Tests\Feature\Auth;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class LoginTest extends TestCase
{
    use RefreshDatabase, WithFaker;

    protected function setUp(): void
    {
        parent::setUp();
        $this->user = User::factory()->create(['password' => bcrypt('12345678')]);
    }

    /**
     * @return void
     */
    public function test_user_can_view_a_login_form()
    {
        $response = $this->get('/login');

        $response->assertSuccessful();
        $response->assertViewIs('auth.login');
    }

    /**
     * @return void
     */
    public function test_user_cannot_view_a_login_form_when_authenticated()
    {
        $response = $this->actingAs($this->user)->get('/login');

        $response->assertRedirect('/home');
    }

    /**
     * @return void
     */
    public function test_user_can_login_with_correct_credentials()
    {
        $response = $this->post('/login', [
            'email' => $this->user->email,
            'password' => '12345678',
        ]);

        $response->assertRedirect('/home');
        $this->assertAuthenticatedAs($this->user);
    }
}
