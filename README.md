# Registro De Alumnos

## Sobre el software

Este es un pequeño software para registrar materias, grados , asignacion de materias a dichos grados, como tambien un mantenimiento de una tabla de alumnos logrando asignar un grado, se pueden realizar un busqueda avanzada utilizando una peticion ajax, obteniendo de esta forma el grado y materias del alumno

#
### tecnologias y requerimientos 

- Laravel 6.*
- php 7.2 >
- mysql
- CDN de bootstrap
- CDN de Datatable
#

## 1- primero debe crear la base de datos en mysql

## 2- agregar las cedenciales de su servuidor local y acceso a la base de datos en el archivo .ENV 
ejemplo:

### DB_CONNECTION=mysql
### DB_HOST=127.0.0.1
### DB_PORT=3306
### DB_DATABASE=nombre_de_base_de_datos
### DB_USERNAME=usuario_de_base_de_datos
### DB_PASSWORD=contrasena_de_base_de_datos

## 3- con estosi hhace uso del achivo registro.sql  que se encuentra en el repositorio podra probar el software

## 4 - (opcional) si lo desea puede ejecutar las migraciones, para ellos debe seguir el paso 2 y luego ingresar desde su CMD a la carpeta raiz del proyecto y ejecutar "$ php artisan migrate", este comando creara las tablas de la base de datos sin necesidad de migrar el archivo registro.sql .
## lo siguiente seria llenar las tablas con registros para que pruebe de priumera mano el funcionamiento del software