<?php



try { 
    
    $nom_del_server="localhost";
    $nom_usuari="sql_injection";
    $contrasenya="";
    $nom_db="sql_injection";


    $mysqli = new mysqli($nom_del_server,$nom_usuari,$contrasenya,$nom_db);
    mysqli_set_charset($mysqli,"utf8");


    if ($mysqli->connect_error) {
        throw new mysqli_sql_exception($mysqli->connect_error);
    }
   
    
} catch (mysqli_sql_exception $e) {
    
    echo 'La conexión ha sido rechazada.';

}
?>
