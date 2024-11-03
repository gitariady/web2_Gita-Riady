<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Kategori extends CI_Controller {
	public function __construct()
	{
        parent::__construct();
        $this->load->model("Kategori_model");
        $this->load->library("form_validation");
    }
    public function index()
    {
        $data= array(
            'title'=> 'View Data Kategori',
            'userlog'=> infoLogin(),
            'kategori'=> $this->Kategori_model->getAll(),
			'content'=> 'kategori/index'// huruf k harus sesusuai $kategori
		);
		$this->load->view('template/main',$data);
	}
    public function add()
    {
        $data= array(
            'title'=> 'Tambah Data Kategori',
			'content'=> 'Kategori/add_form'
		);
		$this->load->view('template/main',$data);
	}
    public function save()
    {
        $this->Kategori_model->Save();
        if ($this->db->affected_rows()>0){
            $this->session->set_flashdata("success","Data user Berhasil Disimpan");
        }
        redirect('kategori');
	}
    public function getedit($id)
    {
        $data= array(
            'title'=> 'Update Data Kategori',
            'kategori'=> $this->Kategori_model->getByid($id),
			'content'=> 'kategori/edit_form'
		);
		$this->load->view('template/main',$data);
	}
    public function edit()
    {
        $this->Kategori_model->editData();
        if ($this->db->affected_rows()>0){
            $this->session->set_flashdata("success","Data user Berhasil update");
        }
        redirect('kategori');
	}

    function delete($id)
    {
        // Menghapus data user berdasarkan ID
        $this->Kategori_model->delete($id);
        redirect('kategori');
    }
}