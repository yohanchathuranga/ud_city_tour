<?php
    class Login_m extends CI_Model{   
        function __construct(){
            parent::__construct();
            $this->load->database();
        }
        public function verify(){
            //get values from login form
            $username = $this->input->post('username');
            $password = $this->input->post('password');
            $query=$this->db->get('login');

            $query = $this->db->query("select * from login where email='".$username."' and password='$password'");
            // Let's check if there are any results
            if($query->num_rows())
            {
                // If there is a user, then create session data
                // $row = $query->row();
                // $data = array(
                //         'email' => $row->userid,
                //         'firstname' => $row->fname,
                //         'lastname' => $row->lname,
                //         'password' => $row->username,
                //         'inv_code' => $row->icode,
                //         'validated' => true
                //         );
                // $this->session->set_userdata($data);
                redirect('');                
            }
            else{
                //$data['error']="<h3 style='color:red'>Invalid login details</h3>";
                // print "<h3 style='color:red'>Invalid login details</h3>";
                //$this->load->view('login',@$data);
                redirect('welcome/login_err',$username);
            }
        } 
    }
?>
    
