<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Lista de Usuarios</title>
	<style>
		body { font-family: Arial, sans-serif; margin: 40px; }
		table { border-collapse: collapse; width: 60%; }
		th, td { border: 1px solid #ccc; padding: 8px; text-align: left; }
		th { background-color: #f4f4f4; }
		a { color: #007bff; text-decoration: none; }
	</style>
</head>
<body>
	<h1>Lista de Usuarios</h1>
	<!-- Presentar los usuarios recibidos del controlador en una tabla. -->
	<table>
		<thead>
			<tr>
				<th>ID</th>
				<th>Nombre</th>
				<th>Email</th>
				<th>Acción</th>
			</tr>
		</thead>
		<tbody>
			<?php // Recorrer los usuarios y escapar sus datos al mostrarlos. ?>
			<?php foreach ($usuarios as $u): ?>
			<tr>
				<td><?= htmlspecialchars($u['id']) ?></td>
				<td><?= htmlspecialchars($u['nombre']) ?></td>
				<td><?= htmlspecialchars($u['email']) ?></td>
				<td><a href="/usuarios/ver/<?= $u['id'] ?>">Ver</a></td>
			</tr>
			<?php endforeach; ?>
		</tbody>
	</table>
</body>
</html>
