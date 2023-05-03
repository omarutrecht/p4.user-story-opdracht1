<?php

class Country extends BaseController
{
    private $countryModel;


    public function __construct()
    {
        $this->countryModel = $this->model('CountryModel');
    }

    public function getCountries() 
    {
        $result = $this->countryModel->getCountries();

        $rows = "";
        foreach ($result as $country) {
            $rows .= "<tr>
                        <td>$country->Id</td>
                        <td>$country->Name</td>                        
                      </tr>";
        }
        
        $data = [
            'title' => 'Overzicht landen!!!',
            'rows'  => $rows
        ];

        $this->view('country/getCountries', $data);
    }
}