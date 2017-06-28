<?php
/**
 * Copyright © 2017 Maks Rafalko
 *
 * License: https://opensource.org/licenses/BSD-3-Clause New BSD License
 */

declare(strict_types=1);

namespace Infection\EventDispatcher;

interface EventDispatcherInterface
{
    /**
     * Dispatches an event
     *
     * @param mixed $event
     */
    public function dispatch($event);
}