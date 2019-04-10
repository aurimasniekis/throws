<?php

declare(strict_types=1);

namespace Throws;

use Throwable;

/**
 * @param Throwable $exception
 *
 * @throws Throwable
 */
function thr(Throwable $exception)
{
    return Helper::thr($exception);
}

function thrException(...$args)
{
    return Helper::thrException(...$args);
}

function thrBadFunctionCallException(...$args)
{
    return Helper::thrBadFunctionCallException(...$args);
}

function thrBadMethodCallException(...$args)
{
    return Helper::thrBadMethodCallException(...$args);
}

function thrDomainException(...$args)
{
    return Helper::thrDomainException(...$args);
}

function thrInvalidArgumentException(...$args)
{
    return Helper::thrInvalidArgumentException(...$args);
}

function thrLengthException(...$args)
{
    return Helper::thrLengthException(...$args);
}

function thrLogicException(...$args)
{
    return Helper::thrLogicException(...$args);
}

function thrOutOfBoundsException(...$args)
{
    return Helper::thrOutOfBoundsException(...$args);
}

function thrOutOfRangeException(...$args)
{
    return Helper::thrOutOfRangeException(...$args);
}

function thrOverflowException(...$args)
{
    return Helper::thrOverflowException(...$args);
}

function thrRangeException(...$args)
{
    return Helper::thrRangeException(...$args);
}

function thrRuntimeException(...$args)
{
    return Helper::thrRuntimeException(...$args);
}

function thrUnderflowException(...$args)
{
    return Helper::thrUnderflowException(...$args);
}

function thrUnexpectedValueException(...$args)
{
    return Helper::thrUnexpectedValueException(...$args);
}

function thrErrorException(...$args)
{
    return Helper::thrErrorException(...$args);
}

function thrError(...$args)
{
    return Helper::thrError(...$args);
}

function thrArgumentCountError(...$args)
{
    return Helper::thrArgumentCountError(...$args);
}

function thrArithmeticError(...$args)
{
    return Helper::thrArithmeticError(...$args);
}

function thrAssertionError(...$args)
{
    return Helper::thrAssertionError(...$args);
}

function thrDivisionByZeroError(...$args)
{
    return Helper::thrDivisionByZeroError(...$args);
}

function thrCompileError(...$args)
{
    return Helper::thrCompileError(...$args);
}

function thrParseError(...$args)
{
    return Helper::thrParseError(...$args);
}

function thrTypeError(...$args)
{
    return Helper::thrTypeError(...$args);
}
