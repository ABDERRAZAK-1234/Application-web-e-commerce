<?php
/**
 * Helper functions for views
 */

if (!function_exists('asset')) {
    function asset(string $path): string
    {
        return '/public/asset/' . ltrim($path, '/');
    }
}

if (!function_exists('url')) {
    function url(string $path = ''): string
    {
        return '/' . ltrim($path, '/');
    }
}