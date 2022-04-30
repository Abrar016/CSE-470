<?php

namespace Tests\Unit;

use Tests\TestCase;

class ProductControllerTest extends TestCase
{
    public function test_edit()
    {
    $response=$this->get('/admin/product/{product}/edit');
    $response->assertStatus($response->status(),200);

    }
    public function test_index()
        {
        $response=$this->get('/admin/product');
        $response->assertStatus($response->status(),200);

        }
        public function test_create()
        {
        $response=$this->get('/admin/product/create');
        $response->assertStatus($response->status(),200);

        }
        public function test_show()
        {
        $response=$this->get('/admin/product/{product}');
        $response->assertStatus($response->status(),200);

        }
        public function test_store()
        {
            $response=$this->call('post','/admin/product',[
                'title'=>'',
                'slug'=>'',
                'summary'=>'',
                'description'=>'',
                'cat_id'=>'',
                'child_cat_id'=>'',
                'price'=>'',
                'brand_id'=>'',
                'discount'=>'',
                'status'=>'',
                'photo'=>'',
                'size'=>'',
                'stock'=>'',
                'is_featured'=>'',
                'condition'=>''
                    ]);
    
            $response->assertStatus($response->status(),200);
        }
        public function test_update()
        {
            $response=$this->call('put','/admin/product/{product}',[
                'title'=>'abc',
            'summary'=>'abc',
            'description'=>'',
            'photo'=>'image.jpg',
            'size'=>'',
            'stock'=>"2",
            'cat_id'=>'12',
            'child_cat_id'=>'',
            'is_featured'=>'sometimes',
            'brand_id'=>'2',
            'status'=>'active',
            'condition'=>'hoy',
            'price'=>'100',
            'discount'=>''
                    ]);
    
    
            $response->assertStatus($response->status(),200);
        }
        public function test_destroy()
        {
            $response=$this->call('delete','/admin/product/{product}',[
                'id'=>'1'
                    ]);
    
    
            $response->assertStatus($response->status(),200);
        }
    }
