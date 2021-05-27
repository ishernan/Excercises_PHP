<?php
  include("common/header.php");
  include("common/menu.php");  
?> 

<div class='container border'>
  <h1 class='text-primary'>Table de multiplication</h1>
    
  <form action="#" method='GET' class='lead'> 
    <label for="multiple">Table de multiplication à afficher : </label>   
    <input type="number" name="multiple" id="multiple">
    <input type="submit" value="Valider">
  </form>
  


    <?php

    if(isset($_GET["multiple"])){
      echo "<h2>La table de " .$_GET['multiple']. "</h2>"; //pour recuperer la valeur directement du form
      for ($i=0; $i <= 10; $i++) {       
        echo '<br />'.$i.' * '.$_GET['multiple'].' = '.$i*$_GET['multiple']; 
      }; 
    } else {
      
      echo "<h4 class='text-danger lead'>Saisir une valeur</h4>";
    }

    ?>
</div>

<?php
  include("common/footer.php");
?>  
