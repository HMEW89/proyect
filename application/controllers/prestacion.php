<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Prestacion extends CI_Controller {

	public function index()
	{
		$lista=$this->prestacion_model->listaprestaciones();
		$data['prestacion']=$lista;

		$this->load->view('administrador/prestacion/prestacion_lista',$data);
	}
    public function agregar()
	{
		$this->load->view('administrador/prestacion/prestacion_form');
	}
    public function agregarbd()
	{
        $data['fecha']=$_POST['fecha'];
        $data['total']=$_POST['total'];
        $data['idUsuario']=$_POST['idUsuario'];

        $this->prestacion_model->agregarprestacion($data);

        redirect('prestacion/index','refresh');
	}
    public function eliminarbd()
	{
        $id=$_POST['id'];

        $this->prestacion_model->eliminarprestacion($id);

        redirect('prestacion/index','refresh');
	}
    public function modificar()
	{
        $id=$_POST['id'];
        $data['infoprestacion']=$this->prestacion_model->recuperarprestacion($id);
        $this->load->view('administrador/prestacion/prestacion_modif',$data);
	}
    public function modificarbd()
	{
        $id=$_POST['id'];

        $data['fecha']=$_POST['fecha'];
        $data['total']=$_POST['total'];
        $data['idUsuario']=$_POST['idUsuario'];

        $this->prestacion_model->modificarprestacion($id, $data);

        redirect('prestacion/index','refresh');
	}
    public function buscar() {
        $ciNit = $_POST['buscarSolicitante']; // Obtener el carnet del formulario
        
        $solicitante = $this->prestacion_model->buscarClientePorCarnet($ciNit);
        
        // Enviar los datos del cliente a la vista
        $data['prestacion'] = $solicitante ;
        
        $this->load->view('administrador/prestacion/prestacion_form', $data);
    }

}