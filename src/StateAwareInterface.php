<?php

namespace Dhii\State;

use Dhii\Util\String\StringableInterface as Stringable;

/**
 * Something that is aware of, and can provide, a state.
 *
 * @since [*next-version*]
 */
interface StateAwareInterface
{
    /**
     * Retrieves the state associated with this instance.
     *
     * @since [*next-version*]
     *
     * @return string|Stringable The state.
     */
    public function getState();
}
