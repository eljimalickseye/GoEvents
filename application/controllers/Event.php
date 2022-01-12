<?php 
class Event extends CI_Controller 
{
	public function __construct()
	{
	/*call CodeIgniter's default Constructor*/
	parent::__construct();
	
	/*load database libray manually*/
	$this->load->database();
	
	/*load Model*/
	$this->load->model('Event_model');
	}
        /*Insert*/
	public function savedata()
	{
		/*load registration view form*/
		$this->load->view('insertEvent');
	
		/*Check submit button */
		if($this->input->post('save'))
		{
		    $data['Nom_Event']=$this->input->post('Nom_Event');
			$data['Topic_Event']=$this->input->post('Topic_Event');
			$data['Host_Event']=$this->input->post('Host_Event');
            $data['Date_Event']=$this->input->post('Date_Event');
            $data['Categorie_Event']=$this->input->post('Categorie_Event');
            $data['Detail_Event']=$this->input->post('Detail_Event');
            $data['Adresse_Event']=$this->input->post('Adresse_Event');
            $data['NombrePlace']=$this->input->post('NombrePlace');
			$data['fk_user_id']=$this->input->post('fk_user_id');
			$response=$this->Event_model->saverecords($data);
			if($response==true){
			       redirect(base_url(''));
			}
			else{
					echo "Insert error !";
			}
		}
	}

    public function displaydata()
    {
        $result['data']=$this->Event_model->display_records();
        $this->load->view('display_records',$result);
    }

	public function generate()
    {
        $result['data']=$this->Event_model->generate_records();
		$this->load->helper('url');
        $this->load->view('generate_records',$result);
    }

    public function updatedata()
	{

    $id_Event=$this->input->get('id_Event');
	$result['data']=$this->Event_model->displayrecordsById($id_Event);
	$this->load->view('update_records',$result);
	
		if($this->input->post('update'))
		{
		$Nom_Event=$this->input->post('Nom_Event');
		$Topic_Event=$this->input->post('Topic_Event');
		$Host_Event=$this->input->post('Host_Event');
        $Date_Event=$this->input->post('Date_Event');
        $Categorie_Event=$this->input->post('Categorie_Event');
        $Detail_Event=$this->input->post('Detail_Event');
        $Adresse_Event=$this->input->post('Adresse_Event');
        $NombrePlace=$this->input->post('NombrePlace');
		$this->Event_model->update_records($id_Event,$Nom_Event,$Topic_Event,$Host_Event,$Date_Event,$Categorie_Event,$Detail_Event,$Adresse_Event,$NombrePlace);
		redirect(base_url('Event/displaydata?user_id='.$this->session->userdata('user_id').''));
		}
	}

	public function deletedata()
{
  $id=$this->input->get('id_Event');
  $response=$this->Event_model->deleterecords($id);
  if($response==true){
    redirect(base_url('Event/displaydata?user_id='.$this->session->userdata('user_id').''));
}
  else{
    echo "Error !";
  }
}
	
}
?>