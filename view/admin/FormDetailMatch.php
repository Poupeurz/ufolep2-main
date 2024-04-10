<?php require_once ROOT . DS . "view" . DS . "layout" . DS . "admin" . DS . "_admin_top.php"; ?>
<div>
    <h2>Tournois des matchs individuels</h2>
    <hr>
    <a class="button primarybuttonWhite" href="<?= BASE_URL . DS . "championnat/liste" ?>">Accueil</a>
    <a class="button primarybuttonWhite" href="<?= BASE_URL . DS . "admin/listeMatchIndividuel/1" ?>">Retour</a>
    <form method="post" action="<?= BASE_URL . DS . "admin" . DS . "enregistrerMatchsIndividuels" ?>">
        <table border='1' class="data-table sober">
            <thead>
                <tr>
                    <th>Joueur A</th>
                    <th>Joueur B</th>
                    <th>Manche 1</th>
                    <th>Manche 2</th>
                    <th>Manche 3</th>
                    <th>Manche 4</th>
                    <th>Manche 5</th>
                    <th>Forfait</th>
                    <th>Tour</th>
                    <th>Date</th>
                </tr>
            </thead>
            <?php foreach ($matches as $match) : ?>
                <tr>
                    <td>
                        <?php if (isset($match->JR)) {
                            echo $match->JR;
                        } else {
                            echo "None";
                        } ?>
                    </td>
                    <td>
                        <?php if (isset($match->JV)) {
                            echo $match->JV;
                        } else {
                            echo "None";
                        } ?>
                    </td>
                    <td>
                        <?php if (isset($match->M1)) {
                            echo $match->M1;
                        } else {
                            echo "None";
                        } ?>
                    </td>
                    <td>
                        <?php if (isset($match->M2)) {
                            echo $match->M2;
                        } else {
                            echo "None";
                        } ?>
                    </td>
                    <td>
                        <?php if (isset($match->M3)) {
                            echo $match->M3;
                        } else {
                            echo "None";
                        } ?>
                    </td>
                    <td>
                        <?php if (isset($match->M4)) {
                            echo $match->M4;
                        } else {
                            echo "None";
                        } ?>
                    </td>
                    <td>
                        <?php if (isset($match->M5)) {
                            echo $match->M5;
                        } else {
                            echo "None";
                        } ?>
                    </td>
                    <td>
                        <?php if (isset($match->forfait)) {
                            echo $match->forfait;
                        } else {
                            echo "J";
                        } ?>
                    </td>
                    <td>
                        <?php if (isset($match->tour)) {
                            echo $match->tour;
                        } else {
                            echo "N/A";
                        } ?>
                    </td>
                    <td>
                        <?php if (isset($match->date)) {
                            echo $match->date;
                        } else {
                            echo "None";
                        } ?>
                    </td>
                </tr>
            <?php endforeach; ?>
        </table>            
    </form>
</div>
<br>
<h2>Modifier le Match</h2>
<table class="form-table">
    <form method="POST" action="<?= BASE_URL . DS . "admin/formMatchindividuel" ?>">
        <tr>
            <td><label for="JR">Joueur 1</label></td>
            <td><input class="form-control" type="text" name="JR" value="" required/></td>
        </tr>
        <tr>
            <td><label for="JV">Joueur 2</label></td>
            <td><input class="form-control" type="text" name="JV" value="" required/></td>
        </tr>
        <tr>
            <td><label for="M1">M1</label></td>
            <td><input class="form-control" type="number" name="M1" value="" required/></td>
        </tr>
        <tr>
            <td><label for="M2">M2</label></td>
            <td><input class="form-control" type="number" name="M2" value="" required/></td>
        </tr>
        <tr>
            <td><label for="M3">M3</label></td>
            <td><input class="form-control" type="number" name="M3" value="" required/></td>
        </tr>
        <tr>
            <td><label for="M4">M4</label></td>
            <td><input class="form-control" type="number" name="M4" value="" required/></td>
        </tr>
        <tr>
            <td><label for="M5">M5</label></td>
            <td><input class="form-control" type="number" name="M5" value="" required/></td>
        </tr>
        <tr>
            <td><label for="date">Date</label></td>
            <td><input class="form-control" type="date" name="date" value="" required/></td>
        </tr>
        <tr>
            <td><label for="parametre">Tour</label></td>
            <td>
                <select name="parametre" class="form-control" required>
                    <option value="128F">128F</option>
                    <option value="64F">64F</option>
                    <option value="32F">32F</option>
                    <option value="16F">16F</option>
                    <option value="8F">8F</option>
                    <option value="QF">QF</option>
                    <option value="DF">DF</option>
                    <option value="F">F</option>
                </select>
            </td>
        </tr>
        <tr>
            <td ><label> forfait ?</label></td>
            <fieldset>
                <td><input type="radio" name="forfait" value="A">Forfait club visité</td>
                <td><input type="radio" name="forfait" value="J" checked>Match joué</td>
                <td><input type="radio" name="forfait" value="B">Forfait club visiteur</td>
            </fieldset>
        </tr>
        <tr>
            <td colspan="2">
                <input type="hidden" name="idTournoi" value="<?= isset($tournoi) ? $tournoi->idTournoi : '' ?>">
                <a class="button primarybuttonWhite" href="<?= BASE_URL . DS . "admin/listeTournoi" ?>">Annuler</a>
                <input class="primarybuttonBlue" type="submit" value="Enregistrer" name="formMatchindividuel" />
            </td>
        </tr>
    </form>
</table>
<?php require_once ROOT . DS . "view" . DS . "layout" . DS . "admin" . DS . "_admin_bottom.php"; ?>
