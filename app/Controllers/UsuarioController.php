<?php

// Cargar el modelo que consulta los datos de usuarios.
require_once __DIR__ . '/../Models/Usuario.php';

class UsuarioController
{
	// Obtener todos los usuarios y mostrar la vista de listado.
	public function index()
	{
		$modelo = new Usuario();
		$usuarios = $modelo->obtenerTodos();

		require_once __DIR__ . '/../Views/usuarios/index.php';
	}

	// Mostrar los datos del usuario identificado por su ID.
	public function ver($id = null)
	{
		if ($id === null) {
			echo "Debe especificar un ID";
			return;
		}

		$modelo = new Usuario();
		$usuario = $modelo->obtenerPorId($id);

		if ($usuario) {
			echo "<h1>Usuario: " . htmlspecialchars($usuario['nombre']) . "</h1>";
			echo "<p>Email: " . htmlspecialchars($usuario['email']) . "</p>";
			echo "<a href='/'>Volver</a>";
		} else {
			http_response_code(404);
			echo "Usuario no encontrado";
		}
	}
}
