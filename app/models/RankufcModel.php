<?php

class RankufcModel
{
    private $db;

    public function __construct()
    {
        $this ->db = new Database();
    }

    public function getRankufc()
    {
        $sql = "SELECT id
                       ,Name
                       ,Ranking
                       ,Length
                       ,Weight
                       ,Age
                       ,WinsByKnockout
                FROM    poundforpound";

        $this->db->query($sql);

        return $this->db->resultSet();
    }
}