<?php include __DIR__ . "/public/header.html.php"; ?>

<main>
    
<section class="titre"> Accueil </section>

    <section class="basedumenu">
        <il>
        <div class="entre">Prénom</div>
        <input type="texte" id="fname" name="fname">
        <div class="entre">Nom</div>
        <input type="texte" id="fnom" name="fnom">
        <div class="entre">E-mail</div>
        <input type="texte" id="femai" name="femai">    
        <div class="entre">Mot de passe</div>
        <input type="texte" id="fpassword" name="fpassword">  
        </il>
    </section>
<div class="ficher">
    <nomofcv>CV</nomofcv>
    <nameoffich><input type="file" id="fileInput" class="custom-file-input">
<label for="fileInput" class="custom-file-label">Sélectionner un fichier</label>
</nameoffich>
</div>



</main>
<?php include __DIR__ . "/public/footer.html.php";?>