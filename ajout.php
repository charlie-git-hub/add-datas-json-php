<?php
	


$file = file_get_contents('tableau.json');

$file_json = json_decode($file, true);

$extra=array(
    'titre' => $_POST['titre'],
    'realisateurice' => $_POST['realisateurice'],
    'annees' => $_POST['annees'],
    'legende' => $_POST['legende'],
    'origine' => $_POST['origine'],
);
    

    $file_json[]=$extra;

 
 $file = json_encode($file_json);
    file_put_contents('tableau.json', $file);

    header('location: donnees.php');
?>  