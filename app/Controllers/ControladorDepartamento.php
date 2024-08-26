<?php 

    namespace App\Controllers;
    use CodeIgniter\Controller;
    use App\Models\Departamento;
    

    class ControladorDepartamento extends BaseController{
        public function verDepartamento(){

            $ndepartamento = new Departamento();

            $datosbd['departamentobd']=$ndepartamento->findAll();

            return view('Departamento',$datosbd);

        }
        public function guardarDepartamento(){

            /* 
            'cod_depto', 'nombre_depto', 'cod_region' 
            txt_dep txt_nombre txt_codreg
            */ 

            $departamento = $this->request->getVar('txt_dep');
            $nombre = $this->request->getVar('txt_nombre');
            $region = $this->request->getVar('txt_codreg');

            $adepa = new Departamento();
            
            $datos=['cod_depto'=>$departamento, 'nombre_depto'=>$nombre, 'cod_region'=>$region];

            $adepa->insert($datos);
            
            return $this->verDepartamento();
         

        }
    }

    
?>