<html>
<header>
<h3>
Small micro services with products (nginx)
</h3>
</header>

<?php


$json_data = file_get_contents('http://flask-service');

$products = json_decode($json_data);

foreach($products->product as $v) {
    echo $v, '<br>';
}
