<?php if(!defined('BASEPATH')) exit('No direct script access allowed');


class LogModel extends CI_Model{
    public function login_db($email){
        return $this->db->query("SELECT * FROM users WHERE email = ?", array($email))->row_array();
    }

    public function add_user($user){
        $query = "INSERT INTO users (first_name, last_name, email, password, created_at, updated_at) VALUES (?,?,?,?,?,?)";
        $values = array($user['first_name'], $user['last_name'], $user['email'], $user['password'], date('Y-m-d, H:i:s'), date('Y-m-d, H:i:s'));
        $this->db->query($query, $values);
        return $this->db->insert_id();
    }

    public function get_user_info($id){
        return $this->db->query("SELECT * FROM users WHERE id = ?", array($id))->row_array();
    }
}