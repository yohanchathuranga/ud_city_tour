<?php
    class User_model extends CI_Model{   
        function __construct(){
            parent::__construct();
            $this->load->database();
        }
        // public function viewdata(){
        //     $query =$this->db->get('users');
        //     return $query->result();
        // }
        public function savedata($email,$firstname,$lastname,$passwd,$icode){
            $query="insert into login values('','$email','$firstname','$lastname','$passwd','$icode')";
            $this->db->query($query);
        }
        // public function getuser($id){//get user by id
        //     $query = $this->db->get_where('users',array('id'=>$id));
		//     return $query->result_array();
        // }

        // public function updatedata($user,$id){
        //     $this->db->where('id', $id);
		// 	$this->db->update('users', $user);
        // }
    }
    
