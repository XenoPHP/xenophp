<?php
require __DIR__ . '/vendor/autoload.php';

echo "Autoload loaded.\n";

if (function_exists('xeno_clean')) {
    echo "Common.php loaded (xeno_clean exists).\n";
} else {
    echo "Common.php NOT loaded.\n";
}

if (class_exists('App\Core\Console\ServeInterceptor')) {
    echo "ServeInterceptor class found.\n";
} else {
    echo "ServeInterceptor class NOT found.\n";
}
