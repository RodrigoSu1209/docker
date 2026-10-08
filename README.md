# Proyecto MVC Mínimo con Docker

## Requisitos
- Docker
- Docker Compose

## Instrucciones

1. Clonar el repositorio:
	git clone https://github.com/usuario/mvc-minimo.git
	cd mvc-minimo
	
2. Levantar los contenedores:
	docker compose up -d --build
	

3. Acceder en el navegador:
	http://localhost:8080

4. Probar una ruta amigable:
	http://localhost:8080/usuarios/ver/1

5. Detener los contenedores:
	bash
	docker compose down
	

## Estructura
- `public/` → raíz web (`index.php` y `.htaccess`)
- `app/` → controladores, modelos y vistas
- `config/` → conexión a base de datos
- `db_init/` → script SQL inicial
