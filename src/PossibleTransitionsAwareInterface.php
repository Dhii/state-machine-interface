<?php

declare(strict_types=1);

namespace Dhii\State;

use Stringable;

/**
 * Something that is aware of, and can provide, a list of transitions possible given its current state.
 *
 * @since [*next-version*]
 *
 * @psalm-import-type Transition from StateMachineInterface
 * @psalm-immutable
 */
interface PossibleTransitionsAwareInterface
{
    /**
     * Gets the currently possible transitions.
     *
     * @since [*next-version*]
     *
     * @return iterable<string|Stringable> The currently possible transitions.
     * @psalm-return Transition
     */
    public function getPossibleTransitions(): iterable;
}
