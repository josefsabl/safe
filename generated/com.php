<?php

namespace Safe;

use Safe\Exceptions\ComException;

/**
 * Generates a Globally Unique Identifier (GUID).
 * 
 * A GUID is generated in the same way as DCE UUID's, except that the
 * Microsoft convention is to enclose a GUID in curly braces.
 * 
 * @return string Returns the GUID as a string.
 * @throws ComException
 * 
 */
function com_create_guid(): string
{
    error_clear_last();
    $result = \com_create_guid();
    if ($result === false) {
        throw ComException::createFromPhpError();
    }
    return $result;
}


/**
 * Instructs COM to sink events generated by
 * variant into the PHP object
 * sink_object.
 * 
 * Be careful how you use this feature; if you are doing something similar
 * to the example below, then it doesn't really make sense to run it in a
 * web server context.
 * 
 * @param variant $variant 
 * @param object $sink_object sink_object should be an instance of a class with
 * methods named after those of the desired dispinterface; you may use
 * com_print_typeinfo to help generate a template class
 * for this purpose.
 * @param  $sink_interface PHP will attempt to use the default dispinterface type specified by
 * the typelibrary associated with variant, but
 * you may override this choice by setting
 * sink_interface to the name of the dispinterface
 * that you want to use.
 * @throws ComException
 * 
 */
function com_event_sink(variant $variant, object $sink_object,  $sink_interface = null): void
{
    error_clear_last();
    $result = \com_event_sink($variant, $sink_object, $sink_interface);
    if ($result === false) {
        throw ComException::createFromPhpError();
    }
}


/**
 * Loads a type-library and registers its constants in the engine, as though
 * they were defined using define.
 * 
 * Note that it is much more efficient to use the com.typelib-file php.ini setting to pre-load and
 * register the constants, although not so flexible.
 * 
 * If com.autoregister-typelib is turned on, then
 * PHP will attempt to automatically register the constants associated with a
 * COM object when you instantiate it.  This depends on the interfaces
 * provided by the COM object itself, and may not always be possible.
 * 
 * @param string $typelib typelib can be one of the following:
 * 
 * 
 * 
 * The filename of a .tlb file or the executable module
 * that contains the type library.
 * 
 * 
 * 
 * 
 * The type library GUID, followed by its version number, for example
 * {00000200-0000-0010-8000-00AA006D2EA4},2,0.
 * 
 * 
 * 
 * 
 * The type library name, e.g. Microsoft OLE DB ActiveX Data
 * Objects 1.0 Library.
 * 
 * 
 * 
 * PHP will attempt to resolve the type library in this order, as the
 * process gets more and more expensive as you progress down the list;
 * searching for the type library by name is handled by physically
 * enumerating the registry until we find a match.
 * 
 * The filename of a .tlb file or the executable module
 * that contains the type library.
 * 
 * The type library GUID, followed by its version number, for example
 * {00000200-0000-0010-8000-00AA006D2EA4},2,0.
 * 
 * The type library name, e.g. Microsoft OLE DB ActiveX Data
 * Objects 1.0 Library.
 * @param int $case_insensitive The case_insensitive behaves inversely to
 * the parameter $case_insensitive in the define
 * function.
 * @throws ComException
 * 
 */
function com_load_typelib(string $typelib, int $case_insensitive = true): void
{
    error_clear_last();
    $result = \com_load_typelib($typelib, $case_insensitive);
    if ($result === false) {
        throw ComException::createFromPhpError();
    }
}


/**
 * The purpose of this function is to help generate a skeleton class for use
 * as an event sink.  You may also use it to generate a dump of any COM
 * object, provided that it supports enough of the introspection interfaces,
 * and that you know the name of the interface you want to display.
 * 
 * @param  $variant variant should be either an instance of a COM
 * object, or be the name of a typelibrary (which will be resolved according
 * to the rules set out in com_load_typelib).
 * @param  $dispatch_interface The name of an IDispatch descendant interface that you want to display.
 * @param bool $display_sink If set to TRUE, the corresponding sink interface will be displayed
 * instead.
 * @throws ComException
 * 
 */
function com_print_typeinfo( $variant,  $dispatch_interface = null, bool $display_sink = false): void
{
    error_clear_last();
    $result = \com_print_typeinfo($variant, $dispatch_interface, $display_sink);
    if ($result === false) {
        throw ComException::createFromPhpError();
    }
}


/**
 * Converts variant from a VT_DATE
 * (or similar) value into a Unix timestamp.  This allows easier
 * interopability between the Unix-ish parts of PHP and COM.
 * 
 * @param object $variant The variant.
 * @return int Returns a unix timestamp.
 * @throws ComException
 * 
 */
function variant_date_to_timestamp(object $variant): int
{
    error_clear_last();
    $result = \variant_date_to_timestamp($variant);
    if ($result === null) {
        throw ComException::createFromPhpError();
    }
    return $result;
}


/**
 * Returns the value of value rounded to
 * decimals decimal places.
 * 
 * @param mixed $value The variant.
 * @param int $decimals Number of decimal places.
 * @return mixed Returns the rounded value.
 * @throws ComException
 * 
 */
function variant_round( $value, int $decimals)
{
    error_clear_last();
    $result = \variant_round($value, $decimals);
    if ($result === null) {
        throw ComException::createFromPhpError();
    }
    return $result;
}


