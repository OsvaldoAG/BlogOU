@extends('BlogUO.template')
@section('title')
Sistemas de conexión libre y a través de redes
@endsection

@section('tema')
Tema 5
@endsection

@section('tematitulo')
 : Sistemas de conexión libre y a través de redes
@endsection

@section('introduccion')
<br>Sistemas de conexion libre:
<br>Estas computadoras de escritorio se conectan a las computadoras de servicio empleando software que permite la emulación de algún tipo de terminal. En otros de los casos se les transfiere la información haciendo uso de recursos magnéticos o por trascripción.
<br>Caracteristicas:
<br> •	Combinación de un cliente que interactúa con el usuario, y un servidor que interactúa con los recursos a compartir. El proceso del cliente proporciona la interfaz entre el usuario y el resto del sistema. El proceso del servidor actúa como un motor de software que maneja recursos compartidos tales como bases de datos, impresoras, Módem, etc.
<br> •	Las tareas del cliente y del servidor tienen diferentes requerimientos en cuanto a recursos de cómputo como velocidad del procesador, memoria, velocidad y capacidades del disco e input-output devices.
<br> •	Se establece una relación entre procesos distintos, los cuales pueden ser ejecutados en la misma máquina o en máquinas diferentes distribuidas a lo largo de la red.
<br> •	Existe una clara distinción de funciones basadas en el concepto de”servicio”, que se establece entre clientes y servidores.
<br> •	La relación establecida puede ser de muchos a uno, en la que un servidor puede dar servicio a muchos clientes, regulando su acceso a los recursos compartidos.
<br> •	Los clientes corresponden a procesos activos en cuanto a que son estos los que hacen peticiones de servicios. Estos últimos tienen un carácter pasivo, ya que esperan peticiones de los clientes.
<br> •	No existe otra relación entre clientes y servidores que no sea la que se establece a través del intercambio de mensajes entre ambos. El mensaje es el mecanismo para la petición y entrega de solicitudes de servicios.
<br> •	El ambiente es heterogéneo. La plataforma de hardware y el sistema operativo del cliente y del servidor no son siempre los mismos. Precisamente una de las principales ventajas de esta arquitectura es la posibilidad de conectar clientes y servidores independientemente de sus plataformas.
<br> •	El concepto de escalabilidad tanto horizontal como vertical es aplicable a cualquier sistema Cliente-Servidor. La escalabilidad horizontal permite agregar más estaciones de trabajo activas sin afectar significativamente el rendimiento. La escalabilidad vertical permite mejorar las características del servidor o agregar múltiples servidores.
<br>Ventajas:
<br> •	Facilita la integración entre sistemas diferentes y comparte información, permitiendo por ejemplo que las máquinas ya existentes puedan ser utilizadas pero utilizando interfaces más amigables el usuario. De esta manera, se puede integrar PCs con sistemas medianos y grandes, sin necesidad de que todos tengan que utilizar el mismo sistema operativo.
<br> •	Al favorecer el uso de interfaces gráficas interactivas, los sistemas construidos bajo este esquema tienen una mayor y más intuitiva con el usuario. En el uso de interfaces gráficas para el usuario, presenta la ventaja, con respecto a uno centralizado, de que no siempre es necesario transmitir información gráfica por la red pues esta puede residir en el cliente, lo cual permite aprovechar mejor el ancho de banda de la red.
<br> •	La estructura inherentemente modular facilita además la integración de nuevas tecnologías y el crecimiento de la infraestructura computacional, favoreciendo así la escalabilidad de las soluciones.
<br> •	Contribuye además a proporcionar a los diferentes departamentos de una organización, soluciones locales, pero permitiendo la integración de la información.
<br>Desventajas:
<br> •	El mantenimiento de los sistemas es más difícil pues implica la interacción de diferentes partes de hardware y de software, distribuidas por distintos proveedores, lo cual dificulta el diagnóstico de fallas.
<br> •	Cuenta con muy escasas herramientas para la administración y ajuste del desempeño de los sistemas.
<br> •	Es importante que los clientes y los servidores utilicen el mismo mecanismo (por ejemplo sockets o RPC), lo cual implica que se deben tener mecanismos generales que existan en diferentes plataformas.
<br> •	Hay que tener estrategias para el manejo de errores y para mantener la consistencia de los datos.
<br> •	El desempeño (performance), problemas de este estilo pueden presentarse por congestión en la red, dificultad de tráfico de datos, etc.
<br>Sistemas de conexión a través de redes: 
<br> Una red conecta computadoras, teléfonos móviles, periféricos e incluso dispositivos IoT (Internet of Things). Los conmutadores, enrutadores y puntos de acceso son los conceptos básicos de redes esenciales.
<br> Primero, los routers se encargan de la interconexión de las redes. En un segundo nivel, los conmutadores (switches) son los encargados de la interconexión de equipos dentro de una misma red, es decir, son los dispositivos que junto al cableado constituyen las redes de área local (LAN).
<br> Los conmutadores realizan esta función para medios cableados cuando la interconexión se realiza de forma inalámbrica; el dispositivo encargado se denomina punto de acceso inalámbrico (WAP o AP). A través de ellos, los dispositivos conectados a la red pueden comunicarse entre sí y con otras redes, como internet.
<br> El modelo OSI usa capas para dar una descripción visual de lo que está sucediendo con un sistema de red en particular. Las 7 capas son:
<br> 1.	Aplicación
<br> 2.	Presentación
<br> 3.	Sesión
<br> 4.	Transporte
<br> 5.	Red
<br> 6.	Enlace de datos
<br> 7.	Física

@endsection

@section('contenido')


@endsection

@section('imagentema')
images/ImgT5.jpg
@endsection