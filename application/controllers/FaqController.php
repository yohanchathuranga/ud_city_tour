<?php
class FaqController extends CI_Controller { 


        //faq section 
        public function faq()
	    {
		    $data['title'] = 'FAQs';
            $this->load->model('main_model');
            $data['result'] = $this->main_model->retrieveData();
            $this->load->view('main/header');
            $this->load->view('mainView',$data);
            $this->load->view('main/footer');
            
        }
        
        public function addQuestion()
        {
            $this->load->model('main_model');
            $data = array(
                "name" => $this->input->post("name"),
                "email" => $this->input->post("email"),
                        "question" => $this->input->post("message"),
                "answer"   => $this->input->post("answer")
                    );
            $this->main_model->addQuest($data);
            $this->faq;
        }

 
    }
?>