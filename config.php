<?php

include_once __DIR__ . DIRECTORY_SEPARATOR . 'helpers.php';

$tmp_session_dir = base_path('tmp_session');
if(!is_dir($tmp_session_dir)) mkdir($tmp_session_dir);

session_save_path($tmp_session_dir);

session_start();

$full_animal_knowledge_path = "C:\\Users\\Dell\\Documents\\Github\\animal_class_knowledge_base\\animal_knowledge";
$full_animal_knowledge_ENV_path = 'bc_ia';

$animal_knowledge_path = getenv($full_animal_knowledge_ENV_path) !== false 
	? getenv($full_animal_knowledge_ENV_path) 
	: (file_exists($f = $full_animal_knowledge_path) 
		? $f
		: throw new Exception("OZA NDOKI - Configure la variable \$full_animal_knowledge_path(sur la ligne 2 du fichier '" . __FILE__ . "') ou crée une variable d'environnement système `bc_ia`.", 1)
	)
;

define('CLI_PY', 'python ' . $animal_knowledge_path);

