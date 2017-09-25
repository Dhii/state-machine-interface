<?php

namespace Dhii\Machine;

/**
 * Something that is aware of, and can provide, a state machine.
 *
 * @since [*next-version*]
 */
interface StateMachineAwareInterface
{
    /**
     * Retrieves the state machine associated with this instance.
     *
     * @since [*next-version*]
     *
     * @return StateMachineInterface|null The state machine instance, if any.
     */
    public function getStateMachine();
}
