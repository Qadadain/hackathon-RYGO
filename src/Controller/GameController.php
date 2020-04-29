<?php


namespace App\Controller;

class GameController extends AbstractController
{
    public function index()
    {
        return $this->twig->render('Game/indexgame.html.twig');
    }
}
