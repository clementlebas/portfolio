<?php
  try

    {

        $bdd = new PDO('mysql:host=localhost;dbname=VainqueurTDF;charset=utf8', 'root', '');
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
    $reponse = $bdd->query('SELECT Champion, Grimpeur  FROM VAINQUEURS WHERE Annee="'.$anneeChoisi.'"');  
    $ligne = $reponse->fetch();
    echo $ligne['Champion'].'<br/>'.$ligne['Grimpeur'];
    

    
}
else // Il manque des paramètres, on avertit le visiteur

{

    echo 'Il faut saisir une annee!';

}
?>