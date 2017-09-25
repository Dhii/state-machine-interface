<?php

namespace Dhii\Machine;

/**
 * Something that represents a state machine that exposes its current status and currently possible transitions.
 *
 * @since [*next-version*]
 */
interface ReadableStateMachineInterface extends
    StateMachineInterface,
    StatusAwareInterface,
    PossibleTransitionsAwareInterface
{
}
