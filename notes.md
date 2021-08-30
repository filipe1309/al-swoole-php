# Notes

> notes taken during the course

<!-- https://gitignore.io -->
<!-- https://github.com/github/gitignore -->

## CLASS-1

```sh
docker build -t php-swoole .

docker run -itv $(pwd):/app -w /app -p 8080:8080 php-swoole bash
```

On container:

```sh
php -m

php http-server.php
```

https://www.swoole.co.uk/docs/modules/swoole-http-server-doc

## CLASS-2

```sh
time php coroutines.php
```

```sh
docker exec -ti $(docker ps -qf "name=server") php -S localhost:8001
```

## CLASS-3

```sh
docker-compose up
# OR
docker run --rm -itv $(pwd):/app -w /app -p 8080:8080 php-swoole php http-server.php

```

https://www.swoole.co.uk/docs/modules/swoole-runtime-flags

## CLASS-4

```sh
cd mvc

php vendor/bin/doctrine orm:schema-tool:create

php vendor/bin/doctrine dbal:run-sql "INSERT INTO usuarios (email, senha) VALUES ('email@example.com', '\$2y\$10\$mDR7DtqcGJRevYBW0mvVhuC5cEJdFrkamqpkHRy8mMsy7sq4a/piK')"

php -S localhost:8080 -t public
```

http://localhost:8080/listar-cursos

```sh
docker run --rm -itv $(pwd):/app -w /app -p 8080:8080 php-swoole php mvc/public/swoole.php

docker run --rm -itv $(pwd):/app -w /app -p 8080:8080 php-swoole bash
php mvc/public/swoole.php
```

https://github.com/chubbyphp/chubbyphp-swoole-request-handler

https://github.com/phpearth/swoole-engine/blob/master/docs/sessions.md

https://www.php.net/manual/en/features.session.security.management.php

https://github.com/psr7-sessions/storageless#what-is-the-problem-with-extsession

### Swoole Table

https://www.swoole.co.uk/docs/modules/swoole-table

https://www.swoole.co.uk/docs/modules/swoole-table-example

## CLASS-5

https://docs.mezzio.dev/mezzio-swoole/v2/intro/

https://www.swoole.co.uk/article/symfony-swoole

https://laravel.com/docs/8.x/octane
