<?php

namespace Tests\Unit;

use Tests\TestCase;

class OrderControllerTest extends TestCase
{
    public function test_index()
    {
    $response=$this->get('/admin/order');
    $response->assertStatus($response->status(),200);
    }
   
    public function test_create()
    {
    $response=$this->get('/admin/order/create');
    $response->assertStatus($response->status(),200);
    }
    public function test_show()
    {
    $response=$this->get('/admin/order/{order}');
    $response->assertStatus($response->status(),200);
    }
    public function test_edit()
    {
    $response=$this->get('/admin/order/{order}/edit');
    $response->assertStatus($response->status(),200);
    }
    public function test_destroy()
        {
            $response=$this->call('delete','/admin/order/{order}',[
                'id'=>'2'
                    ]);
    
    
            $response->assertStatus($response->status(),200);
        }
        public function test_update()
        {
            $response=$this->call('put','/admin/order/{order}',[
                'id'=>'2',
                'status'=>'delivered'
                    ]);
    
    
            $response->assertStatus($response->status(),200);
        }
}
