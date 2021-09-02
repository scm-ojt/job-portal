<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\User;
use App\Models\Company;

class CompanyTest extends TestCase
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

        $user = User::factory()->create(['role_id' => 2]);
        $this->actingAs($user);
        $company = Company::factory()->create();
        $company->users()->attach($user->id);
        
    }

    public function test_a_company_can_see_dashboard()
    {   
        $this->get(route('company.dashboard'))
            ->assertStatus(200);
    }

    public function test_a_company_can_edit_profile()
    {   
        $company = Company::factory()->create();

        $this->get(route('company.edit', $company->id))
            ->assertStatus(200);
    }

    public function test_a_company_can_update_profile()
    {
        $company = Company::factory()->create();

        $this->post(route('company.update', $company->id));
        $this->get(route('company.dashboard'))
            ->assertStatus(200);
    }
}
