<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Controller {

	/*public function index()
	{
    $data['title'] = 'Administrator Login';
		$this->load->helper('url');
		$this->load->view('login',$data);
	}

  public function login_validation()
  {
    $this->load->library('form_validation');
    $this->form_validation->set_rules('uname','Username','required');
    $this->form_validation->set_rules('password','Password','required');

    if($this->form_validation->run())
    {
      $username = $this->input->post('uname');
      $password = $this->input->post('password');

      //model function
      $this->load->model('main_model');
      if($this->main_model->can_login($username,$password))
      {
        $session_data = array(
          'username' => $username
        );
        $this->session->set_userdata($session_data);
        redirect(base_url().'main/enter');
      }
      else {
        $this->session->set_flashdata('error','Invalid Username or Password');
        redirect(base_url().'main/');
      }
    }
    else
    {
      $this->index();
    }
  }*/



  //public function enter()
  //{
    //if($this->session->userdata('username') != '')
    //{
			// $this->load->model('main_model');
			// $data['generalResult'] = $this->main_model->getGenCount();
			// $data['newResult'] = $this->main_model->getNewCount();
      		// $data['title'] = 'Welcome';
			//$data['userName'] = $this->session->userdata('username');
      //$this->load->view('dashboard',$data);
    //}
    //else {
    //  redirect(base_url().'main/');
   // }
  //}

  /*public function dashboard()
  {
    $data['title'] = 'Dashboard';
    $this->load->view('dashboard',$data);
  }*/



  public function gquest()
  {
		// if($this->session->userdata('username') != '')
		// {
			$data['title'] = 'General Question';
	    $this->load->model('main_model');
	    $data['result'] = $this->main_model->retrieveData();
			//$data['userName'] = $this->session->userdata('username');
			$this->load->view('main/header');
			$this->load->view('gquestion',$data);
			$this->load->view('main/footer');
	    
	// 	}
	// 	else {
    //   redirect(base_url().'main/');
    // }

  }

	public function newQuest()
  {
		// if($this->session->userdata('username') != '')
		// {
		$data['title'] = 'New Question';
	    $this->load->model('main_model');
	    $data['result'] = $this->main_model->retrieveUnanswerd();
			//$data['userName'] = $this->session->userdata('username');
		$this->load->view('main/header');
		$this->load->view('newQuestion',$data);
		$this->load->view('main/footer');
	    
	// 	}
	// 	else {
    //   redirect(base_url().'main/');
    // }

  }



  public function addQuestion()
  {
		// if($this->session->userdata('username') != '')
		// {
			$this->load->model('main_model');
	    	$data = array(
				"question" => $this->input->post("question"),
	        	"answer"   => $this->input->post("answer")
			);		
	    $this->main_model->addQuest($data);
	    redirect(base_url().'index.php/main/gquest');
	// 	}
	// 	else {
    //   redirect(base_url().'main/');
    // }

  }

  public function generalEdit($no)
  {
		// if($this->session->userdata('username') != '')
		// {
		$this->load->model('main_model');
		$data['row'] = $this->main_model->getData($no);
		$this->load->view('main/header');
		$this->load->view('generalEdit',$data);
		$this->load->view('main/footer');
	    
	// 	}
	// 	else {
    //   redirect(base_url().'main/');
    // }

  }

  public function update($no)
  {
		// if($this->session->userdata('username') != '')
		// {
		$this->load->model('main_model');
	    $data = array(
			"question" => $this->input->post("question"),
	        "answer"   => $this->input->post("answer")
		);
	    $this->main_model->updateData($no,$data);
	    redirect(base_url().'index.php/main/gquest');
	// 	}
	// 	else {
    //   redirect(base_url().'main/');
    // }

  }

  public function generalDelete($no)
  {
		// if($this->session->userdata('username') != '')
		// {
		$this->load->model('main_model');
	    $this->main_model->deleteData($no);
	    redirect(base_url().'index.php/main/gquest');
		//}


  }

	public function newEdit($no)
  {
		// if($this->session->userdata('username') != '')
		// {
		$this->load->model('main_model');
		$data['row'] = $this->main_model->getNewData($no);
		$this->load->view('main/header');
		$this->load->view('newQuestionEdit',$data);
		$this->load->view('main/footer');
	    
	// 	}
	// 	else {
    //   redirect(base_url().'main/');
    // }

  }

  public function newUpdate($no)
  {
		// if($this->session->userdata('username') != '')
		// {
		$this->load->model('main_model');
	    $data = array(
	        "answer"   => $this->input->post("answer")
		);
	    $this->main_model->updateNewData($no,$data);
		$this->sendMail($no);
	    //redirect(base_url().'main/newQuest');
	// 	}
	// 	else {
    //   redirect(base_url().'main/');
    // }
  }

	public function sendMail($no)
	{
		// if($this->session->userdata('username') != '')
		// {
			$this->load->model('main_model');
			$alldata = $this->main_model->getNewData($no);

			$this->load->library('email');

			$this->email->set_mailtype("html");
			$this->email->set_newline("\r\n");

			//Email content
			$htmlContent = '<h1>' .$alldata->question .'</h1>';
			$htmlContent .= '<p>' .$alldata->answer. '</p>';

			$this->email->to($alldata->email);
			$this->email->from('dgkhosalan@gmail.com','UD City');
			$this->email->subject('Reply from UD City');
			$this->email->message($htmlContent);
			if($this->email->send())
			{
				$this->newDelete($no);
				$success = "Successfully Send!";
				echo "<script type='text/javascrpt'>alert('$success');</script>";
			}
			else
			{
				$fail = "Some Error Occured!";
				echo "<script type='text/javascript'>alert('$fail');</script>";
				
			}
			$this->newQuest();				
			
			//redirect(base_url().'index.php/main/newQuest');
	// 	}
	// 	else {
    //   redirect(base_url().'main/');
    // }

	}

  public function newDelete($no)
  {
		// if($this->session->userdata('username') != '')
		// {
		$this->load->model('main_model');
	    $this->main_model->deleteNewData($no);
	    redirect(base_url().'index.php/main/newQuest');
	// 	}
	// 	else {
    //   redirect(base_url().'main/');
    // }

  }


//   public function logout()
//   {
//     $this->session->unset_userdata('username');
//     redirect(base_url().'main/');
//   }

}
