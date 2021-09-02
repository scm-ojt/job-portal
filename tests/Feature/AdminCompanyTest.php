<?php

namespace Tests\Feature;

use App\Models\Company;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class AdminCompanyTest extends TestCase
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

    public function test_an_admin_can_see_all_companies()
    {
        $this->get(route('admin.companies'))
            ->assertStatus(200);
    }

    public function test_an_admin_can_see_company_detail()
    {
        $company = Company::factory()->create();
        $this->get(route('admin.companies.show', $company->id))
            ->assertSee($company->name);
    }

    public function test_an_admin_can_delete_company()
    {
        $company = Company::factory()->create();
        
        $this->post(route('admin.companies.destroy', $company->id))
             ->assertSee($company->name);
    }

}
