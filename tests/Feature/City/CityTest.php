<?php

namespace Tests\Feature\City;

use App\Models\City;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class CityTest extends TestCase
{
    use RefreshDatabase, WithFaker;

    protected function setUp(): void
    {
        parent::setUp();
        $this->city = $this->actingAs(City::factory()->create());
    }

    /** @test */
    public function authenticated_users_can_create_a_new_city()
    {
        //When user submits post request to create city endpoint
        $this->post('/admin/cities', (array)$this->city);

        //It gets stored in the database
        $this->assertEquals(1, City::all()->count());
    }

    /** @test */
    public function unauthenticated_users_cannot_create_a_new_city()
    {
        //Given we have a city object
        $city = \App\Models\City::factory()->create();
        //When unauthenticated user submits post request to create city endpoint
        $this->post('/cities/store',$city->toArray());
        // He should be redirected to login page
        $this->get('/login');
    }
}
