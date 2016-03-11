<?php
session_start();

// Globals variables
define('SERVER', 'http://localhost/portfolio/');
define('ROOT', str_replace('index.php', '', filter_input(INPUT_SERVER, 'SCRIPT_FILENAME')));
define('WEBROOT', str_replace('index.php', '', filter_input(INPUT_SERVER, 'SCRIPT_NAME')));
define('HOST', 'http://localhost/Portfolio/');
define('PAGE', filter_input(INPUT_GET, 'page'));

// Requires
require_once(ROOT . 'core/controller.php');
require_once(ROOT . 'core/model.php');
require_once('controllers/' . PAGE . '.php');

// Rooter
if (is_file('controllers/' . PAGE . '.php')) {
    $controller = PAGE;
} else {
    $controller = 'error404';
}
?>

<!DOCTYPE html>
<html>
    <?php new $controller(); ?>
</html>
