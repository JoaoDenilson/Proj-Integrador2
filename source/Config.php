<?php

define("ROOT", "http://www.localhost/Proj-Integrador2");

define("SITE", "#SI-(S7)");



/**
 * @param string|null $uri
 * @return string
 */
function url(string $uri = null): string
{
    if ($uri) {
        return ROOT . "/{$uri}";
    }

    return ROOT;
}