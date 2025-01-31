<?php

namespace Safe;

use Safe\Exceptions\HashException;

/**
 * 
 * 
 * @param \HashContext $context Hashing context returned by hash_init.
 * @param string $filename URL describing location of file to be hashed; Supports fopen wrappers.
 * @param  $stream_context Stream context as returned by stream_context_create.
 * @throws HashException
 * 
 */
function hash_update_file(\HashContext $context, string $filename,  $stream_context = null): void
{
    error_clear_last();
    $result = \hash_update_file($context, $filename, $stream_context);
    if ($result === false) {
        throw HashException::createFromPhpError();
    }
}


