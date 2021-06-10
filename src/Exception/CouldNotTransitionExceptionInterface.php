<?php

declare(strict_types=1);

namespace Dhii\State\Exception;

use Dhii\State\TransitionAwareInterface;

/**
 * An exception thrown when a state machine fails to transition.
 *
 * @since [*next-version*]
 */
interface CouldNotTransitionExceptionInterface extends
    StateMachineExceptionInterface,
    TransitionAwareInterface
{
}
