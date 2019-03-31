<?php
echo "Hostname 'redis' can be found at ".gethostbyname('redis'). "\n";

$hostname='mysql';
$username='andres';
$password='secret';
$dbname="testing";

try{
    $dbh = new PDO("mysql:host=$hostname;dbname=$dbname", $username, $password, 
    [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
    ]);
    echo "Conectado a 'mysql in ". gethostbyname('mysql'). "\n";

}catch(Exeption $e){
    echo "no se ha podido establecer la conexion";
    echo $e->getMessage();
}