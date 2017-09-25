<?php

namespace Dhii\Machine\Exception;

use Dhii\Machine\TransitionAwareInterface;

/**
 * Description.
 *
 * @since [*next-version*]
 */
interface CouldNotTransitionExceptionInterface extends
    StateMachineExceptionInterface,
    TransitionAwareInterface
{
}
