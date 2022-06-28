<?php
session_start();

define('ROOT', str_replace('index.php', '', $_SERVER['SCRIPT_FILENAME']));
require_once(ROOT . 'app/Model.php');
require_once(ROOT . 'app/Controller.php');

// if not connected
if (!isset($_SESSION['username']) || !isset($_SESSION['password'])) {
	require_once(ROOT . 'controllers/Main.php');
	$controller = new Main();

	// if attempting to connect
	if (isset($_POST['username']) && isset($_POST['password'])) {
		$controller->connection($_POST['username'], $_POST['password']);
	} else {
		$controller->to_form();
	}
} else {
	// disconnecting
	if (isset($_POST['disconnection'])) {
		unset($_SESSION['username']);
		unset($_SESSION['password']);
		unset($_SESSION['role']);

		require_once(ROOT . 'controllers/Main.php');
		$controller = new Main();
		$controller->to_form();
	}

	// trying to find the right controller
	else {
		$params = explode('/', $_GET['p']); // url parameters
		if ($params[0] != "" && file_exists(ROOT . 'controllers/' . $params[0] . '.php')) {
			$controller = $params[0]; // knowing which controller to call
			//$action = "index"; // function called as default

			// identifying potential parameters to be sent
			$para = isset($params[1]) ? $params[1] : null; // if statement; often used in javascript, permitted in php
			require_once(ROOT . 'controllers/' . $controller . '.php');
			$controller = new $controller();
			if (method_exists($controller, 'index'/*$action*/)) {
				$controller->index/*$action*/($_SESSION['username'], $_SESSION['password'], $para);
			} else { // if the dedicated controller doesn't hold an index function
				http_response_code(404);
				echo "La page recherchée n'existe pas";
			}
		}

		// no controller found, redirecting to main page
		else {
			require_once(ROOT . 'controllers/Main.php');
			$controller = new Main();
			$controller->index($_SESSION['username'], $_SESSION['password']);
		}
	}
}
