## CMS Laravel + React

CMS Laravel + React es una **Aplicación CMS** desarrollada en Laravel y un **Starter Kit** para aplicaciones web utilizando `Laravel 9.x`.

Esta es una aplicación para minimizar tus problemas mientras creas una nueva aplicación web con todas las utilidades comunes usando Laravel y la Librería/Framwork de JavaScript (`React JS`).

---

## Acerca del Proyecto

**Tecnología Utilizada:**

1. Laravel `9.x`
2. PHP `8.1`
3. JavaScript
4. JQuery
5. React JS
6. Visual Studio Code

---

## Como utilizar

**1. Clonar el Repositorio Github**

```bash
git clone https://github.com/Rydel/cms-laravel-react.git
```

**2. Ir al directorio**

```bash
cd cms-laravel-react
```

**3. Instalar Composer**

```bash
composer install

# Si es necesario hacer un composer dump autoload con optimización
composer du -o
```

**3. Crear el env file**

```bash
Crear el archivo .env clonando el archivo .env.example
```

**4. Crear una Base de Datos con el siguiente nombre**

```bash
cms_laravel_react
```

**5. Ejecutar las migraciones y los seeders**

```bash
php artisan migrate:fresh --seed
```

**6. Ejecutar en tu máquina local**

```bash
php artisan serve
```

**7. Abrir el navegador**

```bash
http://localhost:8000
```

**8. Ir al portal admin del CMS**
Ir a este link - http://localhost:8000/admin

Iniciar sesión con las siguientes credenciales

```php
Username: superadmin
Password: 123456
```

---

## Utilidade del `Admin Panel`

> **Autenticación de Admin**

-   [x] Registro
-   [x] Login
-   [x] Olvidé contraseña
-   [x] Reseteo de Contraseña

> **Control de Admin**

-   [x] Control de Administrador
    -   [x] Crear Admin
    -   [x] Editar Admin
    -   [x] Listar Usuarios
    -   [x] Borrar usuarios
-   [x] Control de Roles
    -   [x] Crear Rol con permisos
    -   [x] Editar Rol y sus permisos
    -   [x] Borrar Rol
-   [x] Manejo de Permisos

    -   [x] Add Permission

-   [x] Manejo de Equipos
    -   [x] Asignar administradores/empleados en un Equipo

> **Control de Categorías**

-   [x] Control de Categorías
    -   [x] Crear Categoría
    -   [x] Editar Categoría
    -   [x] Listar Categorías
    -   [x] Borrar Categorías

> **Control de Páginas**

-   [x] Control de Páginas y Artículos
    -   [x] Crear Páginas y Artículos
    -   [x] Editar Páginas y Artículos
    -   [x] Listar Páginas y Artículos
    -   [x] Borrar Páginas y Artículos

> **Control de Blog**

-   [x] Control de Blog
    -   [x] Crear Blog
    -   [x] Editar Blog
    -   [x] Listar Blogs
    -   [x] Borrar Blog

> **Control de Servicios**

-   [x] Control de Servicios
    -   [x] Crear Servicios
    -   [x] Editar Servicios
    -   [x] Listar Servicios
    -   [x] Borrar Servicios

> **Configuraciones de Sitio**

-   [x] Control de Información del Sitio
    -   [x] Editar Configuraciones

## Utilidades de `Frontend`

> **Autenticación de usuarios**

1. Registro
2. Login
3. Olvidó Contraseña
4. Reseteo de Contraseña

---

## Screenshots

#### Panel Dashboard

![Panel Dashboard](https://i.ibb.co/JrTsJp2/Dashboard.jpg)

#### Panel CRUD de Usuarios

![Lista de Usuarios](https://i.ibb.co/dk1bFmf/CRUD-Usuarios.jpg)

#### Login

![Login](https://i.ibb.co/CtMKz7F/Login.jpg)

#### Home

![Home](https://i.ibb.co/q1WXQL6/Home.jpg)
