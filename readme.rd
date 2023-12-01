https://www.youtube.com/watch?v=2aiJuOV8pto

Extens�es:
PHPUnit Snippets
PHPUnit Test Explorer (PhpUnit for VSCode)

composer init
Alterar composer.json:
    "autoload": {
        "psr-4": {
            "app\\": "app/"
        }
    },
    "autoload-dev": {
        "psr-4": {
            "tests\\": "tests/"
        }
    },

composer dump-autoload ou composer du

Instalar o PHPUnit:
composer require 
"Search for a package: phpunit"
escolher : "[0] phpunit/phpunit"


Para atualizar estrutura / depend�ncias:
composer update

Vers�o:
vendor\bin\phpunit --version

Testes por pastas:
vendor/bin/phpunit tests --colors
vendor/bin/phpunit tests/cart --colors
vendor/bin/phpunit ./tests

Testes pelo xml:
vendor/bin/phpunit --testsuite=cart  --colors

Testes chamando m�todo:
vendor/bin/phpunit tests --colors --filter test_if_products_in_cart_id_greater_than_1