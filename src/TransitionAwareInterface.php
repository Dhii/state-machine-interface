<?php

namespace Dhii\State;

use Stringable;

/**
 * Something that is aware of, and can provide, a transition.
 *
 * @since [*next-version*]
 *
 * @psalm-import-type Transition from StateMachineInterface
 * @psalm-immutable
 */
interface TransitionAwareInterface
{
    /**
     * Retrieves the transition associated with this instance.
     *
     * @since [*next-version*]
     *
     * @return string|Stringable The transition.
     * @psalm-return Transition
     */
    public function getTransition();
}
