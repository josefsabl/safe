<?php

namespace Safe;

use Safe\Exceptions\OutcontrolException;

/**
 * This function calls the output handler
 * (with the PHP_OUTPUT_HANDLER_CLEAN flag),
 * discards it's return value
 * and cleans (erases) the contents of the active output buffer.
 * 
 * This function does not turn off the active output buffer like
 * ob_end_clean or ob_get_clean does.
 * 
 * ob_clean will fail
 * without an active output buffer started with the
 * PHP_OUTPUT_HANDLER_CLEANABLE flag.
 * 
 * @throws OutcontrolException
 * 
 */
function ob_clean(): void
{
    error_clear_last();
    $result = \ob_clean();
    if ($result === false) {
        throw OutcontrolException::createFromPhpError();
    }
}


/**
 * This function calls the output handler
 * (with the PHP_OUTPUT_HANDLER_CLEAN and
 * PHP_OUTPUT_HANDLER_FINAL flags),
 * discards it's return value,
 * discards the contents of the active output buffer
 * and turns off the active output buffer.
 * 
 * ob_end_clean will fail
 * without an active output buffer started with the
 * PHP_OUTPUT_HANDLER_REMOVABLE flag.
 * 
 * ob_end_clean
 * will discard the contents of the active output buffer
 * even if it was started without the
 * PHP_OUTPUT_HANDLER_CLEANABLE flag.
 * 
 * @throws OutcontrolException
 * 
 */
function ob_end_clean(): void
{
    error_clear_last();
    $result = \ob_end_clean();
    if ($result === false) {
        throw OutcontrolException::createFromPhpError();
    }
}


/**
 * This function calls the output handler
 * (with the PHP_OUTPUT_HANDLER_FINAL flag),
 * flushes (sends) it's return value,
 * discards the contents of the active output buffer
 * and turns off the active output buffer.
 * 
 * ob_end_flush will fail
 * without an active output buffer started with the
 * PHP_OUTPUT_HANDLER_REMOVABLE flag.
 * 
 * ob_end_flush will flush (send)
 * the return value of the output handler
 * even if the active output buffer was started without the
 * PHP_OUTPUT_HANDLER_FLUSHABLE flag.
 * 
 * @throws OutcontrolException
 * 
 */
function ob_end_flush(): void
{
    error_clear_last();
    $result = \ob_end_flush();
    if ($result === false) {
        throw OutcontrolException::createFromPhpError();
    }
}


/**
 * This function calls the output handler
 * (with the PHP_OUTPUT_HANDLER_FLUSH flag),
 * flushes (sends) its return value
 * and discards the contents of the active output buffer.
 * 
 * This function does not turn off the active output buffer like
 * ob_end_flush or ob_get_flush does.
 * 
 * ob_flush will fail
 * without an active output buffer started with the
 * PHP_OUTPUT_HANDLER_FLUSHABLE flag.
 * 
 * @throws OutcontrolException
 * 
 */
function ob_flush(): void
{
    error_clear_last();
    $result = \ob_flush();
    if ($result === false) {
        throw OutcontrolException::createFromPhpError();
    }
}


/**
 * This function calls the output handler
 * (with the PHP_OUTPUT_HANDLER_CLEAN and
 * PHP_OUTPUT_HANDLER_FINAL flags),
 * discards it's return value,
 * returns the contents of the active output buffer
 * and turns off the active output buffer.
 * 
 * ob_get_clean will fail
 * without an active output buffer started with the
 * PHP_OUTPUT_HANDLER_REMOVABLE flag.
 * 
 * ob_get_clean
 * will discard the contents of the active output buffer
 * even if it was started without the
 * PHP_OUTPUT_HANDLER_CLEANABLE flag.
 * 
 * @return string Returns the contents of the active output buffer on success.
 * @throws OutcontrolException
 * 
 */
function ob_get_clean(): string
{
    error_clear_last();
    $result = \ob_get_clean();
    if ($result === false) {
        throw OutcontrolException::createFromPhpError();
    }
    return $result;
}


/**
 * This function calls the output handler
 * (with the PHP_OUTPUT_HANDLER_FINAL flag),
 * flushes (sends) it's return value,
 * returns the contents of the active output buffer
 * and turns off the active output buffer.
 * 
 * ob_get_flush will fail
 * without an active output buffer started with the
 * PHP_OUTPUT_HANDLER_REMOVABLE flag.
 * 
 * ob_get_flush will flush (send)
 * the return value of the output handler
 * even if the active output buffer was started without the
 * PHP_OUTPUT_HANDLER_FLUSHABLE flag.
 * 
 * @return string Returns the contents of the active output buffer on success.
 * @throws OutcontrolException
 * 
 */
function ob_get_flush(): string
{
    error_clear_last();
    $result = \ob_get_flush();
    if ($result === false) {
        throw OutcontrolException::createFromPhpError();
    }
    return $result;
}


/**
 * ob_implicit_flush will turn implicit flushing on or
 * off. Implicit flushing will result in a flush operation after every block of
 * code resulting in output, so that explicit calls to flush
 * will no longer be needed.
 * 
 * @param bool $enable TRUE to turn implicit flushing on, FALSE otherwise.
 * @throws OutcontrolException
 * 
 */
function ob_implicit_flush(bool $enable = true): void
{
    error_clear_last();
    $result = \ob_implicit_flush($enable);
    if ($result === false) {
        throw OutcontrolException::createFromPhpError();
    }
}


/**
 * This function starts the 'URL-Rewriter' output buffer handler
 * if it is not active,
 * stores the name and value parameters,
 * and when the buffer is flushed rewrites the URLs
 * and forms based on the applicable ini settings.
 * Subsequent calls to this function will store all additional name/value pairs
 * until the handler is turned off.
 * 
 * When the output buffer is flushed
 * (by calling ob_flush, ob_end_flush,
 * ob_get_flush or at the end of the script)
 * the 'URL-Rewriter' handler adds the name/value pairs
 * as query parameters to URLs in attributes of HTML tags
 * and adds hidden fields to forms based on the values of the
 * url_rewriter.tags and
 * url_rewriter.hosts
 * configuration directives.
 * 
 * Each name/value pair added to the 'URL-Rewriter' handler
 * is added to the URLs and/or forms
 * even if this results in duplicate URL query parameters
 * or elements with the same name attributes.
 * 
 * @param string $name The variable name.
 * @param string $value The variable value.
 * @throws OutcontrolException
 * 
 */
function output_add_rewrite_var(string $name, string $value): void
{
    error_clear_last();
    $result = \output_add_rewrite_var($name, $value);
    if ($result === false) {
        throw OutcontrolException::createFromPhpError();
    }
}


/**
 * This function removes all rewrite variables previously set by
 * the output_add_rewrite_var function.
 * 
 * @throws OutcontrolException
 * 
 */
function output_reset_rewrite_vars(): void
{
    error_clear_last();
    $result = \output_reset_rewrite_vars();
    if ($result === false) {
        throw OutcontrolException::createFromPhpError();
    }
}


