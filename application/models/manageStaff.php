<?php
 	
 	class manageStaff extends CI_Model
 	{
 		
 		function __construct()
 		{
 			 $this->load->database();
 		}

 		public function selectAllStaff(){

 			$quCode="SELECT staff.*, department.department_short_name,department.department_full_name FROM staff, department WHERE staff.department_id = department.department_id";
 			$query = $this->db->query($quCode);
			return $query->result_array();
 		}

 		public function delete_staff($id){

 			$quCode="DELETE FROM staff WHERE staff_id_card_no='$id'";
 			$query = $this->db->query($quCode);
 		}

 		public function search_staff($id){

 			$quCode = "SELECT * FROM staff WHERE staff_id_card_no='$id'";
 			$query = $this->db->query($quCode);
 			return $query->result_array();

 		}

 		public function updateStaffDetails($id){

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
			
 			$this->db->where('staff_id_card_no',$new_string);
			$this->db->update('staff',$data);
		
 		}
 	}

?>