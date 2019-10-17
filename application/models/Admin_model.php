<?php

if (!defined('BASEPATH')) {
    exit('No direct script access allowed');
}

class Admin_model extends CI_Model {

    function __construct() {
        parent::__construct();
    }


    function get_user_list(){
        $this->db->select('*');
        $this->db->from('user');
        $this->db->where('status', 1);
        $query=$this->db->get();
        return $query->result();
    }

    function get_user_by_id($userID){
        $this->db->select('*');
        $this->db->from('user');
        $this->db->where('user_id', $userID);
        $query=$this->db->get();
        return $query->result_array();
    }

    function validate_email($postData){
        $this->db->where('email', $postData['email']);
        $this->db->where('status', 1);
        $this->db->from('user');
        $query=$this->db->get();

        if ($query->num_rows() == 0)
            return true;
        else
            return false;
    }

    function insert_user($username){
        // echo "im here.$username";

            $password = $this->generate_password();


            $message = "Thank you for Register with UD Tours.Here is your account details:<br><br>Email: ".$username."<br>Tempolary password: ".$password."<br>Please change your password after login.<br><br> you can login at ".base_url().".";
            $subject = "New Account Creation";
            //$this->load->helper('email');
            $this->send_email($message,$subject,$username,$password);
            //echo "$message,$subject,$username";

            $module = "User Management";
            $activity = "add new user ".$username;
            $this->insert_log($activity, $module);
            return array('status' => 'success', 'message' => '');



    }

    function update_user_details($postData){//test not working

        $oldData = $this->get_user_by_id($postData['id']);

        if($oldData[0]['email'] == $postData['email'])
            $validate = true;
        else
            $validate = $this->validate_email($postData);

        if($validate){
            $data = array(
                'email' => $postData['email'],
                'name' => $postData['name'],
                'role' => $postData['role'],
            );
            $this->db->where('user_id', $postData['id']);
            $this->db->update('user', $data);

            $record = "(".$oldData[0]['email']." to ".$postData['email'].", ".$oldData[0]['name']." to ".$postData['name'].",".$oldData[0]['role']." to ".$postData['role'].")";

            $module = "User Management";
            $activity = "update user ".$oldData[0]['email']."`s details ".$record;
            $this->insert_log($activity, $module);
            return array('status' => 'success', 'message' => $record);
        }else{
            return array('status' => 'exist', 'message' => '');
        }

    }


    public function displayAlert($text, $type) {//test
        echo '<div class="alert alert-success alert-dismissable" id="flash-msg">
            <button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button>
            <h4><i class="icon fa fa-check"></i>Success!</h4>
            </div>';
    }

    // function deactivate_user($email,$id){

    //     $data = array(
    //         'status' => 0,
    //     );
    //     $this->db->where('user_id', $id);
    //     $this->db->update('user', $data);

    //     $module = "User Management";
    //     $activity = "delete user ".$email;
    //     $this->insert_log($activity, $module);
    //     return array('status' => 'success', 'message' => '');

    // }

    function reset_user_password($email,$id){

        $password = $this->generate_password();
        $data = array(
            'password' => md5($password),
        );
        $this->db->where('user_id', $id);
        $this->db->update('user', $data);

        $message = "Your account password has been reset.<br><br>Email: ".$email."<br>Tempolary password: ".$password."<br>Please change your password after login.<br><br> you can login at ".base_url().".";
        $subject = "Password Reset";
        $this->send_email($message,$subject,$email);

        $module = "User Management";
        $activity = "reset user ".$email."`s password";
        $this->insert_log($activity, $module);
        return array('status' => 'success', 'message' => '');

    }

    function generate_password(){
        $chars = "abcdefghjkmnopqrstuvwxyzABCDEFGHJKMNOPQRSTUVWXYZ023456789!@#$%^&*()_=";
        $password = substr( str_shuffle( $chars ), 0, 10 );

        return $password;
    }

    function insert_log($activity, $module){
        $id = $this->session->userdata('user_id');
        // echo "hi";

        
    }

 
    function save_userDetails($username,$role,$password){
        echo "hi $username your logged role is $password and password is $role";
        $data = array(
            // 'user_id'=>'',
            'email' => $username,
            'password' => md5($role),
            // 'status'=>'',
            'role' => $password,
    );
    
    $this->db->insert('user', $data);
    } 


    function send_email($message,$subject,$sendTo,$password){
        
        

        require_once APPPATH.'libraries/mailer/class.phpmailer.php';
        require_once APPPATH.'libraries/mailer/class.smtp.php';
        require_once APPPATH.'libraries/mailer/mailer_config.php';
        include APPPATH.'libraries/mailer/template/template.php';
        
        $mail = new PHPMailer(true);
        $mail->IsSMTP();

        $hello = '<h1 style="color:#333;font-family:Helvetica,Arial,sans-serif;font-weight:300;padding:0;margin:10px 0 25px;text-align:center;line-height:1;word-break:normal;font-size:38px;letter-spacing:-1px">Hello, &#9786;</h1>';
        $thanks = "<br><br><i>This is autogenerated email please do not reply.</i><br/><br/>Thanks,<br/>Admin<br/><br/>";

        $body = $hello.$message.$thanks;
      
        $Mail = new PHPMailer();
        $Mail->IsSMTP(); // Use SMTP
        $Mail->Host        = "smtp.gmail.com"; // Sets SMTP server
        $Mail->SMTPDebug   = 2; // 2 to enable SMTP debug information
        $Mail->SMTPAuth    = TRUE; // enable SMTP authentication
        $Mail->SMTPSecure  = "tls"; //Secure conection
        $Mail->Port        = 587; // set the SMTP port
        $Mail->Username    = 'udcitytours@gmail.com'; // SMTP account username
        $Mail->Password    = 'udtours123'; // SMTP account password
        $Mail->Priority    = 1; // Highest priority - Email priority (1 = High, 3 = Normal, 5 = low)
        $Mail->CharSet     = 'UTF-8';
        $Mail->Encoding    = '8bit';
        $Mail->Subject     = 'New Account Created';
        $Mail->ContentType = 'text/html; charset=utf-8\r\n';
        $Mail->From        = 'udcitytours@gmail.com';
        $Mail->FromName    = '';
        $Mail->WordWrap    = 900; // RFC 2822 Compliant for Max 998 characters per line
      
        $Mail->AddAddress( $sendTo ); // To:
        $Mail->isHTML( TRUE );
        $Mail->Body    = $body;
        $Mail->AltBody = $message;
        $Mail->Send();
        $Mail->SmtpClose();
      
        if ( $Mail->IsError() ) { // ADDED - This error checking was missing
          return FALSE;
        }
        else {
           // echo "$sendTo";
            $role=$this->input->post('role');
            $this->save_userDetails($sendTo,$password,$role);
            
            redirect(base_url());
            //$this->displayAlert("Hello World!", "success");
            return TRUE;
        }
      }
}


