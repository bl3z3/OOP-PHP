<?php

//autoloading all the Classes
spl_autoload_register(function($class) {
	require_once "classes/{$class}.php";
});