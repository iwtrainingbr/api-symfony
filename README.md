## Instalação

`php composer.phar install` ou `composer install`


### Banco de Dados

Criando o banco de dados
`php bin/console doctrine:database:create`


Criando as tabelas do banco
`php bin/console doctrine:schema:update --force`


Criando os dados falsos no banco de dados
`php bin/console doctrine:fixtures:load`