<?php

namespace tests\validate;

use PHPUnit\Framework\TestCase;

class Validate2Test extends TestCase {
    public function test_if_not_validate () {
        $this->assertFalse(false);
    }
}