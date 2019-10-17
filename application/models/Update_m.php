<?php
    class Update_m extends CI_Model{   
        function __construct(){
            parent::__construct();
            $this->load->database();
        }
        public function update($username){
            $this->db->select('email');
            $query = $this->db->query("select * from login where email='".$username."'");
            if($query->num_rows()){
                echo "Verification Mail Sent!";
                //redirect('welcome');
            }
            else{
                echo "cant find account";
                //redirect('welcome');
            }
        }  
    }
?>