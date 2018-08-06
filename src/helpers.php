<?php

if (!function_exists('env')) {
    function env($key, $default = null)
    {
        $value = getenv($key);

        switch (strtolower($value)) {
            case 'true':
                return true;
            case 'false':
                return false;
            case 'empty':
                return '';
            case 'null':
                return null;
        }

        return $value;
    }
}
