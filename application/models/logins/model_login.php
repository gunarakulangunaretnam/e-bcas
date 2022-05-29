<?php

	class model_login extends CI_Model{

		 public function __construct(){
        	
             $this->load->database();
         
         }

		public function getPassAdmin(){

			$quCode="SELECT * FROM user where user_type='admin'";
			$query = $this->db->query($quCode);
			return $query->result_array();

		}

		public function getPassStudent(){

			$quCode="SELECT * FROM user where user_type='student'";
			$query = $this->db->query($quCode);
			return $query->result_array();

		}

		public function theme_id($id){

			$sqlCode = "SELECT theme_id FROM user WHERE user_identification_id='$id'";
			$query = $this->db->query($sqlCode);
			return $query->result_array();

		}

		public function theme_value($id){

		    $sqlCode = "SELECT value_1,value_2 FROM theme WHERE theme_id='$id'";
			$query = $this->db->query($sqlCode);
			return $query->result_array();

		}


		public function getUser($user_cat,$identification_id){

			if($user_cat=="staff"){

				$quCode= "SELECT staff_id,first_name,last_name FROM staff WHERE staff_id='$identification_id'";
				$query = $this->db->query($quCode);
				return $query->result_array();
			
			}elseif ($user_cat=="student") {
				
				$quCode= "SELECT student_id,first_name,last_name FROM student WHERE student_id='$identification_id'";
				$query = $this->db->query($quCode);
				return $query->result_array();

			}
			
		}

		public function profilePicModel($user_cat,$identification_id){

				$quCode= "SELECT profile FROM user WHERE user_identification_id = '$identification_id' AND user_category = '$user_cat'";
				$query = $this->db->query($quCode);
				return $query->result_array();
		}

	}


?>