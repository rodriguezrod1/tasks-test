# Tasks - Sistema de Gestión de Tareas

Este es un sistema web para gestionar tareas desarrollado con Laravel 11.

## Funcionalidades principales

-   Creación, edición y eliminación de tareas
-   Gestión del estado de las tareas (pendiente o completada)
-   Visualización de todas las tareas
-   Define la relación many-to-many entre libros y categorías.
-   Implementa un middleware que permita acceso a las rutas /tasks solo si el usuario está autenticado.

## Requisitos previos

1. PHP >= 8.0
2. Composer
3. Base de datos MySQL/MariaDB

## Instalación

1. Clona el repositorio:
 ```
   git clone https://github.com/rodriguezrod1/tasks-test
 ```

2. Configura tu base de datos en el archivo 
```
.env:
```
Ejemplo:

```
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=task_test
DB_USERNAME=root
DB_PASSWORD=
```

3. Instala las dependencias:
 ```
   composer install
```

4. Ejecutar las migraciones:
 ```
   php artisan migrate
```

5. Inicia el servidor local:
 ```
   php artisan serve
```



Para configurar la autenticación básica, sigue estos pasos:

1.  **Variables de Entorno:**

    Abre el archivo `.env` en la raíz del proyecto y agrega las siguientes variables, reemplazando `tu_usuario` y `tu_contraseña` con las credenciales que desees:

    ```
    BASIC_AUTH_USERNAME=tu_usuario
    BASIC_AUTH_PASSWORD=tu_contraseña
    ```

    Ejemplo:

    ```
    BASIC_AUTH_USERNAME=admin
    BASIC_AUTH_PASSWORD=secreto123
    ```

## Uso

1. Accede a la aplicación en `http://localhost:8000`

## Documentación adicional

-   [Documentación oficial de Laravel](https://laravel.com/docs)


## Contribuciones

Contribuciones y sugerencias son bienvenidas! Por favor, crea una nueva rama (feature/branch) y haz un pull request.

## Licencia

Este proyecto está bajo la licencia MIT. Ver el archivo LICENSE para más detalles.
