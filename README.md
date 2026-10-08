# EcoDrive - Sistema de gestión de alquiler de vehículos

## Descripción

EcoDrive es una práctica desarrollada en PHP para trabajar con la gestión de reservas y un catálogo de vehículos.

El objetivo es aplicar diferentes conceptos de programación del lado del servidor, como la validación de datos, el uso de funciones, el tratamiento de arrays y la seguridad al mostrar información.

## Tecnologías utilizadas

- PHP 8
- HTML
- JavaScript
- Git y GitHub

## Estructura del proyecto

El proyecto está dividido en dos archivos principales:

**procesador.php**

- Configuración de PHP y validación de los días de alquiler recibidos mediante GET.
- Cálculo del importe total de las reservas.
- Control de excepciones con (try), (catch) y (throw).
- Clasificación de descuentos mediante (match).

**reporte.php**

- Creación de un catálogo de vehículos mediante un array multidimensional.
- Tratamiento de textos con funciones multibyte.
- Comprobación de valores nulos con (isset()) y (array_key_exists()).
- Ordenación de vehículos según su autonomía.
- Presentación de los datos en una tabla HTML.
- Protección de datos mediante (htmlspecialchars()).
- Uso de buffer de salida y transferencia de datos a JavaScript mediante JSON.

## Ejecución del proyecto

Para ejecutar el proyecto en local, abrir una terminal en la carpeta del proyecto y utilizar:

```bash
php -S localhost:8000
```

Después, acceder desde el navegador a:

**Procesador de reservas:**

http://localhost:8000/procesador.php?dias=5

**Catálogo de vehículos:**

http://localhost:8000/reporte.php

## Funcionalidades principales

El sistema permite validar los días de alquiler, calcular el importe de las reservas y clasificarlas según su total.

También muestra un catálogo de vehículos ordenado por autonomía, con información sobre sus características y descuentos.

Además, se aplican medidas básicas de seguridad para mostrar los datos correctamente en HTML y transferirlos a JavaScript.

## Autoría

Práctica realizada por María Rosa Erika Stancicu.

**Módulo:** Desarrollo Web en Entorno Servidor (DWES).

**Proyecto:** EcoDrive.
