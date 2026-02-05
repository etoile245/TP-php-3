<?php 
$hostnom = 'host=btssio.dedyn.io';
$usernom = 'MARISCH';
$password = '10112007';
$bdd = 'MARISCHAEL_biblio';

try {
    $monPdo = new PDO("mysql:$hostnom;dbname=$bdd;charset=utf8", $usernom, $password);
    $monPdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOExeption $e) {
    echo $e->getMessage();
    $monPdo = null;
}
?>