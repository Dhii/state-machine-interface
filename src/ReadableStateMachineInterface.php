<?php

declare(strict_types=1);

namespace Dhii\State;

/**
 * Something that represents a state machine that exposes its current state.
 *
 * @since [*next-version*]
 *
 * @psalm-immutable
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
     * @return static The state machine with the new state.
     */
    public function transition($transition): StateMachineInterface;
}
