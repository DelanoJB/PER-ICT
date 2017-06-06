<?php

namespace Tests\Feature;

use App\Models\User;
use Faker\Provider\cs_CZ\DateTime;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class UserTest extends TestCase
{
    use DatabaseTransactions;
    /**
     * A basic test example.
     *
     * @return void
     */

    /** @test */
    public function it_has_a_name()
    {
        $uut = factory(User::class)->create();
        $this->assertNotEmpty($uut->name);
    }
    /** @test */
    public function it_has_a_first_name()
    {
        $uut = factory(User::class)->create();
        $this->assertNotEmpty($uut->first_name);
    }
    /** @test */
    public function it_has_a_last_name()
    {
        $uut = factory(User::class)->create();
        $this->assertNotEmpty($uut->last_name);
    }
    /** @test */
    public function it_has_a_function()
    {
        $uut = factory(User::class)->create();
        $this->assertNotEmpty($uut->function);
    }
    /** @test */
    public function it_has_a_date_of_birth()
    {
        $uut = factory(User::class)->create();
        $this->assertNotEmpty($uut->date_of_birth);
    }
    /** @test */
    public function it_has_a_email()
    {
        $uut = factory(User::class)->create();
        $this->assertNotEmpty($uut->email);
    }

    /** @test */
    public function it_is_an_admin()
    {
        $uut = factory(User::class)->create(['function' => 'Admin']);

        $this->assertEquals('Admin', $uut->function);
    }

    /** @test */
    public function it_can_visit_admin_page()
    {
        //arrange
        $user = factory(User::class)->create(['function' => 'Admin']);

        $this   ->actingAs($user)
                ->withSession(['test' => 'test'])
                //act
                ->get('/admin')
                //assert
                ->assertStatus(200);
    }

    /** @test */
    public function it_gets_redirected_to_home()
    {
        //arrange
        $user = factory(User::class)->create(['function' => 'Arts']);

        $this   ->actingAs($user)
                ->withSession(['test' => 'test'])
                //act
                ->get('/admin')
                //assert
                ->assertRedirect('/');
    }

    /** @test */
    public function empty_function_gets_redirected_to_home()
    {
        //arrange
        $user = factory(User::class)->create(['function' => '']);

        $this   ->actingAs($user)
                ->withSession(['test' => 'test'])
                //act
                ->get('/admin')
                //assert
                ->assertRedirect('/');
    }

    /** @test */
    public function it_should_access_admin_page()
    {
        $user = factory(User::class)->create(['function' => 'admin']);

        $this   ->actingAs($user)
                ->withSession(['test' => 'test'])
                ->get('/admin')
                ->assertStatus(200);
    }
}

