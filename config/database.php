<?php

class Database
{
	// Crear y devolver una conexion PDO a MariaDB.
	public static function conectar()
	{
		// Estos valores coinciden con las credenciales de docker-compose.yml.
		$host = 'db';
		$dbname = 'mvc_db';
		$user = 'mvc_user';
		$pass = 'mvc_pass123';

		try {
			$pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $user, $pass);
			$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			return $pdo;
		} catch (PDOException $e) {
			// Detener la aplicacion si no se puede establecer la conexion.
			die("Error de conexión: " . $e->getMessage());
		}
	}
}
