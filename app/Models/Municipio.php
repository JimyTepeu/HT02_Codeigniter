<?php 

    namespace App\Models;
    use CodeIgniter\Model;

    class Municipio extends Model{
        protected $table = 'municipios';
        protected $primarykey = 'cod_muni';
        protected $allowedfield = ['cod_muni', 'nombre_municipio', 'cod_depto'];

    }
?>