# Docker

Como ejemplo vamos a crear una imagen para poder ejecutar aplicaciones en PHP 7. Usaremos como imagen base php:7.0-apache y una aplicación en PHP para hacer la prueba.
Vamos a realizar la prueba en una máquina Windows 10 usando Docker para Windows. Creamos en el Directorio raíz de la unidad C: una carpeta con todos los archivos necesarios, por ejemplo C:\EjemploDF. Dentro de ésta carpeta colocaremos:
-	El archivo Dockerfile.
-	El archivo sw_ejemplo.conf con la configuración del sitio web de la aplicación.
-	La carpeta app conteniendo el archivo saludo.php con el código PHP de la aplicación.
