<?php
class Config
{
    private static $config = [];

    public static function get($key)
    {
        return self::$config[$key] ?? null;
    }
}
