<?php

namespace Tests\Unit;

use App\Models\CustomerReceipt;
use Tests\TestCase;

class CustomerReceiptTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function test_create_customer_receipt()
    {
        $customer_receipt = new CustomerReceipt;
        $result = $customer_receipt->create_customer_receipt(1, 1);
        $this->assertTrue($result);
    }
}
