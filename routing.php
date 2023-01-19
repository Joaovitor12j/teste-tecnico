<?php 

$controllers = array(
	'cliente' => ['index','save']
);

if (array_key_exists($controller, $controllers)) {
	if (in_array($action, $controllers[$controller])) {
		call($controller, $action);
	}
	else{
		call('cliente', 'error');
	}		
}else{
	call('cliente', 'error');
}

function call($controller, $action){
	require_once('Controllers/'.$controller.'Controller.php');

	switch ($controller) {
		case 'cliente':
		require_once('Model/Cliente.php');
			$controller = new ClienteController();
		break;
		
		default:
				# code...
		break;
	}
	$controller->{$action}();
}

?>