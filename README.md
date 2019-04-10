# Throws

[![Latest Version on Packagist][ico-version]][link-packagist]
[![Software License][ico-license]](LICENSE)
[![Build Status][ico-travis]][link-travis]
[![Coverage Status][ico-scrutinizer]][link-scrutinizer]
[![Quality Score][ico-code-quality]][link-code-quality]
[![Total Downloads][ico-downloads]][link-downloads]

PHP Library which provides functions which **Throws** exception

## Install

Via Composer

```bash
$ composer require aurimasniekis/throws
```

## Usage

It is pretty simple all the functions are defined under `Throws\\` namespace.

Simplest function is `thr` which accept exception as argument and just throws it:

```php
<?php

use function Throws\thr;

thr(new Exception("FooBar"));
```

or u can throw specific exception with formatted string directly:

```php
<?php

use function Throws\thrException;

thrException('Oh now "%s" error occurred', 'Big Error'); 
```

#### Available methods:

```php
thr(new Exception('FooBar'));

thrBadFunctionCallException('FooBar');

thrBadMethodCallException('FooBar');

thrDomainException('FooBar');

thrInvalidArgumentException('FooBar');

thrLengthException('FooBar');

thrLogicException('FooBar');

thrOutOfBoundsException('FooBar');

thrOutOfRangeException('FooBar');

thrOverflowException('FooBar');

thrRangeException('FooBar');

thrRuntimeException('FooBar');

thrUnderflowException('FooBar');

thrUnexpectedValueException('FooBar');

thrErrorException('FooBar');

thrError('FooBar');

thrArgumentCountError('FooBar');

thrArithmeticError('FooBar');

thrAssertionError('FooBar');

thrDivisionByZeroError('FooBar');

thrCompileError('FooBar');

thrParseError('FooBar');

thrTypeError('FooBar');
```

## Why?

You probably asking why this kind of library is even needed? Here is couple of examples:

```php
// Instead of this
if ($foo !== 'bar') {
    throw new InvalidArgumentException(
        sprintf(
            'Oh no $foo is "%s"',
            $foo
        )
    );   
}

// Much simpler
$foo !== 'bar' || thrInvalidArgumentException('Oh no $foo is "%s"', $foo);
```

or this

```php
// Instead of this
if (false === isset($array['key'])) {
    throw new InvalidArgumentException('Oh no key is missing');
} 

// Much simpler
$array['key'] ?? thrInvalidArgumentException('Oh no key is missing');
  
```

## Testing

Run test cases

```bash
$ composer test
```

Run test cases with coverage (HTML format)


```bash
$ composer test-coverage
```

Run PHP style checker

```bash
$ composer check-style
```

Run PHP style fixer

```bash
$ composer fix-style
```

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) and [CONDUCT](CONDUCT.md) for details.


## License

Please see [License File](LICENSE) for more information.

[ico-version]: https://img.shields.io/packagist/v/aurimasniekis/throws.svg?style=flat-square
[ico-license]: https://img.shields.io/badge/license-MIT-brightgreen.svg?style=flat-square
[ico-travis]: https://img.shields.io/travis/aurimasniekis/throws/master.svg?style=flat-square
[ico-scrutinizer]: https://img.shields.io/scrutinizer/coverage/g/aurimasniekis/throws.svg?style=flat-square
[ico-code-quality]: https://img.shields.io/scrutinizer/g/aurimasniekis/throws.svg?style=flat-square
[ico-downloads]: https://img.shields.io/packagist/dt/aurimasniekis/throws.svg?style=flat-square

[link-packagist]: https://packagist.org/packages/aurimasniekis/throws
[link-travis]: https://travis-ci.org/aurimasniekis/throws
[link-scrutinizer]: https://scrutinizer-ci.com/g/aurimasniekis/throws/code-structure
[link-code-quality]: https://scrutinizer-ci.com/g/aurimasniekis/throws
[link-downloads]: https://packagist.org/packages/aurimasniekis/throws
