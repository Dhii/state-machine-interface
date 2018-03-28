<?php

namespace Dhii\State;

use Dhii\Factory\FactoryInterface;

/**
 * Something that can create new state machine instances.
 *
 * @since [*next-version*]
 */
interface StateMachineFactoryInterface extends FactoryInterface
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
