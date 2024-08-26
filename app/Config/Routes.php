<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
#RUTAS CIUDADANOS
$routes->get('/', 'Ciudadanos::index');
$routes->get('ciudadanos/ciudadano','Ciudadanos::ciudadano');
$routes->get('ciudadanos/new','Ciudadanos::new');

#RUTAS REGION
#$routes->get('/', 'regiones::region');
$routes->get('regiones/region','regiones::region');

#RUTAS DEPARTAMENTO
$routes->get('departamentos/departamento','departamentos::departamento');

#RUTAS MUNICIPIO
$routes->get('municipios/municipio','municipios::municipio');

#RUTAS NIVELES ACADEMICOS

$routes->get('nivelesaca/nivelacademico','nivelesaca::nivelacademico');


#$routes->get('/' ,'ciudadanos::ciudadano');#pagina Principal Ciudadanos
#verificar $routes->get('ciudadanos/ciudadano','Ciudadanos::ciudadano'); #abre el formulario nuevo ciudadano desde Index
#pagina ciudadano nuevo , desde ciudadanos principal
#routes->get('ciudadanos/actualizar','Ciudadanos::actualizar');
#routes->post('ciudadanos/new','Ciudadanos::new');# ciudadano nuevo POST
#$routes->resource('ciudadanos',['placeholder'=>'(:num)','except'=>'show']);
#$routes->post('ciudadanos/modificarciudadano', 'ciudadanos::modificarciudadano');
# verificar $routes->post('/' , 'ciudadanos::modificarciudadano');
#$routes->get('/', 'Departamentos::Departamento'); #pagina principal departamentos
#$routes->get('Departamentos/newdep','departamentos::newdep');
#

