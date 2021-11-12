<?php

class Home extends CI_Controller{

    public function __construct(){
        parent::__construct();
        $this->load->model('home_m', 'u');
    }

    public function view($id){
        $data['user'] = $this->u->getUserById($id);
        $this->load->view('view_u', $data);
    }

    public function submit(){
        $result = $this->u->submit();
        if($result){
            $this->session->set_flashdata('success_msg', 'New User Added Successfully !!');
        }else{
            $this->session->set_flashdata('error_msg', 'Failed To Add User !!');
        }
        redirect(base_url('welcome'));
    }

    public function update(){
        $result = $this->u->update();
        if($result){
            $this->session->set_flashdata('success_msg', 'Updated Successfully !!');
        }else{
            $this->session->set_flashdata('error_msg', 'Failed To Update User !!');
        }
        redirect(base_url('welcome'));
    }

    public function delete(){
        $returl = $this->u->delete();
        if($result){
            $this->session->set_flashdata('success_msg', 'User Deleted Successfully !!');
        }else{
            $this->session->set_flashdata('error_msg', 'User Did Not Delete !!');
        }
        redirect(base_url('welcome'));
    }

}



?>