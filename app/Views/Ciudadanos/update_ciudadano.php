<!DOCTYPE html>
<html lang="es" class="h-100">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Empresa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <link href="css/estilo.css" rel="stylesheet">
</head>

<body>
    <h1>modificar plan</h1>
    <form action="<?=base_url("update_ciudadano")?>" method="post">
        <label for="txtdpi">DPI</label>
        value="<?=$datos['dpi']?>" readonly
        <input type="text" name="txtdpi" id="txtdpi" 
        >
        <br>
        <label for="txtNombre">Nombre</label>
        <input type="text" name="txtNombre" id="txtNombre"
        value="<?=$datos['nombre']?>"
        >
        <br>
        <label for="txtapellido">Apellidos</label>
        <input type="text" name="txtapellido" id="txtapellido"
        value="<?=$datos['apellido']?>"
        >
        <br>
        <label for="txtdireccion">Direccion</label>
        <input type="text" name="txtdireccion" id="txtdireccion" 
        value="<?=$datos['Direccion']?>"
        >
        <br>
        <label for="txtTel_casa">Telefono Casa</label>
        <input type="text" name="txtTel_casa" id="txtTel_casa" 
        value="<?=$datos['tel_casa']?>"
        >
        <br>
        <label for="txtTel_movil">Telefono Movil</label>
        <input type="text" name="txtTel_movil" id="txtTel_movil" 
        value="<?=$datos['tel_movil']?>"
        >
         <br>
        <label for="txtemail">email</label>
        <input type="text" name="txtemail" id="txtemail" 
        value="<?=$datos['email']?>" >

        <br>
        <label for="txtfechanac">Fecha Nacimiento</label>
        <input type="text" name="txtfechanac" id="txtfechanac" 
        value="<?=$datos['fechanac']?>" >

        <br>
        <label for="txtcod_nivel_acad">Nivel Academico</label>
        <input type="textcod_nivel_acad" name="txtcod_nivel_acad" id="txtcod_nivel_acad" 
        value="<?=$datos['cos_nivel_acad']?>" >

        <br>
        <label for="txtcod_muni">Codigo Municipalidad</label>
        <input type="text" name="txtcod_muni" id="txtcod_muni" 
        value="<?=$datos['cod_muni']?>" >

        <br>
        <label for="txtcontra">PASSWORD</label>
        <input type="text" name="txtcontra" id="txtcontra" 
        value="<?=$datos['contra']?>" >
        <br>
        
        
        <input type="submit" value="Guardar cambios" name="btnGuardar" id="btnGuardar">
    </form>
</body>
</html>






