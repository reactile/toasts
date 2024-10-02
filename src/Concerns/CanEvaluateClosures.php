<?php

namespace Reactile\Toasts\Concerns;

use Closure;

trait CanEvaluateClosures
{
    public function evaluate(mixed $value)
    {
        if ($value instanceof Closure) {
            return $value();
        }
        return $value;
    }
}
