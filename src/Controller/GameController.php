<?php

namespace App\Controller;

class GameController extends AbstractController
{
    public function index()
    {
        if (isset($_POST['pseudo'])) {
            $_SESSION['pseudo'] = $_POST['pseudo'];
        }

        if (empty($_SESSION['pseudo'])) {
            $_SESSION['pseudo'] = 'Merlin';
        }

        $sessions = $_SESSION;

        return $this->twig->render('Game/indexgame.html.twig', [
            'sessions' => $sessions,
        ]);
    }

    public function gameOne_1()
    {
        $sessions = $_SESSION;
        return $this->twig->render('Game/gameone_1.html.twig', [
            'sessions' => $sessions,
        ]);
    }

    public function gameOne_2()
    {
        $sessions = $_SESSION;
        return $this->twig->render('Game/gameone_2.html.twig', [
            'sessions' => $sessions,
        ]);
    }

    public function gameOne_3()
    {
        $sessions = $_SESSION;
        return $this->twig->render('Game/gameone_3.html.twig', [
            'sessions' => $sessions,
        ]);
    }

    public function gameOne_4()
    {
        $sessions = $_SESSION;
        return $this->twig->render('Game/gameone_4.html.twig', [
            'sessions' => $sessions,
        ]);
    }

    public function gameOne_5()
    {
        $sessions = $_SESSION;
        return $this->twig->render('Game/gameone_5.html.twig', [
            'sessions' => $sessions,
        ]);
    }

    public function gameOne_victoire()
    {
        $sessions = $_SESSION;
        return $this->twig->render('Game/gameone_victoire.html.twig', [
            'sessions' => $sessions,
        ]);
    }

    public function gameTwo_1()
    {
        $sessions = $_SESSION;
        return $this->twig->render('Game/gametwo_1.html.twig', [
            'sessions' => $sessions,
        ]);
    }

    public function gameTwo_2()
    {
        $sessions = $_SESSION;
        return $this->twig->render('Game/gametwo_2.html.twig', [
            'sessions' => $sessions,
        ]);
    }

    public function gameTwo_3()
    {
        $sessions = $_SESSION;
        return $this->twig->render('Game/gametwo_3.html.twig', [
            'sessions' => $sessions,
        ]);
    }

    public function gameTwo_4()
    {
        $sessions = $_SESSION;
        return $this->twig->render('Game/gametwo_4.html.twig', [
            'sessions' => $sessions,
        ]);
    }

    public function gameTwo_5()
    {
        $sessions = $_SESSION;
        return $this->twig->render('Game/gametwo_5.html.twig', [
            'sessions' => $sessions,
        ]);
    }

    public function gameTwo_victoire()
    {
        $sessions = $_SESSION;
        return $this->twig->render('Game/gametwo_victoire.html.twig', [
            'sessions' => $sessions,
        ]);
    }

    public function gameThree_1()
    {
        $sessions = $_SESSION;
        return $this->twig->render('Game/gamethree_1.html.twig', [
            'sessions' => $sessions,
        ]);
    }

    public function gameThree_2()
    {
        $sessions = $_SESSION;
        return $this->twig->render('Game/gamethree_2.html.twig', [
            'sessions' => $sessions,
        ]);
    }

    public function gameThree_3()
    {
        $sessions = $_SESSION;
        return $this->twig->render('Game/gamethree_3.html.twig', [
            'sessions' => $sessions,
        ]);
    }

    public function gameThree_4()
    {
        $sessions = $_SESSION;
        return $this->twig->render('Game/gamethree_4.html.twig', [
            'sessions' => $sessions,
        ]);
    }

    public function gameThree_5()
    {
        $sessions = $_SESSION;
        return $this->twig->render('Game/gamethree_5.html.twig', [
            'sessions' => $sessions,
        ]);
    }

    public function gameThree_victoire()
    {
        $sessions = $_SESSION;
        return $this->twig->render('Game/gamethree_victoire.html.twig', [
            'sessions' => $sessions,
        ]);
    }
}
