# Service API
API de métodos realizada con laravel 5.8, con una función implementa para retornar el n-ésimo numero de la serie de fibonachi.

```
public function getNFibonachi($n) { } // retorna un json {'e-nesimo': number}
```

## Required
```
"php": "^7.1.3"
"composer": https://getcomposer.org/

Recommended local development environment: https://laravel.com/docs/5.8/homestead

```

## Setup

```
> git clone https://github.com/catalanseb/service_api
> cd service_api
> composer install
```

## Call
```
http://localhost/api/v1/fibonachi/$n  
$n is number
```
