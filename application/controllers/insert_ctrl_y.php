<?php
class insert_ctrl_y extends CI_Controller {
    function __construct() {
    parent::__construct();
    $this->load->model('insert_model');
    
}

//--------------------------------------------Insert Control---------------------------------------------------------------------
    public function insert1() {
        //Including validation library
        $this->load->library('form_validation');
        $this->form_validation->set_error_delimiters('<div class="error">', '</div>');
        //Validating Date Field
        $this->form_validation->set_rules('date', 'Date', 'required');
        //Validating pickup time Field
        $this->form_validation->set_rules('pickup_time', 'Pickup Time', 'required');
        //Validating Day count Field
        $this->form_validation->set_rules('day_count', 'No of Days', 'required');
        //Validating pickup point Field
        $this->form_validation->set_rules('pickup_point', 'Pickup Point', 'required');
        //Validating destination Field
        $this->form_validation->set_rules('destination', 'Destination', 'required');
        //Validating estimated distance Field
        $this->form_validation->set_rules('est_distance', 'Estimated Distance', 'required');
        
      

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('main/header');
            $this->load->view('page/insert_view_y');
            $this->load->view('main/footer');

           // $data['message'] = 'Data Inserted Successfully';
        } else {
        //Setting values for tabel columns
            $data = array(
            'Date' => $this->input->post('date'),
            'Pickup_Time' => $this->input->post('pickup_time'),
            'Day_Count' => $this->input->post('day_count'),
            'Pickup_point' => $this->input->post('pickup_point'),
            'Destination' => $this->input->post('destination'),
            'Est_Distance' => $this->input->post('est_distance')
            
            );
            //print_r($data);
            //Transfering data to Model
            $trip_id=$this->insert_model->customtrips($data);
            $data = NULL;
            $data['trip_id']=$trip_id;

            
            $data['message'] = 'Data Inserted Successfully';
            $this->load->view('main/header');
            $this->load->view('page/select_vehicle_view',$data);
            $this->load->view('main/footer');


            
            }
        }

        public function index(){
            
        
            $this->load->view('main/header');
            $this->load->view('page/home');
            $this->load->view('main/footer');
        }

        public function getid($id,$trip_id){
    
            
            $data1=array('Trip_ID' =>$trip_id,'Vehicle_ID'=>$id);
            $this->insert_model->trip_vehicle($data1);
            $this->load->view('main/header');
            $this->load->view('page/home');
            $this->load->view('main/footer');
        
        }


        //------------------------------------------------------update control----------------------------------------------------------------------
        public function trip_id() {
            $id = $this->uri->segment(3);
            $data['customtrips'] = $this->insert_model->show_trips();
            $data['single_customtrip'] = $this->insert_model->show_trip_id($id);
            
            $this->load->view('main/header');
            $this->load->view('page/update_view', $data);
            $this->load->view('main/footer');
        }
        public function update_trip_id1() {
            $id= $this->input->post('tid');
            $data = array(
            'Date' => $this->input->post('date'),
            'Pickup_Time' => $this->input->post('pickup_time'),
            'Day_Count' => $this->input->post('day_count'),
            'Pickup_point' => $this->input->post('pickup_point'),
            'Destination' => $this->input->post('destination'),
            'Est_Distance' => $this->input->post('est_distance'),
            
            );
            $this->insert_model->update_trip_id1($id,$data);
            $this->trip_id();
        }

//-----------------------------------------------------//Delete control----------------------------------------------------------------------------
        public function trip_id2() {
            $id = $this->uri->segment(3);
            $data['customtrips'] = $this->insert_model->trip();
            $data['single_customtrip'] = $this->insert_model->trip_id($id);
            $this->load->view('main/header');
            $this->load->view('page/delete_view', $data);
            $this->load->view('main/footer');
           
        }
        // Function to Delete selected record from database.
        function delete_trip_id() {
            $id = $this->uri->segment(3);
            $this->insert_model->delete_trip_id($id);
            $this->trip_id();
        }

        // --------------------------------------------------------View Control------------------------------------------------------------------
        public function view()
        {
            $this->load->model('insert_model');
            $data['t'] = $this->insert_model->customtrips1();
            $this->load->view('main/header');
            $this->load->view('page/view_view',$data);
            $this->load->view('main/footer');
           
        }

        
        public function gallary(){
            $this->load->view('main/header');
            $this->load->view('page/places');
            $this->load->view('main/footer');
        }

        

 
    }
?>