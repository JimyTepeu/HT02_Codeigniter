<?php 

    namespace App\Models;
    use CodeIgniter\Model;

    class Nivel extends Model{
        protected $table = 'nivelesacademicos';
        protected $primarykey = 'cod_nivel_acad';
        protected $allowedfield = ['cod_nivel_acad', 'nombre', 'descripcion'];

    }
?>