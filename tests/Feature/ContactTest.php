<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\Contact;

class ContactTest extends TestCase
{   
    use RefreshDatabase;
    /**
     * A basic feature test example.
     *
     * @return void
     */


    public function test_a_viewer_can_see_contact_page()
    {   
        $this->get(route('contact-us'))
            ->assertStatus(200);
    }

    public function test_a_admin_can_store_contacts()
    {
        $company = Company::factory()->create();

        $this->post(route('company.update', $company->id));
        $this->get(route('company.dashboard'))
            ->assertStatus(200);
    }
}