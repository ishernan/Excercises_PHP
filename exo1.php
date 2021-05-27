<?php
  include("common/header.php");
  include("common/menu.php");  
?> 

<div class='container border'>
  <h1 class='text-primary'>Table de multiplication</h1>
    

    <?php
    define("TABLE", 2);
    echo "<h2>La table de " .TABLE. "</h2>"; 

    for ($i=0; $i < 10; $i++) { 
    
    echo '<br />'.$i.' * '.TABLE.' = '.$i*TABLE; 
    }; 

    ?>
</div>

<?php
  include("common/footer.php");
?>  
