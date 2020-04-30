<?php


namespace App\Controller;

class GameController extends AbstractController
{
    public function index()
    {
        if (($_POST['pseudo'])) {
            $_SESSION['pseudo'] = $_POST['pseudo'];
            $sessions = $_SESSION;

            return $this->twig->render('Game/indexgame.html.twig', [
                'sessions' => $sessions,
            ]);
        }
    }
}
