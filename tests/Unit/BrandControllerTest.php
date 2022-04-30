<?php

namespace Tests\Unit;

use Tests\TestCase;

class BrandControllerTest extends TestCase
{
    public function test_edit()
    {
    $response=$this->get('/admin/brand/{brand}/edit');
    $response->assertStatus($response->status(),200);

    }
    public function test_index()
        {
        $response=$this->get('/admin/brand');
        $response->assertStatus($response->status(),200);

        }
        public function test_create()
        {
        $response=$this->get('/admin/brand/create');
        $response->assertStatus($response->status(),200);

        }
        public function test_show()
        {
        $response=$this->get('/admin/brand/{brand}');
        $response->assertStatus($response->status(),200);

        }
        public function test_store()
        {
            $response=$this->call('post','/admin/brand',[
                'title'=>'avc',
                'slug'=>'avc',
                'status'=>'active'
                    ]);
    
    
            $response->assertStatus($response->status(),200);
        }
        public function test_update()
        {
            $response=$this->call('put','/admin/brand/{brand}',[
                'title'=>'avc',
                'slug'=>'avc',
                    ]);
    
    
            $response->assertStatus($response->status(),200);
        }
        public function test_destroy()
        {
            $response=$this->call('delete','/admin/brand/{brand}',[
                'title'=>'avc',
                'slug'=>'avc',
                'status'=>'active'
                    ]);
    
    
            $response->assertStatus($response->status(),200);
        }
        
        
}
