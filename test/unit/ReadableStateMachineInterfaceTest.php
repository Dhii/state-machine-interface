<?php

namespace Dhii\State\UnitTest;

use Xpmock\TestCase;
use Dhii\Machine\ReadableStateMachineInterface as TestSubject;

/**
 * Tests {@see TestSubject}.
 *
 * @since [*next-version*]
 */
class ReadableStateMachineInterfaceTest extends TestCase
{
    /**
     * The class name of the test subject.
     *
     * @since [*next-version*]
     */
    const TEST_SUBJECT_CLASSNAME = 'Dhii\State\ReadableStateMachineInterface';

    /**
     * Creates a new instance of the test subject.
     *
     * @since [*next-version*]
     *
     * @return TestSubject
     */
    public function createInstance()
    {
        $mock = $this->mock(static::TEST_SUBJECT_CLASSNAME)
            ->getStatus()
            ->getPossibleTransitions()
            ->transition()
            ->canTransition();

        return $mock->new();
    }

    /**
     * Tests whether a valid instance of the test subject can be created.
     *
     * @since [*next-version*]
     */
    public function testCanBeCreated()
    {
        $subject = $this->createInstance();

        $this->assertInstanceOf(
            static::TEST_SUBJECT_CLASSNAME,
            $subject,
            'A valid instance of the test subject could not be created.'
        );

        $this->assertInstanceOf(
            'Dhii\State\StateMachineInterface',
            $subject,
            'Test subject does not implement parent interface.'
        );

        $this->assertInstanceOf(
            'Dhii\State\StatusAwareInterface',
            $subject,
            'Test subject does not implement parent interface.'
        );
    }
}
