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
docker exec -it 5d87b75a9b07 php -S localhost:8001
```

## CLASS-3

```sh
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
