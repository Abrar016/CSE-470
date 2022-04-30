<?php

namespace Tests\Unit;

use Tests\TestCase;

class CartControllerTest extends TestCase
{
    public function test_singleAddToCart()
    {
        $response=$this->call('post','/add-to-cart',[
            'slug'      =>  'abc',
            'quant'      =>  '2',
                ]);


        $response->assertStatus($response->status(),200);
    }
    public function cartUpdate()
    {
        $response=$this->call('post','/cart-update',[
            'user_id'=>'4',
            'product_id'=>'3',
            'order_id'=>'1',
            'quantity'=>'2',
            'amount'=>'2',
            'price'=>'1000',
            'status'=>''
                ]);


        $response->assertStatus($response->status(),200);
    }
    public function test_checkout()
        {
        $response=$this->get('/checkout');
        $response->assertStatus($response->status(),200);

        }
        public function cartDelete()
    {
        $response=$this->call('delete','/cart-delete/{id}',[
            'id'=>'4'
                ]);


        $response->assertStatus($response->status(),200);
    }
}
