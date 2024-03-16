<?php

namespace LaravelTools\Core\Collections\Macros;

use Closure;
use Illuminate\Support\Collection;

/**
 * Recursively convert arrays and objects within a multidimensional array to Collections.
 *
 * @param float $maxDepth
 * @param int $depth
 *
 * @mixin Collection
 *
 * @return Collection
 */
class Recursive
{
    /**
     * @var string macro name
     */
    public const string NAME = 'recursive';

    /**
     * Logic of the macro.
     *
     * @return Closure
     */
    public function __invoke(): Closure
    {
        return function (float $maxDepth = INF, int $depth = 0): self {
            return $this->map(function ($value) use ($depth, $maxDepth) {
                if ($depth > $maxDepth) {
                    return $value;
                }

                if (is_array($value) || is_object($value)) {
                    return collect($value)->{self::NAME}($maxDepth, $depth + 1);
                }

                return $value;
            });
        };
    }
}
