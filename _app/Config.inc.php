<?php

/**
 * Url base
 */
define('BASE_URL', 'http://127.0.0.1/projects/desafio-estagio');


/**
 * Autoload de classes
 */
function __autoload($Class) {

	$DirName = 'Classes';
	$incDir = NULL;
	$Path = __DIR__ . DIRECTORY_SEPARATOR . $DirName . DIRECTORY_SEPARATOR . $Class . '.class.php';

	if ( !$incDir && file_exists($Path) && !is_dir($Path) ):
		include_once($Path);
		$incDir = TRUE;
	else:
		echo "Erro ao incluir <b>{$Class}.class.php</b>";
		die();
	endif;
}