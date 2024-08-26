<?php 

    namespace App\Models;
    use CodeIgniter\Model;

    class Departamento extends Model{
        protected $table = 'departamentos';
        protected $primarykey = 'cod_depto';
        protected $allowedfield = ['cod_depto', 'nombre_depto', 'cod_region'];

    }
?>