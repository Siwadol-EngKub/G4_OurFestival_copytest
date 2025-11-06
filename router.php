<?php
$uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$uri = urldecode($uri);

if ($uri === '/') {
    $uri = '/index.html';
}

if (strpos($uri, '..') !== false) {
    http_response_code(400);
    echo '400 Bad Request';
    return true;
}

if (preg_match('/^\/api\//', $uri)) {
    $scriptPath = __DIR__ . $uri . '.php';
    $realScriptPath = realpath($scriptPath);
    $apiDir = realpath(__DIR__ . '/api');
    
    if ($realScriptPath === false || $apiDir === false || strpos($realScriptPath, $apiDir) !== 0) {
        http_response_code(404);
        header('Content-Type: application/json');
        echo json_encode(['error' => 'API endpoint not found']);
        return true;
    }
    
    if (file_exists($realScriptPath) && is_file($realScriptPath)) {
        require $realScriptPath;
        return true;
    } else {
        http_response_code(404);
        header('Content-Type: application/json');
        echo json_encode(['error' => 'API endpoint not found']);
        return true;
    }
}

$filePath = __DIR__ . $uri;
$realFilePath = realpath($filePath);
$baseDir = realpath(__DIR__);

if ($realFilePath !== false && $baseDir !== false && strpos($realFilePath, $baseDir) === 0) {
    if (is_file($realFilePath)) {
        return false;
    }
}

http_response_code(404);
echo '404 Not Found';
