<?php
class ModelLogin extends CI_Model
{
    function checkingLogin($table, $where)
    {
        return $this->db->get_where($table, $where);
    }
}
