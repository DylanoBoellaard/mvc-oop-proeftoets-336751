<?php

class VoetbalModel
{
    private $db;

    public function __construct()
    {
        $this->db = new Database();
    }

    public function getVoetbal()
    {
        $sql = "SELECT   Id
                        ,Naam
                        ,Club
                        ,Leeftijd
                        ,Nationaliteit
                        ,Salaris
                FROM Voetballers
                ORDER BY Salaris DESC";

        $this->db->query($sql);

        return $this->db->resultSet(); // Var dump if values are not visible
    }
}