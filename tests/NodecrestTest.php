<?php
/**
 * Tests for nodeCrest
 */

use PHPUnit\Framework\TestCase;
use Nodecrest\Nodecrest;

class NodecrestTest extends TestCase {
    private Nodecrest $instance;

    protected function setUp(): void {
        $this->instance = new Nodecrest(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Nodecrest::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
