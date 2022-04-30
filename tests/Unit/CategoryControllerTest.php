<?php

namespace Tests\Unit;

use Tests\TestCase;

class CategoryControllerTest extends TestCase
{
    public function test_index()
    {
    $response=$this->get('/admin/category');
    $response->assertStatus($response->status(),200);

    }
    public function test_create()
    {
    $response=$this->get('/admin/category/create');
    $response->assertStatus($response->status(),200);

    }
    public function test_show()
    {
    $response=$this->get('/admin/category/{category}');
    $response->assertStatus($response->status(),200);

    }
    public function test_showCategory()
    {
    $response=$this->get('/admin/category/{category}');
    $response->assertStatus($response->status(),200);

    }
    public function test_edit()
    {
    $response=$this->get('/admin/category/{category}/edit');
    $response->assertStatus($response->status(),200);

    }
    public function test_storeCategory()
    {
        $response=$this->call('post','/admin/category',[
            'title'=>'abc',
            'summary'=>'abc',
            'photo'=>'',
            'status'=>'active',
            'is_parent'=>'sometimes',
            'parent_id'=>'',
                ]);
            }
    public function test_updateCategory()
            {
                $response=$this->call('put','/admin/category/{category}',[
                    'title'=>'abc',
                    'summary'=>'abc',
                    'photo'=>'',
                    'status'=>'active',
                    'is_parent'=>'sometimes',
                    'parent_id'=>'',
                        ]);
                    }
                    public function test_destroyCategory()
                    {
                        $response=$this->call('delete','/admin/category/{category}',[
                        
                            'id'=>'1',
                                ]);
                            }
}
