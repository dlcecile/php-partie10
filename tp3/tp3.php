<?php
$page = "tp3";
include '../header.php';
$portrait1 = array('name' => 'Victor', 'firstname' => 'Hugo', 'portrait' => 'http://upload.wikimedia.org/wikipedia/commons/5/5a/Bonnat_Hugo001z.jpg');
$portrait2 = array('name' => 'Jean', 'firstname' => 'de La Fontaine', 'portrait' => 'http://upload.wikimedia.org/wikipedia/commons/e/e1/La_Fontaine_par_Rigaud.jpg');
$portrait3 = array('name' => 'Pierre', 'firstname' => 'Corneille', 'portrait' => 'http://upload.wikimedia.org/wikipedia/commons/2/2a/Pierre_Corneille_2.jpg');
$portrait4 = array('name' => 'Jean', 'firstname' => 'Racine', 'portrait' => 'http://upload.wikimedia.org/wikipedia/commons/d/d5/Jean_racine.jpg');
function displayTab() {
    $portraits = func_get_args();
    foreach ($portraits as $portrait) {
        $name = $portrait['name'];
        $firstName = $portrait['firstname'];
        $portrait = $portrait['portrait'];
        ?>
        <div>
            <div>
                <?= $name ?>
                <?= $firstName ?>
            </div>
            <div>
                <img src="<?= $portrait ?>" width="500" height="500">
            </div>
        </div>
        <?php
    }
}
?>
        <div class="container-fluid">
            <?= displayTab($portrait1, $portrait2, $portrait3, $portrait4) ?>
        </div>
        
<?php
include '../footer.php';
?>