<?php
/** by including just this one function, the goal is to never need to manage includes.
 * the tradeoff is we need to name all classes in the format of dir_dir2_dir3_filename where dir ..dirN are optional.
 * The root is the model directory
 * TODO replace this with a psr-4 and composer autoloader
 **/
function __autoload($classname) {
	$target = 'model/' .  str_replace('_', '/', $classname . '.php');
	if (!file_exists($target)) {
		die('Application error including file: ' . $target);
	}

	include($target);
}
