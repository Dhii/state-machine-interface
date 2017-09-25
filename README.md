# Dhii - State Machine Interface

[![Build Status](https://travis-ci.org/dhii/machine-state-machine-interface.svg?branch=master)](https://travis-ci.org/dhii/machine-state-machine-interface)
[![Code Climate](https://codeclimate.com/github/dhii/machine-state-machine-interface/badges/gpa.svg)](https://codeclimate.com/github/dhii/machine-state-machine-interface)
[![Test Coverage](https://codeclimate.com/github/dhii/machine-state-machine-interface/badges/coverage.svg)](https://codeclimate.com/github/dhii/machine-state-machine-interface/coverage)
[![Latest Stable Version](https://poser.pugx.org/dhii/machine-state-machine-interface/version)](https://packagist.org/packages/dhii/machine-state-machine-interface)
[![This package complies with Dhii standards](https://img.shields.io/badge/Dhii-Compliant-green.svg?style=flat-square)][Dhii]

Interfaces for state machines.

This package aims to provide a standard set of interfaces for working with state machines.
For clarity and completion, some terminology must first the defined:

**Status**

A status is a key or code that identifies a state.
State machines will often have a status key for every possible state as well as a current status.

**State**

A state is a conceptual "frame" in time for a given object.
Unlike a status which is simply a key or code, a state typically holds all information about a machine or object
at a given status or point in time.

**Transition**

A transition is a key or code that represents an operation that can be performed on a machine or object.
This operation can influence that subject's status and state.

[Dhii]: https://github.com/Dhii/dhii
