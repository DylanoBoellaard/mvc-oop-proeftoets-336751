<?php

class Home extends BaseController
{
    public function index($Id = NULL, $Naam = NULL, $Club = NULL, $Leeftijd = NULL, $Nationaliteit = NULL, $Salaris = NULL)
    {
        $data = [
            'title' => 'Welkom op de homepage',
            'Id'    => $Id,
            'Naam'  => $Naam,
            'Club' => $Club,
            'Leeftijd' => $Leeftijd,
            'Nationaliteit' => $Nationaliteit,
            'Salaris' => $Salaris
        ];

        $this->view('home/index', $data);
    }
}