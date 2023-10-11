<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Solicitante extends CI_Controller {

	public function index()
	{
		$lista=$this->solicitante_model->listasolicitantes();
		$data['solicitante']=$lista;

		$this->load->view('administrador/solicitante/solicitante_list',$data);
	}
    public function agregar()
	{
		$this->load->view('administrador/solicitante/solicitante_form');
	}
    public function agregarbd()
	{
		$data['ciNit']=$_POST['carnet'];
        $data['razonSocial']=$_POST['nombres'];
        $data['idUsuario']=$_POST['idUsuario'];

        $this->solicitante_model->agregarsolicitante($data);

        redirect('solicitante/index','refresh');
	}
    public function agregar2bd()
	{
		$data['ciNit']=$_POST['carnet'];
        $data['razonSocial']=$_POST['nombres'];
        $data['idUsuario']=$_POST['idUsuario'];

        $this->solicitante_model->agregarsolicitante($data);

        redirect('solicitante/index2','refresh');
	}
    public function index2()
	{
		$lista=$this->solicitante_model->listasolicitantes();
		$data['solicitante']=$lista;

		$this->load->view('administrador/prestacion/prestacion_form',$data);
	}
    public function eliminarbd()
	{
        $id=$_POST['id'];

        $this->solicitante_model->eliminarsolicitante($id);

        redirect('solicitante/index','refresh');
	}
    public function modificar()
	{
        $id=$_POST['id'];
        $data['infosolicitante']=$this->solicitante_model->recuperarsolicitante($id);
        $this->load->view('administrador/solicitante/solicitante_modif',$data);
	}
    public function modificarbd()
	{
        $id=$_POST['id'];

        $data['ciNit']=$_POST['carnet'];
        $data['razonSocial']=$_POST['nombres'];
        $data['idUsuario']=$_POST['idUsuario'];

        $this->solicitante_model->modificarsolicitante($id, $data);

        redirect('solicitante/index','refresh');
	}

}
