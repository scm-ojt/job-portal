<?php

namespace Tests\Feature;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class UserTest extends TestCase
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

    public function test_an_admin_can_see_all_users()
    {
        $this->get(route('admin.users'))
             ->assertStatus(200);
    }

    public function test_an_admin_can_see_edit_user()
    {
        $user = User::factory()->create();
        
        $this->get(route('admin.users.edit', $user->id))
            ->assertSee($user->name);
    }

    public function test_an_admin_can_update_user()
    {
        $user = User::factory()->create();

        $this->post(route('admin.users.update', $user->id))
             ->assertSee($user->name);
    }

    public function test_an_admin_can_delete_user()
    {
        $user = User::factory()->create();

        $this->post(route('admin.users.destroy', $user->id))
             ->assertSee($user->name);
    }

    // public function test_an_admin_can_active_user()
    // {
    //     $user = User::factory()->create();

    //     $this->post(route('admin.users.active'))
    //          ->assertSee($user->name);
    // }
}
