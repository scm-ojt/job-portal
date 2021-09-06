<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\User;
use App\Models\Company;
use App\Models\Job;

class CompanyJobTest extends TestCase
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

    public function test_a_company_can_see_jobs()
    {
        $this->get(route('jobs.index'))
            ->assertStatus(200);
    }

    public function test_a_company_can_create_jobs()
    {
        $job = Job::factory()->create();
        $this->post(route('jobs.store'), $job->toArray());
             
        $this->get(route('jobs.index'))
             ->assertStatus(200);
    }

    public function test_a_company_can_edit_jobs()
    {
        $job = Job::factory()->create();
        
        $this->get(route('jobs.edit', $job->id))
            ->assertStatus(200);
    }

    public function test_a_company_can_update_jobs()
    {
        $job = Job::factory()->create();

        $this->post(route('jobs.update', $job->id));
        $this->get(route('jobs.index'))
            ->assertStatus(200);
    }

    public function test_a_company_can_delete_jobs()
    {
        $job = Job::factory()->create();
        
        $this->post(route('jobs.destroy', $job->id))
             ->assertSee($job->title);
    }

}
