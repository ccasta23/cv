# Proyecto Web con el Framework Laravel

Este proyecto es el resultado de un curso de programación para entornos web usando el framework de Laravel impartido en la Universidad de Caldas para el programa de ingeniería informática.

## Temas tratados en el curso

- Conceptos básicos de PHP. [Documentación oficial](https://www.php.net/)
- Framework de Laravel V7.0^. [Documentación Oficial](https://laravel.com/docs/7.x)
- Trabajo con base de datos incluyendo migraciones y archivos semilla. [Documentación Oficial](https://laravel.com/docs/7.x/database)
- Vistas con el Template Engine de blade. [Documentación Oficial](https://laravel.com/docs/7.x/views)
- Patrón de diseño Modelo, Vista, Controlador (MVC) con la estructura recomendada por Laravel. [Documentación Oficial](https://laravel.com/docs/7.x/structure)
- Controladores de tipo recurso con sus siete métodos por defecto implementados. [Documentación Oficial](https://laravel.com/docs/7.x/controllers)
- Validación de datos a través de Request. [Documentación Oficial](https://laravel.com/docs/7.x/validation#creating-form-requests)
- Envío de correo electrónico. [Documentación Oficial](https://laravel.com/docs/7.x/mail)
- Autenticación de usuario usando el scaffolding ofrecido por Laravel. [Documentación Oficial](https://laravel.com/docs/7.x/authentication)
- Creación de rutas en el archivo `web.php`. Rutas con parámetros. [Documentación oficial](https://laravel.com/docs/7.x/routing)
- Uso de Model Binding para recibir parámetros. [Documentación Oficial](https://laravel.com/docs/7.x/routing#route-model-binding)
- Eloquent como ORM usado por Laravel. [Documentación Oficial](https://laravel.com/docs/7.x/eloquent)
- Relación entre modelos de la base de datos. [Documentación Oficial](https://laravel.com/docs/7.x/eloquent-relationships)

## Puesta a punto del proyecto

Para poner en funcionamiento el proyecto, se debe clonar el repositorio actual y posteriormente en la carpeta del proyecto realizar los siguientes pasos:

### Prerequisitos

- Tener instalado el gestor de paquetes Composer.
- Tener instalado Node con su gestor de paquetes nmp (Para la interfaz gráfica de inicio de sesión).
- Tener instalado un motor de bases de datos. Puedes ser Postgresql o MySql.
- Tener instalado PHP.

### Instrucciones

1. Ejecutar el comando de instalación de paquetes de PHP Composer.
   `composer install`

2. Ejecutar el comando de instalación de paquetes de Javascript npm.
   `npm install`

3. Crear el archivo `.env` basado en el archivo `.env.example` incluido en el repositorio. Luego de tener el archivo creado se deben configurar las variables de conexión a la base de datos y las variables de autenticación al servidor de correos electrónicos (Para probar se puede usar [Mailtrap](https://mailtrap.io/)).

4. A continuación, se deben ejecutar las migraciones para que se creen las tablas de la base de datos, esto se realiza con el siguiente comando.
   `php artisan migrate`

5. Finalmente se ejecuta la aplicación, se registra un nuevo usuario y ya se pueden crear nuevos recursos.

`php artisan serve`

## Documentación del curso

Para más información de la creación del proyecto, dejo abierto el [documento oficial](https://docs.google.com/document/d/1-KdYgFyCFy1WHatkPmzu7eqYMPBOyOZ9-RKSQrciv_I/edit?usp=sharing) en donde explico paso por paso la creación del proyecto actual desde la puesta a punto del entorno de trabajo hasta dejar la aplicación totalmente funcional. En el documento dejo referencias a documentación y cursos que permiten complementar el conocimiento visto.

**Creado por**: Carlos Andres Castañeda Osorio
