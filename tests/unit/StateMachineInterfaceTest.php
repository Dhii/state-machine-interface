<?php

namespace Dhii\State\UnitTest;

use Dhii\State\StateMachineInterface as Subject;
use PHPUnit\Framework\MockObject\MockObject;
use PHPUnit\Framework\TestCase;

/**
 * Tests {@see Subject}.
 *
 * @since [*next-version*]
 */
class StateMachineInterfaceTest extends TestCase
{
    /**
     * Creates a new instance of the test subject.
     *
     * @return Subject|MockObject
     * @since [*next-version*]
     */
    public function createSubject(): Subject
    {
        $mock = $this->getMockBuilder(Subject::class)
            ->getMockForAbstractClass();

        return $mock;
    }

    /**
     * Tests whether a valid instance of the test subject can be created.
     *
     * @since [*next-version*]
     */
    public function testCanBeCreated(): void
    {
        $subject = $this->createSubject();

        $this->assertInstanceOf(
            Subject::class,
            $subject,
            'A valid instance of the test subject could not be created.'
        );
    }
}
