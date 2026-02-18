<?php
include "header.php";
include "connexionPDO.php";
$req=$monPdo->prepare("select * from nationalite");
$req->setFetchMode(PDO::FETCH_OBJ);
$req->execute();
$lesNationalites=$req->fetchALL();
?>

<div class="container mt-5">

  <div class="row pt-3">
    <div class="col-9"><h2>Liste des nationalités</h2></div>
    <div class="col-3"><a href="formNationalite.php?action=Ajouter" class='btn btn-primary'><i class="fas fa-plus-circle"></i>Créer une nationalité</a></div>
  </div>

<table class="table table-striped table-hover">
  <thead>
    <tr class="d-flex">
      <th scope="col" class="col-md-2">Numéro</th>
      <th scope="col" class="col-md-8">Libellé</th>
      <th scope="col" class="col-md-2">Actions</th>
    </tr>
  </thead>
  <tbody>

    <?php
    foreach($lesNationalites as $nationalite){
      echo "<tr class='d-flex'>";
      echo "<td class='col-md-2'>$nationalite->num</th>";
      echo "<td class='col-md-8'>$nationalite->libelle</th>";
      echo "<td class='col-md-2'>
        <a href='formNationalite.php?action=Modifier&num=$nationalite->num' class='btn btn-primary'><i class='fa-regular fa-pen-to-square'></i></a>
        <a href='#modalSuppression' data-toggle='modal' data-suppression='supprimerNationalite.php?num=$nationalite->num' class='btn btn-danger'><i class='fa-regular fa-trash-can'></i></a>
      </td>";
      echo "</tr>";
    }
//supprimerNationalite.php?num=$nationalite->num
    ?>
  </tbody>
</table>
</div>

<div id="modalSuppression" class="modal" value="rotateIn" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Confirmation de suppression</h5>
      </div>
      <div class="modal-body">
        <p>Voulez-vous vraiment supprimer cette nationalité ?</p>
      </div>
      <div class="modal-footer">
        <a href="" class="btn btn-danger" id="btnSuppr">Supprimer</a>
        <button type="button" class="btn btn-info" data-dismiss="modal">Annuler</button>
      </div>
    </div>
  </div>
</div>

<?php include "footer.php";

?>