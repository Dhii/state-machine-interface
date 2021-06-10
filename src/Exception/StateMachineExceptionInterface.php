<?php

declare(strict_types=1);

namespace Dhii\State\Exception;

use Throwable;
use Dhii\State\StateMachineAwareInterface;

/**
 * An exception thrown in relation to a state machine.
 *
 * @since [*next-version*]
 */
interface StateMachineExceptionInterface extends
    Throwable,
    StateMachineAwareInterface
{
}
