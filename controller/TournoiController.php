<?php
class TournoiController extends Controller
{
    public function liste()
    {
        $this->render("liste");
    }

    public function listematchindividuel($idTournoi)
{
    if ($idTournoi === null) {
        $this->e404('Tournoi introuvable');
    }

    $matchModel = $this->loadModel("MatchIndividuel");
    $matches = $matchModel->find(array('conditions' => array('idTournoi' => $idTournoi), 'orderby' => 'idMatch'));


    $this->set('matches', $matches);
    $this->render("listematchindividuel");
}



}
?>
