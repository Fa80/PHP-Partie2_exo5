<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
  <meta charset="utf-8">
  <title>PHP Partie2_Exo5</title>
</head>
<body>
    <?php
// Traduire ce code avec des if et des else:
/*<?php
  echo ($gender != 'Homme') ? 'C\'est une développeuse !!!' : 'C\'est un développeur !!!';
?>*/
        $gender = "Femme";
      if($gender != "Homme"){
        echo "C'est une développeuse !!! ";
      }else{
        echo "C'est un développeur !!! ";
      }
    ?>
</body>
</html>
