<?php
defined('BASEPATH') or exit('No direct script access allowed');

class MemberModel extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }

    public function get_nomor_urut()
    {
        $sql = "SELECT max(no_kontrol) as no_kontrol FROM tb_login";
        $res = $this->db->query($sql);
        return $res->result_array();
    }


    public function tambah_keluhan($data)
    {
        $this->db->set('no_kontrol',  $data['no_kontrol']);
        $this->db->set('nama_permohon', $data['nama_permohon']);
        $this->db->set('alamat_permohon', $data['alamat_permohon']);
        $this->db->set('tanggal_permohon',  $data['tanggal_permohon']);
        $this->db->set('no_agenda', $data['no_agenda']);
        $this->db->set('ukuran_meter', $data['ukuran_meter']);
        $this->db->set('merek_meter', $data['merek_meter']);
        $this->db->set('seri_meter', $data['seri_meter']);
        $this->db->set('tgl_pengaduan', $data['tgl_pengaduan']);
        $this->db->set('tgl_pk',  $data['tgl_pk']);
        $this->db->set('tgl_meter', $data['tgl_meter']);
        $this->db->set('tgl_pasang', $data['tgl_pasang']);
        $this->db->set('jenis_keluhan', $data['jenis_keluhan']);
        $this->db->set('catatan', $data['catatan']);
        $this->db->insert('tb_keluhan');
        $this->db->insert_id();
    }


    public function input_nilai($data, $id_user, $date)
    {
        $this->db->set('nilai', $data);
        $this->db->set('id_user', $id_user);
        $this->db->set('tanggal', $date);
        $this->db->insert('penilaian');
        $this->db->insert_id();
    }

    public function get_konsultasi_userid($userid)
    {
        $sql = 'SELECT * from konsultasi where status != ""  AND id_user=' . $userid;
        $res = $this->db->query($sql);
        return $res->result_array();
    }

    public function get_all_keluhan($no_kontrol)
    {
        $sql = "SELECT * from tb_keluhan WHERE no_kontrol = '" . $no_kontrol . "'";
        $res = $this->db->query($sql);
        return $res->result_array();
    }

    public function get_personal_keluhan($id_keluhan)
    {
        $sql = "SELECT * from tb_keluhan WHERE id_keluhan =" . $id_keluhan;
        $res = $this->db->query($sql);
        return $res->result_array();
    }

    public function get_all_pengumuman()
    {
        $sql = "SELECT * from tb_pengumuman";
        $res = $this->db->query($sql);
        return $res->result_array();
    }

    public function get_detail_pengumuman($id_pengumuman)
    {
        $sql = "SELECT * from tb_pengumuman WHERE id_pengumuman =" . $id_pengumuman;
        $res = $this->db->query($sql);
        return $res->result_array();
    }
}
