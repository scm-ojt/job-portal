<?php

namespace Tests\Feature;

use App\Models\Contact;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class AdminContactTest extends TestCase
{
    use RefreshDatabase;
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function setUp():void
    {
        parent::setUp();

        $user = User::factory()->create(['role_id' => 1]);
        $this->actingAs($user);
    }

    public function test_an_admin_can_see_all_contacts()
    {
        $this->get(route('admin.contacts'))
            ->assertStatus(200);
    }

    public function test_an_admin_can_delete_company()
    {
        $contact = Contact::factory()->create();
        
        $this->post(route('admin.contacts.destroy', $contact->id))
             ->assertSee($contact->message);
    }
}
