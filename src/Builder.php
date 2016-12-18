<?php

namespace Aitor24\Linker;

use URL;

class Builder
{
    /**
     * Checks if your connection is secure.
     *
     * @return bool
     */
    public static function isSecure()
    {
        if (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] == 'on') {
            return true;
        } elseif (!empty($_SERVER['HTTP_X_FORWARDED_PROTO']) && $_SERVER['HTTP_X_FORWARDED_PROTO'] == 'https' || !empty($_SERVER['HTTP_X_FORWARDED_SSL']) && $_SERVER['HTTP_X_FORWARDED_SSL'] == 'on') {
            return true;
        }

        return false;
    }

    /**
     * Return secure_asset method or asset method depending of your connection type (Regular of SSL).
     *
     * @param string $asset
     *
     * @return string
     */
    public static function asset($asset)
    {
        if (self::isSecure()) {
            return secure_asset($asset);
        }

        return asset($asset);
    }

    /**
     * Return secure_url method or url method depending of your connection type (Regular of SSL).
     *
     * @param string $url
     * @param string $parameters
     *
     * @return string
     */
    public static function url($url, $parameters = [])
    {
        if (self::isSecure()) {
            return secure_url($url, $parameters);
        }

        return url($url, $parameters);
    }

    /**
     * Return a secure route link or a regular route method() depending of your connection type (Regular of SSL).
     *
     * @param string $routeName
     * @param string $routeArgs
     * @param bool   $absolute
     *
     * @return string
     */
    public static function route($routeName, $routeArgs = [], $absolute = false)
    {
        if (self::isSecure()) {
            return secure_url(URL::route($routeName, $routeArgs, $absolute));
        }

        return route($routeName, $routeArgs, $absolute);
    }
}
