<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Wilayah extends MY_Controller {

    /**
     * Index Page for this controller.
     *
     * Maps to the following URL
     *      http://example.com/index.php/welcome
     *  - or -
     *      http://example.com/index.php/welcome/index
     *  - or -
     * Since this controller is set as the default controller in
     * config/routes.php, it's displayed at http://example.com/
     *
     * So any other public methods not prefixed with an underscore will
     * map to /index.php/welcome/<method_name>
     * @see https://codeigniter.com/user_guide/general/urls.html
     */
    public function __construct() {
        parent::__construct();
        $this->load->model('Mwilayah');
        $this->load->helper('form','url');
    }

    // awal tampil index
    public function index()
    {
        $data['title'] = 'Data Member';
        $data['r_wilayah'] = $this->Mwilayah->get_allwilayah();
        $this->render('master_data/wilayah' , $data);
    }
    public function tampil() {        
        $data['title'] = 'Data Wilayah';
        $data['r_wilayah'] = $this->Mwilayah->get_allwilayah();
        $this->load->view('master_data/wilayah', $data);
    }

    // function form
    public function form() {
        // ambil variable url
        $mau_ke = $this->uri->segment(3);
        $idu = $this->uri->segment(4);

        // ambil variabel dari form
        $kode_wilayah = addslashes($this->input->post('kode_wilayah'));
        $nm_wilayah = addslashes($this->input->post('nm_wilayah'));
        $last_update_by = addslashes($this->input->post('last_update_by'));
        $last_update_time = addslashes($this->input->post('last_update_time'));
        

        // mengarahkan fungsi form sesuai dengan uri segmentnya
        if ($mau_ke == "add") {
            $data['title'] = 'Tambah Member';
            $data['aksi'] = 'aksi_add';
            $this->load->view('master_data/formwilayah', $data);
        } 
        elseif ($mau_ke == "edit") {
            $data['r_wilayah'] = $this->Mwilayah->get_wilayah_byid($idu);
            $data['title'] = 'Edit Wilayah';
            $data['aksi']  = 'aksi_edit';
            $this->load->view('master_data/formwilayah', $data);
        } 
        elseif ($mau_ke == "aksi_add") {
            // jika uri segmentasinya AKSI_ADD sebagai fungsi untuk insert data
            $data = array(
                'kode_wilayah'=> $kode_wilayah,
                'nm_wilayah'     => $nm_wilayah,
                'last_update_by' => $last_update_by,
                'last_update_time'   => $last_update_time,
            );

            $this->Mwilayah->get_insert($data);
            $this->session->set_flashdata("Pesan", "<div class=\"alert alert-success\" id=\"alert\"><i class=\"glyphicon glyphicon-ok\"></i> Data berhasil di Simpan</div>");
            redirect('Wilayah');
        } elseif ($mau_ke == "aksi_edit") {
            // jika uri segmentnya aksi_edit sebagai fungsi untuk update
            $data = array(
                'kode_wilayah'=> $kode_wilayah,
                'nm_wilayah'     => $nm_wilayah,
                'last_update_by' => $last_update_by,
                'last_update_time'   => $last_update_time,
            );

            $this->Mwilayah->get_update($kode_wilayah, $data);
            $this->session->set_flashdata("Pesan", "<div class=\"alert alert-success\" id=\"alert\"><i class=\"glyphicon glyphicon-ok\"></i> Data berhasil di Update</div>");
            redirect('Wilayah');
        }
    }

    // fungsi detail barang
    public function detail($id) {
        $data['title'] = 'Detail Wilayah';
        $data['r_wilayah'] = $this->Mwilayah->get_wilayah_byid($id);

        $this->load->view('master_data/delwilayah', $data);
    }

    // fungsi hapus barang
    public function hapus($gid) {
        $this->Mwilayah->del_wilayah($gid);
        $this->session->set_flashdata("Pesan", "<div class=\"alert alert-success\" id=\"alert\"><i class=\"glyphicon glyphicon-ok\"></i> Data berhasil di Hapus</div>");
        redirect('Wilayah');
    }

    
}
