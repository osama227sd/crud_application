<?php

define("hostname" , "localhost");
define("username" , "root");
define("password" , "");
define("database" , "crud_app");

$connect = mysqli_connect(hostname , username, password,database );

if(!$connect){

    die("datbase connected is failed");
}
?>