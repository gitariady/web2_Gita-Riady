<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Barang extends CI_Controller {
	public function __construct()
	{
        parent::__construct();
        $this->load->model("Barang_model");
        $this->load->library("form_validation");
    }
    public function index()
    {
        $data= array(
            'title'=> 'View Data Barang',
            'userlog'=> infoLogin(),
            'barang'=> $this->Barang_model->getAll(),
			'content'=> 'barang/index'// huruf k harus sesusuai $Barang
		);
		$this->load->view('template/main',$data);
	}
    public function add()
    {
        $data= array(
            'title'=> 'Tambah Data Barang',
            'kategori'=> $this->db->get('kategori')->result_array(),
            'satuan'=> $this->db->get('satuan')->result_array(),
            'supplier'=> $this->db->get('supplier')->result_array(),
			'content'=> 'barang/add_form'
		);
		$this->load->view('template/main',$data);
	}
    public function save()
    {
        $this->Barang_model->Save();
        if ($this->db->affected_rows()>0){
            $this->session->set_flashdata("success","Data user Berhasil Disimpan");
        }
        redirect('barang');
	}
    public function getedit($id)
    {
        $data= array(
            'title'=> 'Update Data Barang',
            'kategori'=> $this->db->get('kategori')->result_array(),
            'satuan'=> $this->db->get('satuan')->result_array(),
            'supplier'=> $this->db->get('supplier')->result_array(),
            'barang'=> $this->Barang_model->getByid($id),
			'content'=> 'barang/edit_form'
		);
		$this->load->view('template/main',$data);
	}
    // public function edit()
    // {
    //     $this->Barang_model->editData();
    //     if ($this->db->affected_rows()>0){
    //         $this->session->set_flashdata("success","Data user Berhasil update");
    //     }
    //     redirect('barang');
	// }

    // function delete($id)
    // {
    //     // Menghapus data user berdasarkan ID
    //     $this->Barang_model->delete($id);
    //     redirect('barang');
    // }
}