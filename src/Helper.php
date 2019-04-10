<?php

declare(strict_types=1);

namespace Throws;

use ArgumentCountError;
use ArithmeticError;
use AssertionError;
use BadFunctionCallException;
use BadMethodCallException;
use CompileError;
use DivisionByZeroError;
use DomainException;
use Error;
use ErrorException;
use Exception;
use InvalidArgumentException;
use LengthException;
use LogicException;
use OutOfBoundsException;
use OutOfRangeException;
use OverflowException;
use ParseError;
use RangeException;
use RuntimeException;
use Throwable;
use TypeError;
use UnderflowException;
use UnexpectedValueException;

class Helper
{
    /**
     * @param Throwable $exception
     *
     * @throws Throwable
     */
    public static function thr(Throwable $exception): void
    {
        throw $exception;
    }

    public static function thrException(...$args)
    {
        return static::throwFormattedException(Exception::class, ...$args);
    }

    public static function thrBadFunctionCallException(...$args)
    {
        return static::throwFormattedException(BadFunctionCallException::class, ...$args);
    }

    public static function thrBadMethodCallException(...$args)
    {
        return static::throwFormattedException(BadMethodCallException::class, ...$args);
    }

    public static function thrDomainException(...$args)
    {
        return static::throwFormattedException(DomainException::class, ...$args);
    }

    public static function thrInvalidArgumentException(...$args)
    {
        return static::throwFormattedException(InvalidArgumentException::class, ...$args);
    }

    public static function thrLengthException(...$args)
    {
        return static::throwFormattedException(LengthException::class, ...$args);
    }

    public static function thrLogicException(...$args)
    {
        return static::throwFormattedException(LogicException::class, ...$args);
    }

    public static function thrOutOfBoundsException(...$args)
    {
        return static::throwFormattedException(OutOfBoundsException::class, ...$args);
    }

    public static function thrOutOfRangeException(...$args)
    {
        return static::throwFormattedException(OutOfRangeException::class, ...$args);
    }

    public static function thrOverflowException(...$args)
    {
        return static::throwFormattedException(OverflowException::class, ...$args);
    }

    public static function thrRangeException(...$args)
    {
        return static::throwFormattedException(RangeException::class, ...$args);
    }

    public static function thrRuntimeException(...$args)
    {
        return static::throwFormattedException(RuntimeException::class, ...$args);
    }

    public static function thrUnderflowException(...$args)
    {
        return static::throwFormattedException(UnderflowException::class, ...$args);
    }

    public static function thrUnexpectedValueException(...$args)
    {
        return static::throwFormattedException(UnexpectedValueException::class, ...$args);
    }

    public static function thrErrorException(...$args)
    {
        return static::throwFormattedException(ErrorException::class, ...$args);
    }

    public static function thrError(...$args)
    {
        return static::throwFormattedException(Error::class, ...$args);
    }

    public static function thrArgumentCountError(...$args)
    {
        return static::throwFormattedException(ArgumentCountError::class, ...$args);
    }

    public static function thrArithmeticError(...$args)
    {
        return static::throwFormattedException(ArithmeticError::class, ...$args);
    }

    public static function thrAssertionError(...$args)
    {
        return static::throwFormattedException(AssertionError::class, ...$args);
    }

    public static function thrDivisionByZeroError(...$args)
    {
        return static::throwFormattedException(DivisionByZeroError::class, ...$args);
    }

    public static function thrCompileError(...$args)
    {
        return static::throwFormattedException(CompileError::class, ...$args);
    }

    public static function thrParseError(...$args)
    {
        return static::throwFormattedException(ParseError::class, ...$args);
    }

    public static function thrTypeError(...$args)
    {
        return static::throwFormattedException(TypeError::class, ...$args);
    }

    private static function throwFormattedException(string $class, ...$args): void
    {
        $exceptionArgs = [];
        if (count($args) > 0) {
            $format = array_shift($args);

            $exceptionArgs[] = sprintf($format, ...$args);
        }

        throw new $class(...$exceptionArgs);
    }
}
