<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Resmain extends CI_Controller {

	public function index()
	{	
		
	}

	public function homepage()
	{	
		if($_SERVER['REQUEST_METHOD'] == 'POST'){

		}
		else{

			// $residurl = $this->uri->segment('3');
			// $residurl = 23;
			//load the model
			$this->load->model('proposal_model');
			//get the data
			// $data['researcherdata'] = $this->submit_model->submit_join_research($residurl);
			
			$data['newprojects'] = $this->proposal_model->data_submit();
			// $data['researcherid'] = $residurl;
			// print_r($data);
			// exit;
			//load the view
			// print_r($data);
			// exit;
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
			$this->load->view('profilelist',$data);
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

	public function profileview()
	{	
		$residurl = $this->uri->segment('3');
		// print_r($residurl);
		// exit;
		//load the model
		$this->load->model('researcher_model');
		//get the data
		$data['profileview'] = $this->researcher_model->find_researcher($residurl);
		// print_r($data);
		// exit;
		$this->load->view('propview',$data);
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
			
			// $date = date('Y-m-d');
			// $bdate1 = DateTime::createFromFormat('Y-m-d', $date);
   //          $newbdate = $bdate1->format('M d, Y');
			// print_r($newbdate);
			// exit;
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

	public function search_p(){
		
		$searchkey  = $_GET['psearchval'];
		// $searchkey = "trace";
		// $searchkey = "";
		if($searchkey == ""){
			$data_prop['datap'] = array();
			echo json_encode($data_prop);
		}
		else{
			$this->load->model('proposal_model');
			$data_prop['datap'] = $this->proposal_model->search_proposal($searchkey);
			echo json_encode($data_prop);
		}
			
	}

	public function search_r(){
		$searchkey  = $_GET['rsearchval'];
		// $searchkey = "bituonan";
		// $searchkey = "";
		if($searchkey == ""){
			$data_res['datar'] = array();
			// print_r($data_res);
			echo json_encode($data_res);
		}
		else{
			$this->load->model('researcher_model');
			$data_res['datar'] = $this->researcher_model->search_researcher($searchkey);
			// print_r($data_res);
			echo json_encode($data_res);
		}		
	}

	public function editpropdata($type=null){

		// $this->load->model('proposal_model');
		// $record = $this->proposal_model->read_proposal();
		// print_r($record);
		// if($_SERVER['REQUEST_METHOD'] == 'POST'){
		$propid = $_POST['proposal_id'];

				if($propid != ""){
					$subtitle = $_POST['p_subtitle'];
					$description = $_POST['p_description'];
					$duration = $_POST['p_duration'];
					$budget =$_POST['p_budget_total'];
					$propid = $_POST['proposal_id'];
					if(!isset($_POST['p_type'])){
						$type = "--";
					}
					else{
						$type = $_POST['p_type'];
					}
					$newdata = array(
							// 'proposal_id'=>$propid,
							'p_subtitle'=> $subtitle,
							'p_description'=> $description,
							'p_duration'=> $duration,
							'p_type'=> $type,
							'p_budget_total'=> $budget,
							);
					// print_r($newdata);
					// exit;
					$this->load->model('proposal_model');
					$this->proposal_model->update_prop($propid,$newdata);
					header("Location: http://localhost/ria/resmain/resviewclick/".$propid);
				}
				else{

				}

		// $this->load->model('proposal_model');
		// $this->proposal_model->update_prop($propid,$newdata);


	}

	public function editresdata($type=null){

		// $residurl = $this->uri->segment('3');
		// $this->load->model('proposal_model');
		// $record = $this->proposal_model->read_proposal();
		// print_r($record);
		// if($_SERVER['REQUEST_METHOD'] == 'POST'){
		// $propid = $_POST['proposal_id'];
		$resid = $_POST['researcher_id'];
				if($resid != ""){
					$tupid = $_POST['tup_id'];
					$description = $_POST['p_description'];
					$duration = $_POST['p_duration'];
					$budget =$_POST['p_budget_total'];
					$propid = $_POST['proposal_id'];
					if(!isset($_POST['p_type'])){
						$type = "--";
					}
					else{
						$type = $_POST['p_type'];
					}
					$newdata = array(
							// 'proposal_id'=>$propid,
							'p_subtitle'=> $subtitle,
							'p_description'=> $description,
							'p_duration'=> $duration,
							'p_type'=> $type,
							'p_budget_total'=> $budget,
							);
					// print_r($newdata);
					// exit;
					$this->load->model('proposal_model');
					$this->proposal_model->update_prop($propid,$newdata);
					header("Location: http://localhost/ria/resmain/resviewclick/".$propid);
				}
				else{

				}
	}

	public function editprofiledata($sex=null){
		
		$propidurl = $this->uri->segment('3');
		// print_r($propidurl);
		// exit;
				if($propidurl != ""){
					$tupid = $_POST['tup_id'];
					
					$fname = $_POST['fname'];
					// print_r($fname);
					// exit;
					$mi = $_POST['mi'];
					$lname =$_POST['lname'];
					$bdate = $_POST['bdate'];
					if(!isset($_POST['sex'])){
						$sex = "--";
					}
					else{
						$sex = $_POST['sex'];
					}
					$newdatares = array(
							// 'proposal_id'=>$propid,
							'tup_id'=> $tupid,
							'fname'=> $fname,
							'mi'=> $mi,
							'lname'=> $lname,
							'bdate'=> $bdate,
							'sex' => $sex,
							);
					// print_r($newdatares);
					// exit;
					$this->load->model('researcher_model');
					$this->researcher_model->update_res($propidurl,$newdatares);
					header("Location: http://localhost/ria/resmain/profileview/".$propidurl);
					}
					else{
						print_r("Error");
					}
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
