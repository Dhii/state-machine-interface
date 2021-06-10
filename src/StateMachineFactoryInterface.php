<?php

declare(strict_types=1);

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
     * @param array<string|Stringable, iterable<string|Stringable>> $stateMap
     *      A map, where each state maps to a list of possible transitions
     * @psam-param array<State, iterable<Transition>> $stateMap
     * @param array<string|Stringable, string> $transitionMap
     *      A map, where each transition maps to its target state.
     * @psam-param array<Transition, State> $transitionMap
     * @param string|Stringable $initialState The initial state of this machine.
     * @psam-param State $initialState
     *
     * @return StateMachineInterface The created state machine.
     * @psalm-return SM
     *
     * @throws RuntimeException If could not create.
     * @throws Exception If problem creating.
     */
    public function createStateMachineFromStateMap(
        array $stateMap,
        array $transitionMap,
        $initialState
    ): StateMachineInterface;
}
