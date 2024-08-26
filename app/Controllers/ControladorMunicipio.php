<?php 

    namespace App\Controllers;
    use CodeIgniter\Controller;
    use App\Models\Municipio;
    

    class ControladorMunicipio extends BaseController{
        public function verMunicipio(){

            $nmunicipio = new Municipio();

            $datosbd['municipiobd']=$nmunicipio->findAll();

            return view('Municipio',$datosbd);

        }
        public function guardarMunicipio(){

            $municipio = $this->request->getVar('txt_mun');
            $nombre = $this->request->getVar('txt_nombre');
            $codigodep = $this->request->getVar('txt_coddep');

            $nivelacademico = new Municipio();
            
            $datos=['cod_muni'=>$municipio, 'nombre_municipio'=>$nombre, 'cod_depto'=>$codigodep];

            $nivelacademico->insert($datos);
            
            return $this->verMunicipio();

        }
    }

?>