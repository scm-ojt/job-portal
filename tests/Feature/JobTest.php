<?php

namespace Tests\Feature;

use App\Models\Job;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class JobTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_example()
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }

    public function test_a_user_can_create_job()
    {
        $user = User::factory()->create();

        $this->actingAs($user);

        $job =Job::factory()->create();

        $response = $this->post('/company-jobs',$job->toArray());

        $this->get('/company-jobs')
        ->assertSee($job['title']);
    }

    public function test_a_user_can_read_jobs()
    {
        $user = User::factory()->create();

        $this->actingAs($user);

        $job =Job::factory()->create();

        $response = $this->get('/company-jobs');
        
        $response->assertStatus(200);
    }

    public function test_a_user_can_see_edit_job()
    {
        $user = User::factory()->create();

        $this->actingAs($user);

        $job = Job::factory()->create();
        
        $this->get('company-jobs/'. $job->id.'/edit')
            ->assertSee($job->title);
    }

    public function test_a_user_can_update_job(){
        $user = User::factory()->create();

        $this->actingAs($user);

        $job = Job::factory()->create();

        $this->post('company-jobs/'.$job->id)
             ->assertSee($job->title);
    }

    public function test_unauthenticated_users_cannot_create_a_job()
    {
        $job =Job::factory()->create();

        $response = $this->post('/company-jobs',$job->toArray());

        $this->get('/company-jobs')
             ->assertRedirect('/login');
    }

    public function test_a_job_requires_a_title(){

        $user = User::factory()->create();

        $this->actingAs($user);

        $job = Job::factory()->make(['title' => null]);

        $this->post('/company-jobs', $job->toArray())
                ->assertSessionHasErrors('title');
    }

}
