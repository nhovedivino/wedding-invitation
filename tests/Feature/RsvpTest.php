<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\Rsvp;

class RsvpTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function it_can_create_rsvp_with_correct_fields()
    {
        $rsvpData = [
            'name' => 'John Doe',
            'attending' => true,
            'relationship' => 'Friend',
            'message' => 'Congratulations on your special day!'
        ];

        $response = $this->withoutMiddleware()->post(route('wedding.rsvp.store'), $rsvpData);

        $response->assertRedirect();
        $response->assertSessionHas('success');

        $this->assertDatabaseHas('rsvps', [
            'name' => 'John Doe',
            'attending' => true,
            'relationship' => 'Friend',
            'message' => 'Congratulations on your special day!'
        ]);
    }

    /** @test */
    public function it_requires_name_field()
    {
        $rsvpData = [
            'attending' => true,
            'relationship' => 'Friend',
            'message' => 'Test message'
        ];

        $response = $this->withoutMiddleware()->post(route('wedding.rsvp.store'), $rsvpData);

        $response->assertSessionHasErrors(['name']);
    }

    /** @test */
    public function it_requires_attending_field()
    {
        $rsvpData = [
            'name' => 'John Doe',
            'relationship' => 'Friend',
            'message' => 'Test message'
        ];

        $response = $this->withoutMiddleware()->post(route('wedding.rsvp.store'), $rsvpData);

        $response->assertSessionHasErrors(['attending']);
    }

    /** @test */
    public function it_requires_relationship_field()
    {
        $rsvpData = [
            'name' => 'John Doe',
            'attending' => true,
            'message' => 'Test message'
        ];

        $response = $this->withoutMiddleware()->post(route('wedding.rsvp.store'), $rsvpData);

        $response->assertSessionHasErrors(['relationship']);
    }

    /** @test */
    public function message_field_is_optional()
    {
        $rsvpData = [
            'name' => 'John Doe',
            'attending' => true,
            'relationship' => 'Friend'
        ];

        $response = $this->withoutMiddleware()->post(route('wedding.rsvp.store'), $rsvpData);

        $response->assertRedirect();
        $response->assertSessionHas('success');

        $this->assertDatabaseHas('rsvps', [
            'name' => 'John Doe',
            'attending' => true,
            'relationship' => 'Friend',
            'message' => null
        ]);
    }

    /** @test */
    public function admin_dashboard_shows_rsvps()
    {
        // Create test RSVPs
        Rsvp::create([
            'name' => 'John Doe',
            'attending' => true,
            'relationship' => 'Friend',
            'message' => 'Congratulations!'
        ]);

        Rsvp::create([
            'name' => 'Jane Smith',
            'attending' => false,
            'relationship' => 'Family',
            'message' => 'Sorry, cannot make it'
        ]);

        $response = $this->get(route('wedding.admin'));

        $response->assertStatus(200);
        $response->assertSee('John Doe');
        $response->assertSee('Jane Smith');
        $response->assertSee('Friend');
        $response->assertSee('Family');
    }
}
