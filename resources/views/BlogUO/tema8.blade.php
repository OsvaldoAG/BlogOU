@extends('BlogUO.template')
@section('title')
Clasificación de los sistemas de informacion por arquitectura
@endsection

@section('tema')
Tema 8
@endsection

@section('tematitulo')
 : Clasificación de los sistemas de informacion por arquitectura
@endsection

@section('introduccion')
<br>1.- Monopuesto – Monousuario.
<br>En este caso, el servidor y el puesto de trabajo es el mismo ordenador y un simple explorador de Windows
<br> sirve perfectamente para gestionar los ficheros.
<br>2.- Cliente-Servidor.
<br>Hay un «ordenador central», un servidor, en el que se almacenan todos los documentos (archivos) y 5, 10…25
<br> usuarios acceden desde sus ordenadores, conectados en red local, a consultar y añadir documentos a la base
<br> de datos común. En el servidor debe haber un gestor de base de datos, como Oracle, SQL Server, MySQL o algún otro. 
<br>3.- Servidor-Clientes Web.
<br>No hay que instarla un “software cliente” específico para acceder a los datos sino que se utiliza un simple
<br> navegador Web (Internet Explorer, FireFox, Chrome o Safari) Esto simplifica sensiblemente la instalación 
<br>inicial del sistema, suele ser menos cómodo y ágil que los programas específicos diseñados expresamente.
<br>4.- Cliente-Servidor + Clientes Web.
<br>Tenemos un servidor con los datos, algunos usuarios acceden con software específico y el resto con un navegador
<br> Web. Permite la instalación de un software específico, potente y ágil, para los usuarios que utilizan frecuentemente
<br> el software de gestión y proporciona acceso a docenas o cientos de usuarios esporádicos sin necesidad de instalar
<br> el programa en cada uno de esos cientos de ordenadores.
<br>5.- Cliente-Servidor + Clientes Web + Acceso remoto.
<br>Es una evolución de la anterior a la que se suma el acceso desde el exterior (Internet) utilizando portátiles,
<br> tabletas (iPad), teléfonos móviles o simplemente un ordenador conectado a Internet. En estos dispositivos que
<br> no están conectados directamente a la red local de la empresa se utiliza el navegador para acceder a la base de
<br> datos de documentos usando la dirección IP de un servidor situado en la empresa.
<br>6.- Oficinas interconectadas en modo Cliente-Servidor + Cliente Web.
<br>Si la empresa tiene varias oficinas en localizaciones distintas (en la misma ciudad o en cualquier lugar del
<br> mundo), puede utilizar la infraestructura anterior para conectarse, no solo desde dispositivos móviles, sino
<br> desde las redes locales de cualquier oficina al servidor “central” en el que están los datos.
<br>7.- Cloud Computing.
<br>Es una variante de cualquiera de los casos anteriores, pero con el servidor “en la nube” en lugar de estar
<br> físicamente en la oficina de la empresa. Ya no hablamos de servidor en red local, sino de servidor “remoto”,
<br> aunque para los usuarios debe ser indiferente que el servidor esté en la habitación de al lado o en un CPD 
<br>(centro de proceso de datos) de cualquier país. 

@endsection

@section('imagentema')
images/ImgT8.jpeg
@endsection