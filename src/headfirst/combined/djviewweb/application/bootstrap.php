<?php
define("APPLICATION_PATH", dirname(__FILE__));
define("DATA_PATH", realpath(dirname(__FILE__) . DIRECTORY_SEPARATOR . ".." . DIRECTORY_SEPARATOR . "data"));

/*
 * Put the application directory on the include path so that application files
 * can find their components
 */
INI_Set("include_path", INI_Get("include_path") . PATH_SEPARATOR . realpath(dirname(__FILE__) . DIRECTORY_SEPARATOR . ".." . DIRECTORY_SEPARATOR . ".." . DIRECTORY_SEPARATOR . ".." . DIRECTORY_SEPARATOR . ".." . DIRECTORY_SEPARATOR . "library") . PATH_SEPARATOR . APPLICATION_PATH);
?>