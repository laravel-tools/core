<?php

use Illuminate\Support\Collection;
use LaravelTools\Core\Collections\Macros\Recursive;
use LaravelTools\Core\Undefined;

if (!function_exists('is_undefined')) {
    /**
     * Check if the given variable is undefined.
     *
     * @param mixed $variable
     *
     * @return bool
     */
    function is_undefined(mixed $variable): bool
    {
        return $variable instanceof Undefined;
    }
}

if (!function_exists('is_set')) {
    /**
     * Check if given value is either not null and not undefined.
     *
     * @param mixed $value
     *
     * @return bool
     */
    function is_set(mixed $value): bool
    {
        return ($value !== null) && !is_undefined($value);
    }
}

if (!function_exists('collect_all')) {
    /**
     * Convert multidimensional arrays to collection.
     *
     * @param Collection|array $variable
     *
     * @return Collection
     */
    function collect_all(Collection|array $variable): Collection
    {
        if (!($variable instanceof Collection)) {
            $variable = collect($variable);
        }

        return $variable->{Recursive::NAME}();
    }
}
