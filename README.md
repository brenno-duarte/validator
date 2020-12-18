<p align="center">
  <a href="https://github.com/brenno-duarte/validator/releases"><img alt="GitHub release (latest by date)" src="https://img.shields.io/github/v/release/brenno-duarte/validator?style=flat-square"></a>
  <a href="https://github.com/brenno-duarte/validator/blob/master/LICENSE"><img alt="GitHub" src="https://img.shields.io/github/license/brenno-duarte/validator?style=flat-square"></a>
</p>

## Sobre

API não oficial em PHP para os principais serviços dos Correios.

## Instalação via Composer

```
composer brenno-duarte/validator
```

## Inicializando

```php
require_once 'vendor/autoload.php';

use Validator\Validator;

$val = new Validator();
```

## Como usar

### Validar CPF

```php
$res = $val->cpf("000.000.000-00");

var_dump($res);
```

### Validar telefone

```php
$res = $val->phone("(00) 90000-0000");

var_dump($res);
```

### Validar CNPJ

```php
$res = $val->cnpj("00.000.000/0000-00");

var_dump($res);
```

### Validar e-mail

```php
$res = $val->email("email@domain.com");

var_dump($res);
```

### Validar URL
 
```php
$res = $val->url("https://vendascontrol.com.br");

var_dump($res);
```

## License

[MIT](https://github.com/brenno-duarte/validator/blob/master/LICENSE)
