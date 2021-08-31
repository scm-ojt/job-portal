<?php

namespace Tests\Feature;

use App\Models\Category;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class CategoryTest extends TestCase
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

    public function test_a_user_can_create_category()
    {
        $user = User::factory()->create();

        $this->actingAs($user);

        $category =Category::factory()->create();

        $response = $this->post('/admin/categories',$category->toArray());

        $this->get('/admin/categories')
        ->assertSee($category['name']);
    }

    public function test_a_user_can_read_category()
    {
        $user = User::factory()->create();

        $this->actingAs($user);

        $category =Category::factory()->create();

        $response = $this->get('/admin/categories');
        
        $response->assertSee($category->name);
    }
}
