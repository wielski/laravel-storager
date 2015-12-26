<?php

$paths = config('fileapi.path');

if (!empty($paths)) {
    foreach ($paths as $path) {
        Route::get($path.'{filename}', function ($filename) use ($path) {
            $entry = new \Wielski\FileApi\FileApi($path);
            return $entry->getResponse($filename);
        });
    }
}


