<?php 

    namespace App\Models;
    use CodeIgniter\Model;

    class Region extends Model{
        protected $table = 'regiones';
        protected $primarykey = 'cod_region';
        protected $allowedfield = ['cod_region', 'nombre', 'descripcion'];

    }
?>