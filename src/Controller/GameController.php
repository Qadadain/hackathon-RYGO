<?php


namespace App\Controller;
class GameController extends AbstractController
{
        public function index()
    {
        if (!empty($_POST['pseudo'])) {
            $_SESSION['pseudo'] = $_POST['pseudo'];
        } else {
            $_SESSION['pseudo'] = 'Merlin';
        }
        $sessions = $_SESSION;

        return $this->twig->render('Game/indexgame.html.twig', [
            'sessions' => $sessions,
        ]);
    }
    public function gameOne_1()
    {
        return $this->twig->render('Game/gameone_1.html.twig');
    }

    public function gameOne_2()
    {
        return $this->twig->render('Game/gameone_2.html.twig');
    }

    public function gameOne_3()
    {
        return $this->twig->render('Game/gameone_3.html.twig');
    }

    public function gameOne_4()
    {
        return $this->twig->render('Game/gameone_4.html.twig');
    }

    public function gameOne_5()
    {
        return $this->twig->render('Game/gameone_5.html.twig');
    }

    public function gameOne_victoire()
    {
        return $this->twig->render('Game/gameone_victoire.html.twig');
    }

    public function gameTwo_1()
    {
        return $this->twig->render('Game/gametwo_1.html.twig');
    }

    public function gameTwo_2()
    {
        return $this->twig->render('Game/gametwo_2.html.twig');
    }

    public function gameTwo_3()
    {
        return $this->twig->render('Game/gametwo_3.html.twig');
    }

    public function gameTwo_4()
    {
        return $this->twig->render('Game/gametwo_4.html.twig');
    }

    public function gameTwo_5()
    {
        return $this->twig->render('Game/gametwo_5.html.twig');
    }

    public function gameTwo_victoire()
    {
        return $this->twig->render('Game/gametwo_victoire.html.twig');
    }

    public function gameThree_1()
    {
        return $this->twig->render('Game/gamethree_1.html.twig');
    }

    public function gameThree_2()
    {
        return $this->twig->render('Game/gamethree_2.html.twig');
    }

    public function gameThree_3()
    {
        return $this->twig->render('Game/gamethree_3.html.twig');
    }

    public function gameThree_4()
    {
        return $this->twig->render('Game/gamethree_4.html.twig');
    }

    public function gameThree_5()
    {
        return $this->twig->render('Game/gamethree_5.html.twig');
    }

    public function gameThree_victoire()
    {
        return $this->twig->render('Game/gamethree_victoire.html.twig');
    }
}
