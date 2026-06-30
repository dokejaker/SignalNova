<?php
/**
 * Tests for SignalNova
 */

use PHPUnit\Framework\TestCase;
use Signalnova\Signalnova;

class SignalnovaTest extends TestCase {
    private Signalnova $instance;

    protected function setUp(): void {
        $this->instance = new Signalnova(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Signalnova::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
