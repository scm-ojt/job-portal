<?php

namespace Tests\Feature;

use App\Models\Category;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Support\Facades\Auth;
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

    public function test_an_admin_can_create_category()
    {
        $user = User::factory()->create();
        $user->role_id = 1;
        $this->actingAs($user);
        $category =Category::factory()->create();
        $response = $this->post('/admin/categories',$category->toArray());
        
        $this->get('/admin/categories')
             ->assertStatus(200);
        
    }

    public function test_a_company_can_not_create_category()
    {
        $user = User::factory()->create();

        $this->actingAs($user);

        $category =Category::factory()->create();

        if($user->role_id == 2){
            $this->post('/admin/categories',$category->toArray())
            ->assertRedirect('/company/dashboard');
        }
    }

    public function test_an_admin_can_read_category()
    {
        $user = User::factory()->create();
        $user->role_id == 1;
        $this->actingAs($user);
        $category =Category::factory()->create();

        $this->get('/admin/categories')
            ->assertStatus(302);
    }

    public function test_a_company_can_not_read_category()
    {
        $user = User::factory()->create();
        $this->actingAs($user);

        $category = Category::factory()->create();
        $this->get('/admin/categories')
             ->assertRedirect('/company/dashboard');
    }

    public function test_unauthorized_users_can_not_create_category()
    {
        $category =Category::factory()->create();

        $this->post('/admin/categories',$category->toArray())
             ->assertRedirect('/login');
        
    }

    public function test_an_admin_can_see_edit_category()
    {
        $user = User::factory()->create();
        $user->role_id = 1;
        $this->actingAs($user);

        $category = Category::factory()->create();
        
        $this->get('/admin/categories/'. $category->id.'/edit')
            ->assertSee($category->name);
    }

    public function test_an_admin_can_update_category(){
        $user = User::factory()->create();
        $user->role_id = 1;
        $this->actingAs($user);

        $category = Category::factory()->create();

        $this->post('/admin/categories/'.$category->id)
             ->assertSee($category->name);
    }

    public function test_an_admin_can_delete_category(){
        $user = User::factory()->create();
        $user->role_id = 1;
        $this->actingAs($user);

        $category = Category::factory()->create();

        $this->post('/admin/categories/'.$category->id)
             ->assertSee($category->name);
    }

}
