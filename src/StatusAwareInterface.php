<?php

namespace Dhii\Machine;

use Dhii\Util\String\StringableInterface as Stringable;

/**
 * Something that is aware of, and can provide, a status.
 *
 * @since [*next-version*]
 */
interface StatusAwareInterface
{
    /**
     * Retrieves the status associated with this instance.
     *
     * @since [*next-version*]
     *
     * @return string|Stringable The status.
     */
    public function getStatus();
}
