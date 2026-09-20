PROYECTO PHP + MYSQL

1. Copiar la carpeta api_productos a:
   C:\xampp\htdocs\

2. Encender Apache y MySQL en XAMPP.

3. Abrir phpMyAdmin:
   http://localhost/phpmyadmin

4. Ejecutar base_datos.sql.

5. Probar:
   http://localhost/api_productos/listar.php

   Resultado esperado:
   Un arreglo JSON con los productos.

   Ejemplo:
   [
     {
       "id": 1,
       "nombre": "Laptop",
       "descripcion": "Computadora portátil",
       "precio": "2500.00"
     }
   ]

2. Eliminar producto
   URL:
   http://localhost/api_productos/eliminar.php

   Método:
   POST

   Parámetro:
   id

   Ejemplo de envío con formulario o cURL:
   curl -X POST -d "id=1" http://localhost/api_productos/eliminar.php

   Respuesta:
   - ok: si se eliminó correctamente
   - error: si hubo un problema

Configuración de la base de datos
El archivo conexion.php usa esta configuración por defecto:
- Servidor: localhost
- Usuario: root
- Contraseña: vacía
- Base de datos: tienda

Si cambias la configuración de MySQL, modifica estos valores en conexion.php.

Notas
- La API trabaja con JSON y charset UTF-8.
- El proyecto es una base simple para aprender conexión PHP + MySQL + JSON.
- Puedes ampliarlo con endpoints para crear, actualizar o buscar productos.

