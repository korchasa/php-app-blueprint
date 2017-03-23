<?php namespace App\Tests;

use PHPUnit\Framework\TestCase;
use App\Example;

class ExampleTest extends TestCase
{
    public function testHello()
    {
        $this->assertEquals('world', (new Example)->hello());
    }
}
