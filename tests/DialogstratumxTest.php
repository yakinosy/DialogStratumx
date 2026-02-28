<?php
/**
 * Tests for DialogStratumx
 */

use PHPUnit\Framework\TestCase;
use Dialogstratumx\Dialogstratumx;

class DialogstratumxTest extends TestCase {
    private Dialogstratumx $instance;

    protected function setUp(): void {
        $this->instance = new Dialogstratumx(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Dialogstratumx::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
