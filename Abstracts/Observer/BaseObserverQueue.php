<?php

declare(strict_types=1);

namespace Src\Core\Abstracts;

use Illuminate\Contracts\Queue\ShouldQueue;

abstract class BaseObserverQueue extends BaseObserver implements ShouldQueue
{
    /**
     * @return string
     */
    final public function viaQueue(): string
    {
        return 'default';
    }
}
