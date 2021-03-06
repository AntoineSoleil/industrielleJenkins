<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testBasicTest()
    {
        $response = $this->get('/login');
        $response->assertStatus(200);
    }
	public function testBasicTest2()
	{
		$data = [10, 20, 30];
		$result = array_sum($data);
		$this->assertEquals(60, $result); 
	}
}
