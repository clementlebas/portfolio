<?php
  try

    {

        $bdd = new PDO('mysql:host=db739585965.db.1and1.com;dbname=db739585965;charset=utf8', 'dbo739585965', 'Clems77270!');
    }

  catch (Exception $e)
    {

            die('Erreur : ' . $e->getMessage());

    }
if (isset($_GET['annee']))
{
    // L'élément "list" existe bien
    /*echo 'Option choisi : '.$_GET['annee'].'<br/>';*/ // Sera a ou b ou c
    $anneeChoisi=$_GET['annee'];
    $anneeChoisi= (int)$anneeChoisi;
    $reponse = $bdd->query('SELECT Champion, Grimpeur, Sprinter FROM VAINQUEURS WHERE Annee="'.$anneeChoisi.'"');  
    $ligne = $reponse->fetch();    
}

?>


<!DOCTYPE html>
<html>
  <head>
      <meta charset="utf-8" />
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <title>Test Le Monde</title>
    <script src="./jquery/jquery.js"></script>
      <link rel="stylesheet" type="text/css" href="TestLeMonde.css" />
      
  </head>
  <body>
    <img src="Le_Monde.png" alt="lemonde">
      
    <div id="appli">
      <h5>Saisir votre année de naissance!</h5>
      <form method="get" name="essai">
        <select name='annee' id='annee'>
        <option value='0'>Année</option>
        </select>
      <button>OK</button>
      </form>
        <div class="resultat">
          <p> <img class="maillot" src="maillotJaune.png" alt="jaune"><?php if (isset($_GET['annee'])) echo $ligne['Champion']?></p>
          <p> <img class="maillot" src="maillotPoint.png" alt="point"><?php if (isset($_GET['annee'])) echo $ligne['Grimpeur']?></p>
          <p> <img class="maillot" src="maillotVert.png" alt="vert"><?php if (isset($_GET['annee'])) echo $ligne['Sprinter']?></p>
        </div>
    </div>
    <script>

      $('#annee').change(function() {
        var anneeChoisi=$(this).val();
      });

      var i;
        
        for(i=1980; i<2018; i++){
            $('select').append('<option value="'+i+'">'+i+'</option>');
            console.log(i);    }


    $('button').click(function (e) {
        /*$.get({
          url: 'TestLeMonde.php',
          function(reponse) {
            $('.resultat').append(reponse); // reponse contient l'affichage du fichier PHP (soit echo)
          }
        });*/
      });
    </script>
  </body>
</html>
