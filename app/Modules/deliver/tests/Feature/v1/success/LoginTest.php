<?php

namespace App\Modules\authentication\tests\Feature\v1\success;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Support\Facades\Artisan;
use Symfony\Component\HttpFoundation\Response as ResponseAlias;
use Tests\TestCase;
use App\Modules\deliver\src\Models\Schemas\Constants\DeliverConstants;

class LoginTest extends TestCase
{
    use WithFaker;
    use RefreshDatabase;

    public function setUp(): void
    {
        parent::setUp();
        $this->user = User::factory()->create();
        $this->password = $this->user->password;
        Artisan::call('passport:install');
    }

    /** @test */
    public function login(): void
    {
        User::where('id', $this->user->id)
            ->update(['password' => bcrypt($this->user->password)]);

        $this->json('post', route(DeliverConstants::LOGIN), [
            'email' => $this->user->email, 'password' => $this->password,
        ])->assertStatus(ResponseAlias::HTTP_OK);
    }
}
