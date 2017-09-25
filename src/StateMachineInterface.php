<?php

namespace Dhii\Machine;

use Dhii\Machine\Exception\CouldNotTransitionExceptionInterface;
use Dhii\Machine\Exception\StateMachineExceptionInterface;
use Dhii\Util\String\StringableInterface as Stringable;

/**
 * Something that represents a state machine.
 *
 * @since [*next-version*]
 */
interface StateMachineInterface extends StatusAwareInterface
{
    /**
     * Applies a transition.
     *
     * Implementations are NOT bound to returning the same state machine instance.
     * Depending on the same instance is not recommended.
     *
     * @since [*next-version*]
     *
     * @param string|Stringable $transition The transition code.
     *
     * @throws CouldNotTransitionExceptionInterface If the transition failed or was aborted.
     * @throws StateMachineExceptionInterface       If an error was encountered during transition.
     *
     * @return StateMachineInterface The state machine with the new state.
     */
    public function transition($transition);

    /**
     * Checks if a transition can be applied.
     *
     * This method does not guarantee that the transition will be successful.
     * It only indicates that a given transition can, at the very least, be attempted.
     * The transition, when applied, is still permitted to fail and throw an exception,
     * even if this method returns `true`.
     *
     * @since [*next-version*]
     *
     * @param string|Stringable $transition The transition to check.
     *
     * @return bool True if the transition is possible, false if not.
     */
    public function canTransition($transition);
}
