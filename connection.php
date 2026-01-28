<?php 
$hostnom = 'host=localhost';
$usernom = 'MARISCHAEL';
$password = '10112007';
$bdd = 'bibliothèque';

try {
    $monPdo = new PDO("mysql:$hostnom;dbname=$bdd;charset=utf8", $usernom, $password);
    $monPdo->setAttribute(PDO::ATT_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOExeption $e) {
    echo $e->getMessage();
    $monPDO = null;
}
?>