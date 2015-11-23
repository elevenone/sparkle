# Spark

[![Latest Stable Version](https://img.shields.io/packagist/v/sparkphp/spark.svg)](https://packagist.org/packages/elevenone/sparkling-in-the-rain)

Spark is a PSR-7 compliant [Action-Domain-Responder](https://github.com/pmjones/adr)
(ADR) system. While it may look like a micro-framework (and it is), it is more like a
wrapper around the real logic of your application domain. It's also [PSR-1](http://www.php-fig.org/psr/psr-1/),
[PSR-2](http://www.php-fig.org/psr/psr-2/), and [PSR-4](http://www.php-fig.org/psr/psr-4/) compliant.

Check out the source project [here](http://github.com/sparkphp/Spark).

Confirm the installation by changing into the project directory and starting the
built-in PHP web server:

```bash
cd spark-project
php -S localhost:8000 -t web/
```

You can then browse to <http://localhost:8000/hello> and see JSON output:

```json
{"hello": "world"}
```

You can also browse to <http://localhost:8000/hello/nancy> and see modified JSON output:

```json
{"hello":"nancy"}
```

You can also browse to <http://localhost:8000/plates/mikka> and see plates output:

```html
hello: mikka
```
