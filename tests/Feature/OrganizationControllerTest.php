<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;


class OrganizationControllerTest extends TestCase
{
    /**
     * Index Method Test.
     *
     * @return void
     */
    public function testIndexTest()
    {
        $response = $this->get('organizations');

        $response->assertStatus(200);
    }

    /**
     * Show Method Test.
     *
     * @return void
     */
    public function testShowTest()
    {
        $response = $this->get('organizations/{organization}');

        $response->assertStatus(200);
    }

    /**
     * Create Method Test.
     *
     * @return void
     */
    public function testCreateTest()
    {
        $response = $this->get('organizations/create');

        $response->assertStatus(200);
    }

    /**
     * Store Method Test.
     *
     * @return void
     */
    public function testStoreTest()
    {
        $response = $this->post('organizations',[]);

        $response->assertStatus(200);
    }

    /**
     * Edit Method Test.
     *
     * @return void
     */
    public function testEditTest()
    {
        $response = $this->get('organizations/{organization}/edit');

        $response->assertStatus(200);
    }

    /**
     * Update Method Test.
     *
     * @return void
     */
    public function testUpdateTest()
    {
        $response = $this->put('organizations/{organization}',[]);

        $response->assertStatus(200);
    }

    /**
     * Destroy Method Test.
     *
     * @return void
     */
    public function testDestroyTest()
    {
        $response = $this->delete('organizations/{organization}',[]);

        $response->assertStatus(200);
    }


}
