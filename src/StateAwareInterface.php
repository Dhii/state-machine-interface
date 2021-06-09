<?php

namespace Dhii\State;

use Stringable;

/**
 * Something that is aware of, and can provide, a state.
 *
 * @since [*next-version*]
 *
 * @psalm-immutable
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
