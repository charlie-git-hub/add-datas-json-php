<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="utf-8">
<link rel="stylesheet" type ="text/css" href="styles.css">
<title>données</title>
</head>
<body>

<main>

<form action="ajout.php" method="post" enctype="multipart/form-data"id="form_donnees">
<div class="titre_donnees">
<label for="titre">Titre<span class="asterix">*</span></label>
<input type="text" name="titre" id="titre" required="required" placeholder="My Little Pony" />
</div>
<div class="realisateurice">
<label for="realisateurice">Realisateur.ice<span class="asterix">*</span></label>
<input type="text" name="realisateurice" id="realisateurice" required="required" placeholder= "Jay Doe"/>
</div>

<div class="annees">
<label for="annees">Années de sortie<span class="asterix">*</span></label>
<input type="text" name="annees" id="annees" required="required" placeholder="1900"/>
</div>

<div class="legende">
<label for="legende">Créature légendaire<span class="asterix">*</span></label>
<input type="text" name="legende" id="legende" required="required" placeholder="licorne"/>
</div>

<div class="origine">
<label for="origine">Origine de la légendes<span class="asterix">*</span></label>
<input type="text" name="origine" id="origine" required="required" placeholder="Europe"/>
</div>

<input type="submit" value="ajouter" id="submit" required="required" />
</form>



<div class="tableau">
<?php
$fichier = 'tableau.json';

$tabFilmsJSON = file_get_contents($fichier);

$tabFilmsPHP = json_decode($tabFilmsJSON,true);

?>

<table id="myTable">
    <thead>
    <tr>
    <th>titre</th>
    <th>realisateur.ice</th>
    <th>annees</th>
    <th>legende</th>
    <th>origine</th>
</tr>
</thead>
<tbody>
<?php
for ($i = 0; $i < count($tabFilmsPHP); $i++) {
    echo '<tr>';
    echo '<td>' . $tabFilmsPHP[$i]['titre'] . '</td>';
    echo '<td>' . $tabFilmsPHP[$i]['realisateurice'] . '</td>';
    echo '<td>' . $tabFilmsPHP[$i]['annees'] . '</td>';
    echo '<td>' . $tabFilmsPHP[$i]['legende'] . '</td>';
    echo '<td>' . $tabFilmsPHP[$i]['origine'] . '</td>';
    echo '</tr>';
}
?>
</tbody>
</table>
<script src="https://code.jquery.com/jquery-3.7.0.js"></script>
<script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.js"></script>
<script>
$(document).ready( function () {
    $('#myTable').DataTable ({
        language:{ url:'http://cdn.datatables.net/plug-ins/1.13.1/i18n/fr-FR.json' }});
    })
</script>

</div>
