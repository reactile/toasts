<?php

namespace Reactile\Toasts\Toast;

use Illuminate\Contracts\Support\Arrayable;
use Reactile\Toasts\Concerns\CanEvaluateClosures;
use Reactile\Toasts\Concerns\HasBody;
use Reactile\Toasts\Concerns\HasColor;
use Reactile\Toasts\Concerns\HasDuration;
use Reactile\Toasts\Concerns\HasId;
use Reactile\Toasts\Concerns\HasStatus;
use Reactile\Toasts\Concerns\HasTitle;

class Toast implements Arrayable
{
    use CanEvaluateClosures;
    use HasId;
    use HasBody;
    use HasDuration;
    use HasTitle;
    use HasStatus;
    use HasColor;

    public function toArray(): array
    {
        return [];
    }

    public function __construct(protected ?string $id)
    {
        $this->id($id);
    }
    public function make(?string $id): static
    {
        $static = app(static::class, ['id' => $id]);
        return $static;
    }
    public function send(){
        
    }
}
