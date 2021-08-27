# Notes

> notes taken during the course

<!-- https://gitignore.io -->
<!-- https://github.com/github/gitignore -->

## Class-1

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
