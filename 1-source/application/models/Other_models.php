<?php
 	
 	class Other_models extends CI_Model
 	{
 		function __construct()
		{
	
			$this->load->database();

		}

		public function get_batch_details(){

			$query = "SELECT course.course_short_title,course.course_full_title,course.course_id FROM course";
			$executer = $this->db->query($query);
			return $executer->result_array();
		}

		public function insertBatches(){

			$data = array(

 				'batch_number' =>$this->input->post('batch_number'),
 				'start_date' => $this->input->post('start_date'),
 				'end_date' => $this->input->post('end_date'),
 				'course_id' => $this->input->post("department"),
 	

 			);

 			$this->db->insert('batch', $data);

		}

		public function insertDepartment(){

			$data = array(

 				'department_id' =>'',
 				'department_short_name' => $this->input->post('department_short_name'),
 				'department_full_name' => $this->input->post('department_full_name'),
 				
 	
 			);

 			$this->db->insert('department', $data);

		}

		public function select_data_for_result_course(){

			$query = "SELECT course.course_id,course.course_short_title,course.course_full_title FROM course";
			$executer = $this->db->query($query);
			return $executer->result_array();

		}

		public function department_details_getter(){

			$query = "SELECT * FROM department";
			$executer = $this->db->query($query);
			return $executer->result_array();

		}

		public function select_Module_data_for_result($id){

			$query = "SELECT module.module_id, module.module_name FROM module WHERE course_id = '$id'";
			$executer = $this->db->query($query);
			return $executer->result_array();
		}

		public function updateResult_Select($id){

			$query = "SELECT result.grade, result.points,result.student_id,result.result_id FROM result WHERE result.result_id = $id";
			$executer = $this->db->query($query);
			return $executer->result_array();

		}

		public function updateResult_SelectToDatabase($id){

			$data = array(

 				'grade' => $this->input->post('grade'),
 				'points'  => $this->input->post("points"),
 			);

			$new_string=trim($id);
			
 			$this->db->where('result_id',$new_string);
			$this->db->update('result',$data);

		}

		function result_Convert_Stundent_id_to_ID($id){

			$query = "SELECT student.student_id_card_no FROM student WHERE student.student_id='$id'";
			$executer = $this->db->query($query);
			return $executer->result_array();
		}

		public function getCouese_name_forStudent($id){

			$query = "SELECT course.course_full_title from course WHERE course_id='$id'";
			$executer = $this->db->query($query);
			return $executer->result_array();

		}

		public function derpartmentIDToName($id){

			$query = "SELECT department.department_full_name from department WHERE department_id='$id'";
			$executer = $this->db->query($query);
			return $executer->result_array();

		}

		public function batach_id_to_name($id){

			$query = "SELECT course.course_full_title from course WHERE course_id='$id'";
			$executer = $this->db->query($query);
			return $executer->result_array();

		}

		public function insertResult(){

			$data = array(

 				'result_id' =>'',
 				'module_id' => $this->input->post('module_data'),
 				'grade' => $this->input->post('grade'),
 				'points' => $this->input->post('points'),
 				'student_id' => $this->input->post('student_data'),	
 	
 			);

 			$this->db->insert('result', $data);

		}

		
		public function get_batch_total($id){

			$query = "SELECT COUNT(*) FROM batch WHERE batch.course_id = '$id'";
			$executer = $this->db->query($query);
			return $executer->result_array();
		}

		public function select_Student_data_for_result($Cid,$Bid){

			$query = "SELECT student.student_id, student.first_name,student.last_name FROM student WHERE course_id = '$Cid' AND batch_id = '$Bid'";
			$executer = $this->db->query($query);
			return $executer->result_array();
		}

		public function select_Student_data_for_account($Cid,$Bid){

			$query = "SELECT DISTINCT student.student_id,student.first_name,student.last_name FROM student WHERE NOT EXISTS(SELECT user_identification_id from user where user.user_identification_id = student.student_id) and student.course_id = '$Cid' and student.batch_id = '$Bid'";
			$executer = $this->db->query($query);
			return $executer->result_array();
		}
		public function getGender($id){

			$query = "SELECT student.gender FROM student WHERE student.student_id = '$id'";
			$executer = $this->db->query($query);
			return $executer->result_array();
		}

		public function select_Course_data_for_result($id){

			$query = "SELECT batch_number FROM batch WHERE course_id = '$id'";
			$executer = $this->db->query($query);
			return $executer->result_array();

		}

		public function student_id_to_card_id($id){

			$query = "SELECT student_id_card_no FROM student WHERE student_id = '$id'";
			$executer = $this->db->query($query);
			return $executer->result_array();
		}

		public function Select_Stundet_name($id){

			$query = "SELECT student.first_name,student.last_name FROM student WHERE student_id = '$id'";
			$executer = $this->db->query($query);
			return $executer->result_array();
		}

		public function checkUserName($id){

			$query = "SELECT username FROM user WHERE username ='$id'";
			$executer = $this->db->query($query);
			return $executer->result_array();
		}

		public function deleteUsert($id){

			$query = "DELETE FROM user WHERE user_id='$id'";
			$executer = $this->db->query($query);
		} 

		public function selectUserDetailsForUpdate($id){

			$query = "SELECT username, password,user_id FROM user WHERE user_id ='$id'";
			$executer = $this->db->query($query);
			return $executer->result_array();
		}

		public function showResultsStundet($id){

			$query = "SELECT module.module_name, result.grade,result.points FROM result,module WHERE result.student_id = '$id' AND module.module_id = result.module_id";
			$executer = $this->db->query($query);
			return $executer->result_array();

		}

		public function updateTheUserDetails($id){

			$data = array(

 				'username' => $this->input->post('username'),
 				'password'  => $this->input->post("password"),

 			);

			$new_string=trim($id);
			
 			$this->db->where('user_id',$new_string);
			$this->db->update('user',$data);

		}

		public function selectModuleName($id){

			$query = "SELECT module_name FROM module WHERE module_id = '$id'";
			$executer = $this->db->query($query);
			return $executer->result_array();
		}

		public function manageAccounts_details(){

			$query = "SELECT DISTINCT course.course_full_title, batch.batch_number, user.username,user.password,user.user_id, student.first_name,student.last_name,student.student_id_card_no From user,course,batch,student WHERE student.student_id = user.user_identification_id and user.user_type !='admin' and course.course_id = student.course_id and batch.batch_number = student.batch_id";
			$executer = $this->db->query($query);
			return $executer->result_array();
		}

		public function Select_Course_name($id){

			$query = "SELECT course_full_title FROM course WHERE course_id = '$id'";
			$executer = $this->db->query($query);
			return $executer->result_array();
		}

		public function get_batch_details_All(){


			$query = "SELECT batch.*,course.course_full_title FROM  batch,course WHERE batch.course_id = course.course_id";
			$executer = $this->db->query($query);
			return $executer->result_array();
		}

		public function delete_batch($cid,$bno){

			$query = "DELETE FROM batch WHERE batch_number='$bno' AND course_id='$cid'";
			$executer = $this->db->query($query);
		}

		public function delete_department($id){

			$query = "DELETE FROM department WHERE department_id='$id'";
			$executer = $this->db->query($query);

		}

		public function registerModuleCourse_data(){

			$query = "SELECT course.course_short_title,course.course_full_title,course.course_id FROM course";
			$executer = $this->db->query($query);
			return $executer->result_array();
		}

		public function CourseNameToID($name){

			$query = "SELECT course_id FROM course WHERE course_full_title='$name'";
			$executer = $this->db->query($query);
			return $executer->result_array();
		}

		public function selectMouleData($id){

			$query = "SELECT module.*, course.course_full_title FROM module,course WHERE course.course_id= module.course_id and course.course_id = '$id'";
			$executer = $this->db->query($query);
			return $executer->result_array();
		}

		public function get_details_of_module(){

			$query = "SELECT module.*,course.course_full_title from module,course WHERE module.course_id=course.course_id";
			$executer = $this->db->query($query);
			return $executer->result_array();
		}

		public function get_details_of_module2(){

			$query = "SELECT DISTINCT course.course_full_title from module,course WHERE module.course_id=course.course_id";
			$executer = $this->db->query($query);
			return $executer->result_array();

		}

		public function get_result_details(){

			$query = "SELECT result.*, student.first_name, student.last_name,course.course_full_title,module.module_name FROM result, student,course,module WHERE student.student_id = result.student_id and course.course_id = student.course_id and module.module_id = result.module_id";
			$executer = $this->db->query($query);
			return $executer->result_array();

		}

		public function searchResultsCourse(){

			$query = "SELECT course.course_full_title FROM course";
			$executer = $this->db->query($query);
			return $executer->result_array();

		}

		public function batachNumbersForResults($name){

			$query = "SELECT course_id FROM course WHERE course_full_title= '$name'";
			$executer = $this->db->query($query);
			return $executer->result_array();
		}


		public function deleteModule($id){

			$query = "DELETE FROM module WHERE module_id='$id'";
			$executer = $this->db->query($query);
		
		}

		public function batachNumbersForResults2($id){

			$query = "SELECT batch_number from batch WHERE course_id='$id'";
			$executer = $this->db->query($query);
			return $executer->result_array();
		}

		public function stundetGetter($cID,$bID){

			$query = "SELECT DISTINCT student.student_id_card_no, student.first_name,student.last_name FROM student,result WHERE course_id = '$cID' AND batch_id = '$bID' and result.student_id = student.student_id";
			$executer = $this->db->query($query);
			return $executer->result_array();
		}

		public function manageResultDataTransalter($id){

			$query = "SELECT student_id from student WHERE student_id_card_no='$id'";
			$executer = $this->db->query($query);
			return $executer->result_array();
		}

		public function manageResultData($id){

			$query = "SELECT module.module_id, module.module_name,result.grade, result.points,result.result_id, student.first_name,student.last_name,student.student_id_card_no, course.course_full_title FROM module,result,student,course WHERE student.student_id='$id' and result.student_id = student.student_id and result.module_id = module.module_id and course.course_id = student.course_id and module.course_id
";
			$executer = $this->db->query($query);
			return $executer->result_array();

		}

		public function deleteResult($id){

			$query = "DELETE FROM result WHERE result_id = '$id'";
			$executer = $this->db->query($query);
			
		}

		public function updateModule($id){

			$data = array(

 				'module_code' => $this->input->post('module_code'),
 				'module_name'  => $this->input->post("module_name"),
 				'module_level' => $this->input->post("module_level"),
 				'module_credit'=>$this->input->post("module_credit"),
 				'lecturing_hours'=>$this->input->post("module_hours"),

 			);

			$new_string=trim($id);
			
 			$this->db->where('module_id',$new_string);
			$this->db->update('module',$data);
		}

		public function get_details_of_module_for_sp($id){

			$query = "SELECT * from module WHERE module_id='$id'";
			$executer = $this->db->query($query);
			return $executer->result_array();

		}


		public function insertModule(){

			$data = array(

 				'module_id' =>'',
 				'module_code' => $this->input->post('module_code'),
 				'module_name' => $this->input->post('module_name'),
 				'module_level' => $this->input->post('module_level'),
 				'module_credit' => $this->input->post('module_credit'),
 				'lecturing_hours' => $this->input->post('module_hours'),
 				'course_id' => $this->input->post('module_course'),
 				
 	
 			);

 			$this->db->insert('module', $data);

		}

		public function insertAccount($gen){

			$profilePath="";

			if($gen=="male"){

				$profilePath = "/public_files/theme/dist/img/user_accounts/default_male.png";

			}else if($gen=="female"){

				$profilePath = "/public_files/theme/dist/img/user_accounts/default_female.png";

			}

			$data = array(

 				'user_id' =>'',
 				'username' => $this->input->post('username'),
 				'password' => $this->input->post('password'),
 				'user_type' => "student",
 				'user_category' => "student",
 				'user_identification_id' => $this->input->post('student_data'),
 				'profile' => $profilePath,
 				'theme_id'=> '1'
 				
 	
 			);

 			$this->db->insert('user', $data);

		}


 	}

?>