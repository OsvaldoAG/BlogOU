@extends('BlogUO.template')
@section('title')
Proceso de diagramacion de componentes de la arquitectura Cliente/Servidor
@endsection

@section('tema')
Tema 9
@endsection

@section('tematitulo')
 : Proceso de diagramacion de componentes de la arquitectura Cliente/Servidor
@endsection

@section('introduccion')
La creación de diagramas de software se redujo como resultado del cambio en el uso de metodologías ágiles. Cuando se crean diagramas, a menudo son confusos y poco claros.
El modelo C4 consiste en un conjunto jerárquico de diagramas de arquitectura de software para contexto, contenedores, componentes y código.
La jerarquía de los diagramas C4 proporciona diferentes niveles de abstracción, cada uno de los cuales es relevante para una audiencia diferente.
Evite la ambigüedad en sus diagramas incluyendo una cantidad suficiente de texto, así como una clave o leyenda para la notación utilizada

Nivel 1: El diagrama de contexto del sistema
El Nivel 1, un diagrama de contexto del sistema, muestra el sistema de software que está construyendo y cómo encaja en el mundo en términos de las personas que lo utilizan y los otros sistemas de software con los que interactúa.
Nivel 2: El diagrama del contenedor
El nivel 2, un diagrama de contenedor, amplía el sistema de software y muestra los contenedores (aplicaciones, almacenamiento de datos, microservicios, etc.) que componen este sistema de software. Las decisiones tecnológicas son también una parte fundamental de este diagrama. 
Nivel 3: El diagrama de componentes
El nivel 3, un diagrama de componentes, expande un contenedor individual para mostrar los componentes que contiene. Estos componentes deben asignarse a abstracciones reales (por ejemplo, una agrupación de códigos) en función de su código. 
Nivel 4: El código
Por último, si realmente lo desea o necesita, puede ampliar un componente individual para mostrar cómo se implementa este componente.
Una anotación
El modelo C4 no prescribe ninguna notación específica, y lo que usted ve en estos diagramas presentados es una notación simple que funciona bien en pizarras, papeles, notas adhesivas, fichas y una variedad de herramientas de diseño. También puede utilizar UML como notación, con el uso apropiado de paquetes, componentes y estereotipos.

@endsection

@section('imagentema')
images/ImgT9.jpeg
@endsection