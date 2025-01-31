<?php

namespace Safe;

use Safe\Exceptions\DomException;

/**
 * This function takes the given attribute or element node (a
 * SimpleXMLElement instance) and creates a
 * DOMAttr or DOMElement node, repectively.
 * The new DOMNode refers to the same underlying XML node
 * as the SimpleXMLElement.
 * 
 * @param \SimpleXMLElement $node The attribute or element node to import (a SimpleXMLElement instance).
 * @return \DOMElement|false The DOMAttr or DOMElement.
 * @throws DomException
 * 
 */
function dom_import_simplexml(\SimpleXMLElement $node): \DOMElement
{
    error_clear_last();
    $result = \dom_import_simplexml($node);
    if ($result === null) {
        throw DomException::createFromPhpError();
    }
    return $result;
}


