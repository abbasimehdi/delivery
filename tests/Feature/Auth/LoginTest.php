<?php

namespace Tests\Feature\Auth;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Constants\BaseConstants;

class LoginTest extends TestCase
{
    use RefreshDatabase, WithFaker;

    protected function setUp(): void
    {
        parent::setUp();
        $this->user = User::factory()->create([BaseConstants::PASSWORD => bcrypt(BaseConstants::PASSWORD_VALUE)]);
    }

    /**
     * @return void
     */
    public function test_user_can_view_a_login_form()
    {
        $response = $this->get(BaseConstants::LOGIN);

        $response->assertSuccessful();
        $response->assertViewIs(BaseConstants::AUTH_LOGIN);
    }

    /**
     * @return void
     */
    public function test_user_cannot_view_a_login_form_when_authenticated()
    {
        $response = $this->actingAs($this->user)->get(BaseConstants::LOGIN);

        $response->assertRedirect(BaseConstants::HOME);
    }

    /**
     * @return void
     */
    public function test_user_can_login_with_correct_credentials()
    {
        $response = $this->post(BaseConstants::LOGIN, [
            BaseConstants::EMAIL => $this->user->email,
            BaseConstants::PASSWORD => BaseConstants::PASSWORD_VALUE,
        ]);

        $response->assertRedirect(BaseConstants::HOME);
        $this->assertAuthenticatedAs($this->user);
    }
}
