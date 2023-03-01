<?php
    $id = $_GET["id"];

    $requete = $db->prepare("SELECT * FROM artist WHERE artist_id=?");
    $requete->execute(array($id));
    $myArtist = $requete->fetch(PDO::FETCH_OBJ);
    $requete->closeCursor();
    
    ?>
<form action ="content/script/script_artist_delete.php" method="post">
    <input type="hidden" name="id" value="<?= $myArtist->artist_id ?>">
    <span class='text-danger pt-3 d-flex'>ATTENTION : L'entrée suivante va être supprimée !<br class="mb-3"></span>

    <?php echo '<span>Artiste N°'.$myArtist->artist_id.
                '<br>Nom de l\'artiste : '.$myArtist->artist_name.
                '<br>Site Internet : '.$myArtist->artist_url.'<br class="mb-3"></span>';
    ?>
    <div class="d-flex justify-content-start">
        <input type="submit" value="Supprimer" class="rounded text-danger">
        <a class="mx-2" href="?p=a_detail&id=<?php echo $myArtist->artist_id ?>"><input type="button" value="Annuler" class="rounded"></a>
    </div>
</form>