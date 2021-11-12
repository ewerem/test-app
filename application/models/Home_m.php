<?php

class Home_m extends CI_Model{

    public function getUser(){
        $this->db->order_by('id', 'desc');
        $query = $this->db->get('user');
        if($query->num_rows() > 0){
            return $query->result();
        }else{
            return false;
        }
    }

    public function submit(){
        $details = array(
            'name' => $this->input->post('uname'),
            'phone' => $this->input->post('uphone'),
            'email' => $this->input->post('uemail'),
            'time' => $this->input->post('dtime')
        );
        $this->db->insert('user', $details);
        if($this->db->affected_rows() > 0){
            return true;
        }else{
            return false;
        }
    }

    //getting a single user
    public function getUserById($id){
        $this->db->where('id', $id);
        $query = $this->db->get('user');
        if($query->num_rows() > 0){
            return $query->row();
        }else{
            return false;
        }
    }

    public function update(){
        $id = $this->input->post('user_id');
        $details = array(
            'name' => $this->input->post('uname'),
            'phone' => $this->input->post('uphone'),
            'email' => $this->input->post('uemail'),
            'time' => $this->input->post('dtime')
        );
        $this->db->where('id', $id);
        $this->db->update('user', $details);
        if($this->db->affected_rows() > 0){
            return true;
        }else{
            return false;
        }
    }

    public function delete(){
        $id = $this->input->post('user_id');
        $this->db->where('id', $id);
        $this->db->delete('user');
        if($this->db->affected_rows() > 0){
            return true;
        }else{
            return false;
        }
    }

}

?>