<?php

// Cargar la configuracion que crea la conexion PDO.
require_once __DIR__ . '/../../config/database.php';

class Usuario
{
	private $db;

	public function __construct()
	{
		// Guardar la conexion para reutilizarla en las consultas del modelo.
		$this->db = Database::conectar();
	}

	// Consultar y devolver todos los usuarios como arreglos asociativos.
	public function obtenerTodos()
	{
		$stmt = $this->db->query("SELECT * FROM usuarios");
		return $stmt->fetchAll(PDO::FETCH_ASSOC);
	}

	// Buscar un usuario por ID usando una consulta preparada.
	public function obtenerPorId($id)
	{
		$stmt = $this->db->prepare("SELECT * FROM usuarios WHERE id = :id");
		$stmt->bindParam(':id', $id, PDO::PARAM_INT);
		$stmt->execute();
		return $stmt->fetch(PDO::FETCH_ASSOC);
	}
}
