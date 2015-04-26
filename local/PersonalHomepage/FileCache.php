<?php

namespace PersonalHomepage;

class FileCache
{
    public static function getPath($url)
    {
        $cachePath = BASE_DIR . 'cache/';
        $hash = crc32($url);

        return $cachePath . $hash;
    }

    public static function check($url, $duration = 3600) // a hour
    {
        $file = self::getPath($url);

        if (file_exists($file) && filemtime($file) + $duration >= time()) {
            return array(true, $file);
        }

        return array(false, $file);
    }

    public static function get($url, $closure = 'file_get_contents', $duration = 3600) // a hour
    {
        $file = self::check($url, $duration);

        // if not exists or expired.
        if (!$file[0]) {
            $content = call_user_func($closure, $url);
            file_put_contents($file[1], $content);
        }

        return $file[1];
    }

    public static function put($url, $content)
    {
        $file = self::getPath($url);
        file_put_contents($file, $content);
    }
}
