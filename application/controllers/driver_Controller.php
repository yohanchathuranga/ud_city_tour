<?php
class driver_Controller extends CI_Controller{
    function __construct() {
        parent::__construct();
        $this->load->model('driver_Model');
        
    }

    public function driver(){
        $data['drivers']=$this->driver_Model->get_data();
        $this->load->view('main/header');
        $this->load->view('page/driver_view',$data);
        $this->load->view('main/footer');

    }

    public function incrementRating()
    {
        $id = $this->input->post('rating-id');
        $this->driver_Model->increment($id);

        $this->driver();
    }
}
?>