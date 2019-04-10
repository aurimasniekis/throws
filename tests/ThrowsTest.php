<?php

declare(strict_types=1);

namespace Throws\Tests;

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
use PHPUnit\Framework\TestCase;
use RangeException;
use RuntimeException;
use function Throws\thr;
use function Throws\thrException;
use TypeError;
use UnderflowException;
use UnexpectedValueException;

class ThrowsTest extends TestCase
{
    public function testThrFunction(): void
    {
        $this->expectException(Exception::class);
        $this->expectExceptionMessage('FooBar');

        thr(new Exception('FooBar'));
    }

    public function testNullCoalescingThrowException(): void
    {
        $this->expectException(Exception::class);
        $this->expectExceptionMessage('FooBar');

        $array = [];

        $foo = $array['foo'] ?? thr(new Exception('FooBar'));
    }

    public function testOperators(): void
    {
        $this->expectException(Exception::class);
        $this->expectExceptionMessage('FooBar');

        false || thr(new Exception('FooBar'));
    }

    public function testShortConditions(): void
    {
        $this->expectException(Exception::class);
        $this->expectExceptionMessage('FooBar');

        $foo = false ?: thr(new Exception('FooBar'));
    }

    public function testStringFormat(): void
    {
        $this->expectException(Exception::class);
        $this->expectExceptionMessage('Foo "bar"');

        thrException('Foo "%s"', 'bar');
    }

    public function testExceptionWithoutStringFormat(): void
    {
        $this->expectException(Exception::class);
        $this->expectExceptionMessage('');

        thrException();
    }

    public function dataTestExceptionTypes(): array
    {
        $out = [];

        $out[] = ['thrBadFunctionCallException', BadFunctionCallException::class];
        $out[] = ['thrBadMethodCallException', BadMethodCallException::class];
        $out[] = ['thrDomainException', DomainException::class];
        $out[] = ['thrInvalidArgumentException', InvalidArgumentException::class];
        $out[] = ['thrLengthException', LengthException::class];
        $out[] = ['thrLogicException', LogicException::class];
        $out[] = ['thrOutOfBoundsException', OutOfBoundsException::class];
        $out[] = ['thrOutOfRangeException', OutOfRangeException::class];
        $out[] = ['thrOverflowException', OverflowException::class];
        $out[] = ['thrRangeException', RangeException::class];
        $out[] = ['thrRuntimeException', RuntimeException::class];
        $out[] = ['thrUnderflowException', UnderflowException::class];
        $out[] = ['thrUnexpectedValueException', UnexpectedValueException::class];
        $out[] = ['thrErrorException', ErrorException::class];
        $out[] = ['thrError', Error::class];
        $out[] = ['thrArgumentCountError', ArgumentCountError::class];
        $out[] = ['thrArithmeticError', ArithmeticError::class];
        $out[] = ['thrAssertionError', AssertionError::class];
        $out[] = ['thrDivisionByZeroError', DivisionByZeroError::class];
        $out[] = ['thrCompileError', CompileError::class];
        $out[] = ['thrParseError', ParseError::class];
        $out[] = ['thrTypeError', TypeError::class];

        return $out;
    }

    /**
     * @param string $methodName
     * @param string $exceptionClass
     *
     * @dataProvider  dataTestExceptionTypes
     */
    public function testExceptionType(string $methodName, string $exceptionClass): void
    {
        $this->expectException($exceptionClass);
        $this->expectExceptionMessage('Foo "Bar"');

        call_user_func('\\Throws\\' . $methodName, 'Foo "%s"', 'Bar');
    }
}
