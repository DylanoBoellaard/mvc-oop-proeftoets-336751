<?php

class Home extends BaseController
{
    public function index($Id = NULL, $Naam = NULL, $Club = NULL, $Leeftijd = NULL, $Nationaliteit = NULL, $Salaris = NULL)
    {
        $data = [
            'title' => 'Welkom op de homepage',
            'id'    => $Id,
            'naam'  => $Naam,
            'club' => $Club,
            'leeftijd' => $Leeftijd,
            'nationaliteit' => $Nationaliteit,
            'salaris' => $Salaris
        ];

        $this->view('home/index', $data);
    }
}