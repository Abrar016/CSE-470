<?php

namespace Tests\Unit;

use Tests\TestCase;

class WishlistControllerTest extends TestCase
{
    public function test_wishlistDelete()
        {
        $response=$this->get('/wishlist-delete/{id}');
        $response->assertStatus($response->status(),200);

        }
        public function test_wishlist()
        {
        $response=$this->get('/wishlist/{slug}');
        $response->assertStatus($response->status(),200);

        }
}
