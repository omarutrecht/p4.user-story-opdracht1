<?php

class InstructeurModel
{
    private $db;

    public function __construct()
    {
        $this ->db = new Database();
    }

    public function getInstructeur()
    {
        $sql = "select instructeur.Id  as instructeurid
        ,instructeur.Voornaam
        , instructeur.Tussenvoegsel, 
        instructeur.Achternaam
        , instructeur.Mobiel
        , instructeur.DatumInDienst
        , instructeur.AantalSterren 
from instructeur order by AantalSterren desc";

        $this->db->query($sql);

        return $this->db->resultSet();
    }


    public function getInstructeurId($InstructeurId)
    {
        $sql = " select typevoertuig.TypeVoertuig
		,typevoertuig.Rijbewijscategorie
        ,voertuig.Type
        ,voertuig.Kenteken
        ,voertuig.Bouwjaar
        ,voertuig.Brandstof
        from typevoertuig
        inner join voertuig on
        voertuig.TypevoertuigId = typeVoertuig.Id
        inner join voertuiginstructeur on
        voertuiginstructeur.VoertuigId = voertuig.Id
        inner join instructeur on
        voertuiginstructeur.InstructeurId = instructeur.Id
        where instructeur.Id = :Id";

        $this->db->query($sql);
        $this->db->bind(    ':Id', $InstructeurId, PDO::PARAM_INT);
//  resultset krijg ik meerdere namen van het zelfde kolom
        return $this->db->resultSet();
    }



    public function getInstructeurinfo($InstructeurId)
{
    $sql = "select instructeur.Voornaam,
    instructeur.Tussenvoegsel, 
    instructeur.Achternaam,
    instructeur.DatumInDienst,
    instructeur.AantalSterren from instructeur
    where instructeur.Id = :Id";

    $this->db->query($sql);
    $this->db->bind(    ':Id', $InstructeurId, PDO::PARAM_INT);
// single krijg ik 1 naam van 1 kolom
    $result = $this->db->single();
    return $result;

}

   
}