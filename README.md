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

Pará cargar los datos de ejemplo ejecute

```
php artisan db:seed
    
```

Esto cargara la tabla users, countries y dentists. Todos los usuarios creados tendran como password por defecto **keepsmiling**

Luego debe generar las keys para passport para ello ejecute:

```
php artisan passport:keys

```
## Uso de la API

La API cuenta con 3 endpoints definidos, dos de ellos requieren que el usuario este authenticado

| Endopoint               | Method    | Description                                                                                      |
| :---                    |  :----:   |          ---:                                                                                    |
|   api/login             | POST      |  A través de este servicio obtendra el JWT que le permitira consumir el resto de los servicios   |
|                         | GET       |  And more     |
|                         | GET       |  And more     |



