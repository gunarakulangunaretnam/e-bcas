<?php

	class RegCourses extends CI_Model
	{
		function __construct()
		{
	
			$this->load->database();

		}

		public function get_department_id(){

			$query = "SELECT department.department_id, course.course_short_title,course.course_full_title FROM department,course WHERE course.department_id = department.department_id";
			$executer = $this->db->query($query);
			return $executer->result_array();
		}

		public function insertCourses(){

			$data = array(

 				'course_id' =>'',
 				'course_short_title' => $this->input->post('course_short_title'),
 				'course_full_title' => $this->input->post('course_full_title'),
 				'course_type'  => $this->input->post("course_type"),
 				'duration' => $this->input->post("duration"),
 				'total_payment'=>$this->input->post("total_payment")
 				

 			);

 			$this->db->insert('course', $data);
		}

	}

?>