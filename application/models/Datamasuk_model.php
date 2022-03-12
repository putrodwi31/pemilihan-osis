<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Datamasuk_model extends CI_Model
{
    function simpan($data = array())
    {
        $jumlah = count($data);

        if ($jumlah > 0) {
            $this->db->insert_batch('user', $data);
        }
    }
    function simpancsv($data)
    {

        return $this->db->insert('user', $data);
    }
}
