<?php

if (!function_exists('setting')) {
    function setting($key, $default = null)
    {
        $setting = app('setting');

        return $setting->get($key, $default);
    }
}
