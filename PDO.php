<?php
    $host= '127.0.0.1';
    $db= 'webshop';
    $user='root';
    $pass='';
    $charset='utf8mb4';

    $dsn= "mysql:localhost ; dbname=webshop; charset=$charset";
$opt= [
    PDO::ATTR_ERRMODE=> PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE=> PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES=> false,
];


try
{
    $connect= new PDO($dsn, $user, $pass, $opt);
    echo "Verbinding is gemaakt. ";
}
catch (PDOException $e )
{
    echo $e->getMessage();
    die("sorry, database probleem");
}

?>