<?php

use Illuminate\Foundation\Application;
use Illuminate\Http\Request;

define('LARAVEL_START', microtime(true));

/*
|--------------------------------------------------------------------------
| Serve static files from /public
|--------------------------------------------------------------------------
*/

$requestUri = $_SERVER['REQUEST_URI'] ?? '/';
$path = parse_url($requestUri, PHP_URL_PATH) ?: '/';

/*
|--------------------------------------------------------------------------
| Prevent exposing PHP source files
|--------------------------------------------------------------------------
*/

if (
    $path !== '/' &&
    !str_ends_with(strtolower($path), '.php')
) {
    $publicPath = realpath(__DIR__ . '/../public' . $path);
    $publicRoot = realpath(__DIR__ . '/../public');

    if (
        $publicPath !== false &&
        $publicRoot !== false &&
        str_starts_with($publicPath, $publicRoot . DIRECTORY_SEPARATOR) &&
        is_file($publicPath)
    ) {
        $mimeTypes = [
            'css'   => 'text/css',
            'js'    => 'application/javascript',
            'json'  => 'application/json',
            'png'   => 'image/png',
            'jpg'   => 'image/jpeg',
            'jpeg'  => 'image/jpeg',
            'gif'   => 'image/gif',
            'svg'   => 'image/svg+xml',
            'webp'  => 'image/webp',
            'ico'   => 'image/x-icon',
            'woff'  => 'font/woff',
            'woff2' => 'font/woff2',
            'ttf'   => 'font/ttf',
            'map'   => 'application/json',
        ];

        $extension = strtolower(pathinfo($publicPath, PATHINFO_EXTENSION));

        if (isset($mimeTypes[$extension])) {
            header('Content-Type: ' . $mimeTypes[$extension]);
        } else {
            header('Content-Type: application/octet-stream');
        }

        header('Cache-Control: public, max-age=31536000, immutable');

        readfile($publicPath);
        exit;
    }
}

/*
|--------------------------------------------------------------------------
| Register The Auto Loader
|--------------------------------------------------------------------------
*/

require_once __DIR__ . '/../vendor/autoload.php';

/*
|--------------------------------------------------------------------------
| Bootstrap Laravel
|--------------------------------------------------------------------------
*/

$app = require_once __DIR__ . '/../bootstrap/app.php';

/*
|--------------------------------------------------------------------------
| Handle The Request
|--------------------------------------------------------------------------
*/

$app->handleRequest(Request::capture());