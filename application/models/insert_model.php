<?php
    class insert_model extends CI_Model{
        function __construct() {
        parent::__construct();
    }

    //--------------------------------------------Insert Model-------------------------------------------------
    public function customtrips($data){
        // Inserting in Table(customtrips) of Database(ud_city_tours)
        $this->db->insert('customtrips', $data);
        return $this->db->insert_id();
    }
    public function trip_vehicle($data1){
      
        $this->db->insert('trip_vehicle', $data1);

    }


    //----------------------------------------------update model-------------------------------------------------
    public function show_trips(){
        $query = $this->db->get('customtrips');
        $query_result = $query->result();
        return $query_result;
    }
    //  function To Fetch Selected trip Record
    public function show_trip_id($data){
        $this->db->select('*');
        $this->db->from('customtrips');
        $this->db->where('Trip_ID', $data);
        $query = $this->db->get();
        $result = $query->result();
        return $result;
    }
    // Update Query For Selected trip
        public function update_trip_id1($id,$data){
            $this->db->where('Trip_ID', $id);
            $this->db->update('customtrips', $data);
    }

    //----------------------------------------------Delete model--------------------------------------------------------------
    public function trip(){
        $query = $this->db->get('customtrips');
        $query_result = $query->result();
        return $query_result;
    }

    public function trip_id($data){
        $this->db->select('*');
        $this->db->from('customtrips');
        $this->db->where('Trip_ID', $data);
        $query = $this->db->get();
        $result = $query->result();
        return $result;
    }
    // Function to Delete selected record from table name customtrips.
    public function delete_trip_id($id){
        $this->db->where('Trip_ID', $id);
        $this->db->delete('customtrips');
    }


    //---------------------------------------------view model--------------------------------------------------------------------
    public function construct()
    {
            $this->load->database();
    }

public function customtrips1()
{  
     
    $q1 = $this->db->query("SELECT * FROM customtrips");
    $this->db->close();
    return $q1;
}
 }
?>