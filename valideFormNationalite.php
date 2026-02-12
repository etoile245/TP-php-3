<?php 
include "header.php";
include "connexionPDO.php";
$num=$_POST['num']; //récupération du numéro du formulaire hehehehehehehehehehehehe
$libelle=$_POST['libelle']; //récupération du libellé du formulaire hehehehehehehehehehehehe

$req=$monPdo->prepare("update nationalite set libelle = :libelle where num = :num ");
$req->bindParam(':num', $num);
$req->bindParam(':libelle', $libelle);
$nb=$req->execute();

echo "<div class='container mt-5'>";
echo '<div class="row">
    <div class="col mt-5">';
if($nb == 1) {
    echo '<div class="alert alert-success" role="alert">
    La nationalité a bien été modifiée !
    </div>';
} else{
    echo '<div class="alert alert-danger" role="alert">
    La nationalité n\'a pas été modifiée !
    </div>';
}
?>
    </div>
</div>
<a href="listeNationalites.php" class="btn btn-primary"><i class="fa-solid fa-circle-left"></i>Revenir à la liste des nationalités</a>

</div>


<?php include "footer.php";

?>