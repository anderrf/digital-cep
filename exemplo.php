<?php

    require_once "vendor/autoload.php";

    use anderrf\DigitalCep\Search;

    $busca = new Search;
    $resultado = $busca->getAddressFromZipCode('11730000');
    print_r($resultado);

?>