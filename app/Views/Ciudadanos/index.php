<!DOCTYPE html>
<html lang="es" class="h-100">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MENU CIUDADANOS</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <link href="css/estilo.css" rel="stylesheet">
</head>

<body class="d-flex flex-column h-100">

    <!-- Begin page content -->
    <main class="flex-shrink-0">
        <div class="container">
            <h3 class="my-3" id="titulo">BIENVENIDOS A GESTION CIUDADANOS</h3>
            <h2>Para iniciar Seleccione una opcion</h2>

            <a href="<?=base_url( 'ciudadanos/ciudadano');?>" class="btn btn-success">CIUDADANO</a>
            <a href="<?=base_url('regiones/region');?>" class="btn btn-success">REGION</a>
            <a href="<?=base_url('departamentos/departamento');?>"  class="btn btn-success">DEPARTAMENTO</a>
            <a href="<?=base_url('municipios/municipio');?>"  class="btn btn-success">MUNICIPIO</a>
            <a href="<?=base_url('nivelesaca/nivelacademico');?>"  class="btn btn-success">NIVELES ACADEMICOS</a>

            <table class="table table-hover table-bordered my-3" aria-describedby="titulo">
                <thead class="table-dark">
             
                </thead>

                <tbody>
                    <tr>
                       
                            <a href="edita.html" class="btn btn-warning btn-sm me-2">SALIR</a>

                           
                        </td>
                    </tr>

                </tbody>
            </table>
        </div>
    </main>

    <footer class="footer mt-auto py-3 bg-body-tertiary">
        <div class="container">
            <span class="text-body-secondary"> 2024 | USAC-EFPEM</span>
        </div>
    </footer>

    
   
    

</body>

</html>