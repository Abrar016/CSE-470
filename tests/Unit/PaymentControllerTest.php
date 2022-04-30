<?php

namespace Tests\Unit;

use Tests\TestCase;

class PaymentControllerTest extends TestCase
{
    public function test_payment()
    {
    $response=$this->get('/payment');
    $response->assertStatus($response->status(),200);

    }
    public function test_paymentSuccess()
    {
    $response=$this->get('/payment/success');
    $response->assertStatus($response->status(),200);

    }
}
