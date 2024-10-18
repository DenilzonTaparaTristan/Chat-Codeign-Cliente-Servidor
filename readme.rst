###################
Chat-Codeign-Cliente-Servidor
###################

Este repositorio contiene un proyecto de chat en tiempo real desarrollado utilizando PHP, WebSockets y el framework CodeIgniter. El objetivo de esta aplicación es permitir la comunicación bidireccional entre múltiples clientes a través de un servidor WebSocket, implementado con Ratchet.

*******************
Descripción del Proyecto
*******************

Este proyecto demuestra una arquitectura cliente-servidor básica donde los usuarios pueden conectarse, enviar y recibir mensajes en tiempo real. La aplicación utiliza WebSockets para mantener una conexión persistente entre el servidor y los clientes, permitiendo una comunicación rápida y eficiente sin necesidad de solicitudes HTTP repetidas.

**************************
Características:
**************************
- Servidor WebSocket: Implementado con Ratchet en PHP.
- Comunicación en tiempo real: Los mensajes se propagan instantáneamente entre todos los clientes conectados.
- Interfaz gráfica sencilla: Desarrollada en HTML, CSS y JavaScript, para facilitar el uso del chat.
- Integración con CodeIgniter: La arquitectura cliente-servidor está integrada con el framework para mejorar la organización y escalabilidad del proyecto.

*******************
Requisitos Previos
*******************

Para poder ejecutar esta aplicación de chat en tu entorno local, necesitarás los siguientes componentes:

- PHP 7.x o superior
- XAMPP o WAMP para montar el entorno de desarrollo.
- Composer para la gestión de dependencias (instalar Ratchet).
- Framework CodeIgniter (versión 3 o superior).
- Ratchet: Librería PHP para manejar WebSockets.

************
Estructura del Proyecto
************

- application/controllers/Chat.php: Controlador principal que carga la vista del chat.
- application/views/chat_view.php: Vista que contiene la interfaz del chat.
- application/controllers/ChatServer.php: Implementación del servidor WebSocket utilizando Ratchet.
- runChatServer.php: Script que inicia el servidor WebSocket.

*******
Uso
*******
1. Accede al cliente de chat en tu navegador a través de la URL especificada en la configuración de CodeIgniter.
2. Abre múltiples pestañas o diferentes navegadores para probar la comunicación entre clientes.
3. Escribe un mensaje en el campo de texto y haz clic en "Enviar" o presiona "Enter" para que el mensaje sea enviado.
4. Verás cómo los mensajes enviados son recibidos por todos los clientes conectados en tiempo real.

*******
Tecnologías Utilizadas
*******
- PHP: Lenguaje de programación del lado del servidor.
- Ratchet: Librería de PHP para WebSockets.
- CodeIgniter: Framework PHP para organizar la aplicación.
- HTML5, CSS3, JavaScript: Para la construcción de la interfaz gráfica del chat.


*********
Resources
*********

-  `User Guide <https://codeigniter.com/docs>`_
-  `Contributing Guide <https://github.com/bcit-ci/CodeIgniter/blob/develop/contributing.md>`_
-  `Language File Translations <https://github.com/bcit-ci/codeigniter3-translations>`_
-  `Community Forums <http://forum.codeigniter.com/>`_
-  `Community Wiki <https://github.com/bcit-ci/CodeIgniter/wiki>`_
-  `Community Slack Channel <https://codeigniterchat.slack.com>`_

Report security issues to our `Security Panel <mailto:security@codeigniter.com>`_
or via our `page on HackerOne <https://hackerone.com/codeigniter>`_, thank you.

***************
Acknowledgement
***************

The CodeIgniter team would like to thank EllisLab, all the
contributors to the CodeIgniter project and you, the CodeIgniter user.
