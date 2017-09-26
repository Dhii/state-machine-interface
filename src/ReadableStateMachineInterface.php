<?php

namespace Dhii\Machine;

/**
 * Something that represents a state machine that exposes its current status and currently possible transitions.
 *
 * @since [*next-version*]
 */
interface ReadableStateMachineInterface extends
    StateMachineInterface,
    StatusAwareInterface
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
