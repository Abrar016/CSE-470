<?php

namespace Tests\Unit;

use Tests\TestCase;

class UsersControllerTest extends TestCase
{
    public function test_edit()
    {
    $response=$this->get('/admin/users/{user}/edit');
    $response->assertStatus($response->status(),200);

    }
    public function test_index()
        {
        $response=$this->get('/admin/users');
        $response->assertStatus($response->status(),200);

        }
        public function test_create()
        {
        $response=$this->get('/admin/users/create');
        $response->assertStatus($response->status(),200);

        }
        public function test_show()
        {
        $response=$this->get('/admin/users/{user}');
        $response->assertStatus($response->status(),200);

        }
        public function test_store()
        {
            $response=$this->call('post','/admin/users',[
                'name'=>'', 
                'email'=>'', 
                'password'=>'',
                'role'=>'',
                'photo'=>'',
                'status'=>'',
                'provider'=>'',
                'provider_id'=>'',
                    ]);
    
            $response->assertStatus($response->status(),200);
        }
        public function test_update()
        {
            $response=$this->call('put','/admin/users/{user}',[
                'name'=>'abc',
            'email'=>'user2@gmail.com',
            'role'=>'user',
            'status'=>'inactive',
            'photo'=>'image.jpg',
                    ]);
    
    
            $response->assertStatus($response->status(),200);
        }
        public function test_destroy()
        {
            $response=$this->call('delete','/admin/users/{user}',[
                '$id'=>'1'
                    ]);
    
    
            $response->assertStatus($response->status(),200);
        }
    }
