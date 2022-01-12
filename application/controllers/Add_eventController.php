<?php 
class Add_eventController extends CI_Controller 
{
	public function __construct()
	{
	/*call CodeIgniter's default Constructor*/
	parent::__construct();
	
	/*load database libray manually*/
	$this->load->database();
	
	/*load Model*/
	$this->load->model('AddEvent_model');
	}
        /*Insert*/
	public function savedata()
	{
		/*load registration view form*/
		$this->load->view('add-event');
	
		/*Check submit button */
		if($this->input->post('save'))
		{
		    $data['Nom_Event']=$this->input->post('Nom_Event');
			$data['Host_Event']=$this->input->post('Host_Event');
			$data['Date_Event']=$this->input->post('Date_Event');
            $data['Adresse_Event']=$this->input->post('Adresse_Event');
            $data['NombrePlace']=$this->input->post('NombrePlace');
            $data['Detail_Event']=$this->input->post('Detail_Event');
            $data['Categorie']=$this->input->post('Categorie');
            $data['Topic_Event']=$this->input->post('Topic_Event');
			$response=$this->Crud_model->saverecords($data);
			if($response==true){
			        echo "Records Saved Successfully";
			}
			else{
					echo "Insert error !";
			}
		}
	}
	
}
?>