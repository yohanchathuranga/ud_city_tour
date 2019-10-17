<?php
    class Controller_Admin extends CI_Controller{

        //default function
        function index(){
            $user = "Admin";

            if ($user == "Admin"){
                $this->load->view("dashboard");
            }else{
                print("You are not allowed to enter this reigon ! ");
            }
        }

        //call the view the input form function
        function viewInputFunction(){
            $this->load->view("heshan/insertView_Admin");
        }

        //call the view the delete form function
        function viewDeleteFunction(){
            $this->load->view("heshan/DeleteView_Admin");
        }

        //call the view the delete a row  function
        function viewRowFunction(){
            $this->load->view("heshan/ViewRow_Admin");
        }

        //view the view the table function
        function viewTableFunction(){
            $this->load->view("heshan/ViewTab_Admin");
        }

        //call the view the update form function
        function viewUpdateFunction(){
            $this->load->view("heshan/UpdateRow_Admin");
        }

        //insert function to insert to the database
        function insert(){
            //get data using the post method
            $data["package_id"] = $this->input->post("Package_Id");
            $data["package_type"] = $this->input->post("Package_Type");
            $data["price"] = $this->input->post("Price");
            $data["day_count"] = $this->input->post("Day_count");
            $data["description"] = $this->input->post("Description");
            $this->load->model("InsertModel_Admin");
            $this->InsertModel_Admin->insert($data);
            $this->InsertModel_Admin->insertNotification($data);
            $data2["result"] = $this->InsertModel_Admin->viewTheNoti();
            $this->load->view("heshan/notificationView_Admin", $data2);
            //$this->load->view("");
        }

        //delete function to delete the data
        function delete(){
            //get data using the post method
            $data["package_id"] = $this->input->post("Package_Id");
            $this->load->model("InsertModel_Admin");
            $stat = $this->InsertModel_Admin->getdelete($data);
            $this->InsertModel_Admin->deleteNotification($data);
            $this->InsertModel_Admin->delete($data);
            $data2["result"] = $this->InsertModel_Admin->viewTheNoti();
            $this->load->view("heshan/notificationView_Admin", $data2);
        }

        //view one of the rows in the database
        function viewRow(){
            //get data using the post method
            $data["package_id"] = $this->input->post("Package_Id");
            $this->load->model("InsertModel_Admin");
            //pass the data to the insertModel
            $stat["result"] = $this->InsertModel_Admin->viewRow($data);
            //view the table
            $this->load->view("heshan/viewRow2_Admin",$stat);
        }

        //view the all the rows in the table
        function viewTab(){
            //get data using the post method
            $this->load->model("InsertModel_Admin");
            //pass the data to the insertModel
            $stat["result"] = $this->InsertModel_Admin->viewTab();
            //view the table
            $this->load->view("heshan/view_cart_Admin",$stat);
        }

        //view the all the rows in the table
        function viewTab2(){
            //get data using the post method
            $this->load->model("InsertModel_Admin");
            //pass the data to the insertModel
            $stat["result"] = $this->InsertModel_Admin->viewTab();
            //view the table
            $this->load->view('main/header');
            $this->load->view("heshan/view_cart2_Admin",$stat);
            $this->load->view('main/footer');
           
        }


        //update one row according to the current package_ID
        function update(){
            //get data using the post method
            $data["curr_package_id"] = $this->input->post("Curr_Package_Id");
            $data["package_id"] = $this->input->post("Package_Id");
            $data["package_type"] = $this->input->post("Package_Type");
            $data["price"] = $this->input->post("Price");
            $data["day_count"] = $this->input->post("Day_count");
            $data["description"] = $this->input->post("Description");
            $this->load->model("InsertModel_Admin");
            $this->InsertModel_Admin->update($data);
            $this->InsertModel_Admin->updateNotification($data);
            $data2["result"] = $this->InsertModel_Admin->viewTheNoti();
            $data2["special"] = 12;
            $this->load->view("heshan/notificationView_Admin", $data2);
        }
    }
?>