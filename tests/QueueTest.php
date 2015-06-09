<?php
namespace ED3\Test;
use PHPUnit_Framework_TestCase;
use ED3\Queue;
class QueueTest extends PHPUnit_Framework_TestCase
{
    function testCreateQueue()
    {
        $queue = new Queue();
        $this->assertNotNull($queue); 
    } 
    function testTwoQueuesHaveDistinctNames()
    {
        $queue = new Queue();
        $this->assertNotNull($queue); 
    } 
}
