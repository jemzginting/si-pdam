<?php
defined('BASEPATH') or exit('No direct script access allowed');

class AdminControl extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        if (!$this->session->userdata('sess_admin')) {
            redirect("AuthLogin");
        }

        $this->load->model('AdminModel');
        //  $this->load->library('form_validation', 'session');
    }

    public function index()
    {

        $session_data = $this->session->userdata('sess_admin');
        $datacontent['session'] = $session_data;
        $data['title'] = 'Welcome to Website Pelayanan Pengadilan Agama Kota Palembang';
        // $this->template->view('template/admin/main_content', 1, $datacontent);
        //$data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();
        $this->load->view('template/header', $datacontent, $data);
        $this->load->view('template/sidebar', $datacontent, $data);
        $this->load->view('template/topbar', $datacontent, $data);
        $this->load->view('template/admin/index', 1, $datacontent, $data);
        $this->load->view('template/footer');
    }

    public function dashboard()
    {
        $session_data = $this->session->userdata('sess_admin');
        $datacontent['session'] = $session_data;

        $this->load->view('template/header', $datacontent);
        $this->load->view('template/sidebar', $datacontent);
        $this->load->view('template/topbar', $datacontent);
        $this->load->view('template/admin/index', 1, $datacontent);
        $this->load->view('template/footer');
    }

    public function konfirmasi_keluhan()
    {
        $session_data = $this->session->userdata('sess_admin');
        $datacontent['session'] = $session_data;
        $this->load->view('template/header', $datacontent);
        $this->load->view('template/sidebar', $datacontent);
        $this->load->view('template/topbar', $datacontent);
        $this->load->view('template/admin/konfirmasi_keluhan', 1, $datacontent);
        $this->load->view('template/footer');
    }

    public function konfirmasi_pasangbaru()
    {
        $session_data = $this->session->userdata('sess_admin');
        $datacontent['session'] = $session_data;
        $this->load->view('template/header', $datacontent);
        $this->load->view('template/sidebar', $datacontent);
        $this->load->view('template/topbar', $datacontent);
        $this->load->view('template/admin/laporan_pasangbaru', 1, $datacontent);
        $this->load->view('template/footer');
    }

    public function konfirmasi_konsultasi()
    {
        $session_data = $this->session->userdata('sess_admin');
        $datacontent['session'] = $session_data;
        $this->load->view('template/header', $datacontent);
        $this->load->view('template/sidebar', $datacontent);
        $this->load->view('template/topbar', $datacontent);
        $this->load->view('template/admin/konfirmasi_konsultasi', 1, $datacontent);
        $this->load->view('template/footer');
    }

    public function pilih_chat_pelanggan()
    {
        $session_data = $this->session->userdata('sess_admin');
        $datacontent['session'] = $session_data;
        $this->load->view('template/header', $datacontent);
        $this->load->view('template/sidebar', $datacontent);
        $this->load->view('template/topbar', $datacontent);
        $this->load->view('template/admin/pilih_chat_pelanggan', 1, $datacontent);
        $this->load->view('template/footer', $datacontent);
    }

    public function input_pengumuman()
    {
        $session_data = $this->session->userdata('sess_admin');
        $datacontent['session'] = $session_data;
        $this->load->view('template/header', $datacontent);
        $this->load->view('template/sidebar', $datacontent);
        $this->load->view('template/topbar', $datacontent);
        $this->load->view('template/admin/input_pengumuman', 1, $datacontent);
        $this->load->view('template/footer', $datacontent);
    }

    public function rekap_konsultasi()
    {
        $session_data = $this->session->userdata('sess_admin');
        $datacontent['session'] = $session_data;
        $this->load->view('template/header', $datacontent);
        $this->load->view('template/sidebar', $datacontent);
        $this->load->view('template/topbar', $datacontent);
        $this->load->view('template/admin/rekap_konsultasi', 1, $datacontent);
        $this->load->view('template/footer');
    }

    public function get_aju_pasangbaru()
    {
        $session_data = $this->session->userdata('sess_admin');
        $data['session'] = $session_data;
        $result = $this->AdminModel->get_aju_pasangbaru($data);
        echo json_encode($result);
    }

    public function get_rekap_keluhan()
    {
        $session_data = $this->session->userdata('sess_admin');
        $data['session'] = $session_data;
        $result = $this->AdminModel->get_all_keluhan($data);
        echo json_encode($result);
    }

    public function get_personal_keluhan()
    {
        $id_keluhan = $this->input->GET('id_keluhan');
        $result = $this->AdminModel->get_personal_keluhan($id_keluhan);
        echo json_encode($result);
    }

    public function get_balasan_keluhan()
    {
        $id_keluhan = $this->input->GET('id_keluhan');
        $result = $this->AdminModel->get_balasan_keluhan($id_keluhan);
        echo json_encode($result);
    }

    public function get_name_chat()
    {
        $session_data = $this->session->userdata('sess_admin');
        //$data['session'] = $session_data;
        $result = $this->AdminModel->get_chat_name();
        echo json_encode($result);
    }

    public function kirim_reply()
    {
        $id_keluhan = $this->input->GET('id_keluhan');
        $isi_balasan = $this->input->GET('isi_balasan');
        $result = $this->AdminModel->update_balasan($id_keluhan, $isi_balasan);
        echo json_encode($result);
    }

    public function konfirm_pasangbaru()
    {
        $data['no_kontrol'] = $this->input->post('no_kontrol');
        $data['status'] = $this->input->POST('status');
        //  echo "aku =" . $data['status'];
        $res = $this->AdminModel->update_konfirmasi($data);
        echo json_encode($res);
    }

    public function submit_pengumuman()
    {
        $session_data = $this->session->userdata('sess_member');
        $data['no_kontrol'] = $session_data['no_kontrol'];
        $data['judul'] = $this->input->post('judul');
        $data['tgl_pengumuman'] = $this->input->post('tgl_pengumuman');
        $data['waktu_pengumuman'] = $this->input->post('waktu_pengumuman');
        $data['wilayah'] = $this->input->post('wilayah');
        $data['isi_pengumuman'] = $this->input->post('isi_pengumuman');
        $result = $this->AdminModel->tambah_pengumuman($data);
    }

    public function chat_pelanggan()
    {
        $session_data = $this->session->userdata('sess_admin');
        $datacontent['session'] = $session_data;
        $data['userid'] = $this->input->GET('id');

        $data['name'] = $this->input->GET('name');
        $data['title'] = 'Form Pelayanan Kepuasan Layanan';
        $this->load->view('template/header', $datacontent, $data);
        $this->load->view('template/sidebar', $datacontent, $data);
        $this->load->view('template/topbar', $datacontent, $data);
        $this->load->view('template/chat/chat', $data);
        $this->load->view('template/footer');
    }
}
