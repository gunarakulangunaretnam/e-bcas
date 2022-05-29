<?php

	class MainPageController extends CI_controller{

		  public $sesData=null;
		  public $data=null;
		

		  public function __construct() {

			    parent::__construct();		    
				$this->sesData=$this->session->userdata("username");
				$this->load->model('logins/model_login');

				$this->data['user_info'] = $this->model_login->getUser($this->session->userdata("userCat"),$this->session->userdata("userId"));

				$this->data['profile'] = $this->model_login->profilePicModel($this->session->userdata('userCat'),$this->session->userdata('userId'));
		 
		  }

		  public function ShowMyResults(){

		  	if($this->sesData =="student"){

				$this->load->model('Other_models');
				$id =$this->session->userdata('userId');

				$this->data["user_details"] = $this->Other_models->showResultsStundet($id);
				$this->load->view("pages/showResultsStundet",$this->data);

			}else{

				show_404();

			}

		  }


		public function index(){

			if($this->sesData =="admin" or $this->sesData =="student"){

				$this->load->view("pages/home_page",$this->data);

			}else{

				show_404();

			}
		}


		public function ProgfileManagement(){

			$this->load->model('Profile_management');  //Load the Profile_management model

			if ($this->session->userdata("userCat")=="staff") {  // check whather the user category is staff for securiy porpose.
			
				$this->data["status"] = $this->Profile_management->selectJobTitle($this->session->userdata("userId")); // Load the profile details and store to the status variable
			}

			$this->data['details'] = $this->Profile_management->getUserFullInfo($this->session->userdata("userCat"),$this->session->userdata("userId"));

			if($this->sesData =='admin' or $this->sesData=="student"){ // if the session data admin or student.

				$this->load->view("pages/Profile_management",$this->data); // View the data.
				
		
			}else{ // else return 404 Error.

				show_404();
			}
						
		}


		public function file_upload(){

			$data = $_POST['image'];

			list($type, $data) = explode(';', $data);
			list(, $data)      = explode(',', $data);

			$folderPath = './public_files/theme/dist/img/user_accounts/';
			$file = glob($folderPath . '*');
			$countFile = 0;
			if ($file != false)
			{
			    $countFile = count($file);
			}
			
			$fileNew = $countFile+=1;

			$data = base64_decode($data);
			$imageName = $fileNew.'.png';
			file_put_contents('./public_files/theme/dist/img/user_accounts/'.$imageName, $data);

			$profile_picture_path = '/public_files/theme/dist/img/user_accounts/'.$imageName;
			
			$session_id_of_user =  $this->session->userdata('userId');
			$this->load->model("Profile_management");
			$this->Profile_management->update_profile_pic_path($session_id_of_user,$profile_picture_path);

			echo "completed";
		}

		public function get_defualt_profile_picture(){

			$data_of_sender = $_POST['profile_path'];
			if($data_of_sender=="profile"){

				$session_id_of_user =  $this->session->userdata('userId');
				$this->load->model("Profile_management");
				$this->data["profile_path"] =  $this->Profile_management->path_of_profile_picture($session_id_of_user);

				foreach ($this->data['profile_path'] as $value) {
					
					echo base_url().$value['profile'];

				}
			}
		}

		
		public function theme_id(){

			$session_id_of_user =  $this->session->userdata('userId');
			
			//$data_of_sender = $_POST['theme_value'];

			$this->load->model('logins/model_login');

			$this->data['theme_value'] = $this->model_login->theme_id($session_id_of_user);

			$theme_id = "";
			
			foreach ($this->data['theme_value'] as $value) {
					
					$theme_id=$value['theme_id'];

			}

			$this->data['theme_color_value'] =  $this->model_login->theme_value($theme_id);



			foreach ($this->data['theme_color_value'] as $value) {
					
					echo $value['value_1']." ". $value['value_2'];;

			}


		}

		public function change_password(){

			$old_password = $_POST['old_password'];
			$new_password  = $_POST['new_password'];

			$session_id_of_user =  $this->session->userdata('userId');
			$this->load->model("Profile_management");
			$this->data["old_password"] =  $this->Profile_management->select_password_of_user($session_id_of_user);

			$old_password_from_server = "";

			foreach ($this->data['old_password'] as $value) {
					
					$old_password_from_server = $value['password'];					

			}

			if($old_password != $old_password_from_server){

				echo "current_password_wrong";
			
			}else{

				$this->Profile_management->update_password($new_password,$session_id_of_user);
				echo "updated";
				/*
				$this->load->library('email');

				$this->email->from('your@example.com', 'Your Name');
				$this->email->to('someone@example.com');

				$this->email->subject('Password Change');
				$this->email->message('Testing the email class.');

				$this->email->send();
				*/

			}

		}

		public function current_username(){

			$session_id_of_user =  $this->session->userdata('userId');
			$this->load->model("Profile_management");
			$this->data["current_username"] =  $this->Profile_management->current_username($session_id_of_user);

			foreach ($this->data['current_username'] as $value) {
				echo $value['username'];
			}

		}

		public function change_username(){

			$carOfUser = $this->session->userdata("username");
			$userId = $this->session->userdata("userId");

			$new_username = $_POST['user_enterd_username'];

			if($carOfUser=="admin"){

				$this->load->model("Profile_management");
				$this->Profile_management->change_username($userId,$new_username);
				echo "updated";

			}
		}

		public function update_theme(){

			$theme_value = $_POST['value_of_theme'];
			$userId = $this->session->userdata("userId");
			
			$this->load->model("Profile_management");

			$this->Profile_management->update_theme($userId,$theme_value);

			echo "done";

		}

		public function registerStaff(){

			if($this->sesData =='admin'){

				$this->load->model('regStaff');
				$this->data["dep_ids"] = $this->regStaff->depId();

				$this->load->view("pages/registerStaff",$this->data);	
		
			}else{

				show_404();
			}

		}

		public function registerStundet(){

			if($this->sesData =='admin'){

				$this->load->model('regStudent');
				$this->data["course_details"] = $this->regStudent->get_course_id_name();

				$this->load->view("pages/registerStudent",$this->data);				
		
			}else{

				show_404();
			}
						
		}

		public function get_batch_ids(){

				$value = $_POST['value'];
				$this->load->model('regStudent');
				$this->data['batch_details'] = $this->regStudent->get_batch_no($value);

				foreach ($this->data['batch_details'] as  $value) {
					
					echo $value["batch_number"];
				}
				
		}

		public function manageStundet(){
			
			//$this->data['student_details'] = $this->manageStudentModel->getstudentALLDetials();

			if($this->sesData=="admin"){

				$this->load->model('manageStudentModel');
				$this->data['course_details'] = $this->manageStudentModel->title_course();
				$this->data['stundet_details'] = $this->manageStudentModel->selectAllStudents();
				
				
				$this->load->view("pages/manageStundet",$this->data);

			}else{

				show_404();
			}

		}


		public function manageStaff(){
					
			if($this->sesData=="admin"){

				$this->load->model('manageStaff');
				$this->data['staff_details'] = $this->manageStaff->selectAllStaff();
						
				$this->load->view("pages/manageStaff",$this->data);

			}else{

				show_404();
			}

		}

		public function registerDepartment(){

			if($this->sesData=="admin"){

				$this->load->view("pages/registerDepartment",$this->data);

			}else{

				show_404();
			}
		}

		public function manageDepartment(){


			if($this->sesData=="admin"){

				$this->load->model('Other_models');
				$this->data['department_details'] = $this->Other_models->department_details_getter();
				$this->load->view("pages/manageDepartment",$this->data);

			}else{

				show_404();
			}


		}



		public function student_update($id){

			if($this->session->userdata("username")=="admin"){

				$this->load->model('manageStudentModel');
				
				 $this->data['stundet_details_forUpdate'] = $this->manageStudentModel->search_student($id);
				
				$this->load->view("pages/updateStudents",$this->data);
			}

		}

		public function registerCourses(){

			if($this->sesData =='admin'){

				$this->load->model('regCourses');
				$this->load->view("pages/registerCourses",$this->data);				
		
			}else{

				show_404();
			}


		}

		public function manageCoursesDelete($id){

			if($this->sesData =='admin'){

				$this->load->model('manageCourses');
				$this->manageCourses->deleteCourse($id);
				redirect("MainPageController/manageCourses");						
		
			}else{

				show_404();
			}

		}

		public function manageCoursesUpdate($id){

			if($this->sesData =='admin'){

				$this->load->model('manageCourses');
				$this->data["course_details"]=$this->manageCourses->updateCourse($id);
				$this->load->view("pages/updateCourseForm",$this->data);						
		
			}else{

				show_404();
			}

		}

		public function registerBatches(){

			if($this->sesData =='admin'){

				$this->load->model('Other_models');
				$this->data["batch_details"] = $this->Other_models->get_batch_details();

				$this->load->view("pages/registerBatches",$this->data);				
		
			}else{

				show_404();
			}

		}

		public function batchCount(){

			$value = $_POST['value'];
			$this->load->model('Other_models');
			$this->data["batch_details"] = $this->Other_models->get_batch_total($value);

			foreach ($this->data["batch_details"] as $value) {
				
				echo $value['COUNT(*)'];
			}

		}

		public function manageBatches(){

			if($this->sesData =='admin'){

				$this->load->model('Other_models');
				$this->data["batch_details"] = $this->Other_models->get_batch_details_All();

				$this->load->view("pages/manageBatches",$this->data);				
		
			}else{

				show_404();
			}

		}

		public function BatchDelete($id){

			$myText = (string)$id;
			$parts = explode('.',$myText);
			$course_id = $parts[0];
			$batch_no = $parts[1];

			if($this->sesData =='admin'){

				$this->load->model('Other_models');
				$this->Other_models->delete_batch($course_id,$batch_no);
				$this->manageBatches();
								
		
			}else{

				show_404();
			}
		}

		public function updateCourseDetails(){

			if($this->sesData=="admin"){

				$idS = $_POST['course_id'];
				
	            $this->load->model('manageCourses');
	            $this->manageCourses->updateCourseDetailsInDB($idS);                   
	            $this->session->set_flashdata('successCourse', 'Updated Successfully.');
	            $this->manageCourses();
	        }

		}

		public function manageCourses(){

			if($this->sesData =='admin'){

				$this->load->model('manageCourses');
				$this->data["course_details"] = $this->manageCourses->get_course_details();

				$this->load->view("pages/manageCourses",$this->data);				
		
			}else{

				show_404();
			}

		}

		public function staff_update($id){

			if($this->session->userdata("username")=="admin"){

				$this->load->model('manageStaff');
				
				 $this->data['staff_details_forUpdate'] = $this->manageStaff->search_staff($id);				

				 $this->load->view("pages/updateStaff",$this->data);
			}

		}

		public function updateStudentDetails(){

			if($this->sesData=="admin"){

				$idS = $_POST['student_id'];
				
	            $this->load->model('manageStudentModel');
	            $this->manageStudentModel->updateStudentDetails($idS);                   
	            $this->session->set_flashdata('successStudent', 'Updated Successfully.');
	            $this->manageStundet();
	        }
	      
		}

		public function updateStaffDetails(){

			if($this->sesData=="admin"){

				$idS = $_POST['staff_id'];
				
	            $this->load->model('manageStaff');
	            $this->manageStaff->updateStaffDetails($idS);                   
	            $this->session->set_flashdata('successStaff', 'Updated Successfully.');
	            $this->manageStaff();
	        }
	      
		}

		public function departmentDelete($id){

			if($this->sesData=="admin"){
				
	            $this->load->model('Other_models');
	            $this->Other_models->delete_department($id);                   
	            $this->manageDepartment();
	        }

		}

		public function provideResult(){

			if($this->sesData =="admin"){

				$this->load->model('Other_models');
	            $this->data['course_details'] = $this->Other_models->select_data_for_result_course();                 
				$this->load->view("pages/provide_result",$this->data);

			}else{

				show_404();

			}

		}

		public function selectModuleDetails(){

			if($this->sesData =="admin"){

				$id = $_POST['course_id'];
				

				$this->load->model('Other_models');
	            echo json_encode($this->data['module_details'] = $this->Other_models->select_Module_data_for_result($id)); 
	            
	     

			}else{

				show_404();

			}			
		}

		public function selectModuleDetails2(){

			if($this->sesData =="admin"){

				$Cid = $_POST['course_id'];
				$Bid = $_POST['batch_no'];
				
				$this->load->model('Other_models');
	            
	            echo json_encode($this->data['student_details'] = $this->Other_models->select_Student_data_for_result($Cid,$Bid)); 

			}else{

				show_404();

			}			
		}

		public function selectStudentDetailsForAccounts(){

			if($this->sesData =="admin"){

				$Cid = $_POST['course_id'];
				$Bid = $_POST['batch_no'];
				
				$this->load->model('Other_models');
	            
	            echo json_encode($this->data['student_details'] = $this->Other_models->select_Student_data_for_account($Cid,$Bid)); 

			}else{

				show_404();

			}			
		}



		public function selectCourseNameWithID(){

			if($this->sesData =="admin"){

				$Cid = $_POST['course_id'];
				
				$this->load->model('Other_models');
	            
	            $this->data['student_details'] = $this->Other_models->Select_Course_name($Cid);

	            foreach ($this->data['student_details'] as $value) {
	            	
	            	echo $value['course_full_title'];

	            }



			}else{

				show_404();

			}	

		}

		public function selectStudentName(){


			if($this->sesData =="admin"){

				$Cid = $_POST['student_id'];
				
				$this->load->model('Other_models');
	            
	            $this->data['student_name'] = $this->Other_models->Select_Stundet_name($Cid);

	            foreach ($this->data['student_name'] as $value) {
	            	
	            	echo $value['first_name'].' '.$value['last_name'];

	            }

			}else{

				show_404();

			}	

		}

		public function selectModuleName(){

			if($this->sesData =="admin"){

				$Cid = $_POST['module_id'];
				
				$this->load->model('Other_models');
	            
	            $this->data['student_name'] = $this->Other_models->selectModuleName($Cid);

	            foreach ($this->data['student_name'] as $value) {
	            	
	            	echo $value['module_name'];

	            }

			}else{

				show_404();

			}	
		}

		public function selectBatachDetials(){

			if($this->sesData =="admin"){

				$id = $_POST['course_id'];
				
				$this->load->model('Other_models');
	            
	            echo json_encode($this->data['batch_details'] = $this->Other_models->select_Course_data_for_result($id)); 

			}else{

				show_404();

			}	

		}

		public function getCouese_name_forStudent(){


			if($this->sesData =="admin"){

				$id = $_POST['course_id'];
				
				$this->load->model('Other_models');
	            
	            $this->data['batch_details'] = $this->Other_models->getCouese_name_forStudent($id);

	            foreach ($this->data['batch_details'] as $value) {
	            	
	            	echo $value['course_full_title'];

	            }

			}else{

				show_404();

			}	
		}

		public function derpartmentIDToName(){


			if($this->sesData =="admin"){

				$id = $_POST['department_id'];
				
				$this->load->model('Other_models');
	            
	            $this->data['batch_details'] = $this->Other_models->derpartmentIDToName($id);

	            foreach ($this->data['batch_details'] as $value) {
	            	
	            	echo $value['department_full_name'];

	            }

			}else{

				show_404();

			}	

		}

		public function batach_id_to_name(){

			if($this->sesData =="admin"){

				$id = $_POST['course_id'];
				
				$this->load->model('Other_models');
	            
	            $this->data['batch_details'] = $this->Other_models->batach_id_to_name($id);

	            foreach ($this->data['batch_details'] as $value) {
	            	
	            	echo $value['course_full_title'];

	            }

			}else{

				show_404();

			}	
		}


		public function registerModule(){

			if($this->sesData=="admin"){
				
	            $this->load->model('Other_models');
	            $this->data["course_details"] = $this->Other_models->registerModuleCourse_data();                   
	            $this->load->view("pages/registerModule",$this->data);
	        }

		}

		public function deleteModule($id){

			 $this->load->model('Other_models');
	         $this->Other_models->deleteModule($id);                   
	         $this->manageModule();

		}

		public function selectSPModule($id){

			 $this->load->model('Other_models');
	         $this->data["module_details"] =  $this->Other_models->selectMouleData($id); 
	         $this->load->view("pages/manageModule2",$this->data);                  
	        
		}

		public function CourseNameToID(){

			 $Course_Name = $_POST['course_name'];
			
			 $this->load->model('Other_models');
			 $this->data["course_id"] = $this->Other_models->CourseNameToID($Course_Name);      

			 foreach ($this->data['course_id'] as  $value) {
			 
			 	echo $value['course_id'];

			 }             
	        

		}



		public function manageModule(){

			if($this->sesData=="admin"){
				
	            $this->load->model('Other_models');
	            $this->data["module_details"] = $this->Other_models->get_details_of_module();   
	            $this->data["course_full_title"] = $this->Other_models->get_details_of_module2();                 
	            $this->load->view("pages/manageModule",$this->data);
	        }
		}

		public function updateModule(){
			 $id =$_POST['module_id'];
			 $this->load->model('Other_models');
	         $this->Other_models->updateModule($id);                   
	         $this->manageModule();

		}

		public function manageResult($id){

			if($this->sesData=="admin"){
				
	            
				$this->load->model('Other_models');
	            $this->data["result_details"] = $this->Other_models->manageResultDataTransalter($id);                   
	        	
	        	$student_id="";
	        	
	        	foreach ($this->data['result_details'] as  $value) {
	        		
	        		$student_id = $value['student_id']; 	
	        	
	        	}

	        	$this->data["result_details2"] = $this->Other_models->manageResultData($student_id);
	        	
	        	$this->load->view("pages/manageResult",$this->data);
	        }
		}

		public function deleteResult($id){
			
			if($this->sesData=="admin"){
				
				
				$da = explode(".",$id);
				

				$this->load->model('Other_models');
	            $this->Other_models->deleteResult($da[0]);
	            $this->manageResult($da[1]);                   
	        	
	        }

		}

		public function resultUpdate($id){

			if($this->sesData=="admin"){
				
				$data = explode(".",$id);
						
				$this->load->model('Other_models');
	            $this->data['result_details'] = $this->Other_models->updateResult_Select($data[0]);
	            $this->load->view("pages/updateResult",$this->data);
	                               
	        }

		}

		public function updateResultDetails(){
			
			if($this->sesData=="admin"){

				$Result_id = $_POST['result_id'];

				
				$this->load->model('Other_models');
				$student_id = $_POST['student_id'];
				$this->data['student_id_details'] = $this->Other_models->result_Convert_Stundent_id_to_ID($student_id);

				$student_id_card_id="";

				foreach ($this->data["student_id_details"] as $value) {
					
					$student_id_card_id = $value['student_id_card_no'];
				}

	            $this->data['result_details'] = $this->Other_models->updateResult_SelectToDatabase($Result_id);
	            $this->manageResult($student_id_card_id); 
	            
	                               
	        }
		}

		public function searchResults(){

			if($this->sesData=="admin"){
				
				$this->load->model('Other_models');
	            $this->data["course_details"] = $this->Other_models->searchResultsCourse();                   
	        	$this->load->view("pages/resultSearch",$this->data);
	            
	        }

		}

		public function batachNumbersForResults(){

			$name = $_POST['course_name'];
			$this->load->model('Other_models');
			echo json_encode($this->data["batch_details"] = $this->Other_models->batachNumbersForResults($name));  

		}

		public function stundetGetter(){

			if($this->sesData=="admin"){

				$course_id = $_POST['course_id'];
				$batch_number = $_POST['batch_number'];

	            $this->load->model('Other_models');
	            echo json_encode($this->data["result_details"] = $this->Other_models->stundetGetter($course_id,$batch_number)); 
	          	
	        }


		}

		public function batachNumbersForResults2(){

			$name = $_POST['course_id'];
			$this->load->model('Other_models');
			echo json_encode($this->data["batch_details"] = $this->Other_models->batachNumbersForResults2($name));
		}

		public function moduleUdateDetails($id){

			if($this->sesData=="admin"){
				
	            $this->load->model('Other_models');
	            $this->data["module_details"] = $this->Other_models->get_details_of_module_for_sp($id);                   
	            $this->load->view("pages/moduleUpdate",$this->data);
	        }

		}

		public function student_delete($id){

			if($this->session->userdata("username")=="admin"){
				
				$this->load->model('manageStudentModel');
				
				$this->manageStudentModel->delete_student($id);

				redirect("MainPageController/manageStundet");
			}

		}

		public function staff_delete($id){

			if($this->session->userdata("username")=="admin"){
				
				$this->load->model('manageStaff');
				
				$this->manageStaff->delete_staff($id);

				redirect("MainPageController/manageStaff");
			}

		}


		public function createUserAccounts(){

			if($this->session->userdata("username")=="admin"){
				
				$this->load->model('Other_models');

				$this->data["batch_details"] = $this->Other_models->get_batch_details();

				$this->load->view('pages/Create_accounts',$this->data);

			}

		}

		public function student_id_to_card_id(){

			if($this->session->userdata("username")=="admin"){

				$stundetID = $_POST['student_id'];			
				
				$this->load->model('Other_models');

				$this->data["batch_details"] = $this->Other_models->student_id_to_card_id($stundetID);

				foreach ($this->data['batch_details'] as $value) {
					
					echo $value['student_id_card_no'];
				}

			}
		}

		public function checkUserName(){

			if($this->session->userdata("username")=="admin"){

				$stundetID = $_POST['username'];	

				$this->load->model('Other_models');

				$this->data["batch_details"] = $this->Other_models->checkUserName($stundetID);

				$status="";

				foreach ($this->data['batch_details'] as $value) {
					
					$status = $value['username'];
				}	
				
				echo $status;
			}
		}

		public function manageAccounts(){

			if($this->session->userdata("username")=="admin"){
	

				$this->load->model('Other_models');
				$this->data["user_details"] = $this->Other_models->manageAccounts_details();
				$this->load->view("pages/manageUser",$this->data);

			}

		}

		public function userDelete($id){

			if($this->session->userdata("username")=="admin"){
	

				$this->load->model('Other_models');
				$this->Other_models->deleteUsert($id);
				$this->manageAccounts();

			}

		}

		public function userUpdateSelection($id){

			if($this->session->userdata("username")=="admin"){
		
				$this->load->model('Other_models');
				$this->data["user_details"] = $this->Other_models->selectUserDetailsForUpdate($id);
				$this->load->view("pages/updateUser",$this->data);
			}

		}

		public function updateUserDetails(){

			$this->load->model('Other_models');
			$id = $_POST['user_id'];
		    $this->Other_models->updateTheUserDetails($id);
		    $this->manageAccounts();

		}

		public function staffvalidation(){


			if($this->sesData=="admin"){

			$this->load->library('form_validation');
			$this->form_validation->set_rules("staff_id","Staff ID","required");
			$this->form_validation->set_rules("first_name","First Name","required|alpha");
			$this->form_validation->set_rules("last_name","Last Name","required|alpha");
			$this->form_validation->set_rules("dob","Date of Birth","required");
			$this->form_validation->set_rules("age","Age","required|integer"); 
			$this->form_validation->set_rules("email","Email","required|valid_email");
			$this->form_validation->set_rules("phone","Phone","required|integer|exact_length[10]");
			$this->form_validation->set_rules("gender","Gender","required");
			$this->form_validation->set_rules("address","Address","required");
			$this->form_validation->set_rules("nic","NIC Card Number","required");
			$this->form_validation->set_rules("department","Department","required");
			$this->form_validation->set_rules("job_title","Job Title","required");
			$this->form_validation->set_rules("job_type","Job Type","required");
		


			if ($this->form_validation->run() == TRUE)
                {
                      $this->load->model('regStaff');
                      $this->regStaff->insertStaff();
                      $this->session->set_flashdata('successStaff', 'Inserted Successfully.');

                      $this->registerStaff();
                 

                }else{

                	$this->load->view("pages/registerStaff",$this->data);
                }


			}else{

				show_404();

			}

		}

		public function studentvalidation(){

			if($this->sesData=="admin"){

			$this->load->library('form_validation');
			$this->form_validation->set_rules("student_id","Student ID","required");
			$this->form_validation->set_rules("first_name","First Name","required|alpha");
			$this->form_validation->set_rules("last_name","Last Name","required|alpha");
			$this->form_validation->set_rules("dob","Date of Birth","required");
			$this->form_validation->set_rules("age","Age","required|integer"); 
			$this->form_validation->set_rules("email","Email","required|valid_email");
			$this->form_validation->set_rules("phone","Phone","required|integer|exact_length[10]");
			$this->form_validation->set_rules("gender","Gender","required");
			$this->form_validation->set_rules("address","Address","required");
			$this->form_validation->set_rules("nic","NIC Card Number","required");
			$this->form_validation->set_rules("course","Course","required");
			$this->form_validation->set_rules("batch","Batch","required");


			if ($this->form_validation->run() == TRUE)
                {
                      $this->load->model('regStudent');
                      $this->regStudent->insertStudent();
                      $this->session->set_flashdata('successStudent', 'Inserted Successfully.');

                      $this->registerStundet();
                 

                }else{

                	$this->load->view("pages/registerStudent",$this->data);
                }


			}else{

				show_404();

			}
		}

		public function coursesvalidation(){

			if($this->sesData=="admin"){

			$this->load->library('form_validation');
			$this->form_validation->set_rules("course_short_title","Course Short Title","required");
			$this->form_validation->set_rules("course_full_title","Course Full Title","required");
			$this->form_validation->set_rules("course_type","Course Type","required");
			$this->form_validation->set_rules("duration","Duration","required"); 
			$this->form_validation->set_rules("total_payment","Total Payment","required");
		
			if ($this->form_validation->run() == TRUE)
                {
                      $this->load->model('RegCourses');
                      $this->RegCourses->insertCourses();
                      $this->session->set_flashdata('successCourses', 'Inserted Successfully.');

                      $this->registerCourses();
                 

                }else{

                	$this->load->view("pages/registerCourses",$this->data);
                }


			}else{

				show_404();

			}
		}

		public function batchesvalidation(){

			if($this->sesData=="admin"){

			$this->load->library('form_validation');
			$this->form_validation->set_rules("batch_number","Batch Number","required");
			$this->form_validation->set_rules("start_date","Start Date","required");
			$this->form_validation->set_rules("end_date","End Date","required");
			$this->form_validation->set_rules("department","Department","required");


			if ($this->form_validation->run() == TRUE)
                {
                      $this->load->model('Other_models');
                      $this->Other_models->insertBatches();
                      $this->session->set_flashdata('successBatches', 'Inserted Successfully.');
                      $this->registerBatches();             

                }else{

                	$this->load->view("pages/registerBatches",$this->data);
                }


			}else{

				show_404();

			}
		}

		public function departmentvalidation(){

			if($this->sesData=="admin"){

			$this->load->library('form_validation');
			$this->form_validation->set_rules("department_short_name","Batch Number","required");
			$this->form_validation->set_rules("department_full_name","Start Date","required");
			
			if ($this->form_validation->run() == TRUE)
                {
                      $this->load->model('Other_models');
                      $this->Other_models->insertDepartment();
                      $this->session->set_flashdata('successDepartment', 'Inserted Successfully.');
                      $this->registerDepartment();             

                }else{

                	$this->load->view("pages/registerDepartment",$this->data);
                }

			}else{

				show_404();

			}
		}

		public function modulevalidation(){

			if($this->sesData=="admin"){

			$this->load->library('form_validation');
			$this->form_validation->set_rules("module_code","Batch Number","required");
			$this->form_validation->set_rules("module_name","Start Date","required");
			$this->form_validation->set_rules("module_level","Batch Number","required");
			$this->form_validation->set_rules("module_credit","Start Date","required");
			$this->form_validation->set_rules("module_hours","Batch Number","required");
			$this->form_validation->set_rules("module_course","Start Date","required");
			
			if ($this->form_validation->run() == TRUE)
                {
                      $this->load->model('Other_models');
                      $this->Other_models->insertModule();
                      $this->session->set_flashdata('successModule', 'Inserted Successfully.');
                      $this->registerModule();             

                }else{

                	$this->load->view("pages/registerModule",$this->data);
                }

			}else{

				show_404();

			}
		}

		public function resultValidation(){

			if($this->sesData=="admin"){

			$this->load->library('form_validation');
			$this->form_validation->set_rules("module_course","Module","required");
			$this->form_validation->set_rules("module_data","Module Name","required");
			$this->form_validation->set_rules("grade","Grade","required");
			$this->form_validation->set_rules("points","Points","required");
			$this->form_validation->set_rules("student_data","Student","required");
			
			if ($this->form_validation->run() == TRUE)
                {
                      $this->load->model('Other_models');
                      $this->Other_models->insertResult();
                      $this->session->set_flashdata('successResult', 'Inserted Successfully.');
                      $this->provideResult();             

                }else{

                	$this->load->view("pages/provide_result",$this->data);
                }

			}else{

				show_404();

			}
		}

		public function uservalidation(){

			if($this->sesData=="admin"){

			$this->load->library('form_validation');
			$this->form_validation->set_rules("student_data","Student ID","required");
			$this->form_validation->set_rules("username","Username","required");
			$this->form_validation->set_rules("password","Password","required");

			 $this->load->model('Other_models');

             $student_idD = $_POST['student_data'];

             $this->data["gender"] = $this->Other_models->getGender($student_idD);

             $gender="";            

            foreach ($this->data["gender"] as $value) {
             	
             	$gender = $value['gender'];

            }

			
			if ($this->form_validation->run() == TRUE)
                {
                      $this->load->model('Other_models');
                      $this->Other_models->insertAccount($gender);
                      $this->session->set_flashdata('successAccounts', 'Inserted Successfully.');
                      $this->createUserAccounts();             

                }else{

                	$this->load->view("pages/Create_accounts",$this->data);
                	
                }

			}else{

				show_404();

			}

		}
	}
		
?>