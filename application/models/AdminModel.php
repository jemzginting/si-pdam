<?php
defined('BASEPATH') or exit('No direct script access allowed');

class AdminModel extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }

    public function get_aju_pasangbaru()
    {
        $this->db->select('p.*, l.date_created');
        $this->db->join('tb_login l', 'p.no_kontrol = l.no_kontrol');
        $this->db->where('l.status', 'no');
        $res = $this->db->get('tb_pelanggan p');
        return $res->result_array();
    }

    public function get_all_keluhan()
    {
        $sql = "SELECT * from tb_keluhan";
        $res = $this->db->query($sql);
        return $res->result_array();
    }

    public function get_personal_keluhan($id_keluhan)
    {
        $sql = "SELECT * from tb_keluhan WHERE id_keluhan =" . $id_keluhan;
        $res = $this->db->query($sql);
        return $res->result_array();
    }

    public function get_balasan_keluhan($id_keluhan)
    {
        $sql = "SELECT reply_keluhan from tb_keluhan WHERE id_keluhan =" . $id_keluhan;
        $res = $this->db->query($sql);
        return $res->result_array();
    }

    public function update_konfirmasi($data)
    {
        $this->db->set('status', $data['status']);
        $this->db->where('no_kontrol', $data['no_kontrol']);
        $this->db->update('tb_login');
    }

    public function update_balasan($id_keluhan, $isi_balasan)
    {
        $this->db->set('reply_keluhan', $isi_balasan);
        $this->db->where('id_keluhan', $id_keluhan);
        $this->db->update('tb_keluhan');
    }

    public function tambah_pengumuman($data)
    {
        $this->db->set('judul', $data['judul']);
        $this->db->set('tanggal', $data['tgl_pengumuman']);
        $this->db->set('time', $data['waktu_pengumuman']);
        $this->db->set('wilayah',  $data['wilayah']);
        $this->db->set('isi_pengumuman', $data['isi_pengumuman']);
        $this->db->insert('tb_pengumuman');
        $this->db->insert_id();
    }

    public function get_chat_name()
    {
        $sql = "SELECT DISTINCT c.id_user, u .name 
        FROM tb_chat c
        JOIN tb_pelanggan u
        ON c.id_user = u.no_kontrol
        WHERE (c.id_user = 'admin' OR c.id_target = 'admin') AND u.name != 'admin' ";
        $res = $this->db->query($sql);
        return $res->result_array();
    }
}
