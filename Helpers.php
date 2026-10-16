<?php 

class Helpers {

/**
 * Get the base path 
 * 
 * @param string $path
 * @return string
 */

public static function basePath(string $path = ""):string{
    return __DIR__ . "/" . $path;
}

/**
 * Load a view
 * @param string $name
 * @return void
 */

public static function loadView(string $name):void {

    $viewPath = self::basePath("views/{$name}.view.php");

    if (file_exists($viewPath)) {
        require $viewPath;
    } else {
        echo "View '{$name} not found!'";
    }
}

/**
 * Load a partial
 * @param string $name
 * @return void
 */

public static function loadPartial(string $name):void {
    $partialPath = self::basePath("views/partials/{$name}.php");

    if (file_exists($partialPath)) {
        require $partialPath;
    } else {
        echo "View '{$name} not found!'";
    }
}

}