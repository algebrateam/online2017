<?php

/* 
 * http://php.net/manual/en/function.spl-autoload.php
 */


    // Your custom class dir
    define('CLASS_DIR', 'class/');

    // Add your class dir to include path
    //set_include_path(get_include_path().PATH_SEPARATOR.CLASS_DIR);
    set_include_path($_SERVER['DOCUMENT_ROOT'].PATH_SEPARATOR.CLASS_DIR);
    
    // You can use this trick to make autoloader look for commonly used "My.class.php" type filenames
    spl_autoload_extensions('.class.php');

    // Use default autoload implementation
    spl_autoload_register();


