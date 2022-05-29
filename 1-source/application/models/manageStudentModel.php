<?php

	class manageStudentModel extends CI_Model
	{
		function __construct()
		{
	
			$this->load->database();

		}


		public function title_course(){

			$query = "SELECT course_short_title from course";
			$executer = $this->db->query($query);
			return $executer->result_array();

		}

		public function selectAllStudents(){

			$query = "SELECT student.*,course.course_short_title from student,course WHERE student.course_id = course.course_id";
			$executer = $this->db->query($query);
			return $executer->result_array();

		}

		public function updateStudentDetails($id){

			
			$data = array(

 				'first_name' => $this->input->post('first_name'),
 				'last_name'  => $this->input->post("last_name"),
 				'date_of_birth' => $this->input->post("dob"),
 				'age'=>$this->input->post("age"),
 				'address'=>$this->input->post("address"),
 				'email' =>$this->input->post("email"),
 				'phone_no' => $this->input->post("phone"),
 				'nic_card_no' =>$this->input->post("nic")


 			);

			$new_string=trim($id);
			
 			$this->db->where('student_id_card_no',$new_string);
			$this->db->update('student',$data);
		

		}

		public function delete_student($id){

			$query = "DELETE FROM student WHERE student_id_card_no = '$id'";
			$executer = $this->db->query($query);
			
		}

		public function search_student($id){

			$query = "SELECT * from student WHERE student_id_card_no = '$id'";
			$executer = $this->db->query($query);
			return $executer->result_array();
		}

	}


?>