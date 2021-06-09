<?php

namespace Dhii\State;

use Exception;
use RuntimeException;
use Stringable;

/**
 * Something that can create new state machine instances.
 *
 * @since [*next-version*]
 *
 * @psalm-import-type State of StateMachineInterface
 * @psalm-import-type Transition of StateMachineInterface
 * @template SM of StateMachineInterface
 */
interface StateMachineFactoryInterface
{
    /**
     * Creates a new state machine.
     *
     * @since [*next-version*]
     *
     * @param array<string|Stringable, iterable<string|Stringable>> $map
     * @psam-param array<string|Stringable, iterable<Transition>> $map
     * @param string|Stringable $initialState
     * @psam-param  State $initialState
     *
     * @return StateMachineInterface The created state machine.
     * @psalm-return SM
     *
     * @throws RuntimeException If could not create.
     * @throws Exception If problem creating.
     */
    public function createStateMachineFromStateMap(array $map, $initialState): StateMachineInterface;
}
