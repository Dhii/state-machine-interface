<?php

namespace Dhii\Machine\Exception;

use Dhii\Exception\ThrowableInterface;
use Dhii\Machine\StateMachineAwareInterface;

/**
 * An exception thrown in relation to a state machine.
 *
 * @since [*next-version*]
 */
interface StateMachineExceptionInterface extends
    ThrowableInterface,
    StateMachineAwareInterface
{
}
