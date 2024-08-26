<?php 

    namespace App\Controllers;
    use CodeIgniter\Controller;
    use App\Models\Region;
    

    class ControladorRegion extends BaseController{
        public function verRegion(){

            $nregion = new Region();

            $datosbd['regionbd']=$nregion->findAll();

            return view('Region',$datosbd);

        }
        
        public function guardarRegion(){

            $codigo = $this->request->getVar('txt_codregion');
            $nombre = $this->request->getVar('txt_nombre');
            $descripcion = $this->request->getVar('txt_descripcion');

            $nregion = new Region();

            $datos=['cod_region'=>$codigo, 'nombre'=>$nombre, 'descripcion'=>$descripcion];

            $nregion->insert($datos);
            
            return $this->verRegion();

        }

    }

?>