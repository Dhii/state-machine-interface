<?php

namespace Dhii\Machine\Exception;

use Dhii\Machine\TransitionAwareInterface;

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
