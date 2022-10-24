<?php
$host="bq36b1laj9tspvtyfk0a-mysql.services.clever-cloud.com";
$bd="bq36b1laj9tspvtyfk0a";
$usuario="uextwwe1soc1adhw";
$contrasenia="0EyhOqBvwyFjCE7HWZTh";

try {
        $conexion=new PDO("mysql:host=$host;dbname=$bd",$usuario,$contrasenia);    

} catch   ( Exception $ex) {

    echo $ex->getMessage();
}
?>