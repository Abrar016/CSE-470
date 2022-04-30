<?php

namespace Tests\Unit;

use Tests\TestCase;

class LoginControllerTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function test_login()
    {
        $response=$this->call('post','/login',[
            'email'=>'admin1@gmail.com',
            'Password'=>'1212','status'=>'active','role'=>'admin'
                ]);


        $response->assertStatus($response->status(),200);
    }

    public function test_showLoginForm()
        {
        $response=$this->get('/login');
        $response->assertStatus(200);

        }
    public function test_logout()
        {
        $response=$this->post('/logout');
        $response->assertStatus(302);

        }
    }
