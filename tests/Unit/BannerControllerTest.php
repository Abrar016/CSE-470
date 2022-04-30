<?php

namespace Tests\Unit;

use Tests\TestCase;

class BannerControllerTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function test_destroy()
    {
        $response=$this->call('delete','/admin/banner/{banner}',[
            'title'=>'abc',
            'slug'=>'abs',
            'description'=>'abc',
            'photo'=>'image.jpg',
            'status'=>'active'
                ]);


        $response->assertStatus($response->status(),200);
    }
    public function test_update()
    {
        $response=$this->call('put','/admin/banner/{banner}',[
            'title'=>'abc',
            'description'=>'abc',
            'photo'=>'abc',
            'status'=>'active',
                ]);


        $response->assertStatus($response->status(),200);
    }
    public function test_index()
    {
    $response=$this->get('/admin/banner');
    $response->assertStatus($response->status(),200);
    }
    public function test_create()
    {
    $response=$this->get('/admin/banner/create');
    $response->assertStatus($response->status(),200);
    }
    public function test_show()
    {
    $response=$this->get('/admin/banner/{banner}');
    $response->assertStatus($response->status(),200);
    }
    public function test_edit()
    {
    $response=$this->get('/admin/banner/{banner}/edit');
    $response->assertStatus($response->status(),200);
    }
}
