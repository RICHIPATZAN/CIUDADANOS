<?php

namespace App\Controllers;  

Class Departamentos extends BaseController
{
    public function departamento ()

    {
        $db=\Config\Database:: connect();
        
        $query = $db -> query("SELECT * FROM departamentos");

        $data=['departamentos'=> $query->getResult()];

        return view ('ciudadanos/departamento',$data);


    }
    Public function newdep()
    {
        return view ('Ciudadanos/update_departamento');
    }
}