# Prueba-LARAVEL

Se le solicita al postulante, generar una web para llenado de una encuesta sobre uso de redes sociales, dicho cuestionario deberá tener mínimo las siguientes preguntas:

-   Correo del participante    
-   Edad, elegir entre 4 rangos, ejemplo: 18-25, 26-33, 34-40, 40+
-   Sexo
-   Red social favorita
-   Tiempo promedio al día en Facebook
-   Tiempo promedio al día en WhatsApp
-   Tiempo promedio al día en Twitter
-   Tiempo promedio al día en Instagram
-   Tiempo promedio al día en Tiktok

La aplicación web adicionalmente puede contar con un apartado de estadísticas donde se pueda ver al menos:

-   Cantidad de encuestas respondidas    
-   Tiempo promedio por red social
-   Red social favorita
-   Red social menos querida
-   Rango de edad que más use cada red social (ejemplo: Facebook entre 18-25 e Instagram entre 26-33)

## Requerimientos para el sitio

Para la elaboración del proyecto se uso el Framework de LARAVEL corriendo en el entorno de laravel Valet usando las siguientes tecnologías:

 - Ngnix v1.21.4
 - Laravel v9.14.1
 - PHP v8.1.1
 - MySQL 5.5.5-10.6.4-MariaDB
 - Chart.js v3.8.0
 - JQuery v3.5.1

Para la ejecución del entorno se necesitara instalar los requerimientos mínimos para ejecutar un entorno local de laravel, guardar la carpeta del proyecto en la dirección del servidor local, ejecutar el siguiente comando en la terminal dentro de la carpeta del proyecto: 

> php  artisan  migrate
> php  artisan  db:seed

Los comandos mostrados ejecutaran la migración de la base de datos y realizaran las inserciones en la base de datos para ver reflejados los registros suficientes para visualizar las estadísticas y gráficas solicitadas en la prueba. 

Ir a la ruta del sistema en un explorador para visualizar la pagina.

## Notas principales del proyecto

Se creo un controlador de tipo **Resource** con los métodos principales para un CRUD llamado **EncuestaController**, el cual dentro de los métodos de la clase tiene las consultas e inserciones a la base de datos.

Las principales vistas se encuentran dentro de la carpeta de **encuestas**, las cuales están enlazadas con las rutas necesarias para la funcionalidad de proyecto.

## Capturas de pantalla del proyecto

A continuación se adjuntan capturas de pantalla del proyecto en ejecución con las tres principales pantallas que abarcan los requerimientos de la prueba:

Pagina de inicio del proyecto, dónde se visualizan todos los registros de la tabla encuesta con uso de la paginación de **Laravel** y **Eloquent**.

![index](https://user-images.githubusercontent.com/31545060/170889786-f35197db-03db-4beb-8165-4861c0d47fd9.png)

Pagina para la inserción de una nueva encuesta con los datos solicitados en el documento de requerimientos.

![formulario](https://user-images.githubusercontent.com/31545060/170889789-0836a94a-4c25-4f75-ab2e-33d9d797c088.png)

Se muestran las cuatro consultas para mostrar las estadísticas del sistema con los datos insertado.

![estadisticas](https://user-images.githubusercontent.com/31545060/170889762-20dd6151-8052-45cb-ac57-501300d10a29.png)
