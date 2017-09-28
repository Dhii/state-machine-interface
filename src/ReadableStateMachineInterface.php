<?php

namespace Dhii\State;

/**
 * Something that represents a state machine that exposes its current state.
 *
 * @since [*next-version*]
 */
interface ReadableStateMachineInterface extends
    StateMachineInterface,
    StateAwareInterface
{
    /**
     * {@inheritdoc}
     *
     * @since [*next-version*]
     *
     * @return ReadableStateMachineInterface The state machine with the new state.
     */
    public function transition($transition);
}
