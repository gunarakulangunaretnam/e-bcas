<?php
 	
 	class RegStaff extends CI_Model
 	{
 		
 		function __construct()
 		{
 			 $this->load->database();
 		}

 		public function insertStaff(){

 			$data = array(

 				'staff_id' =>'',
 				'staff_id_card_no' => $this->input->post('staff_id'),
 				'first_name' => $this->input->post('first_name'),
 				'last_name'  => $this->input->post("last_name"),
 				'date_of_birth' => $this->input->post("dob"),
 				'age'=>$this->input->post("age"),
 				'gender' =>$this->input->post("gender"),
 				'job_title'=>$this->input->post("job_title"),
 				'job_type'=>$this->input->post("job_type"),
 				'address'=>$this->input->post("address"),
 				'email' =>$this->input->post("email"),
 				'phone_no' => $this->input->post("phone"),
 				'nic_card_no' =>$this->input->post("nic"),
 				'department_id' => $this->input->post("department")
 				
 			);

 			$this->db->insert('staff', $data);

 		}

 		public function depId(){

 			$quCode="SELECT department.department_id,department.department_short_name,department.department_full_name from department ";
 			$query = $this->db->query($quCode);
			return $query->result_array();
 		}

 	}

?>