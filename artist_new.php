<h1>Saisie d'un nouvel artiste</h1>

<a href="index.php"><button>Retour à la liste des artistes</button></a>

<br>
<br>

<form action ="script_artist_ajout.php" method="post">

    <label for="nom_for_label">Nom de l'artiste :</label><br>
    <input type="text" name="nom" id="nom_for_label">
    <br><br>

    <label for="url_for_label">Adresse site internet :</label><br>
    <input type="text" name="url" id="url_for_label">
    <br><br>

    <input type="submit" value="Ajouter">
</form>