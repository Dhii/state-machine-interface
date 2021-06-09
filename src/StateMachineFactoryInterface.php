<?php

namespace Dhii\State;

/**
 * Something that can create new state machine instances.
 *
 * @since [*next-version*]
 */
interface StateMachineFactoryInterface
{
    /**
     * {@inheritdoc}
     *
     * @since [*next-version*]
     *
     * @return StateMachineInterface The created state machine.
     */
    public function make($config = null);
}
