<?php

namespace App\Tests;

use PHPUnit\Framework\TestCase;

class MyTest2Test extends TestCase
{
    public function testSomething(): void
    {
        if (http_response_code(200)) {
            $this->assertTrue(true);
        } else {
            $this->assertTrue(false);
            
        }
    }
}
