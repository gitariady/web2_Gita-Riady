<?php

class User_model extends CI_Model
{
    protected $_table = 'user';
    protected $primary = 'id';

    // Mengambil semua data user yang aktif
    public function getAll(): mixed
    {
        return $this->db->where('is_active', 1)->get($this->_table)->result();
    }

    // Menyimpan data user baru
    public function save()
    {
        // Menyiapkan data yang akan disimpan
        $data = array(
            'nik' => htmlspecialchars($this->input->post('nik'), true),
            'username' => htmlspecialchars($this->input->post('username'), true),
            'password' => password_hash($this->input->post('password'), PASSWORD_DEFAULT), // Menggunakan password_hash untuk enkripsi password
            'email' => htmlspecialchars($this->input->post('email'), true),
            'full_name' => htmlspecialchars($this->input->post('full_name'), true),
            'phone' => htmlspecialchars($this->input->post('phone'), true),
            'address' => htmlspecialchars($this->input->post('address'), true),
            'role' => htmlspecialchars($this->input->post('role'), true),
            'is_active' => 1, // Menandakan bahwa user aktif
        );

        // Menyimpan data ke tabel user
        return $this->db->insert($this->_table, $data);
    }

    public function getById($id)
    {
        return $this->db->get_where($this->_table, ["id" =>$id]) ->row();
    }
    public function editData()
    {
        // Menyiapkan data yang akan disimpan
        $id = $this->input->post('id');
        $data = array(
            'username' => htmlspecialchars($this->input->post('username'), true),
            'email' => htmlspecialchars($this->input->post('email'), true),
            'full_name' => htmlspecialchars($this->input->post('full_name'), true),
            'phone' => htmlspecialchars($this->input->post('phone'), true),
            'role' => htmlspecialchars($this->input->post('role'), true),
            'is_active' => 1, // Menandakan bahwa user aktif
        );

        // Menyimpan data ke tabel user
        return $this->db->set($data)->where($this->primary,$id)->update($this->_table);
    }
    public function delete($id)
{
    // Menggunakan where() yang benar dan menghapus data berdasarkan id
    $this->db->where('id', $id)->delete($this->_table);

    // Mengecek jika ada baris yang terpengaruh oleh query
    if ($this->db->affected_rows() > 0) {
        // Set flashdata untuk menampilkan pesan sukses
        $this->session->set_flashdata("success", "Data User Berhasil DiHapus");
    } else {
        // Set flashdata untuk menampilkan pesan error jika tidak ada data yang dihapus
        $this->session->set_flashdata("error", "Data User Gagal DiHapus");
    }

    // Redirect kembali ke halaman user
    redirect('user');
}

}
