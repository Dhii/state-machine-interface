<?php

namespace Dhii\State\Exception;

use Dhii\Exception\ThrowableInterface;
use Dhii\State\StateMachineAwareInterface;

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
