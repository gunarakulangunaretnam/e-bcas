<?php
 	
 	class Profile_management extends CI_Model
 	{
 		
 		function __construct()
 		{
 			 $this->load->database();
 		}


 		public function getUserFullInfo($user_cat,$identification_id){

			if($user_cat=="staff"){

				$quCode= "SELECT staff.*, user.username,department.department_full_name,department.department_short_name FROM staff,user,department WHERE staff.staff_id = '$identification_id' AND staff.staff_id = user.user_identification_id AND staff.department_id=department.department_id;";

				$query = $this->db->query($quCode);
				return $query->result_array();
			
			}elseif ($user_cat=="student") {
				
				$quCode= "SELECT student.*, user.username,course.course_full_title,course.course_short_title FROM student,user,course WHERE student.student_id = '$identification_id' AND student.student_id = user.user_identification_id and student.course_id=course.course_id;";

				$query = $this->db->query($quCode);
				return $query->result_array();

			}
			
		}

		public function current_username($id){

			$sqlCode="SELECT username from user WHERE user_identification_id='$id'";
			$query = $this->db->query($sqlCode);
			return $query->result_array();

		}

		public function change_username($id,$new_username){

			$sqlCode = "UPDATE user SET username = '$new_username' WHERE user_identification_id='$id'";
			$query = $this->db->query($sqlCode);

		}

		public function update_theme($id,$theme){

			$sqlCode = "UPDATE user SET theme_id = '$theme' WHERE user_identification_id='$id'";
			$query = $this->db->query($sqlCode);

		}
		
		public function FileUpload($data){
		
				$this->db->insert('Table Name',$data);
		
		}

		public function selectJobTitle($identification_id){

			$quCode= "SELECT job_title FROM staff WHERE staff_id='$identification_id'"; // Query for selecting data.
			$query = $this->db->query($quCode); // Execute the query
			return $query->result_array();     // Return the query back
			
		}

		public function path_of_profile_picture($user_id){

			$sqlCOde="SELECT profile from user WHERE user_identification_id='$user_id'";
			$query = $this->db->query($sqlCOde);
			return $query->result_array();

		}

		public function update_profile_pic_path($id,$path){

			$sqlCODE = "UPDATE user SET profile='$path' WHERE user_identification_id='$id'";
			$query = $this->db->query($sqlCODE);

		}

		public function select_password_of_user($id){

			$SelectPassword = "SELECT password from user where user_identification_id = $id";
			$query = $this->db->query($SelectPassword);
			return $query->result_array();

		}

		public function update_password($new_password,$id){

			$Code= "UPDATE user SET password='$new_password' WHERE user_identification_id ='$id'";
			$query = $this->db->query($Code);
		}
 	}

?>