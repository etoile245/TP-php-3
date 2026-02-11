<?php 
include "header.php";
include "connexionPDO.php";
$libelle=$_POST['libelle']; //récupération du libellé du formulaire hehehehehehehehehehehehe
$req=$monPdo->prepare("insert into nationalite(libelle) values(:libelle)");

$req=$monPdo->prepare("select * from nationalite");
$req->setFetchMode(PDO::FETCH_OBJ);
$req->execute();
$lesNationalites=$req->fetchALL();
?>

<div class="container mt-5">

</div>

<?php include "footer.php";

?>