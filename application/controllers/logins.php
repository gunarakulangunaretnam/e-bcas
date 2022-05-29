<?php

	class Logins extends CI_Controller{

		public function __construct(){ // This will first execute when the application runs.

			    parent::__construct();
                $this->load->model('logins/model_login'); // Load the login model.
                $this->load->helper('url_helper');		 // We use url_helper in this program
                $this->load->library("session");		//Session is used for security purpose

		}

		public function index($pas="em"){ //This is the login function
			
			//If these conditions are true, just redirect to the login page.
			if($this->session->userdata("userId") && $this->session->userdata("userCat") && $this->session->userdata("userCat")){ 

				redirect('mainPageController/index',$data);

			}else{//otherwise print password or username is wrong

				$this->load->view('login/index');

			}

			

			if($pas=="pasW"){
				
				echo "<p id='p'>Not</p>";
			}
		}

		public function get(){

			if(isset($_POST['sub'])){

			$oldUsername=$this->input->post('username');
			$oldpass=$this->input->post("pass");
			$account_type=$this->input->post("acc");


			if($account_type=="Admin"){

				 $data['pass'] = $this->model_login->getPassAdmin();
			
			} elseif ($account_type=="Student") {

				$data['pass'] = $this->model_login->getPassStudent();
			}

			 $username=[];
			 $password=[];	
			 $user_type=[];	
			 $user_cat=[];
			 $user_identificatoion_id=[];	

				 foreach ($data['pass'] as $value) {
			
					array_push($username,$value['username']);
					array_push($password,$value['password']);
					array_push($user_type,$value['user_type']);
					array_push($user_cat,$value['user_category']);
					array_push($user_identificatoion_id,$value['user_identification_id']);

				}

				$notGet="no";

				for($a=0;$a<count($username);$a++){
		

				if($oldpass==$password[$a] && $oldUsername == $username[$a]){
					

					$typeOfuser = $user_type[$a];
					$idOfuser = $user_identificatoion_id[$a];
					$catofUser = $user_cat[$a];

					
					$this->session->set_userdata('username',$typeOfuser);
					$this->session->set_userdata('userId',$idOfuser);
					$this->session->set_userdata('userCat',$catofUser);

					$session1 = $this->session->userdata('username');//user type
					$session2 = $this->session->userdata('userId'); //userId
					$session3 = $this->session->userdata('userCat');//user catagory

					if($session1 == $user_type[$a] && $session2 == $user_identificatoion_id[$a] && $session3 == $user_cat[$a]){

					
						redirect('mainPageController/index',$data);


					}else{

						show_404();
					}
					
					
					$notGet="yes";

				}

			}

			if($notGet=="no"){

				$this->index("pasW");
			}

			}else{

				show_404();
			}
		}


		public function pageRedirect($page){

			$this->load->view($page);

		}

		public function log(){

			$this->session->unset_userdata('username');
			$this->session->unset_userdata('userId');
			$this->session->unset_userdata('userCat');
			$this->index();
			
		}
	}

?>