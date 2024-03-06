<?php
require_once 'app.php';
use PHPUnit\Framework\TestCase;

class Test extends TestCase {
    public function testAddition() {
        $result = addition(3, 5);
        $this->assertEquals(8, $result);

        $result = addition(-2, 2);
        $this->assertEquals(0, $result);

        $result = addition(0, 0);
        $this->assertEquals(0, $result);
    }
}
?>
