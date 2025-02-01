<?php

namespace Safe;

use Safe\Exceptions\XmlException;

/**
 * xml_parser_create_ns creates a new XML parser
 * with XML namespace support and returns a XMLParser 
 * instance to be used by the other XML functions.
 * 
 * @param string $encoding The input encoding is automatically detected, so that the
 * encoding parameter specifies only the output
 * encoding. The default output charset is UTF-8. The supported
 * encodings are ISO-8859-1, UTF-8 and
 * US-ASCII.
 * @param string $separator With a namespace aware parser tag parameters passed to the various
 * handler functions will consist of namespace and tag name separated by
 * the string specified in separator.
 * @return resource Returns a new XMLParser instance.
 * @throws XmlException
 * 
 */
function xml_parser_create_ns(string $encoding = null, string $separator = ":")
{
    error_clear_last();
    $result = \xml_parser_create_ns($encoding, $separator);
    if ($result === false) {
        throw XmlException::createFromPhpError();
    }
    return $result;
}


/**
 * xml_parser_create creates a new XML parser
 * and returns a XMLParser instance to be used by the
 * other XML functions.
 * 
 * @param string $encoding The input
 * encoding is automatically detected, so that the
 * encoding parameter specifies only the output
 * encoding. If empty string is passed, the parser attempts to identify
 * which encoding the document is encoded in by looking at the heading 3 or
 * 4 bytes. The default output charset is UTF-8. The supported
 * encodings are ISO-8859-1, UTF-8 and
 * US-ASCII.
 * @return resource Returns a new XMLParser instance.
 * @throws XmlException
 * 
 */
function xml_parser_create(string $encoding = null)
{
    error_clear_last();
    $result = \xml_parser_create($encoding);
    if ($result === false) {
        throw XmlException::createFromPhpError();
    }
    return $result;
}


/**
 * Frees the given XML parser.
 * 
 * @param resource $parser 
 * @throws XmlException
 * 
 */
function xml_parser_free( $parser): void
{
    error_clear_last();
    $result = \xml_parser_free($parser);
    if ($result === false) {
        throw XmlException::createFromPhpError();
    }
}


/**
 * Sets an option in an XML parser.
 * 
 * @param resource $parser A reference to the XML parser to set an option in.
 * @param int $option Which option to set.  See below.
 * 
 * The following options are available:
 * 
 * XML parser options
 * 
 * 
 * 
 * Option constant
 * Data type
 * Description
 * 
 * 
 * 
 * 
 * XML_OPTION_CASE_FOLDING
 * bool
 * 
 * Controls whether case-folding is enabled for this
 * XML parser.  Enabled by default.
 * 
 * 
 * 
 * XML_OPTION_PARSE_HUGE
 * bool
 * 
 * Allows parsing documents larger than 10 MB.
 * This option should only be enabled when the document size is
 * bounded because this could otherwise lead to a DoS.
 * This option is only available when using libxml2.
 * 
 * 
 * 
 * XML_OPTION_SKIP_TAGSTART
 * integer 
 * 
 * Specify how many characters should be skipped in the beginning of a
 * tag name.
 * 
 * 
 * 
 * XML_OPTION_SKIP_WHITE
 * bool
 * 
 * Whether to skip values consisting of whitespace characters.
 * 
 * 
 * 
 * XML_OPTION_TARGET_ENCODING
 * string 
 * 
 * Sets which target encoding to
 * use in this XML parser.By default, it is set to the same as the
 * source encoding used by xml_parser_create.
 * Supported target encodings are ISO-8859-1,
 * US-ASCII and UTF-8.
 * 
 * 
 * 
 * 
 * 
 * @param mixed $value The option's new value.
 * @throws XmlException
 * 
 */
function xml_parser_set_option( $parser, int $option,  $value): void
{
    error_clear_last();
    $result = \xml_parser_set_option($parser, $option, $value);
    if ($result === false) {
        throw XmlException::createFromPhpError();
    }
}


