# FizzBuzz

Este es un proyecto de aprendizaje que implementa el juego matemático FizzBuzz. El objetivo de este proyecto es mejorar tus habilidades de programación y al enfrentarse al problema de generar una lista de números que siga las reglas del FizzBuzz.. 

## Las Reglas del Juego

Dada una sucesión de números naturales desde 1 hasta N, deben cumplirse las condiciones: 

- Los números que sean múltiplos de 3 se cambian por Fizz.
- Los números que sean múltiplos de 5 se cambian por Buzz.
- Los números que sean múltiplos de 3 y 5 se cambian por FizzBuzz.

Al final la lista se presentaría, tal como el siguiente ejemplo:

```
    N = 15
    1, 2, Fizz, 4, Buzz, Fizz, 7, 8, Fizz, Buzz, 11, Fizz, 13, 14, FizzBuzz
```

## Instalación y uso

Para utilizar este proyecto, sigue los siguientes pasos:

1. Clona este repositorio en tu máquina local utilizando el siguiente comando:
   `git clone https://github.com/Alexis79Bck/FizzBuzz_TDD.git`

2. Ingresa al directorio del proyecto:
   `cd FizzBuzz`

3. Instala las dependencias del proyecto utilizando Composer:
   `composer install`

4. Ejecuta los tests para verificar que todo está funcionando correctamente:
   `php artisan test`
   o con este otro comando:
   `vendor/bin/phpunit`

5. Una vez realizada las pruebas, puedes iniciar el proyecto de laravel por medio del siguiente comando:
   `php artisan serve`

6. Ahora puedes visualizar la ejecución del proyecto.

## Requisitos

Este proyecto requiere PHP 8.0 o superior para ser ejecutado. Además, se recomienda tener instalado Composer para manejar las dependencias del proyecto.

## Estructura del Proyecto

```
FizzBuzz/
├── app/
│   ├── Classes
│   │   └── FizzBuzz.php
│   ├── Http
│   │   └── Controller
│   │       ├── ...
│   │       └── FizzBuzzController.php
│   └── ...
├── resources/
│   ├── ...
│   └── views/
│       ├── FizzBuzz_result.blade.php
│       └── FizzBuzz.blade.php
├── tests/
│   ├── Feature/
│   │   └── FizzBuzzFeatureTest.php
│   └── Unit/
│       └── FizzBuzzTest.php
├── vendor/
│   └── ...
├── .gitignore
├── composer.json
├── composer.lock
├── LICENSE.md
├── phpunit.xml
└── README.md
```

- app/: Contiene la lógica del proyecto, incluyendo la clase FizzBuzz que genera la lista de números siguiendo las reglas del juego.
- tests/: Contiene los tests del proyecto, separados en las carpetas Feature y Unit.
- vendor/: Contiene las dependencias del proyecto instaladas por Composer.
- .gitignore: Archivo que especifica los archivos y directorios que Git debe ignorar al hacer commits y push.
- composer.json: Archivo que especifica las dependencias del proyecto y sus versiones.
- composer.lock: Archivo generado automáticamente por Composer que especifica las versiones exactas de las dependencias instaladas.
- phpunit.xml: Archivo de configuración para PHPUnit, la herramienta de testing utilizada en el proyecto.
- README.md: Archivo que contiene la documentación del proyecto.

## Objetivo

Este proyecto fue desarrollado como parte de mi aprendizaje y mejora de mis habilidades de programación, con el objetivo de reforzar la práctica de las pruebas automatizadas. En particular, decidí implementar el juego FizzBuzz utilizando la metodología TDD (Test-Driven Development), que consiste en escribir primero los tests y luego el código que cumpla con esos tests.

Para implementar este proyecto, utilicé el framework Laravel en su version 10 ya que tiene integrado PHPUnit, que es una herramienta popular para pruebas automatizadas en PHP. Utilicé las pruebas para guiar el desarrollo de la clase FizzBuzz y asegurarme de que generara la lista de números siguiendo las reglas del juego. También escribí pruebas adicionales para asegurarme de que el código fuera robusto y manejara correctamente diferentes situaciones.

En resumen, este proyecto me permitió aplicar y mejorar mis habilidades de programación y pruebas automatizadas, y espero que pueda ser útil para otros desarrolladores que estén aprendiendo o buscando mejorar sus habilidades en estos temas. 

## Autor

Este proyecto fue desarrollado por Alexis E. Mata, un apasionado de la programación y la tecnología. 

Con este proyecto me permitió aumentar y mejorar mis habilidades de programación y por ello, compartiré lo que he aprendido con otros desarrolladores. Si tienes preguntas o comentarios sobre este proyecto, no dudes en contactarme a través de mi perfil de GitHub.

## Contribuciones

Si deseas contribuir a este proyecto, ¡eres bienvenido! Siéntete libre de hacer un fork del repositorio y enviar un pull request con tus cambios. También puedes reportar cualquier problema o sugerencia utilizando la sección de "Issues" de este repositorio. Te agradezco de antemano por tu interés en este proyecto.
