<?php

class Main_model extends CI_Model
{

  function retrieveData()
  {
    $query = $this->db->query('SELECT * FROM generalquestion');
    return $query->result();
  }

  //add question to the database
  function addQuest($data)
  {
    $this->db->insert('unanswered',$data);
  }

}


 ?>
