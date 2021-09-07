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
        $this->get('contact-us')
            ->assertStatus(200);
    }

    public function test_a_viewer_can_create_contact()
    {   
        $contact = Contact::factory()->create();

        $this->post('contact-us', $contact->toArray());
             
        $this->get('contact-us')
             ->assertStatus(200);
    }

}