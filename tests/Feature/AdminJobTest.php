<?php

namespace Tests\Feature;

use App\Models\Job;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class AdminJobTest extends TestCase
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

    public function test_an_admin_can_see_jobs()
    {
        $this->get(route('admin.jobs'))
            ->assertStatus(200);
    }

    public function test_an_admin_can_delete_job()
    {
        $job = Job::factory()->create();
        
        $this->post(route('admin.jobs.destroy', $job->id))
             ->assertSee($job->title);
    }

    // public function test_an_admin_can_approve_job()
    // {
    //     $job = Job::factory()->create();

    //     $this->post(route('admin.jobs.approve'))
    //          ->assertStatus(200);
    // }

}
