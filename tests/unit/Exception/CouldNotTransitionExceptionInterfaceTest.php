<?php

namespace Dhii\State\UnitTest\Exception;

use Dhii\State\Exception\CouldNotTransitionExceptionInterface as Subject;
use Dhii\State\Exception\StateMachineExceptionInterface;
use Dhii\State\TransitionAwareInterface;
use PHPUnit\Framework\MockObject\MockObject;
use PHPUnit\Framework\TestCase;
use Throwable;

/**
 * Tests {@see Subject}.
 *
 * @since [*next-version*]
 */
class CouldNotTransitionExceptionInterfaceTest extends TestCase
{
    /**
     * Creates a new instance of the test subject.
     *
     * @return Subject|MockObject
     * @since [*next-version*]
     *
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

        $this->assertInstanceOf(
            Throwable::class,
            $subject,
            'Test subject does not implement parent interface.'
        );

        $this->assertInstanceOf(
            StateMachineExceptionInterface::class,
            $subject,
            'Test subject does not implement parent interface.'
        );

        $this->assertInstanceOf(
            TransitionAwareInterface::class,
            $subject,
            'Test subject does not implement parent interface.'
        );
    }
}
