# Phession - Gerenciador de Sessões para PHP

Phession é uma biblioteca leve e eficiente para gerenciar sessões em PHP, proporcionando um controle mais flexível e seguro.

## Características

- Gerenciamento simplificado de sessões;
- Opção de tempo de expiração customizado;
- Facilidade de integração com aplicações PHP modernas.

## Instalação

```sh
composer require silviooosilva/phessionPHP
```

## Uso Básico

```php

<?php

use Silviooosilva\Phession\Phession;

require_once __DIR__ . '/../vendor/autoload.php';

//Start - Initializes the session with its duration.

Phession::start(7200); // Tempo de duração da sessão. |INT|STRING

//Set - Stores any information in the session.

$ProfileKey = "DeveloperProfileKey";

$DeveloperProfile = [
  'name' => 'Sílvio Silva',
  'email' => 'gasparsilvio7@gmail.com',
  'role' => 'Developer'
];

Phession::set($ProfileKey, $DeveloperProfile);

```

Para mais exemplos de uso, navegue até a pasta de exemplo, dentro de **src**

## Configuração Avançada

(Em breve...)

## Contribuição

Contribuições são bem-vindas! Sinta-se à vontade para abrir um pull request ou issue.

## Testes

Para rodar os testes, vá para a raíz do projeto e digite o comando:

```sh
vendor/bin/phpunit
```
