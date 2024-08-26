<?php 

    namespace App\Models;
    use CodeIgniter\Model;

    class Ciudadano extends Model{
        protected $table = 'ciudadanos';
        protected $primarykey = 'dpi';
        protected $allowedfield = ['dpi', 'apellido', 'nombre', 'direccion', 'tel_casa', 'tel_movil', 'email', 'fechanac', 'cod_nivel_acad', 'cod_muni',];

    }
?>