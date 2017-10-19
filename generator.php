<?php

foreach (glob(__DIR__ . '/factory/*.json') AS $factoryFile) {
    $p = pathinfo($factoryFile);
    $cityPath = __DIR__ . '/' . $p['filename'];
    if (!file_exists($cityPath)) {
        mkdir($cityPath, 0777, true);
    }
    exec("mv {$factoryFile} {$cityPath}/factories.json");
    exec("cp index.html {$cityPath}/index.html");
    exec("cp main.js {$cityPath}/main.js");
}
