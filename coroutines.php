<?php

\Co\run(function () {
    go(function () {
        Co::sleep(2);
        echo 'After 2 seconds' . PHP_EOL;
    });

    go(function () {
        Co::sleep(1);
        echo 'After 1 seconds' . PHP_EOL;
    });
});
