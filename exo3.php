<?php
  include("common/header.php");
  include("common/menu.php");  
?> 

<div class='container border'>
  <h1 class='text-primary'>Périmètre et Aire</h1>
    
  <form action="#" method='POST' class='lead'> 
    <label for="rayon">Rayon : </label>   
    <input type="number" name="rayon" id="rayon">
    <label for="perimetre">Périmètre :</label> 
    <input type="checkbox" name="perimetre" id="perimetre" checked/>    
    <label for="aire">Aire</label>
    <input type="checkbox" name="aire" id="aire" checked/>
    <input type="submit" value="Envoyer">
  </form>


    <?php



    if(isset($_POST["rayon"]) && $_POST['rayon']>0){
      $rayon= $_POST["rayon"]; 
      echo "<h2>Résultats</h2>";
      if(isset($_POST["perimetre"])){
        echo "Le périmètre d'un cercle de rayon : ".$rayon. " est : ".($rayon* 2 * pi()) ."<br/>"; 
      }
      if(isset($_POST["aire"])){
        echo "L'aire d'un cercle de rayon : ".$rayon. " est : ".($rayon* $rayon * pi()) ."<br/>"; 
      }
    } else {
      
      echo "<h4 class='text-danger lead'>Saisir une valeur</h4>";
    }

    ?>
</div>

<?php
  include("common/footer.php");
?>  
