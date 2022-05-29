<?php
 	
 	class RegStudent extends CI_Model
 	{
 		
 		function __construct()
 		{
 			 $this->load->database();
 		}

 		public function get_course_id_name(){

 			$quCode="SELECT  course.course_id, course_short_title , course_full_title FROM course";
 			$query = $this->db->query($quCode);
			return $query->result_array();

 		}

 		public function get_batch_no($id){

 			$quCode="SELECT batch_number FROM batch WHERE course_id='$id'";
 			$query = $this->db->query($quCode);
			return $query->result_array();

 		}

 		

 		public function get_course_title($id){

 			$Code="SELECT course_title FROM course WHERE course_id='".$id."'";
 			$query = $this->db->query($Code);
 			return $query->result_array();

 		}

 		public function insertStudent(){

 			$data = array(

 				'student_id' =>'',
 				'student_id_card_no' => $this->input->post('student_id'),
 				'first_name' => $this->input->post('first_name'),
 				'last_name'  => $this->input->post("last_name"),
 				'date_of_birth' => $this->input->post("dob"),
 				'age'=>$this->input->post("age"),
 				'gender' =>$this->input->post("gender"),
 				'address'=>$this->input->post("address"),
 				'email' =>$this->input->post("email"),
 				'phone_no' => $this->input->post("phone"),
 				'nic_card_no' =>$this->input->post("nic"),
 				'course_id' => $this->input->post("course"),
 				'batch_id'  => $this->input->post("batch")

 			);

 			$this->db->insert('student', $data);

 		}
 	}

?>