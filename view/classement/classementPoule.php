<?php require_once ROOT . DS . "view" . DS . "layout" . DS . "guest" . DS . "_guest_top.php"; ?>
<h2><?= $championnat->nomChampionnat . ' ' . $championnat->typeChampionnat . ' ' . $championnat->nomDivision; ?>
<?php if (isset($poule)) {
    echo ' Poule ' . $poule[0]->nomPoule.' ';
} else {
    echo " Poule unique";
}?></h2>
<h3>Classement des équipes</h3>
    <a class="button primarybuttonWhite" href="<?= BASE_URL . DS . "championnat/liste" ?>">Retour aux championnats</a>
<hr>
<div>
    <table class="data-table">
    <thead>
        <th>Place</th>
        <th>Equipes participantes</th>
        <th>Points</th>
        <th>Goal average</th>
    </thead>
    <?php $place = 1;
    foreach ($equipesPoules[0] as $equipe) {
        echo '<tr>
                <td>' . $place++ . '</td>
                <td>' . $equipe->nomEquipe . '</td>
                <td>' . $equipe->nbPoints . '</td>
                <td>' . $equipe->goalAverage .'</td>
              </tr>';
    }
    ?>
    </table>
</div>
<?php require_once ROOT . DS . "view" . DS . "layout" . DS . "guest" . DS . "_guest_bottom.php"; ?>