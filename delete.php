<?php
include 'includs/header.php';
require 'vendor/autoload.php';

$pdao = new \App\Model\ProdutoDao();

if (isset($_GET['id'])) {

    if( $pdao->delete($_GET['id'])){
        header('location: index.php');
    }
   
}
