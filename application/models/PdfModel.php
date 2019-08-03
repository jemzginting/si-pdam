    <?php

    if (!defined('BASEPATH'))
        exit('No direct script access allowed');

    class PdfModel extends CI_Model
    {


        public function getContent($data)
        {
            $this->db->select(array('b.*'));
            //  $this->db->select('b.*');
            $this->db->from('konsultasi b');
            $this->db->where('no_konsul', $data);
            $query = $this->db->get();
            return $query->row_array();
        }
    }
    ?>