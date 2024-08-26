<?php 

    namespace App\Controllers;
    use CodeIgniter\Controller;
    use App\Models\Nivel;
    

    class ControladorNivel extends BaseController{
        public function verNivel(){

            $nivelacad = new Nivel();

            $datosbd['nivelbd']=$nivelacad->findAll();

            return view('Niveles',$datosbd);

        }

        public function guardarNivel(){

            $codigo = $this->request->getVar('txt_nivelaca');
            $nombre = $this->request->getVar('txt_nombre');
            $descripcion = $this->request->getVar('txt_descripcion');

            $nivelacademico = new Nivel();

            $datos=['cod_nivel_acad'=>$codigo, 'nombre'=>$nombre, 'descripcion'=>$descripcion];

            $nivelacademico->insert($datos);
            
            return $this->verNivel();

        }
    }
?>