<?php
namespace Reactile\Toasts\Concerns;

use Closure;
use Reactile\Toasts\Enums\DurationType;

trait HasDuration
{
    protected int | string |DurationType | Closure $duration = 6000;

    public function duration(int | string | Closure | null $duration): static
    {
        $this->duration = $duration ?? DurationType::PERSISTENT->value;

        return $this;
    }

    public function getDuration(): int | string
    {
        return $this->evaluate($this->duration) ?? DurationType::PERSISTENT->value;
    }

    public function seconds(float $seconds): static
    {
        $this->duration((int) ($seconds * 1000));

        return $this;
    }

    public function persistent(): static
    {
        $this->duration(DurationType::PERSISTENT->value);

        return $this;
    }

}