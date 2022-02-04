<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class gurumodel extends CI_model {
	public function simpan()
    {
        $data = $this->input->post();
        if(!empty($data)){
            return $this->db->insert('user', $data);
        }
    }

    public function edit($id)
    {
        $data = $this->input->post();
        if(!empty($data)){
            return $this->db->update('user', $data,['id'=>$id]);
        }
    }
    public function getguru()
    {
        $name = $this->input->get('name');
        if(empty($name)){
            return $this->db->get('user')->result_array();
        }else{
            return $this->db->query('SELECT * FROM user WHERE name LIKE ?','%'.$name.'%')->result_array();
        } 
    }
    public function getdata($id)
    {
        return $this->db->get_where('user',['id'=>$id])->row_array();
    }
    public function delete($id)
    {
        return $this->db->delete('user',['id'=>$id]);
    }
}