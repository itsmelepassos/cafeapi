# CaféApi Library Test

[![Maintainer](http://img.shields.io/badge/maintainer-@itsmelepassos-blue.svg?style=flat-square)](https://twitter.com/itsmelepassos)
[![Source Code](http://img.shields.io/badge/source-itsmelepassos/cafeapi-blue.svg?style=flat-square)](https://github.com/itsmelepassos/cafeapi)
[![PHP from Packagist](https://img.shields.io/packagist/php-v/itsmelepassos/cafeapi.svg?style=flat-square)](https://packagist.org/packages/itsmelepassos/cafeapi)
[![Latest Version](https://img.shields.io/github/release/itsmelepassos/cafeapi.svg?style=flat-square)](https://github.com/itsmelepassos/cafeapi/releases)
[![Software License](https://img.shields.io/badge/license-MIT-brightgreen.svg?style=flat-square)](LICENSE)
[![Build](https://img.shields.io/scrutinizer/build/g/itsmelepassos/cafeapi.svg?style=flat-square)](https://scrutinizer-ci.com/g/itsmelepassos/cafeapi)
[![Quality Score](https://img.shields.io/scrutinizer/g/itsmelepassos/cafeapi.svg?style=flat-square)](https://scrutinizer-ci.com/g/itsmelepassos/cafeapi)
[![Total Downloads](https://img.shields.io/packagist/dt/itsmelepassos/cafeapi.svg?style=flat-square)](https://packagist.org/packages/itsmelepassos/cafeapi)

###### CaféApi Library is a small set of classes developed in UpInside's Full Stack PHP Developer training for integration into the webservice of a SaaS platform developed in the course..

CaféApi Library é um pequeno conjunto de classes desenvolvidas na formação Full Stack PHP Developer da UpInside para integração ao webservice de uma plataforma SaaS desenvolvida no curso.

Você pode saber mais **[clicando aqui](https://www.upinside.com.br/fsphp)**.

### Highlights

- Simple installation (Instalação simples)
- Abstraction of all API methods (Abstração de todos os métodos da API)
- Easy authentication with login and password (Fácil autenticação com login e senha)
- Composer ready and PSR-2 compliant (Pronto para o composer e compatível com PSR-2)

## Installation

Uploader is available via Composer:

```bash
"itsmelepassos/cafeapi": "^1.0"
```

or run

```bash
composer require itsmelepassos/cafeapi
```

## Documentation

###### For details on how to use, see a sample folder in the component directory. In it you will have an example of use for each class. It works like this:

Para mais detalhes sobre como usar, veja uma pasta de exemplo no diretório do componente. Nela terá um exemplo de uso para cada classe. Ele funciona assim:

#### User endpoint:

```php
<?php

require __DIR__ . "/../vendor/autoload.php";

use ItsMeLePassos\CafeApi\Me;

$me = new Me(
    "suaapi.url.com",
    "seu@email.com.br",
    "suasenha"
);

//me
$user = $me->me();

//update
$user->update([
    "first_name" => "Leandro",
    "last_name" => "Passos",
    "genre" => "male",
    "datebirth" => "1978-06-16",
    "document" => "987654362100"
]);

//photo
$user->photo($_FILES["photo"]);

//test and result
if ($user->error()) {
    $user->error(); //object
} else {
    $user->response(); //object
}
```

#### Invoices endpoint:

```php
<?php

require __DIR__ . "/../vendor/autoload.php";

use ItsMeLePassos\CafeApi\Invoices;

$invoices = new Invoices(
    "suaapi.url.com",
    "seu@email.com.br",
    "suasenha"
);

//index
$index = $invoices->index(null);

//index filter
$index = $invoices->index([
    "wallet_id" => 23,
    "type" => "fixed_income",
    "status" => "paid",
    "page" => 2
]);

//create
$invoices->create([
    "wallet_id" => 23,
    "category_id" => 3,
    "description" => "Pagamento Cartão",
    "type" => "expense",
    "value" => "25000.20",
    "due_at" => "2019-10-02",
    "repeat_when" => "single",
    "period" => "month",
    "enrollments" => "1",
]);

//read
$invoices->read(91);

//update
$invoiceId = 91;
$invoices->update($invoiceId, [
    "wallet_id" => 23,
    "category_id" => 3,
    "description" => "Pagamento Cartão",
    "value" => "25000.20",
    "due_day" => 25,
    "status" => "paid"
]);

//delete
$invoices->delete(91);

//test and result
if ($invoices->error()) {
    $invoices->error(); //object
} else {
    $invoices->response(); //object
}
```

### Others

###### You also have classes for endpoints of portfolios and signatures, all the documentation of use with practical examples is available in the examples folder library. Please check there.

Você também conta com classes para os endpoints de carteiras e assinaturas, toda documentação de uso com exemplos práticos está disponível na pasta examples desta biblioteca. Por favor, consulte lá.

## Contributing

Please see [CONTRIBUTING](https://github.com/itsmelepassos/uploader/blob/master/CONTRIBUTING.md) for details.

## Support

###### Security: If you discover any security related issues, please email meu@email.com.br instead of using the issue tracker.

Se você descobrir algum problema relacionado à segurança, envie um e-mail para meu@email.com.br em vez de usar o rastreador de problemas.

Thank you

## Credits

- [Leandro Passos](https://github.com/itsmelepassos) (Developer)
- [All Contributors](https://github.com/robsonvleite/uploader/contributors) (This Rock)

## License

The MIT License (MIT). Please see [License File](https://github.com/itsmelepassos/cafeapi/blob/master/LICENSE) for more information.