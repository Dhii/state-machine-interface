<?php

namespace Dhii\State;

use Dhii\Util\String\StringableInterface as Stringable;
use Traversable;

/**
 * Something that is aware of, and can provide, a list of transitions possible given its current state.
 *
 * @since [*next-version*]
 */
interface PossibleTransitionsAwareInterface
{
    /**
     * Gets the currently possible transitions.
     *
     * @since [*next-version*]
     *
     * @return string[]|Stringable[]|Traversable The currently possible transitions.
     */
    public function getPossibleTransitions();
}
