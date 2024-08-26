<?php

namespace App\Controllers;
use App\Models\CiudadanosModel;

class ciudadanos extends BaseController
{
        public function Index()
        {
        return view('ciudadanos/index');
    }

    protected $helpers = ['form'];
    
    public function ciudadano()
    
    {
        $db=\Config\Database::connect();      #conexion a la base de datos

        $query = $db->query("SELECT * FROM ciudadanos");

       $data = ['ciudadanos' => $query->getResult() ];

        return view('ciudadanos/ciudadano', $data);
    }

  public function edit($dpi){
    return view ('ciudadanos/update_ciudadano',['dpi'=>$dpi]);
    $ciudadanoModel=new \App\Models\CiudadanoModel();
    $datos=$ciudadanoModel->find($dpi);
    return view ('update_ciudadano',['datos'=>$datos]);
  }

    Public function new()
    {
        return view('ciudadanos/ciudadanonuevo');
    }

    public function actualizar()
    {
    return view('ciudadanos/update_ciudadano');
    }
    

    Public Function create(){
        $reglas = [
        'DPI' => 'required|min_length[5]|max_length[10]|is_unique[ciudadanos.dpi]',
        'nombre' =>'required',
        'apellido'=>'required',
        'direccion'=>'required',
        'tel_casa'=>'required',
        'tel_movil'=>'required',
        'email'=>'required',
        'fechanac'=>'required',
        'cod_nivel_acad'=>'required',
        'cod_muni'=>'required',
        'contra'=>'required',

        ];
        
        if(!$this->validate ($reglas)) {
            return redirect()->back()->withImput()->with('error',$this->validator->listError());

            $post = $this->request->getPost([  'DPI','nombre','apellido','direccion', 'tel_casa','tel_movil',
            'email','fechanac','cod_nivel_acad','cod_muni','contra']);

            $CiudadanosModel = new CiudadanosModel();
            $CiudadanosModel -> insert([
                'dpi'=> trim($post['DPI']),
                'nombre'=>  trim($post['Nombre']),
                'apellido'=> trim($post['Apellido']),
                'dirección'=> ($post['Direccion']),
                'tel_casa'=> ($post['Telefono Casa']),
                'tel_movil'=> ($post['Telefono Movil']),
                'email'=> ($post['Correo Electronico']),
                'fechanac'=>($post['Fecha de nacimiento']),
                'cod_nivel_acad'=> ($post['Nivel Academico']),
                'cod_muni'=> ($post['Codigo Municipal']),
                'contra'=> ($post['Password']),

            ] );

        

        return redirect() ->to ('ciudadanos');
        }


    }
    
   

}
