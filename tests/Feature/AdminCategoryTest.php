<?php

namespace Tests\Feature;

use App\Models\Category;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class AdminCategoryTest extends TestCase
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

    public function test_an_admin_can_see_category()
    {
        $this->get(route('categories.index'))
            ->assertStatus(200);
    }

    public function test_an_admin_can_create_category()
    {
        $category =Category::factory()->create();
        $this->post(route('categories.store'), $category->toArray());
             
        $this->get(route('categories.index'))
             ->assertSee($category->name);
    }

    public function test_an_admin_can_see_edit_category()
    {
        $category = Category::factory()->create();
        
        $this->get(route('categories.edit', $category->id))
            ->assertSee($category->name);
    }

    public function test_an_admin_can_update_category()
    {
        $category = Category::factory()->create();

        $this->post(route('categories.update', $category->id))
             ->assertSee($category->name);
    }

    public function test_an_admin_can_delete_category()
    {
        $category = Category::factory()->create();

        $this->post(route('categories.destroy', $category->id))
             ->assertSee($category->name);
    }

}
