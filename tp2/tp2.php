<?php
$page = "tp2";
include '../header.php';
include 'form_validation.php';
?>
<form method="POST" action="#" novalidate>
    
    <div class="container">
        <div class="row customrow">
            <fieldset>
                <legend>Vos coordonnées</legend>
                <div class="form-group">
                    <label for="civility">Civilité: </label>
                    <select  name="civility" class="form-control custom-select">
                        <option value="">Sélectionnez</option>
                        <option value="">Madame</option>
                        <option value="">Monsieur</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="firstname">Nom : </label>
                    <input type="text" class="form-control" name="firstname" id="firstname" placeholder="Carmi" value="<?= $firstname ?>">
                    <span class="text-danger"><?= ($errors['firstname']) ?? '' ?></span>
                </div>
                <div class="form-group">
                    <label for="lastname">Prénom : </label>
                    <input type="text" class="form-control" name="lastname" id="lastname" placeholder="Pierre" value="<?= $lastname ?>">
                         <span class="text-danger"><?= ($errors['lastname']) ?? '' ?></span>
                </div>
                <div class="form-group">
                    <label for="years">Age:</label>
                    <input type="number" class="form-control" name="years" id="years" placeholder="30 ans"<?= $age?>>
                      <span class="text-danger"><?= ($errors['years']) ?? '' ?></span>
                </div>
                <div class="form-group">
                    <label for="society">Société:</label>
                    <input type="text" class="form-control" name="society" id="society" >
                </div>
            </fieldset>
            <div class="form-group">
                <input type="submit" class="form-control"   name="submit" value="Envoyez" />
            </div>
        </div>
    </div>
</form>
<?php
include '../footer.php';
?>
