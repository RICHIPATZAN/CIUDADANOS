<?php

namespace App\Controllers;

class Regiones extends BaseController
{
    public function region()

    {
        $db=\Config\Database::connect();      #conexion a la base de datos

        $query = $db->query("SELECT * FROM regiones"); #consulta SQL

       $data = ['regiones' => $query->getResult() ]; 

        return view('ciudadanos/region', $data); # mostrar consulta   ciudadanos y niveles_acad= viene de la carpeta views  
         }
}