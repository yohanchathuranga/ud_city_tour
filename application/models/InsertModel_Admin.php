<?php
    class InsertModel_Admin extends CI_Model{

        //function to insert data
        function insert($data){
            $this->db->insert("packages",array("Package_Id"=>$data['package_id'], 
            "Package_type" => $data['package_type'], 
            "Price" => $data['price'],
            "Day_count" => $data['day_count'], 
            "Description" => $data['description']));
            $statment = 1;
            //if the indertion was succeccful return 1
            return $statment;
        }

        //function to delete data
        function delete($data){
            $this->db->delete('packages',array("Package_Id"=>$data['package_id']));
            $statment = 1;
            //if the deletion was succeccful return 1
            return $statment;
        }

        //function to view the data in a row
        function viewRow($data){
            $statment =  $this->db->get_where('packages',array("Package_Id"=>$data['package_id']));
            return $statment->result();
        }

        //function to view the table
        function viewTab(){
            $statment =  $this->db->get('packages');
            return $statment->result();
        }

         //function to update the data in a row
        function update($data){
                $this->db->where('Package_Id',$data['curr_package_id']);
                $this->db->update("packages",array("Package_Id"=>$data['package_id'],
                "Package_type" => $data['package_type'], 
                "Price" => $data['price'],
                "Day_count" => $data['day_count'], 
                "Description" => $data['description']));
        }

        //function to insert the notification
        function insertNotification($data){
            //print($data["name"]);
            $this->db->insert("notifications",array("Operation"=>"Insert",
            "Package_Id"=>$data['package_id'],
            "Package_Type"=>$data['package_type'],
            "Price"=>$data['price'],
            "Daycount"=>$data['day_count'],
            "Extra"=>"nothing",
            "Description"=>$data['description']));
            //$statment = 1;
            //if the indertion was succeccful return 1
            //return $statment;
        }

        function updateNotification($data){
            //print($data["name"]);
            $this->db->insert("notifications",array("Operation"=>"Update",
            "Package_Id"=>$data['package_id'],
            "Package_Type"=>$data['package_type'],
            "Price"=>$data['price'],
            "Daycount"=>$data['day_count'],
            "Extra"=>$data['curr_package_id'],
            "Description"=>$data['description']));
            //$statment = 1;
            //if the indertion was succeccful return 1
            //return $statment;
        }

        function deleteNotification($data){
            $this->db->insert("notifications",array("Operation"=>"Delete",
            "Package_Id"=>$data['package_id']));
        }

        function getdelete($data){
            $statment =  $this->db->get_where('packages',array("Package_Id"=>$data['package_id']));
            return $statment->result();
        }

        function viewTheNoti (){
            $statment =  $this->db->get('notifications');
            return $statment->result();
        }
    }
?>