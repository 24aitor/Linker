<?php

namespace Aitor24\Linker;

use Illuminate\Support\Facades\Facade;
use URL;
use Aitor24\Linker\Facades\Linker as ThisLinker;

class Builder
{

    public static function isHttps() {
        $isSecure = false;
        if (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] == 'on') {
            $isSecure = true;
        }
        elseif (!empty($_SERVER['HTTP_X_FORWARDED_PROTO']) && $_SERVER['HTTP_X_FORWARDED_PROTO'] == 'https' || !empty($_SERVER['HTTP_X_FORWARDED_SSL']) && $_SERVER['HTTP_X_FORWARDED_SSL'] == 'on') {
            $isSecure = true;
        }
        return $isSecure;
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
        if (ThisLinker::isHttps()) {
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
    public static function url($url)
    {
        if (ThisLinker::isHttps()) {
            return secure_url($url);
        }
        return url($url);
    }

    /**
     * Return secure_url method or url method depending on config https
     *
     * @param string $url
     *
     * @return string
     */
    public static function route($routeName, $routeArgs = NULL)
    {
        if (ThisLinker::isHttps()) {
            if (isset($routeArgs)) {
                return secure_url(URL::route($routeName,$routeArgs,false));
            }
            return secure_url(URL::route($routeName,[],false));
        }
        if (isset($routeArgs)) {
            return route($routeName, $routeArgs);
        }
        return route($routeName);
    }
}
