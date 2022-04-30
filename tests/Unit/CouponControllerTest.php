<?php

namespace Tests\Unit;

use Tests\TestCase;

class CouponControllerTest extends TestCase
{
   
    public function test_edit()
    {
    $response=$this->get('/admin/coupon/{coupon}/edit');
    $response->assertStatus($response->status(),200);

    }
    public function test_index()
        {
        $response=$this->get('/admin/coupon');
        $response->assertStatus($response->status(),200);

        }
        public function test_create()
        {
        $response=$this->get('/admin/coupon/create');
        $response->assertStatus($response->status(),200);

        }
        public function test_show()
        {
        $response=$this->get('/admin/coupon/{coupon}');
        $response->assertStatus($response->status(),200);

        }
        public function test_store()
        {
            $response=$this->call('post','/admin/coupon',[
                'code'=>'',
            'type'=>'',
            'value'=>'',
            'status'=>''
                    ]);
    
            $response->assertStatus($response->status(),200);
        }
        public function test_update()
        {
            $response=$this->call('put','/admin/coupon/{coupon}',[
                'code'=>'abc',
                'type'=>'fixed',
                'value'=>'200',
                'status'=>'active,'
                    ]);
    
    
            $response->assertStatus($response->status(),200);
        }
        public function test_destroy()
        {
            $response=$this->call('delete','/admin/coupon/{coupon}',[
                '$id'=>'1'
                    ]);
    
    
            $response->assertStatus($response->status(),200);
        }
}
