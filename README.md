<p align="center"><img src="./public/img/Readme.MD/CradaLogoGat.png?raw=true" width="200"></a></p>


CRADA Tech Events📌
============

***

## Introducción🚀 

El proyecto "CRADA TECH EVENTS", es una aplicación web para gestionar cursos online como talleres, masterclass o webinars.Los usuarios podrán ver la descripción de un evento, apuntarse y desapuntarse. Podrán ver la lista de los eventos a los que se han apuntado. El administrador tiene las herramientas para la gestión (CRUD) de los eventos.
## Objetivos de la práctica🛫 

1.- Aplicar el patrón MVC (Model, View, Controller).

2.- Aplicar testing.

3.- Introducirnos a las bases de Laravel.

4.- Entender componentes de vistas y controladores.

5.- Practicar el proceso de contruciñon de elementos y su vinculación.


## Estructura 📚 

- Requisitos Funcionales 🎯:

    - En portada la aplicación tendrá un slider con las masterclasses destacadas. éstas serán seleccionables por el administrador.
    - En portadase muestra una vista con los eventos ordenados del más cercano al más lejano en el tiempo.
    - Los eventos incluyen como: título, fecha/hora, número máximo de participantes, descripción y una imagen.
    - Los eventos pasados se muestran en la vista de pasados pero se mantienen identificables como no disponibles.
    - Los usuarios puede registrarse para apuntarse a un evento. Una vez apuntados no pueden volver a hacerlo.
    - Al apuntarse a un evento, recibirán un email (empresarial - html ) con el link (zoom, meets, etc..) en donde se va a realizar, así como recordando el título del evento, la hora y el día.
    - Los usuarios pueden ver en una página la lista de los eventos a los que están registrados.
    - El administrador podrá hacer CRUD de los eventos.
    - Cuando un evento esté lleno (máximo número de participantes) nadie podrá registrarse.
    - Test de aceptación.
    - Envío de el email se realiza por sistema de colas.
    - Para el Frontend, se usan componentes de blade.
    
## Comenzando 🚀 
Estas instrucciones te permitirán obtener una copia del proyecto en funcionamiento en tu ordenador local, para propósitos de desarrollo y pruebas:

Abre la terminal y ejecuta:

1. Clone git https://github.com/.git para descargar el proyecto, realiza un fork.
2. Crear una base de datos en phpMyAdmin en local.
3. Nombre de base de datos : tech-events
4. Ejecutar Migracion "php artisant migration:fresh --seed"

## Install

- composer install
- npm run watch
- npm run dev

## 🚀 Proyecto en producción

Dónde encontrar el proyecto en producción:

## Wireframe 🛸
Wireframe de la idea principal del proyecto con funcionalidad:

<p align="center"> 
  <img src="./Readme/wireframe/movil.png?raw=true" width=80%>
  <img src="./Readme/wireframe/destopk.png?raw=true" width=100%>
</p>



## Versión Desktop 🛰️
<p align="center"> 
  <img src="./Readme/Mockup/Landing1.png?raw=true" width=50%>
</p>
<p align="center"> 
  <img src="./Readme/Mockup/Landing2.png?raw=true" width=50%>
</p>
<p align="center"> 
  <img src="./Readme/Mockup/Landing3.png?raw=true" width=50%>
</p>

## Versión Mobile First 🪐
<p align="center"> 
  <img src="./Readme/Mockup/Movilfinal.png?raw=true" width=100%>
</p>


## Dependencias 🚁

* Frontend: Boostrap HTML, CSS, SCSS - Opcional.
* Backend: PHP, laravel.
* Bases de datos: MySQL.
## Herramientas  🧰 

* Miró
* Figma
* Mockup Ninja
* Trello
* Font-face
* Metodologías Ágiles
* Bootstrap
* Laravel
* SQL
* PHP-MyAdmin

## Autores🌻 
* Sol Turipe.
* Cecilia Carbajal.
* Clàudia Calero Duró.
* Davina Medina.
* Abdessamad Belkhialat.
* Miquel Cruz.


## Gratitud 🎁
* Comenta a otros sobre este proyecto 📢 .
* Apoya nuestros proyectos 🐈‍⬛.
* Hecho con  ❤️ por [CRADA 🐱](https://github.com/crada2/TechEventsLaravel)



