<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;


class RoleControllerTest extends TestCase
{
    /**
     * Index Method Test.
     *
     * @return void
     */
    public function testIndexTest()
    {
        $response = $this->get('roles');

        $response->assertStatus(200);
    }

    /**
     * Show Method Test.
     *
     * @return void
     */
    public function testShowTest()
    {
        $response = $this->get('roles/{role}');

        $response->assertStatus(200);
    }

    /**
     * Create Method Test.
     *
     * @return void
     */
    public function testCreateTest()
    {
        $response = $this->get('roles/create');

        $response->assertStatus(200);
    }

    /**
     * Store Method Test.
     *
     * @return void
     */
    public function testStoreTest()
    {
        $response = $this->post('roles',[]);

        $response->assertStatus(200);
    }

    /**
     * Edit Method Test.
     *
     * @return void
     */
    public function testEditTest()
    {
        $response = $this->get('roles/{role}/edit');

        $response->assertStatus(200);
    }

    /**
     * Update Method Test.
     *
     * @return void
     */
    public function testUpdateTest()
    {
        $response = $this->put('roles/{role}',[]);

        $response->assertStatus(200);
    }

    /**
     * Destroy Method Test.
     *
     * @return void
     */
    public function testDestroyTest()
    {
        $response = $this->delete('roles/{role}',[]);

        $response->assertStatus(200);
    }


}
