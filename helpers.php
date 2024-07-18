<?php

function asset($path) {
    return '/assets/' . trim($path, '/');
}

function loadEnv($filePath) {
    if (!file_exists($filePath)) {
        return false;
    }

    $lines = file($filePath, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
    foreach ($lines as $line) {
        if (strpos(trim($line), '#') === 0) {
            continue;
        }

        list($name, $value) = explode('=', $line, 2);
        $name = trim($name);
        $value = trim($value);

        if (!array_key_exists($name, $_SERVER) && !array_key_exists($name, $_ENV)) {
            putenv("$name=$value");
            $_SERVER[$name] = $value;
            $_ENV[$name] = $value;
        }
    }

    return true;
}

// Load .env file
loadEnv(__DIR__ . '/.env');