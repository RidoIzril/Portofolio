<?php

$file = $_GET['file'] ?? '';

$basePath = realpath(__DIR__ . '/..');

if (!$basePath) {
    http_response_code(500);
    exit('Base path not found');
}

$file = ltrim($file, '/');

$filePath = realpath($basePath . '/' . $file);

if (
    !$filePath ||
    !str_starts_with($filePath, $basePath . DIRECTORY_SEPARATOR) ||
    !is_file($filePath)
) {
    http_response_code(404);
    exit('File not found');
}

$mimeTypes = [
    'css'   => 'text/css',
    'js'    => 'application/javascript',
    'mjs'   => 'application/javascript',
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
    'otf'   => 'font/otf',
];

$extension = strtolower(pathinfo($filePath, PATHINFO_EXTENSION));

header(
    'Content-Type: ' .
    ($mimeTypes[$extension] ?? 'application/octet-stream')
);

header('Cache-Control: public, max-age=31536000, immutable');

readfile($filePath);
exit;