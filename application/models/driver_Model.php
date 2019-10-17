<?php
    class driver_Model extends CI_Model{
        function __construct() {
        parent::__construct();
    }

    public function get_data(){

        // $this->db->select('*');
        // $this->db->from('driver');
        // $driver = $this->db->get(); 

        $driver = $this->db->query("SELECT * FROM driver");
        $this->db->close();
        return $driver;

    }

    public function increment($id){
        $rate = $this->db->query("SELECT Rating FROM driver Where $id= Driver_ID")->result();
        $rating = $rate[0]->Rating;
        $rating++;
        $rate_Update=$this->db->query("UPDATE driver SET Rating= '$rating' Where $id= Driver_ID  ");
    }
 }

?>