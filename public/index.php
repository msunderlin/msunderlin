<?php

echo "hello from the ".__DIR__."/index.php file <br/>";
$params = parse_url($_SERVER['REQUEST_URI']);
var_dump($params);

parse_str($params['query'],$query);
$params = str_replace('index.php','',$params);
$params = explode('/',$params['path']);
$params = array_values(array_filter($params));

