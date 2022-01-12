<?php
class Event_model extends CI_Model 
{
	
	function saverecords($data)
	{
        $this->db->insert('evenement',$data);
        return true;
	}

    function display_records()
    {
      $query=$this->db->get("evenement");
      return $query->result();
    }

    function generate_records()
    {
      $query=$this->db->get("evenement");
      return $query->result();
    }

  

    

    function displayrecordsById($id_Event)
	{
	$query=$this->db->query("select * from evenement where id_Event='".$id_Event."'");
	return $query->result();
	}

    /*Update*/
	function update_records($id_Event,$Nom_Event,$Topic_Event,$Host_Event,$Date_Event,$Categorie_Event,$Detail_Event,$Adresse_Event,$NombrePlace)
	{
	$query=$this->db->query("UPDATE evenement SET Nom_Event='$Nom_Event',Topic_Event='$Topic_Event',Host_Event='$Host_Event',Date_Event='$Date_Event',
    Categorie_Event='$Categorie_Event',Detail_Event='$Detail_Event',Adresse_Event='$Adresse_Event',NombrePlace='$NombrePlace' where id_Event='$id_Event'");
	
	}

	function deleterecords($id)
  {
    $this->db->where("id_Event", $id);
    $this->db->delete("evenement");
    return true;
  }
 
    

	
}