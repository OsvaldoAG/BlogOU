@extends('BlogUO.template')
@section('title')
Sistemas con arquitectura Cliente-Servidor
@endsection

@section('tema')
Tema 6
@endsection

@section('tematitulo')
 : Sistemas con arquitectura Cliente/Servidor
@endsection

@section('introduccion')
<p> Es un modelo de diseño de software en el que las tareas se reparten entre los proveedores de
<br>recursos o servicios, llamados servidores, y los demandantes, llamados clientes. </p>
<br>Un cliente realiza peticiones a otro programa, el servidor, quien le da respuesta. 
<br>Esta idea también se puede aplicar a programas que se ejecutan sobre una sola computadora,
<br>aunque es más ventajosa en un sistema operativo multiusuario distribuido a través de una red de computadoras.

<br>La separación entre cliente y servidor es una separación de tipo lógico, donde el servidor no se ejecuta 
<br>necesariamente sobre una sola máquina ni es necesariamente un solo programa.

<br>En la arquitectura C/S las características generales son:

<br>El Cliente y el Servidor pueden actuar como una sola entidad y también pueden actuar como entidades separadas, 
<br>realizando actividades o tareas independientes.
<br>Las funciones de Cliente y Servidor pueden estar en plataformas separadas, o en la misma plataforma.
<br>Cada plataforma puede ser escalable independientemente. Los cambios realizados en las plataformas de los 
<br>Clientes o de los Servidores, ya sean por actualización o por reemplazo tecnológico, se realizan de una manera transparente para el usuario final.
<br>La interrelación entre el hardware y el software está basada en una infraestructura poderosa, de tal forma
<br> que el acceso a los recursos de la red no muestra la complejidad de los diferentes tipos de formatos de datos y de los protocolos.
<br>Su representación típica es un centro de trabajo (PC), en donde el usuario dispone de sus propias aplicaciones
<br> de oficina y sus propias bases de datos, sin dependencia directa del sistema central de información de la organización.

@endsection

@section('imagentema')
images/ImgT6.jpeg
@endsection