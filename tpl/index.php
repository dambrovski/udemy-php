<?php

require_once("vendor/autoload.php");

use Rain\Tpl;

// config
$config = array(
    "tpl_dir"       => "tpl/",
    "cache_dir"     => "cache/"
);

Tpl::configure( $config );



// create the Tpl object
$tpl = new Tpl;

// assign a variable
$tpl->assign( "name", "Airton Dambrovski" );
$tpl->assign( "version", PHP_VERSION);

// assign an array
//$tpl->assign( "week", array( "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday", "Sunday" ) );

// draw the template
$tpl->draw( "index" );

$produtos = array(
    array("nome" => "Sabão em Pó", "quantidade" => 15),
    array("nome" => "Escova de Dente", "quantidade" => 53),
    array("nome" => "Creme Dental", "quantidade" => 37)
);

    // Listando os produtos


?>
