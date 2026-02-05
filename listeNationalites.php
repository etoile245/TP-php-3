<?php 
include "header.php";
include "connexionPDO.php";
$req=$monPdo->prepare("select * from nationalite");
$req->setFetchMode(PDO::FETCH_OBJ);
$req->execute();
$lesNationalites=$req->fetchALL();
?>

<div class="container mt-5">

  <div class="row-9"><h2>Liste des nationalités </h2>
<div class="col-3"><a href="" class='btn btn-primary'><i class="fas fa-plus-circle"></i>Créer une nationalité</a></div>
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
        <a href='' class='btn btn-primary'><i class='fa-regular fa-pen-to-square'></i></a>
        <a href='' class='btn btn-danger'><i class='fa-regular fa-trash-can'></i></a>
      </td>";
      echo "</tr>";
    }
    ?>
  </tbody>
</table>

</div>

<?php include "footer.php";

?>