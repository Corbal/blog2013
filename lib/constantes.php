<?php
// Rutas del sistema.
//definimos las rutas fisicas de las carpetas privadas como una constante
//RAIZ nos devolvería por ejemplo algo como ésto:/var/www/clients/client94/web80/web/dwes/tema4/blog2013/
define('RAIZ', dirname(__DIR__) . '/');
define('RUTA_INC', RAIZ . 'inc/');
define('RUTA_LIB', RAIZ . 'lib/');
define('RUTA_CONF', RAIZ . 'conf/');
define('RUTA_FOTOS', RAIZ . 'fotos/');

// Bases de datos.
define('BD_SERVIDOR', $_SERVER['HTTP_HOST']);
define('BD_NOMBRE', 'c81Base1');
define('BD_USUARIO', 'c81MySql');
define('BD_PASSWORD', 'abc123.');


// Creamos la conexión de la base de datos.
$conexion=mysql_connect(BD_SERVIDOR,BD_USUARIO,BD_PASSWORD) or die(mysql_error());

// Seleccionamos la base de datos en la conexión anterior.
mysql_select_db(BD_NOMBRE,$conexion) or die(mysql_error());

// Para recibir correctamente los datos en UTF-8 en la conexión.
mysql_query("set names 'UTF8'",$conexion) or die(mysql_error());
?>