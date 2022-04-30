<?php

namespace Tests\Unit;

use Tests\TestCase;

class ShippingControllerTest extends TestCase
{
    public function test_edit()
    {
    $response=$this->get('/admin/shipping/{shipping}/edit');
    $response->assertStatus($response->status(),200);

    }
    public function test_index()
        {
        $response=$this->get('/admin/shipping');
        $response->assertStatus($response->status(),200);

        }
        public function test_create()
        {
        $response=$this->get('/admin/shipping/create');
        $response->assertStatus($response->status(),200);

        }
        public function test_show()
        {
        $response=$this->get('/admin/shipping/{shipping}');
        $response->assertStatus($response->status(),200);

        }
        public function test_store()
        {
            $response=$this->call('post','/admin/shipping',[
                'type'=>'abc',
                'price'=>'',
                'status'=>'active'
                    ]);
    
            $response->assertStatus($response->status(),200);
        }
        public function test_update()
        {
            $response=$this->call('put','/admin/shipping/{shipping}',[
                'type'=>'abc',
                'price'=>'',
                'status'=>'active'
                    ]);
    
    
            $response->assertStatus($response->status(),200);
        }
        public function test_destroy()
        {
            $response=$this->call('delete','/admin/shipping/{shipping}',[
                '$id'=>'1'
                    ]);
    
    
            $response->assertStatus($response->status(),200);
        }
}
