<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('ver_nivel','ControladorNivel::verNivel');
$routes->get('ver_ciudadano','ControladorCiudadano::verCiudadano');
$routes->get('ver_municipio','ControladorMunicipio::verMunicipio');
$routes->get('ver_departamento','ControladorDepartamento::verDepartamento');
$routes->get('ver_region','ControladorRegion::verRegion');

$routes->post('guardar_Nivel','ControladorNivel::guardarNivel');
$routes->post('guardar_Ciudadano','ControladorCiudadano::guardarCiudadano');
$routes->post('guardar_Municipio','ControladorMunicipio::guardarMunicipio');
$routes->post('guardar_Departamento','ControladorDepartamento::guardarDepartamento');
$routes->post('guardar_Region','ControladorRegion::');
