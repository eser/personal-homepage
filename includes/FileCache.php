<?php

class FileCache
{
    public static function get($url, $duration = 3600) // a hour
    {
        $cachePath = __DIR__ . '/../cache/';
        $hash = crc32($url);

        $file = $cachePath . $hash;

        // if exists and not expired.
        if (file_exists($file) && filemtime($file) < time() + $duration) {
            return $file;
        }

        // otherwise
        $contents = file_get_contents($url);
        file_put_contents($file, $contents);

        return $file;
    }
}
