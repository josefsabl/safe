<?php

namespace Safe;

use Safe\Exceptions\SplException;

/**
 * Removes a function from the autoload queue. If the queue
 * is activated and empty after removing the given function then it will
 * be deactivated.
 * 
 * When this function results in the queue being deactivated, any
 * __autoload function that previously existed will not be reactivated.
 * 
 * @param callable $callback The autoload function being unregistered.
 * @throws SplException
 * 
 */
function spl_autoload_unregister(callable $callback): void
{
    error_clear_last();
    $result = \spl_autoload_unregister($callback);
    if ($result === false) {
        throw SplException::createFromPhpError();
    }
}


