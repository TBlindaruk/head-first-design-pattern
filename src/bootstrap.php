<?php
/*
 * A couple of custom PHP utils to make the code work much more closely to the
 * original Java source code.
 */

/*
 * Put the lib dir on the include path for easy inclusion of library files
 */
INI_Set("include_path", INI_Get("include_path") . PATH_SEPARATOR . dirname(__FILE__) . DIRECTORY_SEPARATOR . "library");

/*
 * Remove the first element off of the argv array, since it represents the file
 * that was called and we only want arguments, in order to mimic Java's args.
 */
if (isset($_SERVER["argv"])) {
	array_shift($_SERVER["argv"]);
}

/*
 * Mimic all classes being in the same Java package by autoloading classes in
 * the same directory
 */
function __autoload($className) {
	require_once $className . ".php";
}

/*
 * Mimic Java's println()
 */
function println($string_message = "") {
	return print $string_message . "\n";
}
?>