<?php 

class Helpers {

/**
 * Get the base path 
 * 
 * @param string $path
 * $return string
 */

public static function basePath($path = ""){
    return __DIR__ . "/" . $path;
}

}