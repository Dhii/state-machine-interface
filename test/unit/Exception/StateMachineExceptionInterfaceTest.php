<?php

namespace Dhii\Machine\UnitTest;

use Xpmock\TestCase;
use Dhii\Machine\Exception\StateMachineExceptionInterface as TestSubject;

/**
 * Tests {@see TestSubject}.
 *
 * @since [*next-version*]
 */
class StateMachineExceptionInterfaceTest extends TestCase
{
    /**
     * The class name of the test subject.
     *
     * @since [*next-version*]
     */
    const TEST_SUBJECT_CLASSNAME = 'Dhii\Machine\Exception\StateMachineExceptionInterface';

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
            ->getStateMachine()
            ->getMessage()
            ->getCode()
            ->getPrevious()
            ->getLine()
            ->getFile()
            ->getTrace()
            ->getTraceAsString()
            ->__toString();

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
            'Dhii\Exception\ThrowableInterface',
            $subject,
            'Test subject does not implement parent interface.'
        );

        $this->assertInstanceOf(
            'Dhii\Machine\StateMachineAwareInterface',
            $subject,
            'Test subject does not implement parent interface.'
        );
    }
}
