<?php

class Rankufc extends BaseController
{
    private $rankufcModel;

    public function __construct()
    {
        $this->rankufcModel = $this->model('RankufcModel');
    }
     
    public function index()
    {
        $result = $this->rankufcModel->getRankufc('RankufcModel');
 
        $rows = "";
        foreach ($result as $rankufc) {
            $rows .= "<tr>
                        <td>$rankufc->Name</td>
                        <td>$rankufc->Ranking</td>
                        <td>$rankufc->Length</td>
                        <td>$rankufc->Weight</td>
                        <td>$rankufc->Age</td>
                        <td>$rankufc->WinsByKnockout</td>
                      </tr>";
        }
        

        $data = [
            'title' => 'MEN S POUND-FOR-POUND TOP RANK UFC',
            'rows' =>$rows
        ];


        $this->view('Rankufc/index', $data);
    }

}