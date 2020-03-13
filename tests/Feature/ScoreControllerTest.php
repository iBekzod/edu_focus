<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;


class ScoreControllerTest extends TestCase
{
    /**
     * Index Method Test.
     *
     * @return void
     */
    public function testIndexTest()
    {
        $response = $this->get('scores');

        $response->assertStatus(200);
    }

    /**
     * Show Method Test.
     *
     * @return void
     */
    public function testShowTest()
    {
        $response = $this->get('scores/{score}');

        $response->assertStatus(200);
    }

    /**
     * Create Method Test.
     *
     * @return void
     */
    public function testCreateTest()
    {
        $response = $this->get('scores/create');

        $response->assertStatus(200);
    }

    /**
     * Store Method Test.
     *
     * @return void
     */
    public function testStoreTest()
    {
        $response = $this->post('scores',[]);

        $response->assertStatus(200);
    }

    /**
     * Edit Method Test.
     *
     * @return void
     */
    public function testEditTest()
    {
        $response = $this->get('scores/{score}/edit');

        $response->assertStatus(200);
    }

    /**
     * Update Method Test.
     *
     * @return void
     */
    public function testUpdateTest()
    {
        $response = $this->put('scores/{score}',[]);

        $response->assertStatus(200);
    }

    /**
     * Destroy Method Test.
     *
     * @return void
     */
    public function testDestroyTest()
    {
        $response = $this->delete('scores/{score}',[]);

        $response->assertStatus(200);
    }


}
