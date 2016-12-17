<?php

namespace Aitor24\Linker;

use Illuminate\Support\Facades\Facade;
use URL;

class Builder
{

    public static function isSecure() {
        if (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] == 'on') {
            return true;
        }
        elseif (!empty($_SERVER['HTTP_X_FORWARDED_PROTO']) && $_SERVER['HTTP_X_FORWARDED_PROTO'] == 'https' || !empty($_SERVER['HTTP_X_FORWARDED_SSL']) && $_SERVER['HTTP_X_FORWARDED_SSL'] == 'on') {
            return true;
        }
        return false;
    }

    /**
     * Return secure_asset method or asset method depending on config https
     *
     * @param string $asset
     *
     * @return string
     */
    public static function asset($asset)
    {
        if ($this->isSecure()) {
            return secure_asset($asset);
        }
        return asset($asset);
    }

    /**
     * Return secure_url method or url method depending on config https
     *
     * @param string $url
     *
     * @return string
     */
    public static function url($url, $parameters = [])
    {
        if ($this->isSecure()) {
            return secure_url($url, $parameters);
        }
        return url($url, $parameters);
    }

    /**
     * Return secure_url method or url method depending on config https
     *
     * @param string $url
     *
     * @return string
     */
    public static function route($routeName, $routeArgs = [], $absolute = false)
    {
        if ($this->isSecure()) {
            return secure_url(URL::route($routeName,$routeArgs,$absolute));
        }
        return route($routeName, $routeArgs, $absolute);
    }
}
