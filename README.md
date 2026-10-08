# Proyecto MVC Mínimo con Docker

## Requisitos
- Docker
- Docker Compose

## Instrucciones

1. Clonar el repositorio:
	git clone https://github.com/usuario/mvc-minimo.git
	comandos: cd mvc-minimo
	
3. Levantar los contenedores:
	comandos: docker compose up -d --build
	

4. Acceder en el navegador:
	http://localhost:8080

5. Probar una ruta amigable:
	http://localhost:8080/usuarios/ver/1

6. Detener los contenedores:
	Comandos: docker compose down
	

## Estructura
- `public/` → raíz web (`index.php` y `.htaccess`)
- `app/` → controladores, modelos y vistas
- `config/` → conexión a base de datos
- `db_init/` → script SQL inicial
