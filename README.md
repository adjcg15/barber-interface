### Interfaz de barbería con PHP and MySQL

Este proyecto tuvo como objetivo desarrollar una interfaz web en la que se pudieran visualizar los servicios de una barbería, pudiendo seleccionar una hora para la cita y ver un resumen de lo que elegimos.
En la carpeta _build_ se encuentran los archivos estáticos procesados listos para producción, mientras que en la carpeta _src_ se encuentra todo el código y archivos estáticos utilizados en desarrollo.
La carpeta _includes_ contiene los archivos respectivos al manejo de PHP con la base de datos de MySQL.

##### Vistas
El proyecto es totalmente responsivo:
Por un lado se encuentra la vista del sitio principal que se ofrece para pantallas grandes:
![Vista de ordenador](http://drive.google.com/uc?export=view&id=1HWFYQZXpUQOFak3ljUmq2gLiLpM4BU4-)
Por otra parte está la vista para pantallas pequeñas, como las de delulares o tabletas en modo vertical:
![Vista de celular](http://drive.google.com/uc?export=view&id=1Wxmb0Js9TbAhJPuyHBlOW0jXcE9OC_cx)

##### Tecnologías
Las tecnologías utilizadas para desarrollar esta pequeña aplicación fueron muy básicas, abarcando:
* html
* SASS
* PHP
* MySQL

Además de estas tecnologías, se utilizó _gulp_ para compilar tareas repetitivas, como el procesamiento de SASS a CSS, o la disminución del peso del archivo JavaScript.

##### MySQL y PHP
Claramente no se puede adjuntar dentro de [GitHub](https://github.com/) la base de datos desarrollada, pero se incluye un archivo _ejemploDBRes.js_ que contiene un ejemplo de respuesta de la base de datos.
El archivo _servicios.php_ ubicado en la raíz del proyecto es el endpoint desde el cual se recuperan todos los servicios almacenados en la base de datos, aquellos que se presentan en el html con ayuda de JavaScript, desde donde se hace un fetch a dicho endpoint.