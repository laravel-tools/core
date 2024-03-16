# Laravel Tools - Core

This package provides a set of tools to help you develop Laravel applications.

## Installation

You can install the package via composer:

```bash
composer require laravel-tools/core
```

## Development

To start developing first you must install the dependencies:

```bash
docker run --rm -v $(pwd):/app composer install
```

### Security

If you discover any security related issues, please email rlempa@gmail.com instead of using the issue tracker.

## Features

### Undefined

In PHP, we are still missing a way to define undefined variables. The [Undefined class](src/Undefined.php) is a
solution for that. Additionally, there are helpers functions as well:

- `is_undefined` - checks if provided value is instance of `Undefined` class
- `is_set` - checks if provided value is not null and not an instance of `Undefined` class.

### Collection macros

There are missing macros in Laravel, this packages adds some of these missing methods:

- ```recursive```
