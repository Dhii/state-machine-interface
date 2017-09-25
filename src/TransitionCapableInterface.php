<?php

namespace Dhii\Machine;

use Dhii\Machine\Exception\CouldNotTransitionExceptionInterface;
use Dhii\Machine\Exception\StateMachineExceptionInterface;
use Dhii\Util\String\StringableInterface as Stringable;

/**
 * Something that can perform a transition to achieve to a new state.
 *
 * @since [*next-version*]
 */
interface TransitionCapableInterface
{
    /**
     * Applies a transitions.
     *
     * @since [*next-version*]
     *
     * @param string|Stringable $transition The transition code.
     *
     * @throws CouldNotTransitionExceptionInterface If the transition failed or was aborted.
     * @throws StateMachineExceptionInterface       If an error was encountered during transition.
     *
     * @return StatusAwareInterface The instance with the new state.
     */
    public function transition($transition);
}
