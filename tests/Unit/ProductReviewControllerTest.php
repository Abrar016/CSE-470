<?php

namespace Tests\Unit;

use Tests\TestCase;

class ProductReviewControllerTest extends TestCase
{
    public function test_edit()
    {
    $response=$this->get('/review/{review}/edit');
    $response->assertStatus($response->status(),200);

    }
    public function test_index()
        {
        $response=$this->get('/review');
        $response->assertStatus($response->status(),200);

        }
        public function test_create()
        {
        $response=$this->get('/review/create');
        $response->assertStatus($response->status(),200);

        }
        public function test_show()
        {
        $response=$this->get('/review/{shipping}');
        $response->assertStatus($response->status(),200);

        }
        public function test_store()
        {
            $response=$this->call('post','/review',[
                $data['product_id']='1',
                $data['user_id']='1',
                $data['status']='active',
                    ]);
    
            $response->assertStatus($response->status(),200);
        }
        public function test_update()
        {
            $response=$this->call('put','/review/{review}',[
                $data='user_id',
                $data='product_id',
                $data='rate',
                $data='review',
                $data='status'
                    ]);
    
    
            $response->assertStatus($response->status(),200);
        }
        public function test_destroy()
        {
            $response=$this->call('delete','/review/{review}',[
                '$id'=>'1'
                    ]);
    
    
            $response->assertStatus($response->status(),200);
        }
}
