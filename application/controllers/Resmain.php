<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Resmain extends CI_Controller {

	public function index()
	{
		$this->load->view('signin');
	}

	public function homepage()
	{	
		if($_SERVER['REQUEST_METHOD'] == 'POST'){

		}
		else{
			$tag = "new";
			//load the model
			$this->load->model('submit_model');

			//get the data
			// $data['tagstatus'] = $this->submit_model->latest_submit($tag);
			$data['joindata'] = $this->submit_model->submit_join($tag);
			// print_r($data);
			// exit;
			//load the view
			$this->load->view('homepage', $data);
		}
		
	}

	public function profile()
	{
		if($_SERVER['REQUEST_METHOD'] == 'POST'){
			
			//load the model
			$this->load->model('researcher_model');
			//get the data
			$data = $this->researcher_model->submit_join();
			print_r($data);
			exit;
		}
		else{
			//load the models
			$this->load->model('researcher_model');
			// $this->load->model('office_model');
			//get the data
			$data['resdata'] = $this->researcher_model->submit_join();
			// $data['offdata'] = $this->office_model->find_office();
			// print_r($data);
			// exit;
			$this->load->view('profile',$data);
		}
		
	}
	
	public function restab()
	{	
		if($_SERVER['REQUEST_METHOD'] == 'POST'){

			$res_id = 1;
			$date = date('Y-m-d');
			$time = date('H:i:s');
			$propyear = $_POST['propyear'];
			$propyearcount = $_POST['pid'];
			$title = $_POST['p_title'];
			$subtitle = $_POST['p_subtitle'];
			$description = $_POST['p_description'];
			$duration = $_POST['p_duration'];
			$type = $_POST['p_type'];
			$budget =$_POST['p_budget_total'];
			$file = $_POST['p_file_fullpaper'];
			$proposal_id = $propyear.''."-".''.$propyearcount;
			// print_r($date);
			// exit;
				if (strlen($subtitle) == 0 && strlen($file) == 0) {
					$subtitle = "--";
					$file = "--";
				}
				elseif (strlen($file) == 0) {
					$file = "--";
				}
				else {
					$subtitle = "--";
				}

				if (strlen($title)>0 && strlen($description)>0 && strlen($duration)>0 && strlen($type)>0 && strlen($budget)>0) {
					
					$status_tag = "NEW";
					// $new_prop_id = $propyear + "&#8208;" + $propyearcount;
					$this->load->model('settings_model');
					$insertdate = array(
						'p_time'=>$time,
						'p_date'=>$date,
						'year_id'=>$propyear,
						'propcount_id'=>$propyearcount,
						);

					$date_record = $this->settings_model->create_settings($insertdate);
					// print_r($date_record);
					

					// load the model
					$this->load->model('proposal_model');
					$this->load->model('submit_model');
					// create an array
					$new_proposal = array(
										'proposal_id'=>$proposal_id,
										'p_title'=>$title,
										'p_subtitle'=>$subtitle,
										'p_description'=>$description,
										'p_duration'=>$duration,
										'p_type'=>$type,
										'p_budget_total'=>$budget,
										'p_file_fullpaper'=>$file,
										);
					// $new_proposal_id = array(
											// 'researcher_id'=>$res_id,
											// 'proposal_id'=>$proposal_id,
											// 'date_submitted'=>$date,
											// 'status_tag'=>$status_tag,
											// 'status_year'=>$propyear,
											// );
					// print_r($new_proposal);
					// $this->submit_model->create_submit($new_proposal_id);
					// exit;
					$proposal_record = $this->proposal_model->create_proposal($new_proposal);
					echo 'SUBMISSION SUCCESS';
				}
				else {
					echo 'SUBMISSION FAILED';
				}
		}
		else {
		//load the model
		$this->load->model('proposal_model');
		//get the data
		$data['propdata'] = $this->proposal_model->read_proposal();
		// print_r($data);
		// exit;
		$this->load->view('resview',$data);
		}
	}

	public function resviewclick()
	{	
		$propidurl = $this->uri->segment('3');
		// print_r($propidurl);
		// exit;
		//load the model
		$this->load->model('proposal_model');
		//get the data
		$data['resclickdata'] = $this->proposal_model->find_proposal($propidurl);
		// print_r($data);
		// exit;
		$this->load->view('resviewclick',$data);
	}

	public function propview(){

		

				//load the model
				$this->load->model('proposal_model');
				//get the data
				$data['propviewdata'] = $this->proposal_model->read_proposal();
				// print_r($data);
				// exit;
				$this->load->view('propview');


		
	}
	
	public function resprop()
	{
		if($_SERVER['REQUEST_METHOD'] == 'POST'){

			$date = date('Y-m-d');
			$time = date('H:i:s');
			$propyear = $_POST['propyear'];
			$propyearcount = $_POST['pid'];
			$title = $_POST['p_title'];
			$subtitle = $_POST['p_subtitle'];
			$description = $_POST['p_description'];
			$duration = $_POST['p_duration'];
			$type = $_POST['p_type'];
			$budget =$_POST['p_budget_total'];
			$file = $_POST['p_file_fullpaper'];
			$proposal_id = $propyear.''."-".''.$propyearcount;
			print_r("$propyearcount");
			exit;

				if (strlen($subtitle) == 0 && strlen($file) == 0) {
					$subtitle = "--";
					$file = "--";
				}
				elseif (strlen($file) == 0) {
					$file = "--";
				}
				else {
					$subtitle = "--";
				}

				if (strlen($title)>0 && strlen($description)>0 && strlen($duration)>0 && strlen($type)>0 && strlen($budget)>0) {
					
					// $new_prop_id = $propyear + "&#8208;" + $propyearcount;
					$this->load->model('settings_model');
					$insertdate = array(
						'p_time'=>$time,
						'p_date'=>$date,
						'year_id'=>$propyear,
						'propcount_id'=>$propyearcount,
						);

					$date_record = $this->settings_model->create_settings($insertdate);
					// print_r($date_record);
					

					// load the model
					$this->load->model('proposal_model');
					// create an array
					$new_proposal = array(
										'proposal_id'=>$proposal_id,
										'p_title'=>$title,
										'p_subtitle'=>$subtitle,
										'p_description'=>$description,
										'p_duration'=>$duration,
										'p_type'=>$type,
										'p_budget_total'=>$budget,
										'p_file_fullpaper'=>$file,
										);
						
					// print_r($new_proposal);
					// exit;
					$proposal_record = $this->proposal_model->create_proposal($new_proposal);
					echo 'Submission Success';
					//header("refresh:2; url=http://localhost/researchportal/research/submit_proposal");
				}
				else {
					echo 'Submission Failed';
					header("refresh:2; url=http://localhost/researchportal/research/submit_proposal");
				}
		}
		else{
			$this->load->view('addprop');
		}
		
	}
	
	public function propyear_id()
	{
		$yr_id = $_GET['year'];
		// $yr_id = 2019;
		// $num = 1;
		$this->load->model('settings_model');
		$last = $this->settings_model->last_settings($yr_id);
			foreach($last as $l){
				$last_num = $l['propcount_id'] + 1;
					if ($last_num < 10){
						$idnum1 = (($last_num < 10) ? '00' : '').number_format($last_num);
					}
					elseif ($last_num < 100) {
						$idnum1 = (($last_num < 100) ? '0' : '').number_format($last_num);
						// print_r($idnum1);
					}
					else {
						$idnum1 = $last_num;
						// print_r($idnum1);
					}
			}
		echo json_encode(array(
				'yr_id'=>$yr_id,
				'last_num'=>$idnum1,
		));
	}

	public function resprof()
	{
		$this->load->view('');
	}

	public function resfind()
	{
		if($_SERVER['REQUEST_METHOD'] == 'POST'){
			$searchval = $_POST['searchval'];
			// print_r($searchval);
			// exit;
			
			//load the model
			$this->load->model('proposal_model');
			//
			$data = $this->proposal_model->search_proposal($searchval);
			//
			print_r($data);

		}
		else{
			$this->load->view('findsearch');
		}
		
	}

	public function search_p(){
		
		$searchkey  = $_GET['searchval'];
		// $searchkey = "Clever";
		
		$this->load->model('proposal_model');
		$data_prop['datap'] = $this->proposal_model->search_proposal($searchkey);
		// print_r(json_encode($data_prop['prop']));
		$this->load->model('office_model');
		$data_off = $this->office_model->search_office($searchkey);
		echo json_encode($data_prop);
		// echo json_encode($data_res);
				// 'p_title'=>$data,
				// 'p_subtitle'=>$p_subtitle,
				// ));
	}

	public function try1()
	{
		$this->load->model('researcher_model');
		$data = $this->researcher_model->submit_join();
		print_r($data);
	}

	public function try2()
	{
		$this->load->model('submit_model');
		$data = $this->submit_model->submit_join();
		print_r($data);
	}

	public function try3()
	{
		$this->load->model('office_model');
		$data = $this->office_model->submit_join();
		print_r($data);
	}
}
