<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class ExampleTest extends TestCase
{
    /**
     * A basic functional test example.
     *
     * @return void
     */



    public function testPambo()
    {
        $this->visit('http://homestead.app/login');
        $this->type('pretxel100@gmail.com', 'email');
        $this->type('123456', 'password');
        $this->press('Login');
        $this->seePageIs('http://homestead.app/home');
        $this->see('You are logged in!');
    }
}
