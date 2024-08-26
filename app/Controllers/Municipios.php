<?php

namespace App\Controllers;  

Class Municipios extends BaseController
{
    public function municipio ()

    {
        $db=\Config\Database::connect();
        
        $query = $db -> query("SELECT * FROM Municipios");

        $data=['municipios'=> $query->getResult()];

        return view ('ciudadanos/municipio',$data);


    }
}