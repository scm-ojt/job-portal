<?php

namespace Tests\Feature;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class UserTest extends TestCase
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

    public function test_a_company_can_not_see_all_users()
    {
        $user = User::factory()->create();
        $this->actingAs($user);

        $this->get('/admin/users/')
        ->assertRedirect('company/dashboard');
    }

    public function test_an_admin_can_see_all_users()
    {
        $user = User::factory()->create();
        $user->role_id = 1;
        $this->actingAs($user);

        $this->get('/admin/users/')
        ->assertSee($user->name);
    }

    public function test_an_admin_can_create_all_users()
    {
        $user = User::factory()->create();
        $user->role_id = 1;
        $this->actingAs($user);

        $response = $this->post('/admin/users/', $user->toArray());
            
        $this->get('/admin/users')
              ->assertStatus(200);
    }

    public function test_an_admin_can_edit_all_users()
    {
        $user = User::factory()->create();
        $user->role_id = 1;
        $this->actingAs($user);

        $editUser = User::factory()->create();
        $this->get('/admin/users/'.$editUser->id.'/edit')
              ->assertSee($editUser->name);
    }

    public function test_an_admin_can_update_all_users()
    {
        $user = User::factory()->create();
        $user->role_id = 1;
        $this->actingAs($user);

        $editUser = User::factory()->create();
        $this->post('/admin/users/'.$editUser->id)
              ->assertSee($editUser->name);
    }

    public function test_an_admin_can_delete_all_users()
    {
        $user = User::factory()->create();
        $user->role_id = 1;
        $this->actingAs($user);

        $editUser = User::factory()->create();
        $this->get('/admin/users/'.$editUser->id)
              ->assertSee($editUser->name);
    }
}
