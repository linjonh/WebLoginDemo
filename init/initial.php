
<?php
spl_autoload_register(function($class){
	require_once 'class/'. $class . '.php';
});

require_once "functions/UtilsFunctions.php";