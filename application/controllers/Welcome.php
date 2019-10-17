<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

    public function __Construct() {
        parent::__Construct();
        $this->load->model("Authentication_model");
        $this->load->model("admin_model");
    }

    public function index() {
    
        if($this->session->userdata('logged_in')) {
            redirect(base_url("dashboard"));
        }else {
            $msg = array('alert' => false);
            $this->load->view('login',$msg);
        }
    }
	public function login(){
        $username = $this->input->post("email");
        $password = $this->input->post("password");
        $validate = $this->Authentication_model->verify_login($username,$password);
        
        if ($validate){
            $newdata = array(
                'email'     => $validate[0]->email,
                //'name' => $validate[0]->name,
                'role' => $validate[0]->role,
                'user_id' => $validate[0]->user_id,
                'logged_in' => TRUE,
              
            );
            $this->session->set_userdata($newdata);
            $this->filter_users($newdata);
            // redirect(base_url("index.php/Dashboard")); 
        }
        else{
            $data = array('alert' => true);
            $this->load->view('ransaka/login',$data);
        }
     
    }
    public function nav_admin(){
        redirect('Controller_Admin');
    }
    public function filter_users($newdata){
        $role=$this->session->userdata('role');
        if($role=='admin'){
            redirect(base_url("index.php/Dashboard"));
        }
        else{
            redirect(base_url("index.php/insert_ctrl_y"));
        }
    }
    public function myaccount(){
        $this->load->view('user/myaccount');
    }
    public function register(){
        $this->load->view('ransaka/register');
        // echo "hoo" .$username ;

    }
    public function verify_email(){
        $username=$this->input->post('username');
        $password=$this->input->post('password');
        echo "hi  " .$username ;
    }
    public function logout(){
        $this->session->sess_destroy();
        redirect(base_url());
    }
    public function add_user(){

        $role=$this->input->post('role');
        $username=$this->input->post('email');
        $this->db->select('*'); 
        $this->db->from('user');
        $this->db->where('email', $username);
        $query = $this->db->get();
        $result = $query->result_array();
        if($result){
        $this->load->view('ransaka/user_exist');

        }
        else{
            $this->session->set_flashdata('success', 'User '.$username.' has been successfully created!');
            $insert = $this->admin_model->insert_user($username);
        }
    }
    public function reset_password(){
        $username=$this->session->userdata('email');
        $password=$this->input->post('newPassword');
        echo "Newpassword is $password and username is $username";

    }
    public function update_password(){

        $password=$this->input->post('newPassword');
        $confirmNewPassword=$this->input->post('confirmNewPassword');
        $user_pw=$this->session->userdata('password');
        $current_pw=$this->input->post('currentPassword');

        if($confirmNewPassword==$password || $user_pw==$current_pw){
            $username=$this->session->userdata('email');
            $user_id=$this->session->userdata('user_id');
           // $status=$this->session->userdata('status');
            $role=$this->session->userdata('role');
            $data = array(
                'user_id'=>$user_id,
                'email'=>$username,
                'password' => md5($password),
                //'status'=>'',
                'role'=>$role
            );
        }
        else{
            echo "hi";
        }


    
    $this->db->replace('user', $data);
    redirect(base_url('index.php/welcome/logout'));//logout from dashboard.after successfully changing password
    }
    public function delete_account(){
        $username=$this->session->userdata('email');
        // $this->db->delete('user', array('email' => $username));
        if($this->db->delete('user', array('email' => $username))){
            redirect('welcome/logout');
        }
        else{
            echo "Cant delete Account";
        }
        
    }
        
    
}

