# Dhii - State Machine Interface
[![Continuous Integration](https://github.com/Dhii/state-machine-interface/actions/workflows/continuous-integration.yml/badge.svg)](https://github.com/Dhii/state-machine-interface/actions/workflows/continuous-integration.yml)

Interop contracts for immutable [State Machines][State Machine].

## Usage
The following example describes a scenario where e.g. a task may have a status, and it must progress
through a very specific workflow - one that is typical for project management systems.

When it is first created, it starts in the backlog, and one day it could be selected to be worked on,
or cancelled. A cancelled task can be later reconsidered, in which case it will go back into the
backlog. But if it is selected and is waiting to be worked on, it may either be deferred
back to the backlog, or have work on it started - or finished if it has no more work to be done on.
Work on a task may be paused, at which point it will once again be in waiting state.
This creates a rigid, predictable workflow with a loop:

 - A task can be selected or cancelled, and then re-selected, multiple times.
 - A task can be started and paused multiple times, until finished, deferred, or cancelled.

```php
use Dhii\State\Exception\CouldNotTransitionExceptionInterface;
use Dhii\State\ReadableStateMachineInterface;
use Dhii\State\StateMachineFactoryInterface;

$stateMap = [
    'backlog' => [
        'select',
        'cancel',
    ],
    'waiting' => [
        'defer',
        'start',
        'finish',
    ],
    'in_progress' => [
        'pause',
    ],
    'done' => [
        'reopen',
    ],
    'cancelled' => [
        'reconsider',
    ],
];
$transitionMap = [
    'select' => 'waiting',
    'cancel' => 'cancelled',
    'defer' => 'backlog',
    'start' => 'in_progress',
    'pause' => 'waiting',
    'finish' => 'done',
    'reopen' => 'backlog',
    'reconsider' => 'backlog',
];
$initialState = 'backlog';

/** @var $factory StateMachineFactoryInterface<ReadableStateMachineInterface> */
// Create a state machine using a two-part graph of states and transitions, with an initial state
$stateMachine = $factory->createStateMachineFromStateMap($stateMap, $transitionMap, $initialState);
echo $stateMachine->getState(); // 'backlog'

// The state machine instance itself is immutable
$stateMachine2 = $stateMachine->transition('select');
echo $stateMachine2->getState(); // 'waiting'
echo $stateMachine->getState(); // 'backlog'

try {
    $stateMachine3 = $stateMachine2->transition('cancel');
} catch (CouldNotTransitionExceptionInterface $e) {
    echo sprintf(
        'Cannot perform transition "%1$s" from state "%2$s"',
        $e->getTransition(), 
        $e->getStateMachine()->getState()
    );
}

if (!$stateMachine->canTransition('finish')) {
    echo 'Cannot do this: the original instance remained in the backlog,
     * and must first be selected and worked on before it can be finished.';
}
```

[Dhii]: https://github.com/Dhii/dhii
[State Machine]: https://en.wikipedia.org/wiki/Finite-state_machine
