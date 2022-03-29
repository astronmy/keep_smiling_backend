# Laravel API Keep Smiling

La versión desarrollada en la branch main tiene una authenticación onAuth2 JWT con Laravel Passport mientras que en la branch custom encontraremos una implementación custom con PHP 


## Configuración Base de Datos 

Una vez clonado el projecto debe configurar el archivo .env.example con sus datos de conexión en las variables

```
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=laravel
DB_USERNAME=root
DB_PASSWORD=
```

Luego renombrar el archivo de **.env.example** a **.env**

## Migraciones

Una vez configurada la base de datos debe ejecutar el siguiente comando para ejecutar las migraciones

```
php artisan migration 

```
Esto creara todas las tablas del proyecto

## Datos de Ejemplo

Pará cargar los datos de ejemplo ejecute lo siguiente:

```
php artisan db:seed
    
```

Esto cargara la tabla users, countries y dentists. Todos los usuarios creados tendran como password por defecto **keepsmiling**
Recuerde que todos los datos generados son aleatorios 

Luego debe generar las keys para passport para ello ejecute:

```
php artisan passport:keys

```
## Uso de la API

La API cuenta con 3 endpoints definidos, dos de ellos requieren que el usuario este authenticado

| Endopoint               | Method    | Description                                                                                      |
| :---                    |  :----:   |          :---:                                                                                   |
|   api/login             | POST      |  A través de este servicio obtendra el JWT que le permitira consumir el resto de los servicios   |
|   api/dentists          | GET       |  Require autorizacion Bearer. Retorna una colección de dentistas y permite filtrar por campos    |
|   api/countries         | GET       |  Require autorizacion Bearer. Retorna una colección de paises                                    |

Para mas documentación sobre la API descargue la colección de postman y su configuración de producción en:

[ API en Producción ](https://api.keepsmiling.renzovinci.com.ar/)

## Sitio en Producción

Para la presentación se deployeo tanto la API como el FrontEnd en producción para ver el sitio en funcionamiento acceda a través del siguiente vinculo

[ FrontEnd en Producción ](https://keepsmiling.renzovinci.com.ar/)

Si bien se solicitaba cargar una grilla con los datos de una API se agrego la funcionalidad de Login. Es decir, para poder ver el listado de dentistas deberá loguearse con un usuario y una vez logueado se mantendrá en sesión sus datos y podrá ver la grilla de dentistas pudiendo aplicar filtros. Para salir deberá tocar el boton salir.

El usuario de ejemplo es 

```
USER = dabshire@example.org
PASS = keepsmiling
    

```

## Repo del Front
El repo con la implentación del lado del FrontEnd se encuentra en:


[ FrontEnd Repo ](https://github.com/astronmy/keep_smiling_front)



