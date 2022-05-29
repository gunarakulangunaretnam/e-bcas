<?php

	class manageCourses extends CI_Model
	{
		function __construct()
		{
	
			$this->load->database();

		}

		public function get_course_details(){
			
			$query = "SELECT * from course";
			$executer = $this->db->query($query);
			return $executer->result_array();
		}

		public function deleteCourse($id){

			$query = "Delete FROM course where course_id ='$id'";
			$executer = $this->db->query($query);
			
		}

		public function updateCourse($id){

			$query = "SELECT * FROM course where course_id ='$id'";
			$executer = $this->db->query($query);
			return $executer->result_array();

		}

		public function updateCourseDetailsInDB($id){

			$data = array(

 				'course_short_title' => $this->input->post('course_short_title'),
 				'course_full_title'  => $this->input->post("course_full_title"),
 				'course_type' => $this->input->post("course_type"),
 				'duration'=>$this->input->post("duration"),
 				'total_payment'=>$this->input->post("total_payment"),

 			);

			$new_string=trim($id);
			
 			$this->db->where('course_id',$new_string);
			$this->db->update('course',$data);
		
		}
	}

?>