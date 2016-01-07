<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class RoutesTest extends TestCase
{
    public function testLandingPage()
    {
        $response = $this->call('GET', '/');
        $this->assertEquals(200, $response->status());
    }

    public function testUserLogin()
    {
        Session::start();
        $params = [
            '_token' => csrf_token(),
            'email'     => 'florence.okosun@andela.com',
            'password'  => 'pass'
        ];

        $response = $this->call('POST', '/auth/login', $params);
        $this->assertEquals(302, $response->status());
    }

    public function testUserLogout()
    {
        Session::start();
        $params = [
            '_token' => csrf_token()
        ];

        $response = $this->call('GET', '/auth/logout', $params);
        $this->assertEquals(302, $response->status());
    }
}
