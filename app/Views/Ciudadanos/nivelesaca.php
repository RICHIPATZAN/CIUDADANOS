<<!DOCTYPE html>
<html lang="es" class="h-100">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nivel Academico</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <link href="css/estilo.css" rel="stylesheet">
</head>

<body class="d-flex flex-column h-100">

<body>
    <div class="container mt-5">
        <h1>Nivel Academico</h1>
        <table class="table table-striped">
            <thead>
                <tr>
                  
                    <th>Nombre</th>
                    <th>Nivel Academico</th>
                    <th>Descripcion</th>
                    
                    
                </tr>
            </thead>
            <tbody>
                <?php if (!empty($ciudadanos) && is_array($ciudadanos)): ?>
                    <?php foreach ($ciudadanos as $ciudadano): ?>
                        <tr>
                            <td><?= esc($ciudadano->nombre) ?></td>
                            <td><?= esc($ciudadano->cod_nivel_acad) ?></td>
                            <td><?= esc($ciudadano->descripcion) ?></td>
                            <td>
                            <a href="edita.html" class="btn btn-warning btn-sm me-2">Editar</a>

                            <button type="button" class="btn btn-danger btn-sm" data-bs-toggle="modal"
                                data-bs-target="#eliminaModal" data-bs-id="1">Eliminar</button>
                        </td>
                        </tr>
                    <?php endforeach; ?>
                <?php else: ?>
                    <tr>
                        <td colspan="9">No hay datos disponibles</td>
                    </tr>
                <?php endif; ?>
            </tbody>
        </table>
        <div class="modal fade" id="eliminaModal" tabindex="-1" aria-labelledby="eliminaModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="eliminaModalLabel">Aviso</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p>¿Desea eliminar este registro?</p>
                </div>
                <div class="modal-footer">
                    <form id="form-elimina" action="" method="post">
                        <input type="hidden" name="_method" value="delete">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                        <button type="submit" class="btn btn-danger">Eliminar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>

    <script>

        const eliminaModal = document.getElementById('eliminaModal')
        if (eliminaModal) {
            eliminaModal.addEventListener('show.bs.modal', event => {
                // Button that triggered the modal
                const button = event.relatedTarget
                // Extract info from data-bs-* attributes
                const id = button.getAttribute('data-bs-id')

                // Update the modal's content.
                const form = eliminaModal.querySelector('#form-elimina')
                form.setAttribute('action', 'elimina.html?id=' + id)
            })
        }
    </script>



    </div>
</body>
</html>
