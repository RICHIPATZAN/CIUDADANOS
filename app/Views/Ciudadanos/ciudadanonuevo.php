<!DOCTYPE html>
<html lang="es" class="h-100">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ciudadanos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <link href="css/estilo.css" rel="stylesheet">
</head>

<body class="d-flex flex-column h-100">

    <!-- Begin page content -->
    <main class="flex-shrink-0">
        <div class="container">
            <h3 class="my-3">Nuevo Ciudadano</h3>

<?php if (session()->getFlashdata('error') !== null) { ?>
    <div class="alert alert-danger">
        <?= session()->getFlashdata('error'); ?>
        </div>
<?php } ?>


            <form action="#" class="row g-3" method="post" autocomplete="off">

                <div class="col-md-4">
                    <label for="dpi" class="form-label">DPI</label>
                    <input type="text" class="form-control" id="dpi" name="dpi" value="<?= set_value('dpi') ?>"required autofocus>
                </div>

                <div class="col-md-8">
                    <label for="nombre" class="form-label">Nombre</label>
                    <input type="text" class="form-control" id="nombre" name="nombre" value="<?= set_value('nombre') ?>"required>
                </div>

                <div class="col-md-8">
                    <label for="apellido" class="form-label">Apellido</label>
                    <input type="text" class="form-control" id="apellido" name="apellido" value="<?= set_value('apellido') ?>"required>
                </div>

                <div class="col-md-8">
                    <label for="direccion" class="form-label">Dirección</label>
                    <input type="text" class="form-control" id="direccion" name="direccion" value="<?= set_value('direccion') ?>" required>
                </div>

                <div class="col-md-6">
                    <label for="tel_casa" class="form-label">Teléfono Casa</label>
                    <input type="text" class="form-control" id="tel_casa" name="tel_casa" value="<?= set_value('tel_casa') ?>"required>
                </div>

                <div class="col-md-6">
                    <label for="tel_movil" class="form-label">Teléfono Movil</label>
                    <input type="text" class="form-control" id="tel_movil" name="tel_movil"value="<?= set_value('tel_movil') ?>" required>
                </div>

                <div class="col-md-6">
                    <label for="email" class="form-label">Correo electrónico</label>
                    <input type="email" class="form-control" id="email" name="email"  value="<?= set_value('email') ?>" required>
                </div>

                <div class="col-md-6">
                    <label for="fechanac" class="form-label">Fecha de nacimiento</label>
                    <input type="date" class="form-control" id="fechanac" name="fechanac"value="<?= set_value('fechanac') ?>" required>
                </div>

                <div class="col-md-6">
                    <label for="cod_nivel_acad" class="form-label">Nivel Academico</label>
                    <input type="text" class="form-control" id="cod_nivel_acad" name="cod_nivel_acad" value="<?= set_value('clavecod_nivel_acad') ?>"required>
                </div>


                <div class="col-md-6">
                    <label for="cod_muni" class="form-label">Codigo Municipal</label>
                    <input type="text" class="form-control" id="cod_muni" name="cod_muni" value="<?= set_value('cod_muni') ?>"required>

                    <div class="col-md-6">
                    <label for="contra" class="form-label">Password</label>
                    <input type="text" class="form-control" id="contra" name="contra" requiredvalue="<?= set_value('contra') ?>">
                </div>

                   
                    </select>
                </div>

                <div class="col-12">
                    <a href="<?=base_url('ciudadanos');?>" class="btn btn-secondary">Regresar</a>
                    <button type="submit" class="btn btn-primary">Guardar</button>
                </div>

            </form>

        </div>
    </main>

    <footer class="footer mt-auto py-3 bg-body-tertiary">
        <div class="container">
            <span class="text-body-secondary"> 2024 | USAC-EFPEM</span>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
</body>

</html>