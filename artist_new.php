<h1>Saisie d'un nouvel artiste</h1>

<form action ="script_artist_ajout.php" method="post">

    <label for="nom_for_label">Nom de l'artiste :</label><br>
    <input type="text" name="nom" id="nom_for_label">
    <br><br>

    <label for="url_for_label">Adresse site internet :</label><br>
    <input type="text" name="url" id="url_for_label">
    <br><br>

    <div id="control" class="d-flex justify-content-left">
        <input type="submit" value="Ajouter" class="rounded">
    </div>

</form>
<br>
<div class="d-flex justify-content-end">
    <a href="index.php"><button class="rounded">Retour à la liste des artistes</button></a>
</div>