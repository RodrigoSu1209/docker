<?php

// Cargar el controlador disponible para las rutas de usuarios.
require_once __DIR__ . '/../app/Controllers/UsuarioController.php';

// Obtener la ruta solicitada o usar la pagina inicial por defecto.
$url = $_GET['url'] ?? 'usuarios/index';
$url = rtrim($url, '/');
$partes = explode('/', $url);

// Separar el nombre del controlador, el metodo y sus parametros.
$controlador = $partes[0] ?? 'usuarios';
$metodo = $partes[1] ?? 'index';
$parametros = array_slice($partes, 2);

// La ruta plural "usuarios" corresponde a la clase singular UsuarioController.
$controladorNombre = $controlador === 'usuarios'
	? 'UsuarioController'
	: ucfirst($controlador) . 'Controller';

// Instanciar el controlador y ejecutar el metodo solicitado si existe.
if (class_exists($controladorNombre)) {
	$obj = new $controladorNombre();
	if (method_exists($obj, $metodo)) {
		call_user_func_array([$obj, $metodo], $parametros);
	} else {
		// Responder con 404 cuando el metodo no esta definido.
		http_response_code(404);
		echo "Método no encontrado";
	}
} else {
	// Responder con 404 cuando no existe la clase del controlador.
	http_response_code(404);
	echo "Controlador no encontrado";
}
