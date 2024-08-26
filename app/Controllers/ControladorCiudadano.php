<?php 

    namespace App\Controllers;
    use CodeIgniter\Controller;
    use App\Models\Ciudadano;
    

    class ControladorCiudadano extends BaseController{
        public function verCiudadano(){

            $nciudadano = new Ciudadano();

            $datosbd['ciudadanobd']=$nciudadano->findAll();

            return view('Ciudadano',$datosbd);

        }
        public function guardarCiudadano(){


            $dpi = $this->request->getVar('txt_dpi');
            $apelldio = $this->request->getVar('txt_apellido');
            $nombre = $this->request->getVar('txt_nombre');
            $direccion = $this->request->getVar('txt_direccion');
            $telcasa = $this->request->getVar('txt_telcasa');
            $telmovil = $this->request->getVar('txt_telmovil');
            $mail = $this->request->getVar('txt_email');
            $fecha = $this->request->getVar('txt_fechanac');
            $codnivel = $this->request->getVar('txt_nivelaca');
            $codepto = $this->request->getVar('txt_codmun');

            $nciudadano = new Ciudadano();

            $datos=[
                'dpi'=>$dpi, 
                'apellido'=>$apelldio, 
                'nombre'=>$nombre, 
                'direccion'=>$direccion, 
                'tel_casa'=>$telcasa, 
                'tel_movil'=>$telmovil, 
                'email'=>$mail, 
                'fechanac'=>$fecha, 
                'cod_nivel_acad'=>$codnivel, 
                'cod_muni'=>$codepto,

            ];

            $nciudadano->insert($datos);
            
            return $this->verCiudadano();

        }
    }

?>