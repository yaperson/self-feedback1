<?php

namespace App\Tests;

use PHPUnit\Framework\TestCase;

class SpamCheckerTest extends TestCase
{
    public function testSomething(): void
    {
        if (connection_status(200)) {
            $this->assertTrue(true);
        } else {
            $this->assertTrue(false);
        }
    }
}
