<?php

namespace App\Modules\authentication\tests\Feature\v1\success;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Support\Facades\Artisan;
use Symfony\Component\HttpFoundation\Response as ResponseAlias;
use Tests\TestCase;

class RegisterTest extends TestCase
{
    use WithFaker;
    use RefreshDatabase;

    public function setUp(): void
    {
        parent::setUp();
        Artisan::call('passport:install');
        Artisan::call('db:seed');
    }

    /** @test */
    public function register(): void
    {
        $password = $this->faker->password(6, 8);
        $response = $this->json('post', route('register'), [
            'name' => $this->faker->name,
            'email' => $this->faker->email,
            'password' => $password,
            'password_confirmation' => $password,
        ]);

        $response->assertStatus(ResponseAlias::HTTP_OK);
    }
}
