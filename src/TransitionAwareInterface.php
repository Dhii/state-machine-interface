<?php

namespace Dhii\State;

use Dhii\Util\String\StringableInterface as Stringable;

/**
 * Something that is aware of, and can provide, a transition.
 *
 * @since [*next-version*]
 */
interface TransitionAwareInterface
{
    /**
     * Retrieves the transition associated with this instance.
     *
     * @since [*next-version*]
     *
     * @return string|Stringable The transition.
     */
    public function getTransition();
}
