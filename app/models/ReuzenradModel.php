<?php

class ReuzenradModel
{
    private $db;

    public function __construct()
    {
        $this ->db = new Database();
    }

    public function getReuzenrad()
    {
        $sql = "SELECT id
                       ,Naam 
                       ,Hoogte
                       ,Land
                       ,Kosten
                       ,AantalPassagiers
                FROM    reuzenrad";

        $this->db->query($sql);

        return $this->db->resultSet();
    }
}