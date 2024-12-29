
# GUIDE PHP COMMANDS

- Creating Server Embuting PHP
  - php -S localhost:8888 -d auto_prepend_file=server.php
  - A flag -S é usada para iniciar o servidor embutido do PHP.
  - `-d`: Permite alterar configurações do php.ini diretamente na linha de comando.
  - auto_prepend_file=server.php:
    - Esta diretiva indica que o arquivo server.php será automaticamente incluído 
    antes de qualquer outro script.

https://www.php.net/manual/pt_BR/features.commandline.php
https://www.php.net/manual/pt_BR/features.commandline.webserver.php
https://en.wikipedia.org/wiki/Port_(computer_networking)
https://www.php.net/manual/pt_BR/ini.core.php#ini.auto-prepend-file