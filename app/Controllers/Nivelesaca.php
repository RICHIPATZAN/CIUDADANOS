<?php

namespace App\Controllers;

class nivelesaca extends BaseController
{
    public function nivelacademico()

    {
        $db=\Config\Database::connect();      #conexion a la base de datos

        $query = $db->query("SELECT * FROM nivelesacademicos"); #consulta SQL

       $data = ['ciudadanos' => $query->getResult() ]; 

        return view('ciudadanos/nivelesaca', $data); # mostrar consulta   ciudadanos y niveles_acad= viene de la carpeta views  
         }
}