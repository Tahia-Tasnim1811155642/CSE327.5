<?php
namespace Tests\Feature;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Laravel\Fortify\Features;
use Laravel\Jetstream\Jetstream;
use Tests\TestCase;

class RegistrationTest extends TestCase
{
    use RefreshDatabase;
    public function test_new_users_can_register()
    {
        $response = $this->post('/register', [
            'name' => 'sadia',
            'email' => 'sadia@gmail.com',
            'password' => '12345678',
            'password_confirmation' => '12345678',
        ]);

        $this->assertTrue(True);
        $this->assertAuthenticated();
        $response->assertRedirect(RouteServiceProvider::HOME);
    }
}
